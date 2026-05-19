<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface as KnpPaginator;
use App\Entity\Pokemon;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

use function PHPUnit\Framework\isEmpty;

final class PokemonsController extends AbstractController
{
    #[Route('/pokemons', name: 'pokemon.index')]
    public function index(Request $request, EntityManagerInterface $entityManager, KnpPaginator $paginator): Response
    {
        $filters = $request->query->all();
        
        if ($request->query->getInt('page') > 0)
        {
            $page = $request->query->getInt('page');
        }
        else
        {
            $page = 1;
        }

        unset($filters['page']);
        
        $query = $entityManager->getRepository(Pokemon::class)->createQueryBuilder('p')->orderBy("p.id", "ASC");

        if ($filters != [] && $filters != '' && $filters != null)
        {
            $query = $entityManager->getRepository(Pokemon::class)->createQueryBuilder('p');
            foreach ($filters as $filter=>$value)
            {
                if ($filter == "OrderBy" && ($value == "ASC" || $value == "DESC")) {
                    $query->orderBy("p.id", $value);
                }
                if ($value != null or $value != '')
                    $query->andWhere("$filter = $value");
            }
        }

        $pagination = $paginator->paginate(
        $query,
        $page,
        80 // nombre d'items par page
        );

        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonsController',
            'pokemons' => $pagination
        ]);
    }

    #[Route('pokemon/{id}', name: 'pokemon.show')]
    public function show(Pokemon $pokemon): Response
    {
        // $pokemon = $entityManager->getRepository(Pokemon::class)->findOneBy(["id" => $id]);
        return $this->render('pokemon/show.html.twig', [
            'controller_name' => 'PokemonsController',
            'pokemon' => $pokemon
        ]);
    }
}
