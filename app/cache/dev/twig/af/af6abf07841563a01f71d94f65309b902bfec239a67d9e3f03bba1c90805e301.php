<?php

/* BibliothequeBundle:Autheur:lister.html.twig */
class __TwigTemplate_6c078a9eaca5fcf860f747a3aa3e861b51cc3e30bba3915d9e5f6889f9bd49c8 extends Twig_Template
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
        $__internal_d3c1e3c9cbaa9d13e335be87497895640d53ef2d40d4eefe7aed7a8a2fe4843e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c1e3c9cbaa9d13e335be87497895640d53ef2d40d4eefe7aed7a8a2fe4843e->enter($__internal_d3c1e3c9cbaa9d13e335be87497895640d53ef2d40d4eefe7aed7a8a2fe4843e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Autheur:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3c1e3c9cbaa9d13e335be87497895640d53ef2d40d4eefe7aed7a8a2fe4843e->leave($__internal_d3c1e3c9cbaa9d13e335be87497895640d53ef2d40d4eefe7aed7a8a2fe4843e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_acd575dd5864cd11bf2e6e2b4f403c50bc7d94acdd6d4536bae2c34f691d35d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd575dd5864cd11bf2e6e2b4f403c50bc7d94acdd6d4536bae2c34f691d35d3->enter($__internal_acd575dd5864cd11bf2e6e2b4f403c50bc7d94acdd6d4536bae2c34f691d35d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des autheurs";
        
        $__internal_acd575dd5864cd11bf2e6e2b4f403c50bc7d94acdd6d4536bae2c34f691d35d3->leave($__internal_acd575dd5864cd11bf2e6e2b4f403c50bc7d94acdd6d4536bae2c34f691d35d3_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_7376c0fc5230690bf145949489f08b4a4f6f21a5ed577a59e4475b4b7d8c70c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7376c0fc5230690bf145949489f08b4a4f6f21a5ed577a59e4475b4b7d8c70c7->enter($__internal_7376c0fc5230690bf145949489f08b4a4f6f21a5ed577a59e4475b4b7d8c70c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo "\">Ajouter un auteur</a><p>

";
        
        $__internal_7376c0fc5230690bf145949489f08b4a4f6f21a5ed577a59e4475b4b7d8c70c7->leave($__internal_7376c0fc5230690bf145949489f08b4a4f6f21a5ed577a59e4475b4b7d8c70c7_prof);

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

<p><a href=\"{{ path('myapp_autheur_ajouter') }}\">Ajouter un auteur</a><p>

{% endblock %}";
    }
}
