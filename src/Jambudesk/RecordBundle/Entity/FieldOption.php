<?php

namespace Jambudesk\RecordBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jambudesk\RecordBundle\Entity\FieldOption
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FieldOption
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
     * @ORM\ManyToOne(targetEntity="Fields", inversedBy="fieldOptions")
     * @ORM\JoinColumn(name="field_id", referencedColumnName="id")
     */
    protected $field;
    
    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $value;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $isSelected;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $displayOrder;

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
     * Set value
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set isSelected
     *
     * @param boolean $isSelected
     */
    public function setIsSelected($isSelected)
    {
        $this->isSelected = $isSelected;
    }

    /**
     * Get isSelected
     *
     * @return boolean 
     */
    public function getIsSelected()
    {
        return $this->isSelected;
    }

    /**
     * Set displayOrder
     *
     * @param integer $displayOrder
     */
    public function setDisplayOrder($displayOrder)
    {
        $this->displayOrder = $displayOrder;
    }

    /**
     * Get displayOrder
     *
     * @return integer 
     */
    public function getDisplayOrder()
    {
        return $this->displayOrder;
    }

    /**
     * Set field
     *
     * @param Jambudesk\RecordBundle\Entity\Fields $field
     */
    public function setField(\Jambudesk\RecordBundle\Entity\Fields $field)
    {
        $this->field = $field;
    }

    /**
     * Get field
     *
     * @return Jambudesk\RecordBundle\Entity\Fields 
     */
    public function getField()
    {
        return $this->field;
    }
}