<?php

namespace BibliothequeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AutheurForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder
            ->add('nom', 'text', array('label' => 'Nom de famille'))
            ->add('prenom', 'text', array('label' => 'Prénom'))
            ->add('dateNaissance', 'birthday', array('label' => 'Date de naissance'))
            ->add('sexe', 'choice', array('choices' => array('F'=>'Féminin','M'=>'Masculin')))
        ;
    }
    
    public function getName()
    {
        return 'Autheur';
    }    
}