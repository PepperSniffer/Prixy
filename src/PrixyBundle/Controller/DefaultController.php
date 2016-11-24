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
    public function formationAction()
    {
        return $this->render('PrixyBundle:Default:formation.html.twig');
    }
    public function formation_details()
    {
        return $this->render('PrixyBundle:Default:formation_details.html.twig');
    }
    public function layoutAction()
    {
        return $this->render('PrixyBundle:Default:layout.html.twig');
    }
}
