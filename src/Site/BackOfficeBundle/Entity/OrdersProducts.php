<?php

namespace Site\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdersProducts
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Site\BackOfficeBundle\Entity\OrdersProductsRepository")
 */
class OrdersProducts
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
* @ORM\ManyToOne(targetEntity="Site\BackOfficeBundle\Entity\Orders",inversedBy="ordersProducts")
* @ORM\JoinColumn(nullable=false)
*/
private $order;
    /**
* @ORM\ManyToOne(targetEntity="Site\BackOfficeBundle\Entity\Products",inversedBy="ordersProduct")
* @ORM\JoinColumn(nullable=false)
*/
private $product;
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
     * @return OrdersProducts
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
     * Set order
     *
     * @param \Site\UtilisateursBundle\Entity\Orders $order
     * @return OrdersProducts
     */
    public function setOrder(\Site\BackOfficeBundle\Entity\Orders $order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \Site\UtilisateursBundle\Entity\Orders 
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set product
     *
     * @param \Site\BackOfficeBundle\Entity\Products $product
     * @return OrdersProducts
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
}
