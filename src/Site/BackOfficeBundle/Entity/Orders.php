<?php

namespace Site\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations


/**
 * Orders
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Site\BackOfficeBundle\Entity\OrdersRepository")
 */
class Orders
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_name", type="string", length=255)
     */
    private $deliveryName;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_street_address", type="string", length=255)
     */
    private $deliveryStreetAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_postcode", type="string", length=10)
     */
    private $deliveryPostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_state", type="string", length=36)
     */
    private $deliveryState;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_country", type="string", length=32)
     */
    private $deliveryCountry;

    /**
     * @var integer
     *
     * @ORM\Column(name="delivery_mobile", type="string",length=32)
     */
    private $deliveryMobile;
        /**
     * @var boolean
     *
     * @ORM\Column(name="statusPay", type="boolean",nullable=true)
     */
    private $statusPay;
    /**
     * @Gedmo\Timestampable(on="create")
     /** @ORM\Column(name="created", type="datetime" )
     */
    private $created;
    /**
     * @ORM\Column(name="updated", type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updated;
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
* @ORM\ManyToOne(targetEntity="Site\UtilisateursBundle\Entity\User",inversedBy="order")
* @ORM\JoinColumn(nullable=false)
*/
private $user;
/**
* @ORM\OneToMany(targetEntity="Site\BackOfficeBundle\Entity\OrdersProducts",cascade={"persist"},mappedBy="order")
*/
private $ordersProducts;
    /**
     * Set deliveryName
     *
     * @param string $deliveryName
     * @return Orders
     */
    public function setDeliveryName($deliveryName)
    {
        $this->deliveryName = $deliveryName;

        return $this;
    }

    /**
     * Get deliveryName
     *
     * @return string 
     */
    public function getDeliveryName()
    {
        return $this->deliveryName;
    }

    /**
     * Set deliveryStreetAddress
     *
     * @param string $deliveryStreetAddress
     * @return Orders
     */
    public function setDeliveryStreetAddress($deliveryStreetAddress)
    {
        $this->deliveryStreetAddress = $deliveryStreetAddress;

        return $this;
    }

    /**
     * Get deliveryStreetAddress
     *
     * @return string 
     */
    public function getDeliveryStreetAddress()
    {
        return $this->deliveryStreetAddress;
    }

    /**
     * Set deliveryPostcode
     *
     * @param string $deliveryPostcode
     * @return Orders
     */
    public function setDeliveryPostcode($deliveryPostcode)
    {
        $this->deliveryPostcode = $deliveryPostcode;

        return $this;
    }

    /**
     * Get deliveryPostcode
     *
     * @return string 
     */
    public function getDeliveryPostcode()
    {
        return $this->deliveryPostcode;
    }

    /**
     * Set deliveryState
     *
     * @param string $deliveryState
     * @return Orders
     */
    public function setDeliveryState($deliveryState)
    {
        $this->deliveryState = $deliveryState;

        return $this;
    }

    /**
     * Get deliveryState
     *
     * @return string 
     */
    public function getDeliveryState()
    {
        return $this->deliveryState;
    }

    /**
     * Set deliveryCountry
     *
     * @param string $deliveryCountry
     * @return Orders
     */
    public function setDeliveryCountry($deliveryCountry)
    {
        $this->deliveryCountry = $deliveryCountry;

        return $this;
    }

    /**
     * Get deliveryCountry
     *
     * @return string 
     */
    public function getDeliveryCountry()
    {
        return $this->deliveryCountry;
    }

    /**
     * Set deliveryMobile
     *
     * @param integer $deliveryMobile
     * @return Orders
     */
    public function setDeliveryMobile($deliveryMobile)
    {
        $this->deliveryMobile = $deliveryMobile;

        return $this;
    }

    /**
     * Get deliveryMobile
     *
     * @return integer 
     */
    public function getDeliveryMobile()
    {
        return $this->deliveryMobile;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Orders
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set user
     *
     * @param \Site\UtilisateursBundle\Entity\User $user
     * @return Orders
     */
    public function setUser(\Site\UtilisateursBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Site\UtilisateursBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ordersProducts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ordersProducts
     *
     * @param \Site\BackOfficeBundle\Entity\OrdersProducts $ordersProducts
     * @return Orders
     */
    public function addOrdersProduct(\Site\BackOfficeBundle\Entity\OrdersProducts $ordersProducts)
    {
        $this->ordersProducts[] = $ordersProducts;

        return $this;
    }

    /**
     * Remove ordersProducts
     *
     * @param \Site\BackOfficeBundle\Entity\OrdersProducts $ordersProducts
     */
    public function removeOrdersProduct(\Site\BackOfficeBundle\Entity\OrdersProducts $ordersProducts)
    {
        $this->ordersProducts->removeElement($ordersProducts);
    }

    /**
     * Get ordersProducts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrdersProducts()
    {
        return $this->ordersProducts;
    }

    /**
     * Set statusPay
     *
     * @param boolean $statusPay
     * @return Orders
     */
    public function setStatusPay($statusPay)
    {
        $this->statusPay = $statusPay;

        return $this;
    }

    /**
     * Get statusPay
     *
     * @return boolean 
     */
    public function getStatusPay()
    {
        return $this->statusPay;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Orders
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Orders
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
