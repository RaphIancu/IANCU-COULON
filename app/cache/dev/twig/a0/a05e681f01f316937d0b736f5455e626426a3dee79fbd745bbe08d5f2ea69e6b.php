<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8ac27c1a3abf248d647ed01f91fae260c7c1e0520f7f2065151d1be6ebba874d extends Twig_Template
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
        $__internal_259730352328dd9ef3ebe161df3d464eb9603bd1ca5f338e46da64bcf784f493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259730352328dd9ef3ebe161df3d464eb9603bd1ca5f338e46da64bcf784f493->enter($__internal_259730352328dd9ef3ebe161df3d464eb9603bd1ca5f338e46da64bcf784f493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_259730352328dd9ef3ebe161df3d464eb9603bd1ca5f338e46da64bcf784f493->leave($__internal_259730352328dd9ef3ebe161df3d464eb9603bd1ca5f338e46da64bcf784f493_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
