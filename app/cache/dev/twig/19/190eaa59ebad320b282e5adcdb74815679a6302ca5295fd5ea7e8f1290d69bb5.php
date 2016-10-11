<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_878dbffdd0f086c885807d3cba5ffaa0146ce0e22afa3a82635124c91f72aa53 extends Twig_Template
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
        $__internal_ff263c009b893aefe11d4d71891b73939c7d0cc78758ba46a382d80809d527bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff263c009b893aefe11d4d71891b73939c7d0cc78758ba46a382d80809d527bb->enter($__internal_ff263c009b893aefe11d4d71891b73939c7d0cc78758ba46a382d80809d527bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ff263c009b893aefe11d4d71891b73939c7d0cc78758ba46a382d80809d527bb->leave($__internal_ff263c009b893aefe11d4d71891b73939c7d0cc78758ba46a382d80809d527bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
