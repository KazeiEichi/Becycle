<?php

namespace App\Repository;

use App\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;


/**
 * @method Category|null find($id, $lockMode = null, $lockVersion = null)
 * @method Category|null findOneBy(array $criteria, array $orderBy = null)
 * @method Category[]    findAll()
 * @method Category[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Category::class);
    }


    public function findAcategory(){
        return $this->createQueryBuilder('c')
            ->andWhere('c.type = :val')
            ->setParameter('val', "accessoires")
            ->getQuery()
            ->getResult()
            ;
    }

    public function findVcategory(){
        return $this->createQueryBuilder('c')
            ->andWhere('c.type = :val')
            ->setParameter('val', "velo")
            ->getQuery()
            ->getResult()
            ;
    }

    // /**
    //  * @return Category[] Returns an array of Category objects
    //  */
    
    public function findByAcategory($acatnames)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.name = :val')
            ->setParameter('val', $acatnames)
            ->getQuery()
            ->getResult();
        
     
    }
    

    /*
    public function findOneBySomeField($value): ?Category
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
