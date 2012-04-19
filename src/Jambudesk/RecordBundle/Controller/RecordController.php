<?php

namespace Jambudesk\RecordBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use \DateTime;
use Jambudesk\RecordBundle\Entity\Form;
use Jambudesk\RecordBundle\Entity\Record;
use Jambudesk\RecordBundle\Entity\RecordField;
/**
 * Description of RecordController
 *
 * @author dhanu
 */
class RecordController extends Controller {

    public function indexAction() {
        return new Response('Hello world!');
    }
    
    public function saveAction() {
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $postData = $request->request->get('form');
        }
        //var_dump($postData);
        
        $entityManager = $this->getDoctrine()->getEntityManager();
        $form = $entityManager->getRepository('JambudeskRecordBundle:Form')->findOneById($postData['formId']);
        
        $record = new Record();
        $record->setForm($form);
        $record->setCreatedOn(new DateTime('now'));
        $record->setLastModifiedOn(new DateTime('now'));
        
        foreach($form->getFields() as $field){
            $recordField = new RecordField();
            $recordField->setRecord($record);
            $recordField->setField($field);
            if($field->getIsText()){
                $recordField->setTextValue($postData[$field->getName()]);
            }
            else{
                $fieldOption = $entityManager->getRepository('JambudeskRecordBundle:FieldOption')->findOneById($postData[$field->getName()]);
                $recordField->setfieldOption($fieldOption);
            }
            $record->addRecordField($recordField);
        }       
        
        $entityManager->persist($record);
        $entityManager->flush();
        
        //var_dump($record);
        return new Response('Hello world!');
    }

}