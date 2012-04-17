<?php

namespace Jambudesk\RecordBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jambudesk\RecordBundle\Entity\Field
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Field
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
     * @ORM\ManyToOne(targetEntity="Form", inversedBy="fields")
     * @ORM\JoinColumn(name="form_id", referencedColumnName="id")
     */
    protected $form;
    
    /**
     * @ORM\Column(type="string", length=16)
     */
    protected $type;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $isVisible;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $isText;
    
    /**
     * @ORM\OneToMany(targetEntity="FieldOption", mappedBy="field")
     */
    protected $fieldOptions;
     
    public function __construct()
    {
        $this->fieldOptions = new ArrayCollection();
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
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set isVisible
     *
     * @param boolean $isVisible
     */
    public function setIsVisible($isVisible)
    {
        $this->isVisible = $isVisible;
    }

    /**
     * Get isVisible
     *
     * @return boolean 
     */
    public function getIsVisible()
    {
        return $this->isVisible;
    }

    /**
     * Set isText
     *
     * @param boolean $isText
     */
    public function setIsText($isText)
    {
        $this->isText = $isText;
    }

    /**
     * Get isText
     *
     * @return boolean 
     */
    public function getIsText()
    {
        return $this->isText;
    }

    /**
     * Set form
     *
     * @param Jambudesk\RecordBundle\Entity\Form $form
     */
    public function setForm(\Jambudesk\RecordBundle\Entity\Form $form)
    {
        $this->form = $form;
    }

    /**
     * Get form
     *
     * @return Jambudesk\RecordBundle\Entity\Form 
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Add fieldOptions
     *
     * @param Jambudesk\RecordBundle\Entity\FieldOption $fieldOptions
     */
    public function addFieldOption(\Jambudesk\RecordBundle\Entity\FieldOption $fieldOptions)
    {
        $this->fieldOptions[] = $fieldOptions;
    }

    /**
     * Get fieldOptions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getFieldOptions()
    {
        return $this->fieldOptions;
    }
}