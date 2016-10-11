<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_f36f0dc1bdadb0ca7132fec557624bf4a5800ca3dc2a5b09d2299d99f4aca41b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a25877934c5a3f6c3ff5fda2ba52b85cea02618153b653deeab3791bd6c70e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25877934c5a3f6c3ff5fda2ba52b85cea02618153b653deeab3791bd6c70e58->enter($__internal_a25877934c5a3f6c3ff5fda2ba52b85cea02618153b653deeab3791bd6c70e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_a25877934c5a3f6c3ff5fda2ba52b85cea02618153b653deeab3791bd6c70e58->leave($__internal_a25877934c5a3f6c3ff5fda2ba52b85cea02618153b653deeab3791bd6c70e58_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
