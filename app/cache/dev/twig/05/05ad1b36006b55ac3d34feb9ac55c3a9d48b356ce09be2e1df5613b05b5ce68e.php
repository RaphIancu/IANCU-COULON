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
        $__internal_a2cd40d878e83f91c40aa873d9c07fde238fa0d78facf3c0f7edb268de7e445b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2cd40d878e83f91c40aa873d9c07fde238fa0d78facf3c0f7edb268de7e445b->enter($__internal_a2cd40d878e83f91c40aa873d9c07fde238fa0d78facf3c0f7edb268de7e445b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Livre:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2cd40d878e83f91c40aa873d9c07fde238fa0d78facf3c0f7edb268de7e445b->leave($__internal_a2cd40d878e83f91c40aa873d9c07fde238fa0d78facf3c0f7edb268de7e445b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_956491989b3c9a362bceba02c0ec9e92fb5b4d27ed2b3b842f185ab5d524103c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956491989b3c9a362bceba02c0ec9e92fb5b4d27ed2b3b842f185ab5d524103c->enter($__internal_956491989b3c9a362bceba02c0ec9e92fb5b4d27ed2b3b842f185ab5d524103c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des livres";
        
        $__internal_956491989b3c9a362bceba02c0ec9e92fb5b4d27ed2b3b842f185ab5d524103c->leave($__internal_956491989b3c9a362bceba02c0ec9e92fb5b4d27ed2b3b842f185ab5d524103c_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_72d56fcdee0530e5a36928973fe7f618a714cd260d4215544268d0ed2f8c9e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d56fcdee0530e5a36928973fe7f618a714cd260d4215544268d0ed2f8c9e5d->enter($__internal_72d56fcdee0530e5a36928973fe7f618a714cd260d4215544268d0ed2f8c9e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("BibliothequeBundle:Livre:liste.html.twig", "BibliothequeBundle:Livre:lister.html.twig", 7)->display(array_merge($context, array("livres" => (isset($context["livres"]) ? $context["livres"] : $this->getContext($context, "livres")))));
        // line 8
        echo "
<p><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_livre_ajouter");
        echo "\">Ajouter un livre</a><p>

";
        
        $__internal_72d56fcdee0530e5a36928973fe7f618a714cd260d4215544268d0ed2f8c9e5d->leave($__internal_72d56fcdee0530e5a36928973fe7f618a714cd260d4215544268d0ed2f8c9e5d_prof);

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
        return array (  61 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'BibliothequeBundle::layout.html.twig' %}

{% block title %}Liste des livres{% endblock %}

{% block content %}

{% include 'BibliothequeBundle:Livre:liste.html.twig' with {'livres' : livres}  %}

<p><a href=\"{{ path('myapp_livre_ajouter') }}\">Ajouter un livre</a><p>

{% endblock %}";
    }
}
