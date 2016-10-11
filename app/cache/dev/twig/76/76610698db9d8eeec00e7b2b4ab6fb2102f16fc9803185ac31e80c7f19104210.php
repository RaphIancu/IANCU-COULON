<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_02c7afedb4e44c635be0aa74b72b8b20743a68dbb1b672fa0e1e7d13b96f59e1 extends Twig_Template
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
        $__internal_99128e88032b3e3d1106fc8c42fb401f402b8fe8539a1af5ed46797ab3053186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99128e88032b3e3d1106fc8c42fb401f402b8fe8539a1af5ed46797ab3053186->enter($__internal_99128e88032b3e3d1106fc8c42fb401f402b8fe8539a1af5ed46797ab3053186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_99128e88032b3e3d1106fc8c42fb401f402b8fe8539a1af5ed46797ab3053186->leave($__internal_99128e88032b3e3d1106fc8c42fb401f402b8fe8539a1af5ed46797ab3053186_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
