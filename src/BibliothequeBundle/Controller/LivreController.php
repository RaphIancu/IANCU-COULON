<?php

namespace BibliothequeBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use BibliothequeBundle\Entity\Livre;
use BibliothequeBundle\Form\LivreForm;

class LivreController extends ContainerAware
{
    public function listerAction()
    {        
        $em = $this->container->get('doctrine')->getEntityManager();
        $livres= $em->getRepository('BibliothequeBundle:Livre')->findAll();

        return $this->container->get('templating')->renderResponse('BibliothequeBundle:Livre:lister.html.twig', array(
            'livres' => $livres
        ));
    }
    

    public function voirAction($id = null)
    {
        $em = $this->container->get('doctrine')->getEntityManager();

        if (isset($id)) 
        {
            $livre = $em->find('BibliothequeBundle:Livre', $id);
        }            

        return $this->container->get('templating')->renderResponse(
        'BibliothequeBundle:Livre:voir.html.twig',
            array(
            'livre' => $livre,            
            )
        );
    }
    
    public function editerAction($id = null)
    {
        $message='';
        $em = $this->container->get('doctrine')->getEntityManager();

        if (isset($id)) 
        {
            $livre = $em->find('BibliothequeBundle:Livre', $id);

            if (!$livre)
            {
                $message='Aucun livre trouvé';
            }
        }
        else 
        {
            $livre = new Livre();
        }

        $form = $this->container->get('form.factory')->create(new LivreForm(), $livre);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') 
        {
            $form->bind($request);

            if ($form->isValid()) 
            {
                $em->persist($livre);
                $em->flush();
                if (isset($id)) 
                {
                     $message='Livre modifié avec succès !';
                }
                else 
                {
                    $message='Livre ajouté avec succès !';
                }
            }
        }

        return $this->container->get('templating')->renderResponse(
        'BibliothequeBundle:Livre:editer.html.twig',
            array(
            'form' => $form->createView(),
            'message' => $message,
            )
        );
    }

    public function supprimerAction($id)
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $livre = $em->find('BibliothequeBundle:Livre', $id);

        if (!$livre) 
        {
            throw new NotFoundHttpException("Livre non trouvé");
        }

        $em->remove($livre);
        $em->flush();        


        return new RedirectResponse($this->container->get('router')->generate('myapp_livre_lister'));
    }

    public function topAction($max = 5)
    {
        $em = $this->container->get('doctrine')->getEntityManager();

        $qb = $em->createQueryBuilder();
        $qb->select('f')
          ->from('BibliothequeBundle:Livre', 'f')
          ->orderBy('f.id', 'DESC')
          ->setMaxResults($max);

        $query = $qb->getQuery();
        $livres = $query->getResult();

        return $this->container->get('templating')->renderResponse('BibliothequeBundle:Livre:liste.html.twig', array(
            'livres' => $livres,
        ));
    }
}