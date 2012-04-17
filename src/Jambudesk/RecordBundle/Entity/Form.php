<?php

namespace Jambudesk\RecordBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jambudesk\RecordBundle\Entity\Form
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Form
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


   /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $name;
    
    /**
     * @ORM\Column(type="string", length=16)
     */
    protected $slug;
    
    /**
     * @ORM\OneToMany(targetEntity="Field", mappedBy="form")
     */
    protected $fields;
    
    
    public function __construct()
    {
        $this-> fields = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
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
     * Add fields
     *
     * @param Jambudesk\RecordBundle\Entity\Field $fields
     */
    public function addField(\Jambudesk\RecordBundle\Entity\Field $fields)
    {
        $this->fields[] = $fields;
    }

    /**
     * Get fields
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getFields()
    {
        return $this->fields;
    }
}