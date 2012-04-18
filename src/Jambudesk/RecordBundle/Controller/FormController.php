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
        return $this->render('JambudeskRecordBundle:Form:index.html.php', array('form'=>$form));
    }

}

?>