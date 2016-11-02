<?php

namespace MyApp\CrediWireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 * @ORM\Entity
 * @ORM\Table(name="Project")
 * @ORM\Entity(repositoryClass="CrediWireBundle\Entity\ProjectRepository")
 */
class Project
{
    /**
     * @var integer $id
     * @ORM\Column(name="project_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="projectName", type="string", length=255)
     */
    private $projectName;

    /**
     * @var \DateTime
     * @ORM\Column(name="endDate", type="datetime", length=255, nullable=true)
     */
    private $endDate;

    /**
     * @var \DateTime
     * @ORM\Column(name="startDate", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime)
     * @ORM\Column(name="totalHours", type="datetime", nullable=true)
     */
    private $totalHours;
    
    /**
     * @var integer $owner_id
     * @ORM\Column(name="owner_id", type="integer", nullable=true)
     */
    private $owner_id;
    
   
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $LogonHistory;

    /**
     * @var \MyApp\CrediWireBundle\Entity\Owner
     */
    private $Owner;

    /**
     * Constructor
     */

    
    public function __construct() {
        $this->date = new \Datetime();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

        /**
     * Set projectName
     *
     * @param string $projectName
     * @return Project
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * Get projectName
     *
     * @return string 
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Project
     */
    public function setEndDate( $endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Project
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set totalHours
     *
     * @param \DateTime $totalHours
     * @return Project
     */
    public function setTotalHours($totalHours)
    {
        $this->totalHours = $totalHours;

        return $this;
    }

    /**
     * Get totalHours
     *
     * @return \DateTime 
     */
    public function getTotalHours()
    {
        return $this->totalHours;
    }

    /**
     * Set owner_id
     *
     * @param integer $ownerId
     * @return Project
     */
    public function setOwnerId($ownerId)
    {
        $this->owner_id = $ownerId;

        return $this;
    }

    /**
     * Get owner_id
     *
     * @return integer 
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Add LogonHistory
     *
     * @param \MyApp\CrediWireBundle\Entity\LogonHistory $logonHistory
     * @return Project
     */
    public function addLogonHistory(\MyApp\CrediWireBundle\Entity\LogonHistory $logonHistory)
    {
        $this->LogonHistory[] = $logonHistory;

        return $this;
    }

    /**
     * Remove LogonHistory
     *
     * @param \MyApp\CrediWireBundle\Entity\LogonHistory $logonHistory
     */
    public function removeLogonHistory(\MyApp\CrediWireBundle\Entity\LogonHistory $logonHistory)
    {
        $this->LogonHistory->removeElement($logonHistory);
    }

    /**
     * Get LogonHistory
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLogonHistory()
    {
        return $this->LogonHistory;
    }

    /**
     * Set Owner
     *
     * @param \MyApp\CrediWireBundle\Entity\Owner $owner
     * @return Project
     */
    public function setOwner(\MyApp\CrediWireBundle\Entity\Owner $owner = null)
    {
        $this->Owner = $owner;

        return $this;
    }

    /**
     * Get Owner
     *
     * @return \MyApp\CrediWireBundle\Entity\Owner 
     */
    public function getOwner()
    {
        return $this->Owner;
    }
}
