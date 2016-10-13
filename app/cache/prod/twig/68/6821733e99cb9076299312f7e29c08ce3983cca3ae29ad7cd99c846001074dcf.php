<?php

/* BibliothequeBundle:Autheur:lister.html.twig */
class __TwigTemplate_044c209a64e9034c992afbd7ed886a2d8a73ce4fe1a07a0d385d2211e5b2c18b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BibliothequeBundle::layout.html.twig", "BibliothequeBundle:Autheur:lister.html.twig", 1);
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
        $__internal_7673fee50419c9f3933373d4ebf723d332bff49c31ef8442fb0c2c8a6aa59021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7673fee50419c9f3933373d4ebf723d332bff49c31ef8442fb0c2c8a6aa59021->enter($__internal_7673fee50419c9f3933373d4ebf723d332bff49c31ef8442fb0c2c8a6aa59021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Autheur:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7673fee50419c9f3933373d4ebf723d332bff49c31ef8442fb0c2c8a6aa59021->leave($__internal_7673fee50419c9f3933373d4ebf723d332bff49c31ef8442fb0c2c8a6aa59021_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b88d79c36484bb2ad1d94a58a78a2e7d1a8db8a23f48111fdfd78564b1ae96fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88d79c36484bb2ad1d94a58a78a2e7d1a8db8a23f48111fdfd78564b1ae96fb->enter($__internal_b88d79c36484bb2ad1d94a58a78a2e7d1a8db8a23f48111fdfd78564b1ae96fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des autheurs";
        
        $__internal_b88d79c36484bb2ad1d94a58a78a2e7d1a8db8a23f48111fdfd78564b1ae96fb->leave($__internal_b88d79c36484bb2ad1d94a58a78a2e7d1a8db8a23f48111fdfd78564b1ae96fb_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_4645c6a1e9e621b58fb8d5f842a45680ea087cf5e6279d29094349f67e9e0c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4645c6a1e9e621b58fb8d5f842a45680ea087cf5e6279d29094349f67e9e0c37->enter($__internal_4645c6a1e9e621b58fb8d5f842a45680ea087cf5e6279d29094349f67e9e0c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("BibliothequeBundle:Autheur:liste.html.twig", "BibliothequeBundle:Autheur:lister.html.twig", 7)->display(array_merge($context, array("autheurs" => (isset($context["autheurs"]) ? $context["autheurs"] : $this->getContext($context, "autheurs")))));
        // line 8
        echo "
<p><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_autheur_ajouter");
        echo "\"><button type=\"button\" class=\"btn btn-secondary\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Ajouter un auteur</button></a></p>

";
        
        $__internal_4645c6a1e9e621b58fb8d5f842a45680ea087cf5e6279d29094349f67e9e0c37->leave($__internal_4645c6a1e9e621b58fb8d5f842a45680ea087cf5e6279d29094349f67e9e0c37_prof);

    }

    public function getTemplateName()
    {
        return "BibliothequeBundle:Autheur:lister.html.twig";
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

{% block title %}Liste des autheurs{% endblock %}

{% block content %}

{% include 'BibliothequeBundle:Autheur:liste.html.twig' with {'autheurs' : autheurs}  %}

<p><a href=\"{{ path('myapp_autheur_ajouter') }}\"><button type=\"button\" class=\"btn btn-secondary\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Ajouter un auteur</button></a></p>

{% endblock %}";
    }
}
