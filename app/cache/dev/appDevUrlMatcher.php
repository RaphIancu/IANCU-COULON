<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

        // myapp_accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'myapp_accueil');
            }

            return array (  '_controller' => 'BibliothequeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'myapp_accueil',);
        }

        if (0 === strpos($pathinfo, '/autheur')) {
            // myapp_autheur_lister
            if (rtrim($pathinfo, '/') === '/autheur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'myapp_autheur_lister');
                }

                return array (  '_controller' => 'BibliothequeBundle\\Controller\\AutheurController::listerAction',  '_route' => 'myapp_autheur_lister',);
            }

            // myapp_autheur_ajouter
            if ($pathinfo === '/autheur/ajouter') {
                return array (  '_controller' => 'BibliothequeBundle\\Controller\\AutheurController::editerAction',  '_route' => 'myapp_autheur_ajouter',);
            }

            // myapp_autheur_modifier
            if (0 === strpos($pathinfo, '/autheur/modifier') && preg_match('#^/autheur/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_autheur_modifier')), array (  '_controller' => 'BibliothequeBundle\\Controller\\AutheurController::editerAction',));
            }

            // myapp_autheur_supprimer
            if (0 === strpos($pathinfo, '/autheur/supprimer') && preg_match('#^/autheur/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_autheur_supprimer')), array (  '_controller' => 'BibliothequeBundle\\Controller\\AutheurController::supprimerAction',));
            }

        }

        if (0 === strpos($pathinfo, '/livre')) {
            // myapp_livre_lister
            if (rtrim($pathinfo, '/') === '/livre') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'myapp_livre_lister');
                }

                return array (  '_controller' => 'BibliothequeBundle\\Controller\\LivreController::listerAction',  '_route' => 'myapp_livre_lister',);
            }

            // myapp_livre_ajouter
            if ($pathinfo === '/livre/ajouter') {
                return array (  '_controller' => 'BibliothequeBundle\\Controller\\LivreController::editerAction',  '_route' => 'myapp_livre_ajouter',);
            }

            // myapp_livre_modifier
            if (0 === strpos($pathinfo, '/livre/modifier') && preg_match('#^/livre/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_livre_modifier')), array (  '_controller' => 'BibliothequeBundle\\Controller\\LivreController::editerAction',));
            }

            // myapp_livre_supprimer
            if (0 === strpos($pathinfo, '/livre/supprimer') && preg_match('#^/livre/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_livre_supprimer')), array (  '_controller' => 'BibliothequeBundle\\Controller\\LivreController::supprimerAction',));
            }

            // myapp_livre_voir
            if (0 === strpos($pathinfo, '/livre/voir') && preg_match('#^/livre/voir/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_livre_voir')), array (  '_controller' => 'BibliothequeBundle\\Controller\\LivreController::voirAction',));
            }

        }

        // myapp_insert_data
        if ($pathinfo === '/insert') {
            return array (  '_controller' => 'BibliothequeBundle\\Controller\\InsertDataController::insertAction',  '_route' => 'myapp_insert_data',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
