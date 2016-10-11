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
        $__internal_88529b8d3b262415a2f160f2a6f2b3870b879d76cd9f603c4e67024350ff3ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88529b8d3b262415a2f160f2a6f2b3870b879d76cd9f603c4e67024350ff3ae5->enter($__internal_88529b8d3b262415a2f160f2a6f2b3870b879d76cd9f603c4e67024350ff3ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88529b8d3b262415a2f160f2a6f2b3870b879d76cd9f603c4e67024350ff3ae5->leave($__internal_88529b8d3b262415a2f160f2a6f2b3870b879d76cd9f603c4e67024350ff3ae5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_504e2dfddc0a8e3c992247770d76b67379f7035a034fa0634dde46cd0a0020de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504e2dfddc0a8e3c992247770d76b67379f7035a034fa0634dde46cd0a0020de->enter($__internal_504e2dfddc0a8e3c992247770d76b67379f7035a034fa0634dde46cd0a0020de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_504e2dfddc0a8e3c992247770d76b67379f7035a034fa0634dde46cd0a0020de->leave($__internal_504e2dfddc0a8e3c992247770d76b67379f7035a034fa0634dde46cd0a0020de_prof);

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
