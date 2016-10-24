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
        $__internal_01bd9eced96d2ed69e395529af5e06a2aef5b5fc9e0b5cb5798f1825108dc657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01bd9eced96d2ed69e395529af5e06a2aef5b5fc9e0b5cb5798f1825108dc657->enter($__internal_01bd9eced96d2ed69e395529af5e06a2aef5b5fc9e0b5cb5798f1825108dc657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Autheur:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01bd9eced96d2ed69e395529af5e06a2aef5b5fc9e0b5cb5798f1825108dc657->leave($__internal_01bd9eced96d2ed69e395529af5e06a2aef5b5fc9e0b5cb5798f1825108dc657_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1fa839eb0c083555434ea7acb5ef96f3975fead6703608ba93cc055dac9ef48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fa839eb0c083555434ea7acb5ef96f3975fead6703608ba93cc055dac9ef48->enter($__internal_b1fa839eb0c083555434ea7acb5ef96f3975fead6703608ba93cc055dac9ef48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des autheurs";
        
        $__internal_b1fa839eb0c083555434ea7acb5ef96f3975fead6703608ba93cc055dac9ef48->leave($__internal_b1fa839eb0c083555434ea7acb5ef96f3975fead6703608ba93cc055dac9ef48_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2d51e87335b2232226106fdb2350cb377be5d6242df31a2dd292e054de73e533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d51e87335b2232226106fdb2350cb377be5d6242df31a2dd292e054de73e533->enter($__internal_2d51e87335b2232226106fdb2350cb377be5d6242df31a2dd292e054de73e533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2d51e87335b2232226106fdb2350cb377be5d6242df31a2dd292e054de73e533->leave($__internal_2d51e87335b2232226106fdb2350cb377be5d6242df31a2dd292e054de73e533_prof);

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
