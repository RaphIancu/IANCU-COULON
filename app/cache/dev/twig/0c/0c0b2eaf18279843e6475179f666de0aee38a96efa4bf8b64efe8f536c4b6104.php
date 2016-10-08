<?php

/* BibliothequeBundle:Livre:lister.html.twig */
class __TwigTemplate_695284c17a345829b00306376657d9dc055b889cc1a144b24ab1e9a35ec9b34a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BibliothequeBundle::layout.html.twig", "BibliothequeBundle:Livre:lister.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BibliothequeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_832ca0d7f038a7c7d8a8f27b8396d07a8dd745e4781bfedc8691d0a2c8a801c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832ca0d7f038a7c7d8a8f27b8396d07a8dd745e4781bfedc8691d0a2c8a801c1->enter($__internal_832ca0d7f038a7c7d8a8f27b8396d07a8dd745e4781bfedc8691d0a2c8a801c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Livre:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_832ca0d7f038a7c7d8a8f27b8396d07a8dd745e4781bfedc8691d0a2c8a801c1->leave($__internal_832ca0d7f038a7c7d8a8f27b8396d07a8dd745e4781bfedc8691d0a2c8a801c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb31dcbdbf444ecf7007052bed3cb73c604fd43f63f161fc5a1c42ed319ab433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb31dcbdbf444ecf7007052bed3cb73c604fd43f63f161fc5a1c42ed319ab433->enter($__internal_bb31dcbdbf444ecf7007052bed3cb73c604fd43f63f161fc5a1c42ed319ab433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des livres";
        
        $__internal_bb31dcbdbf444ecf7007052bed3cb73c604fd43f63f161fc5a1c42ed319ab433->leave($__internal_bb31dcbdbf444ecf7007052bed3cb73c604fd43f63f161fc5a1c42ed319ab433_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2b6d51c8b7b98a178714995cce338dc932a4972302ccb54f5877e44c4d36076e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6d51c8b7b98a178714995cce338dc932a4972302ccb54f5877e44c4d36076e->enter($__internal_2b6d51c8b7b98a178714995cce338dc932a4972302ccb54f5877e44c4d36076e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("BibliothequeBundle:Livre:liste.html.twig", "BibliothequeBundle:Livre:lister.html.twig", 7)->display(array_merge($context, array("livres" => (isset($context["livres"]) ? $context["livres"] : $this->getContext($context, "livres")))));
        // line 8
        echo "
<p><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_livre_ajouter");
        echo "\">Ajouter un livre</a><p>

";
        
        $__internal_2b6d51c8b7b98a178714995cce338dc932a4972302ccb54f5877e44c4d36076e->leave($__internal_2b6d51c8b7b98a178714995cce338dc932a4972302ccb54f5877e44c4d36076e_prof);

    }

    public function getTemplateName()
    {
        return "BibliothequeBundle:Livre:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'BibliothequeBundle::layout.html.twig' %}

{% block title %}Liste des livres{% endblock %}

{% block content %}

{% include 'BibliothequeBundle:Livre:liste.html.twig' with {'livres' : livres}  %}

<p><a href=\"{{ path('myapp_livre_ajouter') }}\">Ajouter un livre</a><p>

{% endblock %}";
    }
}
