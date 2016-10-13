<?php

/* BibliothequeBundle:Default:index.html.twig */
class __TwigTemplate_0ea66d12231c67fe931f2f4b91b42c406396b398d2fec8f0377d209af2c98ccf extends Twig_Template
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
        $__internal_3d628e3a0f10771380278079c450c35031d1b3e75f74b681944fbf8358acaaed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d628e3a0f10771380278079c450c35031d1b3e75f74b681944fbf8358acaaed->enter($__internal_3d628e3a0f10771380278079c450c35031d1b3e75f74b681944fbf8358acaaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d628e3a0f10771380278079c450c35031d1b3e75f74b681944fbf8358acaaed->leave($__internal_3d628e3a0f10771380278079c450c35031d1b3e75f74b681944fbf8358acaaed_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bdb6a722101922d260c3c756e16c94c8846ab987b5a3860ec96ee0ff2c9f7273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb6a722101922d260c3c756e16c94c8846ab987b5a3860ec96ee0ff2c9f7273->enter($__internal_bdb6a722101922d260c3c756e16c94c8846ab987b5a3860ec96ee0ff2c9f7273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"panel panel-default\">  
    <div class=\"panel-heading\">LES AUTEURS LES PLUS RECENTS</div>
\t\t";
        // line 6
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BibliothequeBundle:Autheur:top", array("max" => 3)), array());
        // line 7
        echo "</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">LES DERNIERS LIVRES AJOUTES</div>
\t\t";
        // line 11
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BibliothequeBundle:Livre:top", array("max" => 3)), array());
        // line 12
        echo "</div>
";
        
        $__internal_bdb6a722101922d260c3c756e16c94c8846ab987b5a3860ec96ee0ff2c9f7273->leave($__internal_bdb6a722101922d260c3c756e16c94c8846ab987b5a3860ec96ee0ff2c9f7273_prof);

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
        return array (  54 => 12,  52 => 11,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'BibliothequeBundle::layout.html.twig' %}

{% block content %}
<div class=\"panel panel-default\">  
    <div class=\"panel-heading\">LES AUTEURS LES PLUS RECENTS</div>
\t\t{% render (controller(\"BibliothequeBundle:Autheur:top\", {'max': 3})) %}
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">LES DERNIERS LIVRES AJOUTES</div>
\t\t{% render (controller(\"BibliothequeBundle:Livre:top\", {'max': 3})) %}
</div>
{% endblock %}














";
    }
}
