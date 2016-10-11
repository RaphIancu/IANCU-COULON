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
        $__internal_a8fd99d17a22b8cb6ee3a154abc12b538184e810c18e3bc6508d3e36722746ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8fd99d17a22b8cb6ee3a154abc12b538184e810c18e3bc6508d3e36722746ed->enter($__internal_a8fd99d17a22b8cb6ee3a154abc12b538184e810c18e3bc6508d3e36722746ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Autheur:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8fd99d17a22b8cb6ee3a154abc12b538184e810c18e3bc6508d3e36722746ed->leave($__internal_a8fd99d17a22b8cb6ee3a154abc12b538184e810c18e3bc6508d3e36722746ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc10361b0c66818809e0fed77e5ef58e45cee16d050dd5aa6c1da8a2b7dbb8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc10361b0c66818809e0fed77e5ef58e45cee16d050dd5aa6c1da8a2b7dbb8e6->enter($__internal_cc10361b0c66818809e0fed77e5ef58e45cee16d050dd5aa6c1da8a2b7dbb8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des autheurs";
        
        $__internal_cc10361b0c66818809e0fed77e5ef58e45cee16d050dd5aa6c1da8a2b7dbb8e6->leave($__internal_cc10361b0c66818809e0fed77e5ef58e45cee16d050dd5aa6c1da8a2b7dbb8e6_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_31defafc6a4278c90ee134029f4cc517217450815610fd4f02249fee0a996da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31defafc6a4278c90ee134029f4cc517217450815610fd4f02249fee0a996da9->enter($__internal_31defafc6a4278c90ee134029f4cc517217450815610fd4f02249fee0a996da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_31defafc6a4278c90ee134029f4cc517217450815610fd4f02249fee0a996da9->leave($__internal_31defafc6a4278c90ee134029f4cc517217450815610fd4f02249fee0a996da9_prof);

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
