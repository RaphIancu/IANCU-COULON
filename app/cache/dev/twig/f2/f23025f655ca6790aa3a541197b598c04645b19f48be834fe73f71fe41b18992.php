<?php

/* BibliothequeBundle:Default:index.html.twig */
class __TwigTemplate_ade50a74ddab6b73dc12b25ac2eaf933a55820e560afcc4812636cab4e355a7b extends Twig_Template
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
        $__internal_a3c2c15da0e19fb611e2ea78e12732e9b40a3d900ca522474a05bf0847152d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c2c15da0e19fb611e2ea78e12732e9b40a3d900ca522474a05bf0847152d8c->enter($__internal_a3c2c15da0e19fb611e2ea78e12732e9b40a3d900ca522474a05bf0847152d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3c2c15da0e19fb611e2ea78e12732e9b40a3d900ca522474a05bf0847152d8c->leave($__internal_a3c2c15da0e19fb611e2ea78e12732e9b40a3d900ca522474a05bf0847152d8c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_628acd927ad53b696efa693c801af49d49d3975575d94c624a50896e02be9b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628acd927ad53b696efa693c801af49d49d3975575d94c624a50896e02be9b01->enter($__internal_628acd927ad53b696efa693c801af49d49d3975575d94c624a50896e02be9b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_628acd927ad53b696efa693c801af49d49d3975575d94c624a50896e02be9b01->leave($__internal_628acd927ad53b696efa693c801af49d49d3975575d94c624a50896e02be9b01_prof);

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
