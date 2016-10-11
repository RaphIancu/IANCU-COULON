<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f8ef023348e0b9453a724bb04896e4341002d4d6761cff5db5d8ec6c15ed8df4 extends Twig_Template
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
        $__internal_650f5c1add7cf37c4371b80a16d5ca1956fd0f1727931bd1513f5542df793266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650f5c1add7cf37c4371b80a16d5ca1956fd0f1727931bd1513f5542df793266->enter($__internal_650f5c1add7cf37c4371b80a16d5ca1956fd0f1727931bd1513f5542df793266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_650f5c1add7cf37c4371b80a16d5ca1956fd0f1727931bd1513f5542df793266->leave($__internal_650f5c1add7cf37c4371b80a16d5ca1956fd0f1727931bd1513f5542df793266_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
