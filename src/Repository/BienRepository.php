<?php

namespace App\Repository;

use App\Entity\Bien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Bien|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bien|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bien[]    findAll()
 * @method Bien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BienRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Bien::class);
    }

    public function chercherBien($libelleloca,$libelletype,$prix){
        $qbBien =  $this->createQueryBuilder('b');
        $qbBien->join('b.libelleloca','l')
                ->join('b.libelletype','t')
                ->addSelect('l')
                ->addSelect('t')
                ->WHERE('l.id= :idLoc OR t.id= :idType OR b.prixLocation BETWEEN :prixMin AND :prixMax')
                ->setParameters(array('idLoc'=>$libelleloca,'idType'=>$libelletype,'prixMin'=>$prix-10000, 'prixMax'=>$prix+10000));

                return $qbBien->getQuery()->getResult();
    }

}
