<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_7cca2f8886f96b6464aba518e1e4291a43fba32a908e3427a013428caed18687 extends Twig_Template
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
        $__internal_f14c21c849a6e23afd8b49204b4db3c73454fce7d36e6b0d0bc5968f01c3799b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14c21c849a6e23afd8b49204b4db3c73454fce7d36e6b0d0bc5968f01c3799b->enter($__internal_f14c21c849a6e23afd8b49204b4db3c73454fce7d36e6b0d0bc5968f01c3799b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_f14c21c849a6e23afd8b49204b4db3c73454fce7d36e6b0d0bc5968f01c3799b->leave($__internal_f14c21c849a6e23afd8b49204b4db3c73454fce7d36e6b0d0bc5968f01c3799b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
