<?php

namespace Site\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Media
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Site\BackOfficeBundle\Entity\MediaRepository")
 * @UniqueEntity(
 *     fields={"thumbProduct"},
 *     message="Your Product has already been thumbs with product"
 * )
 */
class Media
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;
    /**
     * @ORM\Column(name="updated", type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updated;
    /**
* @ORM\ManyToOne(targetEntity="Site\BackOfficeBundle\Entity\Products",inversedBy="media")
* @ORM\JoinColumn(nullable=false)
*/
private $product;
    /**
     * @var boolean
     *
     * @ORM\Column(name="thumbProduct", type="boolean" ,nullable = true)
     */
    private $thumbProduct;
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
     * Set name
     *
     * @param string $name
     * @return Media
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Media
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Media
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
     * @return Media
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

    /**
     * Set product
     *
     * @param \Site\BackOfficeBundle\Entity\Products $product
     * @return Media
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
     * Set thumbProduct
     *
     * @param boolean $thumbProduct
     * @return Media
     */
    public function setThumbProduct($thumbProduct)
    {
        $this->thumbProduct = $thumbProduct;

        return $this;
    }

    /**
     * Get thumbProduct
     *
     * @return boolean 
     */
    public function getThumbProduct()
    {
        return $this->thumbProduct;
    }
}
