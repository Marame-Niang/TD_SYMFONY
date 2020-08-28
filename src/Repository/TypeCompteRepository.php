<?php

namespace App\Repository;

use App\Entity\TypeCompte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeCompte|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeCompte|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeCompte[]    findAll()
 * @method TypeCompte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeCompteRepository extends ServiceEntityRepository
{
    protected $db;
    
    public function __construct()
    {
       
    }

    public function getTypeCompte($id)
	{
		if($this->db != null)
		{
            $a= $this->db->getRepository('TypeCompte')->find($id);
            var_dump($a);
            die;
		}
	}
    

   
    

    // /**
    //  * @return TypeCompte[] Returns an array of TypeCompte objects
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
    public function findOneBySomeField($value): ?TypeCompte
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
