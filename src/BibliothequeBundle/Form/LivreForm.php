<?php

namespace BibliothequeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LivreForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder
            ->add('titre', 'text', array('label' => 'Titre du livre'))
            ->add('description', 'textarea', array('label' => 'Description du livre'))
            ->add('categorie','entity', array(
	            'class' => 'BibliothequeBundle\Entity\Categorie',
	            'property' => 'nom',
	            'multiple' => false,
	            'required' => false
            ))
            ->add('autheurs', 'entity', array(
	            'class' => 'BibliothequeBundle\Entity\Autheur',
	            'property' => 'PrenomNom',
	            'expanded' => true,
	            'multiple' => true,
	            'required' => false
            ))
		;

    }
	
	public function getName()
	{
		return 'livre';
	}	
}