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
        $__internal_9264cb3e8fa4ab7dcf685fcc0f03535b7f79c3e3673ffe8ce34334f73d405dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9264cb3e8fa4ab7dcf685fcc0f03535b7f79c3e3673ffe8ce34334f73d405dff->enter($__internal_9264cb3e8fa4ab7dcf685fcc0f03535b7f79c3e3673ffe8ce34334f73d405dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9264cb3e8fa4ab7dcf685fcc0f03535b7f79c3e3673ffe8ce34334f73d405dff->leave($__internal_9264cb3e8fa4ab7dcf685fcc0f03535b7f79c3e3673ffe8ce34334f73d405dff_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fedee6068a0ed8869f936322d1799c2f120d05ef7b447d6ce274be6085b4854c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fedee6068a0ed8869f936322d1799c2f120d05ef7b447d6ce274be6085b4854c->enter($__internal_fedee6068a0ed8869f936322d1799c2f120d05ef7b447d6ce274be6085b4854c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_fedee6068a0ed8869f936322d1799c2f120d05ef7b447d6ce274be6085b4854c->leave($__internal_fedee6068a0ed8869f936322d1799c2f120d05ef7b447d6ce274be6085b4854c_prof);

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
