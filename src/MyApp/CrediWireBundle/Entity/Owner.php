<?php

namespace MyApp\CrediWireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Owner
 * @Entity
 * @ORM\Table(name="Owner")
 * @ORM\Entity(repositoryClass="CrediWireBundle\Entity\OwnerRepository")
 */
class Owner
{
    /**
     * @var integer $id
     * @ORM\Id
     * @ORM\Column(name="owner_id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="userName", type="string", length=255)
     */
    private $userName;


    /**
     * @var string
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;
    

    

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
     * Set firstName
     *
     * @param string $userName
     * @return Owner
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }


    /**
     * Set password
     *
     * @param string $password
     * @return Owner
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Project;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Project = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add Project
     *
     * @param \MyApp\CrediWireBundle\Entity\Project $project
     * @return Owner
     */
    public function addProject(\MyApp\CrediWireBundle\Entity\Project $project)
    {
        $this->Project[] = $project;

        return $this;
    }

    /**
     * Remove Project
     *
     * @param \MyApp\CrediWireBundle\Entity\Project $project
     */
    public function removeProject(\MyApp\CrediWireBundle\Entity\Project $project)
    {
        $this->Project->removeElement($project);
    }

    /**
     * Get Project
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProject()
    {
        return $this->Project;
    }
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;


    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Owner
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Owner
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    
    public function __toString() {
         return (string) $this->getUserName();
        
    }

}
