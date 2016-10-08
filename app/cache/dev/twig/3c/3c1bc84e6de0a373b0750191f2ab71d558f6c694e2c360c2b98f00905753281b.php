<?php

/* BibliothequeBundle:Default:index.html.twig */
class __TwigTemplate_edb60d025534a91ae08b54aab94ff65ee781d3ba556cdbef1512db5c18ddc631 extends Twig_Template
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
        $__internal_39dbe1ac061e164d0b25517928dcb38201402636c74ddd0413c84d083f0bfc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39dbe1ac061e164d0b25517928dcb38201402636c74ddd0413c84d083f0bfc96->enter($__internal_39dbe1ac061e164d0b25517928dcb38201402636c74ddd0413c84d083f0bfc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39dbe1ac061e164d0b25517928dcb38201402636c74ddd0413c84d083f0bfc96->leave($__internal_39dbe1ac061e164d0b25517928dcb38201402636c74ddd0413c84d083f0bfc96_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8e5e2fb4136e895df7de2c725c8c253b66c187cc048fd04f0edc866786416dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5e2fb4136e895df7de2c725c8c253b66c187cc048fd04f0edc866786416dcd->enter($__internal_8e5e2fb4136e895df7de2c725c8c253b66c187cc048fd04f0edc866786416dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"panel panel-default\">
  
    <div class=\"panel-heading\">Top des autheurs</div>
\t<table class=\"table\">
\t\t";
        // line 8
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BibliothequeBundle:Autheur:top", array("max" => 3)), array());
        // line 9
        echo "\t</table>
</div>
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">Top Livres</div>
\t\t";
        // line 13
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BibliothequeBundle:Livre:top", array("max" => 3)), array());
        // line 14
        echo "</div>
";
        
        $__internal_8e5e2fb4136e895df7de2c725c8c253b66c187cc048fd04f0edc866786416dcd->leave($__internal_8e5e2fb4136e895df7de2c725c8c253b66c187cc048fd04f0edc866786416dcd_prof);

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
        return array (  56 => 14,  54 => 13,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'BibliothequeBundle::layout.html.twig' %}

{% block content %}
<div class=\"panel panel-default\">
  
    <div class=\"panel-heading\">Top des autheurs</div>
\t<table class=\"table\">
\t\t{% render (controller(\"BibliothequeBundle:Autheur:top\", {'max': 3})) %}
\t</table>
</div>
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">Top Livres</div>
\t\t{% render (controller(\"BibliothequeBundle:Livre:top\", {'max': 3})) %}
</div>
{% endblock %}














";
    }
}
