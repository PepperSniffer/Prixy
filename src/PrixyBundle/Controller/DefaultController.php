<?php

namespace PrixyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PrixyBundle:Resources:index.html.twig');
    }
    public function contactAction()
    {
        return $this->render('PrixyBundle:Resources:contact.html.twig') ;
    }
    public function formationAction()
    {
        return $this->render('PrixyBundle:Resources:formation.html.twig');
    }
    public function formation_details()
    {
        return $this->render('PrixyBundle:Resources:formation_details.html.twig');
    }
    public function layoutAction()
    {
        return $this->render('PrixyBundle:Resources:layout.html.twig');
    }
}
s