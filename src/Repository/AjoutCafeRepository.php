<?php

namespace App\Repository;

use App\Entity\AjoutCafe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AjoutCafe>
 *
 * @method AjoutCafe|null find($id, $lockMode = null, $lockVersion = null)
 * @method AjoutCafe|null findOneBy(array $criteria, array $orderBy = null)
 * @method AjoutCafe[]    findAll()
 * @method AjoutCafe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AjoutCafeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AjoutCafe::class);
    }

//    /**
//     * @return AjoutCafe[] Returns an array of AjoutCafe objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AjoutCafe
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
