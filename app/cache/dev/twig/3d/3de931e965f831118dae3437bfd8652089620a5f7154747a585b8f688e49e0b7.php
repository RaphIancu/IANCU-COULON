<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e798fa5771bc7fe86c13903f8d9de6397b87ead7a89ac4e2543612afed6a6d32 extends Twig_Template
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
        $__internal_153638d0d1679d61b60b6a58268a6bbc30fc9acea69b036c4636e872c0087002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153638d0d1679d61b60b6a58268a6bbc30fc9acea69b036c4636e872c0087002->enter($__internal_153638d0d1679d61b60b6a58268a6bbc30fc9acea69b036c4636e872c0087002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_153638d0d1679d61b60b6a58268a6bbc30fc9acea69b036c4636e872c0087002->leave($__internal_153638d0d1679d61b60b6a58268a6bbc30fc9acea69b036c4636e872c0087002_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
