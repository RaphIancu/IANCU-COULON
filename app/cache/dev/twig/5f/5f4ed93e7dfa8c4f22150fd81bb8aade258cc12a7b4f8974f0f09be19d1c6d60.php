<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_be035fefd2d1361ffd828410d02f75e90c55d3f8481eab2713da941a5ff85722 extends Twig_Template
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
        $__internal_eef707f7e390dea8991e96ab7ac359784ac199813c5539d187f537e785cb7537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef707f7e390dea8991e96ab7ac359784ac199813c5539d187f537e785cb7537->enter($__internal_eef707f7e390dea8991e96ab7ac359784ac199813c5539d187f537e785cb7537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_eef707f7e390dea8991e96ab7ac359784ac199813c5539d187f537e785cb7537->leave($__internal_eef707f7e390dea8991e96ab7ac359784ac199813c5539d187f537e785cb7537_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
