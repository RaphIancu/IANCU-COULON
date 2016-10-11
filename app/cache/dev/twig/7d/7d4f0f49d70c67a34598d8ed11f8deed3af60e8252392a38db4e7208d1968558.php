<?php

/* @Bibliotheque/Livre/lister.html.twig */
class __TwigTemplate_28dd4452e35b711e3a9159f212845b45a8546f2694ed8ec7d558ebda2fb7b5a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BibliothequeBundle::layout.html.twig", "@Bibliotheque/Livre/lister.html.twig", 1);
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
        $__internal_767a9dad13cbf3806b65e1b3d7543f6d1c52f7afa5aeba88a869eb729e38dd78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767a9dad13cbf3806b65e1b3d7543f6d1c52f7afa5aeba88a869eb729e38dd78->enter($__internal_767a9dad13cbf3806b65e1b3d7543f6d1c52f7afa5aeba88a869eb729e38dd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Bibliotheque/Livre/lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_767a9dad13cbf3806b65e1b3d7543f6d1c52f7afa5aeba88a869eb729e38dd78->leave($__internal_767a9dad13cbf3806b65e1b3d7543f6d1c52f7afa5aeba88a869eb729e38dd78_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b41c17f7f5b40eaccca80d73c17d0e63db0374d29f692b547e07e40d8fb58f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b41c17f7f5b40eaccca80d73c17d0e63db0374d29f692b547e07e40d8fb58f0->enter($__internal_0b41c17f7f5b40eaccca80d73c17d0e63db0374d29f692b547e07e40d8fb58f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des livres";
        
        $__internal_0b41c17f7f5b40eaccca80d73c17d0e63db0374d29f692b547e07e40d8fb58f0->leave($__internal_0b41c17f7f5b40eaccca80d73c17d0e63db0374d29f692b547e07e40d8fb58f0_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_3811832700bf511bd473c1504a38a8120bd039c0e21e1ba3390dc3f9a3a169d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3811832700bf511bd473c1504a38a8120bd039c0e21e1ba3390dc3f9a3a169d3->enter($__internal_3811832700bf511bd473c1504a38a8120bd039c0e21e1ba3390dc3f9a3a169d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("BibliothequeBundle:Livre:liste.html.twig", "@Bibliotheque/Livre/lister.html.twig", 7)->display(array_merge($context, array("livres" => (isset($context["livres"]) ? $context["livres"] : $this->getContext($context, "livres")))));
        // line 8
        echo "

<p><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_livre_ajouter");
        echo "\"><button type=\"button\" class=\"btn btn-secondary\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Ajouter un livre</button></a></p>

";
        
        $__internal_3811832700bf511bd473c1504a38a8120bd039c0e21e1ba3390dc3f9a3a169d3->leave($__internal_3811832700bf511bd473c1504a38a8120bd039c0e21e1ba3390dc3f9a3a169d3_prof);

    }

    public function getTemplateName()
    {
        return "@Bibliotheque/Livre/lister.html.twig";
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
