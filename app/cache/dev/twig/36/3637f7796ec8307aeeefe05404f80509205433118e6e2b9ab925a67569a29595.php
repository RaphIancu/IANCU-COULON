<?php

/* BibliothequeBundle:Default:index.html.twig */
class __TwigTemplate_245f7e48985dd7f0ccc73f23aaaa3096f64365a19cfe31638921a4e9a2619e19 extends Twig_Template
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
        $__internal_50f32d9ba78c0de6f66220081e921bd29f493bdc572c6d73878f6e405dad2e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f32d9ba78c0de6f66220081e921bd29f493bdc572c6d73878f6e405dad2e89->enter($__internal_50f32d9ba78c0de6f66220081e921bd29f493bdc572c6d73878f6e405dad2e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50f32d9ba78c0de6f66220081e921bd29f493bdc572c6d73878f6e405dad2e89->leave($__internal_50f32d9ba78c0de6f66220081e921bd29f493bdc572c6d73878f6e405dad2e89_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_54b6681a4f19f91be783106cb6da033fa9dedda5a84adc8a9cf6ca591a2863fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b6681a4f19f91be783106cb6da033fa9dedda5a84adc8a9cf6ca591a2863fb->enter($__internal_54b6681a4f19f91be783106cb6da033fa9dedda5a84adc8a9cf6ca591a2863fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_54b6681a4f19f91be783106cb6da033fa9dedda5a84adc8a9cf6ca591a2863fb->leave($__internal_54b6681a4f19f91be783106cb6da033fa9dedda5a84adc8a9cf6ca591a2863fb_prof);

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
