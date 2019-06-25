<?php

namespace App\Repository;

use App\Entity\Ariticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ariticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ariticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ariticle[]    findAll()
 * @method Ariticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AriticleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ariticle::class);
    }

    // /**
    //  * @return Ariticle[] Returns an array of Ariticle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ariticle
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
