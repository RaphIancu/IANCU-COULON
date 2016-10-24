<?php

/* BibliothequeBundle:Default:index.html.twig */
class __TwigTemplate_8353403cf471b27586476e80399c9ab8c7701953334f03936ec9f5a8d135ff7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BibliothequeBundle::layout.html.twig", "BibliothequeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BibliothequeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffd1e58b10b74524d8cbbafdfa5ef90ccc69bb7c4aef02ed5c83881deeea8d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd1e58b10b74524d8cbbafdfa5ef90ccc69bb7c4aef02ed5c83881deeea8d84->enter($__internal_ffd1e58b10b74524d8cbbafdfa5ef90ccc69bb7c4aef02ed5c83881deeea8d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffd1e58b10b74524d8cbbafdfa5ef90ccc69bb7c4aef02ed5c83881deeea8d84->leave($__internal_ffd1e58b10b74524d8cbbafdfa5ef90ccc69bb7c4aef02ed5c83881deeea8d84_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_45b6d51ff7641191ddd21ee0a83173db7cbd5b8215dc41e8c106fa6b19455920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b6d51ff7641191ddd21ee0a83173db7cbd5b8215dc41e8c106fa6b19455920->enter($__internal_45b6d51ff7641191ddd21ee0a83173db7cbd5b8215dc41e8c106fa6b19455920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"panel panel-default\">  
    <div class=\"panel-heading\">LES AUTEURS LES PLUS RECENTS</div>
\t\t";
        // line 6
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BibliothequeBundle:Autheur:top", array("max" => 3)), array());
        // line 7
        echo "</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">LES DERNIERS LIVRES AJOUTES</div>
\t\t";
        // line 11
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BibliothequeBundle:Livre:top", array("max" => 3)), array());
        // line 12
        echo "</div>
";
        
        $__internal_45b6d51ff7641191ddd21ee0a83173db7cbd5b8215dc41e8c106fa6b19455920->leave($__internal_45b6d51ff7641191ddd21ee0a83173db7cbd5b8215dc41e8c106fa6b19455920_prof);

    }

    public function getTemplateName()
    {
        return "BibliothequeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  52 => 11,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'BibliothequeBundle::layout.html.twig' %}

{% block content %}
<div class=\"panel panel-default\">  
    <div class=\"panel-heading\">LES AUTEURS LES PLUS RECENTS</div>
\t\t{% render (controller(\"BibliothequeBundle:Autheur:top\", {'max': 3})) %}
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">LES DERNIERS LIVRES AJOUTES</div>
\t\t{% render (controller(\"BibliothequeBundle:Livre:top\", {'max': 3})) %}
</div>
{% endblock %}














";
    }
}
