<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d715bdc94f06fb66c985106f2c987ef8c3e2ffc1662b85ac926eda04cde2263f extends Twig_Template
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
        $__internal_b6611236f8b1cf5725bc2132431ed51a008744b9e4d05260dcb46cf12e253afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6611236f8b1cf5725bc2132431ed51a008744b9e4d05260dcb46cf12e253afd->enter($__internal_b6611236f8b1cf5725bc2132431ed51a008744b9e4d05260dcb46cf12e253afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b6611236f8b1cf5725bc2132431ed51a008744b9e4d05260dcb46cf12e253afd->leave($__internal_b6611236f8b1cf5725bc2132431ed51a008744b9e4d05260dcb46cf12e253afd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
