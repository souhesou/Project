<?php

namespace RefugieBundle\Repository;

/**
 * RefugieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RefugieRepository extends \Doctrine\ORM\EntityRepository
{
    public function trieListe()
    {
        $qb=$this->getEntityManager()->createQuery("select c FROM RefugieBundle:Refugie c ORDER BY c.age ASC  ");
        return $query = $qb->getResult();
    }
}
