<?php

namespace Jambudesk\RecordBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jambudesk\RecordBundle\Entity\Record
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Record
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
	 * @var Form $form
	 *
     * @ORM\ManyToOne(targetEntity="Form")
     * @ORM\JoinColumn(name="formId", referencedColumnName="id")
     */
    protected $form;
    
    /**
     * @var datetime $createdOn
     *
     * @ORM\Column(name="createdOn", type="datetime")
     */
    private $createdOn;
    
    /**
     * @var datetime $lastModifiedOn
     *
     * @ORM\Column(name="lastModifiedOn", type="datetime")
     */
    private $lastModifiedOn;
	
	 /**
     * @ORM\OneToMany(targetEntity="RecordField", mappedBy="record")
     */
    protected $recordFields;
	
	
	public function __construct()
    {
        $this->recordFields = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set createdOn
     *
     * @param datetime $createdOn
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Get createdOn
     *
     * @return datetime 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set lastModifiedOn
     *
     * @param datetime $lastModifiedOn
     */
    public function setLastModifiedOn($lastModifiedOn)
    {
        $this->lastModifiedOn = $lastModifiedOn;
    }

    /**
     * Get lastModifiedOn
     *
     * @return datetime 
     */
    public function getLastModifiedOn()
    {
        return $this->lastModifiedOn;
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
     * Add recordOptions
     *
     * @param Jambudesk\RecordBundle\Entity\RecordOption $recordOptions
     */
    public function addRecordOption(\Jambudesk\RecordBundle\Entity\RecordOption $recordOptions)
    {
        $this->recordOptions[] = $recordOptions;
    }

    /**
     * Get recordOptions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRecordOptions()
    {
        return $this->recordOptions;
    }

    /**
     * Add recordFields
     *
     * @param Jambudesk\RecordBundle\Entity\RecordField $recordFields
     */
    public function addRecordField(\Jambudesk\RecordBundle\Entity\RecordField $recordFields)
    {
        $this->recordFields[] = $recordFields;
    }

    /**
     * Get recordFields
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRecordFields()
    {
        return $this->recordFields;
    }
}