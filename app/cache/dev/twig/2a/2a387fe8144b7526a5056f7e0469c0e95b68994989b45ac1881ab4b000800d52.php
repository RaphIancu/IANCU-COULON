<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_11d2a9059208c3950393750689dc796b871ea731e175d31e3760f00ed5a25f0c extends Twig_Template
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
        $__internal_e68b22b2b3bf24d7021ff77f6c915077f2c36d83f58f070342c54103ff891a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68b22b2b3bf24d7021ff77f6c915077f2c36d83f58f070342c54103ff891a9e->enter($__internal_e68b22b2b3bf24d7021ff77f6c915077f2c36d83f58f070342c54103ff891a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e68b22b2b3bf24d7021ff77f6c915077f2c36d83f58f070342c54103ff891a9e->leave($__internal_e68b22b2b3bf24d7021ff77f6c915077f2c36d83f58f070342c54103ff891a9e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
