<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/compiled/app')) {
            // _assetic_235aef9
            if ($pathinfo === '/css/compiled/app.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '235aef9',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_235aef9',);
            }

            if (0 === strpos($pathinfo, '/css/compiled/app_')) {
                // _assetic_235aef9_0
                if ($pathinfo === '/css/compiled/app_style_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '235aef9',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_235aef9_0',);
                }

                // _assetic_235aef9_1
                if ($pathinfo === '/css/compiled/app_bootstrap.min_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '235aef9',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_235aef9_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/compiled/app')) {
            // _assetic_03addd9
            if ($pathinfo === '/js/compiled/app.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '03addd9',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_03addd9',);
            }

            if (0 === strpos($pathinfo, '/js/compiled/app_')) {
                // _assetic_03addd9_0
                if ($pathinfo === '/js/compiled/app_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '03addd9',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_03addd9_0',);
                }

                // _assetic_03addd9_1
                if ($pathinfo === '/js/compiled/app_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '03addd9',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_03addd9_1',);
                }

                // _assetic_03addd9_2
                if ($pathinfo === '/js/compiled/app_ham-button_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '03addd9',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_03addd9_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
