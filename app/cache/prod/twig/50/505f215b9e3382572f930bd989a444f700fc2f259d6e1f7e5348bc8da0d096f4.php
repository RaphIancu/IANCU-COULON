<?php

/* BibliothequeBundle:Livre:lister.html.twig */
class __TwigTemplate_2b808545281afd4a714309eb93efec5af56f1e4b386d2081bd28d2f634965b14 extends Twig_Template
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
        $__internal_d72dc40269a0fcbf00924e34d674a4f3766c66ec4f6cc75ebd5545fd612a053d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72dc40269a0fcbf00924e34d674a4f3766c66ec4f6cc75ebd5545fd612a053d->enter($__internal_d72dc40269a0fcbf00924e34d674a4f3766c66ec4f6cc75ebd5545fd612a053d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Livre:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d72dc40269a0fcbf00924e34d674a4f3766c66ec4f6cc75ebd5545fd612a053d->leave($__internal_d72dc40269a0fcbf00924e34d674a4f3766c66ec4f6cc75ebd5545fd612a053d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a4094c7669f3a65676aea60fc6390edb740c67dcf8c7fc522e35ed1ee5ddf0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4094c7669f3a65676aea60fc6390edb740c67dcf8c7fc522e35ed1ee5ddf0e->enter($__internal_6a4094c7669f3a65676aea60fc6390edb740c67dcf8c7fc522e35ed1ee5ddf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des livres";
        
        $__internal_6a4094c7669f3a65676aea60fc6390edb740c67dcf8c7fc522e35ed1ee5ddf0e->leave($__internal_6a4094c7669f3a65676aea60fc6390edb740c67dcf8c7fc522e35ed1ee5ddf0e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_29f5a7a6207390191e130f825aabd76ae488a36bcd4d55101358f52a1add1754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f5a7a6207390191e130f825aabd76ae488a36bcd4d55101358f52a1add1754->enter($__internal_29f5a7a6207390191e130f825aabd76ae488a36bcd4d55101358f52a1add1754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("BibliothequeBundle:Livre:liste.html.twig", "BibliothequeBundle:Livre:lister.html.twig", 7)->display(array_merge($context, array("livres" => (isset($context["livres"]) ? $context["livres"] : $this->getContext($context, "livres")))));
        // line 8
        echo "

<p><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_livre_ajouter");
        echo "\"><button type=\"button\" class=\"btn btn-secondary\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Ajouter un livre</button></a></p>

";
        
        $__internal_29f5a7a6207390191e130f825aabd76ae488a36bcd4d55101358f52a1add1754->leave($__internal_29f5a7a6207390191e130f825aabd76ae488a36bcd4d55101358f52a1add1754_prof);

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
