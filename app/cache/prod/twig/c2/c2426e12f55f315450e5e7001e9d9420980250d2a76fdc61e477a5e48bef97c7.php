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
        $__internal_56d7346bae20c4fd31328fb9d5fe641e1d785b1334dee1a19cd7198247934e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d7346bae20c4fd31328fb9d5fe641e1d785b1334dee1a19cd7198247934e03->enter($__internal_56d7346bae20c4fd31328fb9d5fe641e1d785b1334dee1a19cd7198247934e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Livre:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56d7346bae20c4fd31328fb9d5fe641e1d785b1334dee1a19cd7198247934e03->leave($__internal_56d7346bae20c4fd31328fb9d5fe641e1d785b1334dee1a19cd7198247934e03_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b27bd5b24dce7f48be69dd63ff621d7c2b7f8966f7929aca96394706935a2d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27bd5b24dce7f48be69dd63ff621d7c2b7f8966f7929aca96394706935a2d21->enter($__internal_b27bd5b24dce7f48be69dd63ff621d7c2b7f8966f7929aca96394706935a2d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des livres";
        
        $__internal_b27bd5b24dce7f48be69dd63ff621d7c2b7f8966f7929aca96394706935a2d21->leave($__internal_b27bd5b24dce7f48be69dd63ff621d7c2b7f8966f7929aca96394706935a2d21_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_91f4a5378ec63acec11dd311b891938fa55482f1374159ee5b4ab3b426b1df88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f4a5378ec63acec11dd311b891938fa55482f1374159ee5b4ab3b426b1df88->enter($__internal_91f4a5378ec63acec11dd311b891938fa55482f1374159ee5b4ab3b426b1df88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_91f4a5378ec63acec11dd311b891938fa55482f1374159ee5b4ab3b426b1df88->leave($__internal_91f4a5378ec63acec11dd311b891938fa55482f1374159ee5b4ab3b426b1df88_prof);

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
