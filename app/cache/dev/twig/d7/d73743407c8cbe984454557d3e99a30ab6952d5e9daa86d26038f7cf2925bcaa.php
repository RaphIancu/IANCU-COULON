<?php

/* @Bibliotheque/Autheur/lister.html.twig */
class __TwigTemplate_de753d861552fcddc3889cf17a8f09114d102f8aab6bd360ce965341ec8951a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BibliothequeBundle::layout.html.twig", "@Bibliotheque/Autheur/lister.html.twig", 1);
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
        $__internal_125deb5d6a6b0d7c92bdff959a87462e73245350531936b9d05e3c5b7d285f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125deb5d6a6b0d7c92bdff959a87462e73245350531936b9d05e3c5b7d285f52->enter($__internal_125deb5d6a6b0d7c92bdff959a87462e73245350531936b9d05e3c5b7d285f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Bibliotheque/Autheur/lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_125deb5d6a6b0d7c92bdff959a87462e73245350531936b9d05e3c5b7d285f52->leave($__internal_125deb5d6a6b0d7c92bdff959a87462e73245350531936b9d05e3c5b7d285f52_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d00f2af14d4ed68903c2df72efee449e2a8f14d71f9b6e62dc1403116b6e814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d00f2af14d4ed68903c2df72efee449e2a8f14d71f9b6e62dc1403116b6e814->enter($__internal_9d00f2af14d4ed68903c2df72efee449e2a8f14d71f9b6e62dc1403116b6e814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des autheurs";
        
        $__internal_9d00f2af14d4ed68903c2df72efee449e2a8f14d71f9b6e62dc1403116b6e814->leave($__internal_9d00f2af14d4ed68903c2df72efee449e2a8f14d71f9b6e62dc1403116b6e814_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_215873271f3f74c795ae2cd8ce24b0948853b230b22eb1cfdfd788a38b5b1205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215873271f3f74c795ae2cd8ce24b0948853b230b22eb1cfdfd788a38b5b1205->enter($__internal_215873271f3f74c795ae2cd8ce24b0948853b230b22eb1cfdfd788a38b5b1205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("BibliothequeBundle:Autheur:liste.html.twig", "@Bibliotheque/Autheur/lister.html.twig", 7)->display(array_merge($context, array("autheurs" => (isset($context["autheurs"]) ? $context["autheurs"] : $this->getContext($context, "autheurs")))));
        // line 8
        echo "
<p><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_autheur_ajouter");
        echo "\"><button type=\"button\" class=\"btn btn-secondary\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Ajouter un auteur</button></a></p>

";
        
        $__internal_215873271f3f74c795ae2cd8ce24b0948853b230b22eb1cfdfd788a38b5b1205->leave($__internal_215873271f3f74c795ae2cd8ce24b0948853b230b22eb1cfdfd788a38b5b1205_prof);

    }

    public function getTemplateName()
    {
        return "@Bibliotheque/Autheur/lister.html.twig";
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
