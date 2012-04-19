<?php

namespace Jambudesk\RecordBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of FormController
 *
 * @author dhanu
 */
class FormController extends Controller {

    public function indexAction($slug) {
        $entityManager = $this->getDoctrine()->getEntityManager();
        $form = $entityManager->getRepository('JambudeskRecordBundle:Form')->findOneBySlug($slug);
        
        $formBuilder = $this->createFormBuilder();
        $formBuilder->add('formId', 'hidden', array(
            'data' => $form->getId(),
        ));
        foreach ($form->getFields() as $field){
            if($field->getIsText()){
                $formBuilder->add($field->getName(), $field->getType());
            }
            else{
                $fieldOptions = array();
                foreach($field->getFieldOptions() as $f){
                    $fieldOptions[$f->getId()]=$f->getValue();
                }
                $formBuilder->add($field->getName(), $field->getType(), array(
                    'choices'   => $fieldOptions,
                    'required'  => true,
                    'expanded'  => true,
                ));
            }
        }
        $form = $formBuilder->getForm();
        
        return $this->render('JambudeskRecordBundle:Form:view.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}

?>