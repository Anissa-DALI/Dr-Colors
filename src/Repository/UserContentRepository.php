<?php

namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Particulier;
use App\Entity\Professionnels;

/**
 * @method UseContent|null find($id, $lockMode = null, $lockVersion = null)
 * @method UseContent|null findOneBy(array $criteria, array $orderBy = null)
 * @method UseContent[]    findAll()
 * @method UseContent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserContentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserContent::class);
    }

    // /**
    //  * @return UseContent[] Returns an array of UseContent objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UseContent
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
