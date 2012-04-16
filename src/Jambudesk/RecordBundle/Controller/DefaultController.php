<?php

namespace Jambudesk\RecordBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('JambudeskRecordBundle:Default:index.html.twig', array('name' => $name));
    }
}
