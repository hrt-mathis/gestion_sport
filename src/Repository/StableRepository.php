<?php

namespace App\Repository;

use App\Entity\Stable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Stable|null find($id, $lockMode = null, $lockVersion = null)
 * @method Stable|null findOneBy(array $criteria, array $orderBy = null)
 * @method Stable[]    findAll()
 * @method Stable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Stable::class);
    }

    // /**
    //  * @return Stable[] Returns an array of Stable objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Stable
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
