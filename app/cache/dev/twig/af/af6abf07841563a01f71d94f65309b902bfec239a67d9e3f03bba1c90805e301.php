<?php

/* BibliothequeBundle:Autheur:lister.html.twig */
class __TwigTemplate_6c078a9eaca5fcf860f747a3aa3e861b51cc3e30bba3915d9e5f6889f9bd49c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BibliothequeBundle::layout.html.twig", "BibliothequeBundle:Autheur:lister.html.twig", 1);
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
        $__internal_cb961660a1fa389f0d256f53b791c54f6d0ec5350529348f9aac3408a53e2cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb961660a1fa389f0d256f53b791c54f6d0ec5350529348f9aac3408a53e2cae->enter($__internal_cb961660a1fa389f0d256f53b791c54f6d0ec5350529348f9aac3408a53e2cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Autheur:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb961660a1fa389f0d256f53b791c54f6d0ec5350529348f9aac3408a53e2cae->leave($__internal_cb961660a1fa389f0d256f53b791c54f6d0ec5350529348f9aac3408a53e2cae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_158ab7757fd3c463e8be810cdf794ce4616a470f5506b93b5fd487e744a362ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158ab7757fd3c463e8be810cdf794ce4616a470f5506b93b5fd487e744a362ea->enter($__internal_158ab7757fd3c463e8be810cdf794ce4616a470f5506b93b5fd487e744a362ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des autheurs";
        
        $__internal_158ab7757fd3c463e8be810cdf794ce4616a470f5506b93b5fd487e744a362ea->leave($__internal_158ab7757fd3c463e8be810cdf794ce4616a470f5506b93b5fd487e744a362ea_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_f454dd73fff35c844d09253227d28ece8fb3c00600d162d234de7f3ec7b8f147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f454dd73fff35c844d09253227d28ece8fb3c00600d162d234de7f3ec7b8f147->enter($__internal_f454dd73fff35c844d09253227d28ece8fb3c00600d162d234de7f3ec7b8f147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("BibliothequeBundle:Autheur:liste.html.twig", "BibliothequeBundle:Autheur:lister.html.twig", 7)->display(array_merge($context, array("autheurs" => (isset($context["autheurs"]) ? $context["autheurs"] : $this->getContext($context, "autheurs")))));
        // line 8
        echo "
<p><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_autheur_ajouter");
        echo "\"><button type=\"button\" class=\"btn btn-secondary\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Ajouter un auteur</button></a></p>

";
        
        $__internal_f454dd73fff35c844d09253227d28ece8fb3c00600d162d234de7f3ec7b8f147->leave($__internal_f454dd73fff35c844d09253227d28ece8fb3c00600d162d234de7f3ec7b8f147_prof);

    }

    public function getTemplateName()
    {
        return "BibliothequeBundle:Autheur:lister.html.twig";
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

{% block title %}Liste des autheurs{% endblock %}

{% block content %}

{% include 'BibliothequeBundle:Autheur:liste.html.twig' with {'autheurs' : autheurs}  %}

<p><a href=\"{{ path('myapp_autheur_ajouter') }}\"><button type=\"button\" class=\"btn btn-secondary\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Ajouter un auteur</button></a></p>

{% endblock %}";
    }
}
