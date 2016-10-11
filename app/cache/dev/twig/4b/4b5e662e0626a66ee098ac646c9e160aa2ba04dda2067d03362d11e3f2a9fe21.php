<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ae66a4c11eb15ba7a6df93d09817fe4e2f4a754f4fd9aa0cc618d4002207a31c extends Twig_Template
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
        $__internal_3ccf65849fb7b5ffdfac28ed4c0b646963569027dae4806100bc32802dc56b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccf65849fb7b5ffdfac28ed4c0b646963569027dae4806100bc32802dc56b82->enter($__internal_3ccf65849fb7b5ffdfac28ed4c0b646963569027dae4806100bc32802dc56b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3ccf65849fb7b5ffdfac28ed4c0b646963569027dae4806100bc32802dc56b82->leave($__internal_3ccf65849fb7b5ffdfac28ed4c0b646963569027dae4806100bc32802dc56b82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
