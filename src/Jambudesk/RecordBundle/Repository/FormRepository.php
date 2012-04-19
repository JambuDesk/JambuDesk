<?php

namespace Jambudesk\RecordBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Jambudesk\RecordBundle\Repository\Form
 *
 */
class FormRepository extends EntityRepository
{
    public function findOneBySlug($slug)
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
            'SELECT f FROM JambudeskRecordBundle:Form f WHERE f.slug = :slug'
        )->setParameter('slug', $slug);

        return $query->getResult();
    }
    
    public function findOneById($id)
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
            'SELECT f FROM JambudeskRecordBundle:Form f WHERE f.id = :id'
        )->setParameter('id', $id);

        return $query->getResult();
    }
}