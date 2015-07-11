<?php
// src/Acme/UserBundle/Entity/User.php

namespace Site\UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;
    
     /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;
     /**
     * @var string
     *
     * @ORM\Column(name="sex", type="integer")
     */
    private $sex;
/**
* @ORM\OneToMany(targetEntity="Site\BackOfficeBundle\Entity\Orders",mappedBy="user")
*/
private $order;
/**
* @ORM\OneToMany(targetEntity="Site\BackOfficeBundle\Entity\CustomersBasket",mappedBy="user")
*/
private $customersBasket;
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
     * Set firstname
     *
     * @param string $firstname
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
     * Set sex
     *
     * @param integer $sex
     * @return User
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return integer 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Add order
     *
     * @param \Site\BackOfficeBundle\Entity\Orders $order
     * @return User
     */
    public function addOrder(\Site\BackOfficeBundle\Entity\Orders $order)
    {
        $this->order[] = $order;

        return $this;
    }

    /**
     * Remove order
     *
     * @param \Site\BackOfficeBundle\Entity\Orders $order
     */
    public function removeOrder(\Site\BackOfficeBundle\Entity\Orders $order)
    {
        $this->order->removeElement($order);
    }

    /**
     * Get order
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Add customersBasket
     *
     * @param \Site\BackOfficeBundle\Entity\CustomersBasket $customersBasket
     * @return User
     */
    public function addCustomersBasket(\Site\BackOfficeBundle\Entity\CustomersBasket $customersBasket)
    {
        $this->customersBasket[] = $customersBasket;

        return $this;
    }

    /**
     * Remove customersBasket
     *
     * @param \Site\BackOfficeBundle\Entity\CustomersBasket $customersBasket
     */
    public function removeCustomersBasket(\Site\BackOfficeBundle\Entity\CustomersBasket $customersBasket)
    {
        $this->customersBasket->removeElement($customersBasket);
    }

    /**
     * Get customersBasket
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCustomersBasket()
    {
        return $this->customersBasket;
    }
}
