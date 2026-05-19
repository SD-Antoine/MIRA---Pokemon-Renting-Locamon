<?php

namespace App\Repository;

use App\Entity\Pokemon;
use App\Entity\Type;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pokemon>
 */
class PokemonRepository extends ServiceEntityRepository
{
    public function __construct(
        ManagerRegistry $registry,
    ) {
        parent::__construct($registry, Pokemon::class);
    }

    // public function findSameTypeCombination(Type $type1, ?Type $type2, int $limit = 5): array
    // {
    //     $qb = $this->createQueryBuilder('p')
    //         ->where('p.type1_id = :type1')
    //         ->setParameter('type1', $type1)
    //         ->setMaxResults($limit)
    //         ->orderBy('RAND()'); // MySQL — pour Postgres utiliser RANDOM()

    //     if ($type2 !== null) {
    //         $qb->andWhere('p.type2_id = :type2')
    //         ->setParameter('type2', $type2);
    //     }

    //     return $qb->getQuery()->getResult();
    // }

    //    /**
    //     * @return Pokemon[] Returns an array of Pokemon objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Pokemon
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
