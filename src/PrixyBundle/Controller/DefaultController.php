<?php

namespace PrixyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PrixyBundle:Default:index.html.twig');
    }
}
