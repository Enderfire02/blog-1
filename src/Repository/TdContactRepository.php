<?php

namespace App\Repository;

use App\Entity\TdContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TdContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method TdContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method TdContact[]    findAll()
 * @method TdContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TdContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TdContact::class);
    }

    // /**
    //  * @return TdContact[] Returns an array of TdContact objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TdContact
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
