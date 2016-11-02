<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MyApp\CrediWireBundle\Entity;
use Doctrine\ORM\EntityRepository;
/**
 * Description of ProjectRepository
 *
 * @author bechir
 */
class ProjectRepository extends EntityRepository{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM CrediWireBundle:Project p ORDER BY p.projectName ASC'
            )
            ->getResult();
    }
}
