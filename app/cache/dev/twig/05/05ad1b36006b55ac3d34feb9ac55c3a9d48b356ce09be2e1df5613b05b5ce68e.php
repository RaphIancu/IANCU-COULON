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
        $__internal_e602812fd2a4f9d567d7577d0dc15c8819e949aaf6d4cd108f5f155d70799f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e602812fd2a4f9d567d7577d0dc15c8819e949aaf6d4cd108f5f155d70799f43->enter($__internal_e602812fd2a4f9d567d7577d0dc15c8819e949aaf6d4cd108f5f155d70799f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Livre:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e602812fd2a4f9d567d7577d0dc15c8819e949aaf6d4cd108f5f155d70799f43->leave($__internal_e602812fd2a4f9d567d7577d0dc15c8819e949aaf6d4cd108f5f155d70799f43_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96cab80d53b8387dc27e4d2cc816bb92b8a91ecdb6d56dc4f27633dcc085b765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cab80d53b8387dc27e4d2cc816bb92b8a91ecdb6d56dc4f27633dcc085b765->enter($__internal_96cab80d53b8387dc27e4d2cc816bb92b8a91ecdb6d56dc4f27633dcc085b765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des livres";
        
        $__internal_96cab80d53b8387dc27e4d2cc816bb92b8a91ecdb6d56dc4f27633dcc085b765->leave($__internal_96cab80d53b8387dc27e4d2cc816bb92b8a91ecdb6d56dc4f27633dcc085b765_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_fefa6e98f1ceb1c8909bc885b843c503b98b3068b47787e2b10e3a13912253c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefa6e98f1ceb1c8909bc885b843c503b98b3068b47787e2b10e3a13912253c7->enter($__internal_fefa6e98f1ceb1c8909bc885b843c503b98b3068b47787e2b10e3a13912253c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_fefa6e98f1ceb1c8909bc885b843c503b98b3068b47787e2b10e3a13912253c7->leave($__internal_fefa6e98f1ceb1c8909bc885b843c503b98b3068b47787e2b10e3a13912253c7_prof);

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
