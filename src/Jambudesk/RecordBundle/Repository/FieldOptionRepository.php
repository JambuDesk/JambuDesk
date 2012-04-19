<?php

namespace Jambudesk\RecordBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Jambudesk\RecordBundle\Repository\FieldOption
 *
 */
class FieldOptionRepository extends EntityRepository
{
    public function findOneById($id)
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
            'SELECT f FROM JambudeskRecordBundle:FieldOption f WHERE f.id = :id'
        )->setParameter('id', $id);

        return $query->getResult();
    }
}