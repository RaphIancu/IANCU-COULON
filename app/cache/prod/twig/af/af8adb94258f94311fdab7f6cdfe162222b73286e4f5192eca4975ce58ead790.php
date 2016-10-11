<?php

/* BibliothequeBundle:Autheur:lister.html.twig */
class __TwigTemplate_19a0d5390f324e26c1eb2dfccf11f7835baa1f7dd7b1804f6fc7be0ff0a1197c extends Twig_Template
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
        $__internal_818d70c8a4a82c46ba2e6657ada8263982441a85876cddd6bda97ea6a7f9dc6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818d70c8a4a82c46ba2e6657ada8263982441a85876cddd6bda97ea6a7f9dc6b->enter($__internal_818d70c8a4a82c46ba2e6657ada8263982441a85876cddd6bda97ea6a7f9dc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Autheur:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_818d70c8a4a82c46ba2e6657ada8263982441a85876cddd6bda97ea6a7f9dc6b->leave($__internal_818d70c8a4a82c46ba2e6657ada8263982441a85876cddd6bda97ea6a7f9dc6b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e287d96251c6c047e2178a6e4769b6c3e923814f48f1b603239eb9d48204677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e287d96251c6c047e2178a6e4769b6c3e923814f48f1b603239eb9d48204677->enter($__internal_6e287d96251c6c047e2178a6e4769b6c3e923814f48f1b603239eb9d48204677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des autheurs";
        
        $__internal_6e287d96251c6c047e2178a6e4769b6c3e923814f48f1b603239eb9d48204677->leave($__internal_6e287d96251c6c047e2178a6e4769b6c3e923814f48f1b603239eb9d48204677_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_3c3ff4dddc79de494582d5c27021e12c0ab274306e53ef19ff20ad67dcfa904b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3ff4dddc79de494582d5c27021e12c0ab274306e53ef19ff20ad67dcfa904b->enter($__internal_3c3ff4dddc79de494582d5c27021e12c0ab274306e53ef19ff20ad67dcfa904b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3c3ff4dddc79de494582d5c27021e12c0ab274306e53ef19ff20ad67dcfa904b->leave($__internal_3c3ff4dddc79de494582d5c27021e12c0ab274306e53ef19ff20ad67dcfa904b_prof);

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
