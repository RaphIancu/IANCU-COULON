<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_eccdc58f4c2521846c36efd4cf5096081ef2bcf1cf8dfaa95c2a6f93e3b4f7a6 extends Twig_Template
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
        $__internal_65c76b538943d7409e89d08ccd752a050979601edf70a9fa13c80b5dea2ec898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c76b538943d7409e89d08ccd752a050979601edf70a9fa13c80b5dea2ec898->enter($__internal_65c76b538943d7409e89d08ccd752a050979601edf70a9fa13c80b5dea2ec898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_65c76b538943d7409e89d08ccd752a050979601edf70a9fa13c80b5dea2ec898->leave($__internal_65c76b538943d7409e89d08ccd752a050979601edf70a9fa13c80b5dea2ec898_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
