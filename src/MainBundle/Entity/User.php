<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=100)
     */

    protected $firstname;
    /**
     * @ORM\Column(type="string", length=100)
     */

    protected $lastname;
    /**
     * @ORM\Column(type="string", length=100)
     */

    protected $phonenumber;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $address;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /*changement à partir d'ici'*/

    /**
     * @ORM\OneToMany(targetEntity="Animal",mappedBy="user")
     */
    private $animals;
    public function __construct()
    {
        $this->animals = new \Doctrine\Common\Collections\ArrayCollection();
    }





    /**
     * Add animal.
     *
     * @param \MainBundle\Entity\Animal $animal
     *
     * @return User
     */
    public function addAnimal(\MainBundle\Entity\Animal $animal)
    {
        $this->animals[] = $animal;

        return $this;
    }

    /**
     * Remove animal.
     *
     * @param \MainBundle\Entity\Animal $animal
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAnimal(\MainBundle\Entity\Animal $animal)
    {
        return $this->animals->removeElement($animal);
    }

    /**
     * Get animals.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnimals()
    {
        return $this->animals;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }



    /**
     * Set address
     *
     * @param string $address
     *
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

  




    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     *
     * @return User
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }
}
