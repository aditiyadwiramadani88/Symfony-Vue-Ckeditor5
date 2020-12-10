<?php

namespace App\Repository;

use App\Entity\Joni;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Joni|null find($id, $lockMode = null, $lockVersion = null)
 * @method Joni|null findOneBy(array $criteria, array $orderBy = null)
 * @method Joni[]    findAll()
 * @method Joni[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JoniRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Joni::class);
    }

    // /**
    //  * @return Joni[] Returns an array of Joni objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Joni
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
