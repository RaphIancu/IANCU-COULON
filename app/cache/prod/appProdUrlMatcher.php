<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
