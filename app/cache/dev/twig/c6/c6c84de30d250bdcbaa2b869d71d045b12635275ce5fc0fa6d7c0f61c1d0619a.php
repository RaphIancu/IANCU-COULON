<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_148390948ac5fca89f1a79764009f6a7617c40b1673c61cf891874a6dc3adda1 extends Twig_Template
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
        $__internal_69e32a9fb4419ff3623c65964a54659c147db2c70134df937984383bd9e3267b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e32a9fb4419ff3623c65964a54659c147db2c70134df937984383bd9e3267b->enter($__internal_69e32a9fb4419ff3623c65964a54659c147db2c70134df937984383bd9e3267b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_69e32a9fb4419ff3623c65964a54659c147db2c70134df937984383bd9e3267b->leave($__internal_69e32a9fb4419ff3623c65964a54659c147db2c70134df937984383bd9e3267b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
