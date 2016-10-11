<?php

/* BibliothequeBundle:Livre:lister.html.twig */
class __TwigTemplate_da240c725b7bcb01224bb8bddd3b92e44bf5b7e14ed4e452a54c537ee4eca29d extends Twig_Template
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
        $__internal_a43a1ad45bc6d8db666b538f8d5922ea7bf9a558987b47d87598fc818d18c031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43a1ad45bc6d8db666b538f8d5922ea7bf9a558987b47d87598fc818d18c031->enter($__internal_a43a1ad45bc6d8db666b538f8d5922ea7bf9a558987b47d87598fc818d18c031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Livre:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a43a1ad45bc6d8db666b538f8d5922ea7bf9a558987b47d87598fc818d18c031->leave($__internal_a43a1ad45bc6d8db666b538f8d5922ea7bf9a558987b47d87598fc818d18c031_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_804a8944f589cec9ba18e7ad6fc3dc7ce844979ef063e7978d729e3f3f4e4fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804a8944f589cec9ba18e7ad6fc3dc7ce844979ef063e7978d729e3f3f4e4fa2->enter($__internal_804a8944f589cec9ba18e7ad6fc3dc7ce844979ef063e7978d729e3f3f4e4fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des livres";
        
        $__internal_804a8944f589cec9ba18e7ad6fc3dc7ce844979ef063e7978d729e3f3f4e4fa2->leave($__internal_804a8944f589cec9ba18e7ad6fc3dc7ce844979ef063e7978d729e3f3f4e4fa2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c34005f5fc41c3a139ab3db0bd9af042ccecce6ae4b7af77723ebdddd7c13acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34005f5fc41c3a139ab3db0bd9af042ccecce6ae4b7af77723ebdddd7c13acd->enter($__internal_c34005f5fc41c3a139ab3db0bd9af042ccecce6ae4b7af77723ebdddd7c13acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c34005f5fc41c3a139ab3db0bd9af042ccecce6ae4b7af77723ebdddd7c13acd->leave($__internal_c34005f5fc41c3a139ab3db0bd9af042ccecce6ae4b7af77723ebdddd7c13acd_prof);

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
