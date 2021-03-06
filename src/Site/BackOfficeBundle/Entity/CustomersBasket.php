<?php

namespace Site\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations

/**
 * CustomersBasket
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Site\BackOfficeBundle\Entity\CustomersBasketRepository")
 */
class CustomersBasket
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
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="finalPrice", type="decimal")
     */
    private $finalPrice;
    /**
* @ORM\ManyToOne(targetEntity="Site\BackOfficeBundle\Entity\Products",inversedBy="customersBasket")
* @ORM\JoinColumn(nullable=false)
*/
private $product;
    /**
* @ORM\ManyToOne(targetEntity="Site\UtilisateursBundle\Entity\User",inversedBy="customersBasket")
* @ORM\JoinColumn(nullable=false)
*/
private $user;
/**
 * @Gedmo\Timestampable(on="create")
 /** @ORM\Column(name="created", type="datetime")
 */
private $created;
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
     * Set quantity
     *
     * @param integer $quantity
     * @return CustomersBasket
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
     * Set finalPrice
     *
     * @param string $finalPrice
     * @return CustomersBasket
     */
    public function setFinalPrice($finalPrice)
    {
        $this->finalPrice = $finalPrice;

        return $this;
    }

    /**
     * Get finalPrice
     *
     * @return string 
     */
    public function getFinalPrice()
    {
        return $this->finalPrice;
    }

    /**
     * Set product
     *
     * @param \Site\BackOfficeBundle\Entity\Products $product
     * @return CustomersBasket
     */
    public function setProduct(\Site\BackOfficeBundle\Entity\Products $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Site\BackOfficeBundle\Entity\Products 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set user
     *
     * @param \Site\UtilisateursBundle\Entity\User $user
     * @return CustomersBasket
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
     * Set created
     *
     * @param \DateTime $created
     * @return CustomersBasket
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
}
