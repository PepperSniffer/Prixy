<?php

namespace PrixyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


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
        $dm = $this->getDoctrine()->getManager();
        $request = Request::createFromGlobals();


        if(null == $request->query->get('nom') && null == $request->query->get('prixMin') && null == $request->query->get('prixMax') && null == $request->query->get('select') && null == $request->query->get('certif')  ){
            $formations = $dm->getRepository('PrixyBundle:formation')->findAllAlphabetic();
        }else{
            $nom = $request->query->get('nom');
            $prixMin = $request->query->get('prixMin');
            $prixMax = $request->query->get('prixMax');
            $select = $request->query->get('select');
            $certif =  $request->query->get('certif');


                        var_dump($certif);
            $formations = $dm->getRepository('PrixyBundle:formation')->findWithParams($nom, $prixMin, $prixMax, $select, $certif);

        }

        //get themes for research bar 
        $themes = $dm->getRepository('PrixyBundle:theme')->findAllAlphabetic();


        return $this->render('PrixyBundle:Default:formation.html.twig',array(
            'formations'=>$formations,
            'themes'=>$themes
        ));
    }

    /**
    * @param $id
    *
    * @Route("/formaton/{id}", name="prixy_formation_details")
    */
    public function formationAction($id)
    {
        $dm = $this->getDoctrine()->getManager();
        $formation = $dm->getRepository('PrixyBundle:formation')->findOneById($id);
        $session_formation = $formation->getSessionFormation();
        $objectif = $formation->getObjectif();
        $details_formation = $formation->getDetailsFormation();

        $requires = $formation->getRequiert();
        return $this->render('PrixyBundle:Default:formation_details.html.twig', array('formation' => $formation,
                                                                                       'session_formation' => $session_formation,
                                                                                        'objectif' => $objectif,
                                                                                        'details_formation'=> $details_formation,
                                                                                        'requires'=>$requires
                                                                                        ));
    }
}
