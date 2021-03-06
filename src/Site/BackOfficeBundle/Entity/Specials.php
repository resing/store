<?php

namespace Site\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Specials
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Site\BackOfficeBundle\Entity\SpecialsRepository")
 * @UniqueEntity(fields={"product","mediaspecial"})
 */
class Specials
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
     * @ORM\Column(name="price", type="decimal")
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expireDate", type="datetime")
     */
    private $expireDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

/**
* @ORM\ManyToOne(targetEntity="Site\BackOfficeBundle\Entity\MediaSpecials", inversedBy="specials")
* @ORM\JoinColumn(nullable=false)
*/
private $mediaspecial;

/**
* @ORM\OneToOne(targetEntity="Site\BackOfficeBundle\Entity\Products")
*/
private $product;

/**
 * @Gedmo\Timestampable(on="create")
 /** @ORM\Column(name="created", type="datetime")
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
     * Set price
     *
     * @param string $price
     * @return Specials
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set expireDate
     *
     * @param \DateTime $expireDate
     * @return Specials
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Get expireDate
     *
     * @return \DateTime 
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Specials
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set mediaspecial
     *
     * @param \Site\BackOfficeBundle\Entity\MediaSpecials $mediaspecial
     * @return Specials
     */
    public function setMediaspecial(\Site\BackOfficeBundle\Entity\MediaSpecials $mediaspecial)
    {
        $this->mediaspecial = $mediaspecial;

        return $this;
    }

    /**
     * Get mediaspecial
     *
     * @return \Site\BackOfficeBundle\Entity\MediaSpecials 
     */
    public function getMediaspecial()
    {
        return $this->mediaspecial;
    }

    /**
     * Set product
     *
     * @param \Site\BackOfficeBundle\Entity\Products $product
     * @return Specials
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
     * Set created
     *
     * @param \DateTime $created
     * @return Specials
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
     * @return Specials
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
    
     public function __toString() {
        return $this->getMediaspecial();
    }
}
