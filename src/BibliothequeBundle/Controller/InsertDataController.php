<?php
namespace BibliothequeBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use BibliothequeBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class InsertDataController extends Controller
{
    public function insertAction()
    {
        $arrayCategorie = array("Roman", "Polar", "Jeunesse", "Loisir", "Document",
            "Bandes Dessinées", "Magazine", "Poésie", "Fable", "Autres"
        );

        $i = 0;
        while ($i < sizeof($arrayCategorie)):
            $product = new Categorie();
            $product->setId($i+1);
            $product->setNom($arrayCategorie[$i]);

            $em = $this->getDoctrine()->getManager();

            $em->persist($product);

            $em->flush();
            $i++;
        endwhile;
        
        return new Response("<h1>Insertion des données en base réussie</h1>");
    }
}