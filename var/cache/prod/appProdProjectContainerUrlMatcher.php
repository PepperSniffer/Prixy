<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // prixy_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'prixy_homepage');
            }

            return array (  '_controller' => 'PrixyBundle\\Controller\\DefaultController::indexAction',  '_route' => 'prixy_homepage',);
        }

        // prixy_formations
        if (rtrim($pathinfo, '/') === '/formations') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'prixy_formations');
            }

            return array (  '_controller' => 'PrixyBundle\\Controller\\DefaultController::formationsAction',  '_route' => 'prixy_formations',);
        }

        // prixy_contact
        if (rtrim($pathinfo, '/') === '/contact') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'prixy_contact');
            }

            return array (  '_controller' => 'PrixyBundle\\Controller\\DefaultController::contactAction',  '_route' => 'prixy_contact',);
        }

        // prixy_formation
        if (0 === strpos($pathinfo, '/formation') && preg_match('#^/formation/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'prixy_formation');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'prixy_formation')), array (  '_controller' => 'PrixyBundle\\Controller\\DefaultController::formationAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
