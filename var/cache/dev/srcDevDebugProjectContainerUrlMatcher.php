<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/bien')) {
            // app_api_allbien
            if ('/bien' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\APIController::allBienAction',  '_route' => 'app_api_allbien',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_app_api_allbien;
                }

                return $ret;
            }
            not_app_api_allbien:

            // SavePro
            if ('/bien/pro' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\FrontController::SavePro',  '_route' => 'SavePro',);
            }

            // Almadie
            if ('/bien/almadie' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\FrontController::almadie',  '_route' => 'Almadie',);
            }

            // Mariste
            if ('/bien/mariste' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\FrontController::mariste',  '_route' => 'Mariste',);
            }

            // reservation
            if ('/bien/reserver_bien' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\FrontController::reservation',  '_route' => 'reservation',);
            }

        }

        // app_api_listeclient
        if ('/list' === $pathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\APIController::listeClientAction',  '_route' => 'app_api_listeclient',);
            if (!in_array($requestMethod, array('POST'))) {
                $allow = array_merge($allow, array('POST'));
                goto not_app_api_listeclient;
            }

            return $ret;
        }
        not_app_api_listeclient:

        // app_api_localite
        if ('/localite' === $pathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\APIController::localiteAction',  '_route' => 'app_api_localite',);
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_app_api_localite;
            }

            return $ret;
        }
        not_app_api_localite:

        if (0 === strpos($pathinfo, '/add')) {
            // app_api_add
            if ('/add' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\APIController::addAction',  '_route' => 'app_api_add',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_app_api_add;
                }

                return $ret;
            }
            not_app_api_add:

            // app_api_addreserver
            if ('/addreservation' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\APIController::addreserverAction',  '_route' => 'app_api_addreserver',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_app_api_addreserver;
                }

                return $ret;
            }
            not_app_api_addreserver:

        }

        // app_api_connexionclient
        if ('/connexionclient' === $pathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\APIController::connexionClientAction',  '_route' => 'app_api_connexionclient',);
            if (!in_array($requestMethod, array('POST'))) {
                $allow = array_merge($allow, array('POST'));
                goto not_app_api_connexionclient;
            }

            return $ret;
        }
        not_app_api_connexionclient:

        // app_api_detail
        if ('/detail' === $pathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\APIController::detailAction',  '_route' => 'app_api_detail',);
            if (!in_array($requestMethod, array('POST'))) {
                $allow = array_merge($allow, array('POST'));
                goto not_app_api_detail;
            }

            return $ret;
        }
        not_app_api_detail:

        // app_api_typebien
        if ('/type' === $pathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\APIController::typebienAction',  '_route' => 'app_api_typebien',);
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_app_api_typebien;
            }

            return $ret;
        }
        not_app_api_typebien:

        // app_api_recherche
        if ('/recherche' === $pathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\APIController::rechercheAction',  '_route' => 'app_api_recherche',);
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_app_api_recherche;
            }

            return $ret;
        }
        not_app_api_recherche:

        if (0 === strpos($pathinfo, '/index')) {
            // app_front_index
            if ('/index' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\FrontController::index',  '_route' => 'app_front_index',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_app_front_index;
                }

                return $ret;
            }
            not_app_front_index:

            // index
            if ('/index' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\FrontController::index',  '_route' => 'index',);
            }

        }

        elseif (0 === strpos($pathinfo, '/front/bien/reserver')) {
            // app_front_reserverbien
            if ('/front/bien/reserver' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\FrontController::reserverBien',  '_route' => 'app_front_reserverbien',);
            }

            // reserverBien
            if (preg_match('#^/front/bien/reserver/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserverBien')), array (  '_controller' => 'App\\Controller\\FrontController::reserverBien',));
            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        if ('/' === $pathinfo) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
