<?php

namespace BibliothequeBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use BibliothequeBundle\Entity\Autheur;
use BibliothequeBundle\Form\AutheurForm;

class AutheurController extends ContainerAware
{
    public function listerAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();

        $autheurs= $em->getRepository('BibliothequeBundle:Autheur')->findAll();

        return $this->container->get('templating')->renderResponse('BibliothequeBundle:Autheur:lister.html.twig', 
            array(
            'autheurs' => $autheurs
        ));
    }

    public function topAction($max = 5)
    {
        $em = $this->container->get('doctrine')->getEntityManager();

        $qb = $em->createQueryBuilder();
        $qb->select('a')
          ->from('BibliothequeBundle:Autheur', 'a')
          ->orderBy('a.dateNaissance', 'DESC')
          ->setMaxResults($max);

        $query = $qb->getQuery();
        $autheurs = $query->getResult();

        return $this->container->get('templating')->renderResponse('BibliothequeBundle:Autheur:liste.html.twig', array(
            'autheurs' => $autheurs,
        ));
    }
    
    public function ajouterAction()
    {
       $message='';
       $autheur = new Autheur();
       $form = $this->container->get('form.factory')->create(new AutheurForm(), $autheur);

       $request = $this->container->get('request');

       if ($request->getMethod() == 'POST') 
       {
        $form->bind($request);

            if ($form->isValid()) 
            {
              $em = $this->container->get('doctrine')->getEntityManager();
              $em->persist($autheur);
              $em->flush();
              $message='auteur ajouté avec succès !';
            }
        }   

        return $this->container->get('templating')->renderResponse(
            'BibliothequeBundle:Autheur:ajouter.html.twig',
            array(
            'form' => $form->createView(),
            'message' => $message,
            ));
    }

    public function modifierAction($id)
    {
        return $this->container->get('templating')->renderResponse(
            'BibliothequeBundle:Autheur:modifier.html.twig');
    }

    public function supprimerAction($id)
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $autheur = $em->find('BibliothequeBundle:Autheur', $id);
            
        if (!$autheur) 
        {
            throw new NotFoundHttpException("Auteur non trouvé");
        }
            
        $em->remove($autheur);
        $em->flush();        

        return new RedirectResponse($this->container->get('router')->generate('myapp_autheur_lister'));
    }

    public function editerAction($id = null)
    {
        $message='';
        $em = $this->container->get('doctrine')->getEntityManager();

        if (isset($id)) 
        {
            // modification d'un autheur existant : on recherche ses données
            $autheur = $em->find('BibliothequeBundle:Autheur', $id);

            if (!$autheur)
            {
                $message='Aucun auteur trouvé';
            }
        }
        else 
        {
            // ajout d'un nouvel autheur
            $autheur = new Autheur();
        }

        $form = $this->container->get('form.factory')->create(new AutheurForm(), $autheur);
        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') 
        {
            $form->bind($request);

            if ($form->isValid()) 
            {
                $em->persist($autheur);
                $em->flush();
                if (isset($id)) 
                {
                    $message='Auteur modifié avec succès !';
                }
                else 
                {
                    $message='Auteur ajouté avec succès !';
                }
            }
        }

        return $this->container->get('templating')->renderResponse(
            'BibliothequeBundle:Autheur:editer.html.twig',
            array(
            'form' => $form->createView(),
            'message' => $message,
        ));
    }
}