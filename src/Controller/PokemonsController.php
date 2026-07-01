<?php

namespace App\Controller;

use App\Entity\Pokemon;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface as KnpPaginator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PokemonsController extends AbstractController
{
    /**
     * Liste blanche des champs autorisés au tri/filtrage.
     * Empêche toute injection en n'acceptant que des noms de colonnes connus.
     */
    private const SORTABLE_FIELDS = ['id', 'Hp', 'Atk', 'Def', 'SpAtk', 'SpDef', 'Spd'];

    #[Route('/pokemons', name: 'pokemon.index')]
    public function index(Request $request, EntityManagerInterface $entityManager, KnpPaginator $paginator): Response
    {
        $page = max(1, $request->query->getInt('page', 1));

        $query = $entityManager->getRepository(Pokemon::class)
            ->createQueryBuilder('p');

        // Tri sécurisé : on n'accepte qu'une colonne whitelistée et une direction valide.
        $orderField = $request->query->get('orderBy', 'id');
        $direction = strtoupper((string) $request->query->get('direction', 'ASC'));

        if (!in_array($orderField, self::SORTABLE_FIELDS, true)) {
            $orderField = 'id';
        }
        if (!in_array($direction, ['ASC', 'DESC'], true)) {
            $direction = 'ASC';
        }

        $query->orderBy('p.' . $orderField, $direction);

        // Filtre numérique optionnel sur une stat (paramètre lié = pas d'injection).
        $statFilter = $request->query->get('stat');
        $statValue = $request->query->get('value');

        if (in_array($statFilter, self::SORTABLE_FIELDS, true) && is_numeric($statValue)) {
            $query->andWhere('p.' . $statFilter . ' = :value')
                  ->setParameter('value', (int) $statValue);
        }

        $pagination = $paginator->paginate(
            $query,
            $page,
            80 // nombre d'items par page
        );

        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonsController',
            'pokemons' => $pagination,
        ]);
    }

    #[Route('/pokemon/{id}', name: 'pokemon.show')]
    public function show(Pokemon $pokemon): Response
    {
        return $this->render('pokemon/show.html.twig', [
            'controller_name' => 'PokemonsController',
            'pokemon' => $pokemon,
        ]);
    }
}
