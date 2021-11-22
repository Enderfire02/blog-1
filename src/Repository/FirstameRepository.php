<?php

namespace App\Repository;

use App\Entity\Firstame;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Firstame|null find($id, $lockMode = null, $lockVersion = null)
 * @method Firstame|null findOneBy(array $criteria, array $orderBy = null)
 * @method Firstame[]    findAll()
 * @method Firstame[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FirstameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Firstame::class);
    }

    // /**
    //  * @return Firstame[] Returns an array of Firstame objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Firstame
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
