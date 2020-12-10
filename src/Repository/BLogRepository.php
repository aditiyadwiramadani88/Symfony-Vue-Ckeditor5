<?php

namespace App\Repository;

use App\Entity\BLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method BLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method BLog[]    findAll()
 * @method BLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BLog::class);
    }

    // /**
    //  * @return BLog[] Returns an array of BLog objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BLog
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
