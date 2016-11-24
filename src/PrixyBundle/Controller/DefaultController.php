<?php

namespace PrixyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PrixyBundle:Default:index.html.twig');
    }
    public function contactAction()
    {
        return $this->render('PrixyBundle:Default:contact.html.twig') ;
    }
    public function formationsAction()
    {
        return $this->render('PrixyBundle:Default:formation.html.twig');
    }
    public function formationAction($id)
    {
        $dm = $this->getContainer()->get('doctrine')->getManager();
        $formation = $certification = $dm->getRepository('PrixyBundle:formation')->findOneById($id);
        return $this->render('PrixyBundle:Default:formation_details.html.twig', array('formation' => $formation));
    }
}
