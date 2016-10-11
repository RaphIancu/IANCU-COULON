<?php

/* @Bibliotheque/Default/index.html.twig */
class __TwigTemplate_372ded9d85f19ccc3050fef036669b8db8e51e4db743e44d91420d49dba845dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BibliothequeBundle::layout.html.twig", "@Bibliotheque/Default/index.html.twig", 1);
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
        $__internal_d4a35d3e9331fd50cfe6efcd614226b087047f64cde77ffd56933a7d107a5f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a35d3e9331fd50cfe6efcd614226b087047f64cde77ffd56933a7d107a5f8d->enter($__internal_d4a35d3e9331fd50cfe6efcd614226b087047f64cde77ffd56933a7d107a5f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Bibliotheque/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4a35d3e9331fd50cfe6efcd614226b087047f64cde77ffd56933a7d107a5f8d->leave($__internal_d4a35d3e9331fd50cfe6efcd614226b087047f64cde77ffd56933a7d107a5f8d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_43505e1ee07a4a43b08d8e7aab82fb6de5a9a74a15d1ea8450496660c404c73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43505e1ee07a4a43b08d8e7aab82fb6de5a9a74a15d1ea8450496660c404c73e->enter($__internal_43505e1ee07a4a43b08d8e7aab82fb6de5a9a74a15d1ea8450496660c404c73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<p>Texte descriptif</p>
<div class=\"panel panel-default\">  
    <div class=\"panel-heading\">Les auteurs les plus récents</div>
\t\t";
        // line 7
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BibliothequeBundle:Autheur:top", array("max" => 3)), array());
        // line 8
        echo "</div>

<p>Texte descriptif</p>
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">Les derniers livres ajoutés</div>
\t\t";
        // line 13
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BibliothequeBundle:Livre:top", array("max" => 3)), array());
        // line 14
        echo "</div>
";
        
        $__internal_43505e1ee07a4a43b08d8e7aab82fb6de5a9a74a15d1ea8450496660c404c73e->leave($__internal_43505e1ee07a4a43b08d8e7aab82fb6de5a9a74a15d1ea8450496660c404c73e_prof);

    }

    public function getTemplateName()
    {
        return "@Bibliotheque/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  54 => 13,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'BibliothequeBundle::layout.html.twig' %}

{% block content %}
<p>Texte descriptif</p>
<div class=\"panel panel-default\">  
    <div class=\"panel-heading\">Les auteurs les plus récents</div>
\t\t{% render (controller(\"BibliothequeBundle:Autheur:top\", {'max': 3})) %}
</div>

<p>Texte descriptif</p>
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">Les derniers livres ajoutés</div>
\t\t{% render (controller(\"BibliothequeBundle:Livre:top\", {'max': 3})) %}
</div>
{% endblock %}














";
    }
}
