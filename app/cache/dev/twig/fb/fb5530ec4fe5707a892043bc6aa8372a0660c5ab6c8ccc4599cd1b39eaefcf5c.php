<?php

/* BibliothequeBundle:Autheur:lister.html.twig */
class __TwigTemplate_3d3fa692ce67c0de1489e181649ee61180ceb73e92706eca92063d8f74999db5 extends Twig_Template
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
        $__internal_6e3821840afd9d4bdf6d452cd65a77df4dbe2a1265cac51f0a2893879691327a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3821840afd9d4bdf6d452cd65a77df4dbe2a1265cac51f0a2893879691327a->enter($__internal_6e3821840afd9d4bdf6d452cd65a77df4dbe2a1265cac51f0a2893879691327a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Autheur:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e3821840afd9d4bdf6d452cd65a77df4dbe2a1265cac51f0a2893879691327a->leave($__internal_6e3821840afd9d4bdf6d452cd65a77df4dbe2a1265cac51f0a2893879691327a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6654fccb954312d542e263bc723c167a9a4312c2df3bba793733934c082e217e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6654fccb954312d542e263bc723c167a9a4312c2df3bba793733934c082e217e->enter($__internal_6654fccb954312d542e263bc723c167a9a4312c2df3bba793733934c082e217e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des autheurs";
        
        $__internal_6654fccb954312d542e263bc723c167a9a4312c2df3bba793733934c082e217e->leave($__internal_6654fccb954312d542e263bc723c167a9a4312c2df3bba793733934c082e217e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_d1fe752550a59940eeb735e08d9f41758a2e6c22f09021854fc32b9c8235017c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fe752550a59940eeb735e08d9f41758a2e6c22f09021854fc32b9c8235017c->enter($__internal_d1fe752550a59940eeb735e08d9f41758a2e6c22f09021854fc32b9c8235017c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo "\">Ajouter un autheur</a><p>

";
        
        $__internal_d1fe752550a59940eeb735e08d9f41758a2e6c22f09021854fc32b9c8235017c->leave($__internal_d1fe752550a59940eeb735e08d9f41758a2e6c22f09021854fc32b9c8235017c_prof);

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

<p><a href=\"{{ path('myapp_autheur_ajouter') }}\">Ajouter un autheur</a><p>

{% endblock %}";
    }
}
