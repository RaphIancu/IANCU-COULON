<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ab8d6a82d395904fda3f927b111af6e8fca0de28a785184bfaac36958ca6c0a7 extends Twig_Template
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
        $__internal_90fb5cc65b06269eaef9d340316f9bad9de8f85f889413ec36e52d543f8ca4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fb5cc65b06269eaef9d340316f9bad9de8f85f889413ec36e52d543f8ca4e3->enter($__internal_90fb5cc65b06269eaef9d340316f9bad9de8f85f889413ec36e52d543f8ca4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_90fb5cc65b06269eaef9d340316f9bad9de8f85f889413ec36e52d543f8ca4e3->leave($__internal_90fb5cc65b06269eaef9d340316f9bad9de8f85f889413ec36e52d543f8ca4e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
