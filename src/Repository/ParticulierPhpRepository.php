<?php

namespace App\Repository;

use App\Entity\ParticulierPhp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ParticulierPhp|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParticulierPhp|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParticulierPhp[]    findAll()
 * @method ParticulierPhp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParticulierPhpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ParticulierPhp::class);
    }

    // /**
    //  * @return ParticulierPhp[] Returns an array of ParticulierPhp objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ParticulierPhp
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
