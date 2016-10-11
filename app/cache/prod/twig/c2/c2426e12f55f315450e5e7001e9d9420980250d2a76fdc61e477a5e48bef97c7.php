<?php

/* BibliothequeBundle:Livre:lister.html.twig */
class __TwigTemplate_b57ae3b9cecc621edad2112255529a491cebfbf5e143fa94a9232dc1f2a192b0 extends Twig_Template
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
        $__internal_7c2c55d2c9508db29cfda43c0a9fad051777df4f987455a19b0200937e441b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2c55d2c9508db29cfda43c0a9fad051777df4f987455a19b0200937e441b7c->enter($__internal_7c2c55d2c9508db29cfda43c0a9fad051777df4f987455a19b0200937e441b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Livre:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c2c55d2c9508db29cfda43c0a9fad051777df4f987455a19b0200937e441b7c->leave($__internal_7c2c55d2c9508db29cfda43c0a9fad051777df4f987455a19b0200937e441b7c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4478307ebd0e3461eb2eb4c44559ca915237ac14ccd9dbebce60d184ab40ac3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4478307ebd0e3461eb2eb4c44559ca915237ac14ccd9dbebce60d184ab40ac3c->enter($__internal_4478307ebd0e3461eb2eb4c44559ca915237ac14ccd9dbebce60d184ab40ac3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des livres";
        
        $__internal_4478307ebd0e3461eb2eb4c44559ca915237ac14ccd9dbebce60d184ab40ac3c->leave($__internal_4478307ebd0e3461eb2eb4c44559ca915237ac14ccd9dbebce60d184ab40ac3c_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a5488e074a73a9da92c20ebbcc1abca871920614f05e0b8a4bd748ff73494e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5488e074a73a9da92c20ebbcc1abca871920614f05e0b8a4bd748ff73494e73->enter($__internal_a5488e074a73a9da92c20ebbcc1abca871920614f05e0b8a4bd748ff73494e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("BibliothequeBundle:Livre:liste.html.twig", "BibliothequeBundle:Livre:lister.html.twig", 7)->display(array_merge($context, array("livres" => (isset($context["livres"]) ? $context["livres"] : $this->getContext($context, "livres")))));
        // line 8
        echo "

<p><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_livre_ajouter");
        echo "\"><button type=\"button\" class=\"btn btn-secondary\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Ajouter un livre</button></a></p>

";
        
        $__internal_a5488e074a73a9da92c20ebbcc1abca871920614f05e0b8a4bd748ff73494e73->leave($__internal_a5488e074a73a9da92c20ebbcc1abca871920614f05e0b8a4bd748ff73494e73_prof);

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
        return array (  62 => 10,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'BibliothequeBundle::layout.html.twig' %}

{% block title %}Liste des livres{% endblock %}

{% block content %}

{% include 'BibliothequeBundle:Livre:liste.html.twig' with {'livres' : livres}  %}


<p><a href=\"{{ path('myapp_livre_ajouter') }}\"><button type=\"button\" class=\"btn btn-secondary\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Ajouter un livre</button></a></p>

{% endblock %}";
    }
}
