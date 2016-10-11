<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_12f874877638a0c8106d6601114fa5afc1f5500e5a09d3edcfb8c6e0e3df9494 extends Twig_Template
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
        $__internal_ef686f5818c443c0d5442d6cd03d0e71cd1404c8dc7638ad894513ca7a38e194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef686f5818c443c0d5442d6cd03d0e71cd1404c8dc7638ad894513ca7a38e194->enter($__internal_ef686f5818c443c0d5442d6cd03d0e71cd1404c8dc7638ad894513ca7a38e194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ef686f5818c443c0d5442d6cd03d0e71cd1404c8dc7638ad894513ca7a38e194->leave($__internal_ef686f5818c443c0d5442d6cd03d0e71cd1404c8dc7638ad894513ca7a38e194_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
