<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MyApp\CrediWireBundle\Entity;
use Doctrine\ORM\EntityRepository;
/**
 * Description of LogonHistoryRepository
 *
 * @author bechir
 */
class LogonHistoryRepository extends EntityRepository {
   public function findAllOrderedByLastLogon()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT l FROM CrediWireBundle:LogonHistory l ORDER BY l.logonProject ASC'
            )
            ->getResult();
    }
}
