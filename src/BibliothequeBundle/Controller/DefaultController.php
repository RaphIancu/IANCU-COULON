<?php

namespace BibliothequeBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware,
       Symfony\Component\HttpFoundation\RedirectResponse;
use BibliothequeBundle\Entity\Categorie;

class DefaultController extends ContainerAware 
{
    public function indexAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();
		$categories = $em->getRepository('BibliothequeBundle:Categorie')->findAll();

		return $this->container->get('templating')->renderResponse('BibliothequeBundle:Default:index.html.twig',array(
		 'categories' => $categories)
	);
    }
}
