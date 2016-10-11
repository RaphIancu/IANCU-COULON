<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9c4d5191b79cd9d192e125482c74e82bd8551b7dda7181d3a0ddc0ada584f199 extends Twig_Template
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
        $__internal_e2e5a195566a6c7602bba894cd5af018f6bba28d7266abd4f8d265feb63a6b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e5a195566a6c7602bba894cd5af018f6bba28d7266abd4f8d265feb63a6b66->enter($__internal_e2e5a195566a6c7602bba894cd5af018f6bba28d7266abd4f8d265feb63a6b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e2e5a195566a6c7602bba894cd5af018f6bba28d7266abd4f8d265feb63a6b66->leave($__internal_e2e5a195566a6c7602bba894cd5af018f6bba28d7266abd4f8d265feb63a6b66_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
