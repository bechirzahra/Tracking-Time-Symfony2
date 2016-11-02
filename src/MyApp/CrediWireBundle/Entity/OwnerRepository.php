<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MyApp\CrediWireBundle\Entity;
use Doctrine\ORM\EntityRepository;
/**
 * Description of OwnerRepository
 *
 * @author bechir
 */
class OwnerRepository extends EntityRepository {
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT u FROM CrediWireBundle:Owner u ORDER BY u.firstName ASC'
            )
            ->getResult();
    }
}
