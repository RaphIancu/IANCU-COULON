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
        $__internal_321fed18bcc402dc302205e3b192b1393a76cdeb6e89392c9fadd9c3f18b76df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321fed18bcc402dc302205e3b192b1393a76cdeb6e89392c9fadd9c3f18b76df->enter($__internal_321fed18bcc402dc302205e3b192b1393a76cdeb6e89392c9fadd9c3f18b76df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_321fed18bcc402dc302205e3b192b1393a76cdeb6e89392c9fadd9c3f18b76df->leave($__internal_321fed18bcc402dc302205e3b192b1393a76cdeb6e89392c9fadd9c3f18b76df_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_db869e171f8dafe54e3152a8ec9ff98f6bcfcc5ed05d5a931a9e7a3d1dd776c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db869e171f8dafe54e3152a8ec9ff98f6bcfcc5ed05d5a931a9e7a3d1dd776c6->enter($__internal_db869e171f8dafe54e3152a8ec9ff98f6bcfcc5ed05d5a931a9e7a3d1dd776c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<p>Texte descriptif</p>
<div class=\"panel panel-default\">  
    <div class=\"panel-heading\">Top des autheurs</div>
\t\t";
        // line 7
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BibliothequeBundle:Autheur:top", array("max" => 3)), array());
        // line 8
        echo "</div>

<p>Texte descriptif</p>
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">Top Livres</div>
\t\t";
        // line 13
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BibliothequeBundle:Livre:top", array("max" => 3)), array());
        // line 14
        echo "</div>
";
        
        $__internal_db869e171f8dafe54e3152a8ec9ff98f6bcfcc5ed05d5a931a9e7a3d1dd776c6->leave($__internal_db869e171f8dafe54e3152a8ec9ff98f6bcfcc5ed05d5a931a9e7a3d1dd776c6_prof);

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
    <div class=\"panel-heading\">Top des autheurs</div>
\t\t{% render (controller(\"BibliothequeBundle:Autheur:top\", {'max': 3})) %}
</div>

<p>Texte descriptif</p>
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">Top Livres</div>
\t\t{% render (controller(\"BibliothequeBundle:Livre:top\", {'max': 3})) %}
</div>
{% endblock %}














";
    }
}
