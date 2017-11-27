<?php

namespace AppBundle\Repository;

/**
 * EventRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EventRepository extends \Doctrine\ORM\EntityRepository
{
    public function findHomepage()
    {
        $qb = $this->_em->createQueryBuilder()
            ->select('e')
            ->from($this->_entityName, 'e')
            ->where('e.date >= :date')
            ->setParameter('date', new \DateTime())
            ->orderBy('e.date', 'ASC')
            ->setMaxResults(3)
        ;

        return $qb->getQuery()->getResult();
    }
}