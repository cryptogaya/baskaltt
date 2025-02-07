<?php


namespace BaskelBundle\Repository;

/**
 * ProduitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LikesRepository extends \Doctrine\ORM\EntityRepository
{
    public function getCheckLikes($idu,$ida){
        $query =$this->createQueryBuilder('p')
            ->where('p.idUser = :idUser')
            ->andWhere('p.idArticle = :idArticle')
            ->setParameters(
                array(
                    'idUser'=>$idu,
                    'idArticle'=>$ida
                )
            )
            ->getQuery();
        return $query->getResult();
    }


}