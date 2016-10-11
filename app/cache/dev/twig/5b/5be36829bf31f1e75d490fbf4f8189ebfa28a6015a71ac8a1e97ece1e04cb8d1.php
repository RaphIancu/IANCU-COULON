<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_500062525c8aa187a4f0b6879a77657f6333f2dc26da41f6fdf5b469b24060aa extends Twig_Template
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
        $__internal_b12a78c51a8596e1048d7f4a074090c21cd31fc4ff3ba62db6815881c18b0906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12a78c51a8596e1048d7f4a074090c21cd31fc4ff3ba62db6815881c18b0906->enter($__internal_b12a78c51a8596e1048d7f4a074090c21cd31fc4ff3ba62db6815881c18b0906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_b12a78c51a8596e1048d7f4a074090c21cd31fc4ff3ba62db6815881c18b0906->leave($__internal_b12a78c51a8596e1048d7f4a074090c21cd31fc4ff3ba62db6815881c18b0906_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
