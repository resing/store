<?php

namespace Site\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Symfony\Component\Validator\Constraints as Assert;
/**
 * MediaSpecials
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Site\BackOfficeBundle\Entity\MediaSpecialsRepository")
 */
class MediaSpecials
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
     * @Gedmo\Translatable
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;
/**
* @ORM\OneToMany(targetEntity="Site\BackOfficeBundle\Entity\Specials",cascade={"persist"},mappedBy="mediaspecial")
*/
private $specials;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expireDate", type="datetime")
     */
    private $expireDate;
/**
* @Gedmo\Slug(fields={"name"})
* @ORM\Column(length=128, unique=true)
*/
private $slug;
    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;
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
     * Set name
     *
     * @param string $name
     * @return MediaSpecials
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
     * @return MediaSpecials
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
     * @return MediaSpecials
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
     * @return MediaSpecials
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
     * Constructor
     */
    public function __construct()
    {
        $this->special = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set expireDate
     *
     * @param \DateTime $expireDate
     * @return MediaSpecials
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
     * @return MediaSpecials
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
     * Set description
     *
     * @param string $description
     * @return MediaSpecials
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return MediaSpecials
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Add specials
     *
     * @param \Site\BackOfficeBundle\Entity\Specials $specials
     * @return MediaSpecials
     */
    public function addSpecial(\Site\BackOfficeBundle\Entity\Specials $specials)
    {
        $this->specials[] = $specials;

        return $this;
    }

    /**
     * Remove specials
     *
     * @param \Site\BackOfficeBundle\Entity\Specials $specials
     */
    public function removeSpecial(\Site\BackOfficeBundle\Entity\Specials $specials)
    {
        $this->specials->removeElement($specials);
    }

    /**
     * Get specials
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpecials()
    {
        return $this->specials;
    }
    
         public function __toString()
    {
        return $this->name;
    }
}
