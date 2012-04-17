<?php

namespace Jambudesk\RecordBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jambudesk\RecordBundle\Entity\RecordField
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RecordField
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Record $record
     *
     * @ORM\ManyToOne(targetEntity="Record", inversedBy="recordFields")
     * @ORM\JoinColumn(name="recordId", referencedColumnName="id")
     */
    private $record;

    /**
     * @var Field $field
     *
     * @ORM\ManyToOne(targetEntity="Field")
     * @ORM\JoinColumn(name="fieldId", referencedColumnName="id")
     */
    private $field;

    /**
     * @var FieldOption $fieldOption
     *
     * @ORM\ManyToOne(targetEntity="FieldOption")
     * @ORM\JoinColumn(name="fieldOptionId", referencedColumnName="id")
     */
    private $fieldOption;

    /**
     * @var text $textValue
     *
     * @ORM\Column(name="textValue", type="text", nullable=true)
     */
    private $textValue;


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
     * Set textValue
     *
     * @param text $textValue
     */
    public function setTextValue($textValue)
    {
        $this->textValue = $textValue;
    }

    /**
     * Get textValue
     *
     * @return text 
     */
    public function getTextValue()
    {
        return $this->textValue;
    }

    /**
     * Set record
     *
     * @param Jambudesk\RecordBundle\Entity\Record $record
     */
    public function setRecord(\Jambudesk\RecordBundle\Entity\Record $record)
    {
        $this->record = $record;
    }

    /**
     * Get record
     *
     * @return Jambudesk\RecordBundle\Entity\Record 
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Set field
     *
     * @param Jambudesk\RecordBundle\Entity\Field $field
     */
    public function setField(\Jambudesk\RecordBundle\Entity\Field $field)
    {
        $this->field = $field;
    }

    /**
     * Get field
     *
     * @return Jambudesk\RecordBundle\Entity\Field 
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set fieldOption
     *
     * @param Jambudesk\RecordBundle\Entity\FieldOption $fieldOption
     */
    public function setFieldOption(\Jambudesk\RecordBundle\Entity\FieldOption $fieldOption)
    {
        $this->fieldOption = $fieldOption;
    }

    /**
     * Get fieldOption
     *
     * @return Jambudesk\RecordBundle\Entity\FieldOption 
     */
    public function getFieldOption()
    {
        return $this->fieldOption;
    }
}