<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'myapp_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BibliothequeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'myapp_autheur_lister' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BibliothequeBundle\\Controller\\AutheurController::listerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/autheur/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'myapp_autheur_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BibliothequeBundle\\Controller\\AutheurController::editerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/autheur/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'myapp_autheur_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BibliothequeBundle\\Controller\\AutheurController::editerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/autheur/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'myapp_autheur_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BibliothequeBundle\\Controller\\AutheurController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/autheur/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'myapp_livre_lister' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BibliothequeBundle\\Controller\\LivreController::listerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/livre/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'myapp_livre_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BibliothequeBundle\\Controller\\LivreController::editerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/livre/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'myapp_livre_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BibliothequeBundle\\Controller\\LivreController::editerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/livre/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'myapp_livre_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BibliothequeBundle\\Controller\\LivreController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/livre/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'myapp_livre_voir' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BibliothequeBundle\\Controller\\LivreController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/livre/voir',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'myapp_insert_data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BibliothequeBundle\\Controller\\InsertDataController::insertAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/insert',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
