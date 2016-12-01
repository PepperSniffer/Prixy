<?php

namespace PrixyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Component\Routing\Route;


class DefaultController extends Controller
{

    /**
    * @Route("/", name="prixy_homepage")
    */
    public function indexAction()
    {
        return $this->render('PrixyBundle:Default:index.html.twig');
    }

    /**
    * @Route("/contact/", name="prixy_contact")
    */
    public function contactAction()
    {
        return $this->render('PrixyBundle:Default:contact.html.twig') ;
    }

    /**
    * @Route("/formations/", name="prixy_formations")
    */
    public function formationsAction()
    {
        return $this->render('PrixyBundle:Default:formation.html.twig');
    }

    /**
    * @param $id
    *
    * @Route("/formaton/{id}", name="prixy_formation_details")
    */
    public function formationAction($id)
    {
        $dm = $this->getContainer()->get('doctrine')->getManager();
        $formation = $dm->getRepository('PrixyBundle:formation')->findOneById($id);
        $session_formation = $formation->getSessionFormation();
        $objectif = $formation->getObjectif();
        $details_formation = $formation->getDetailsFormation();
        $ligne_formation = $details_formation->getLignesFormations();
        $requires = $formation->getRequiert();
        return $this->render('PrixyBundle:Default:formation_details.html.twig', array('formation' => $formation,
                                                                                       'session_formation' => $session_formation,
                                                                                        'objectif' => $objectif,
                                                                                        'details_formation'=> $details_formation,
                                                                                        'ligne_formation'=> $ligne_formation
                                                                                        ));
    }
}
