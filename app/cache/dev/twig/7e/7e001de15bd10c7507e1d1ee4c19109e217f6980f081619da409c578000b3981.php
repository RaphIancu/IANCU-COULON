<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_fed2329ab51efd2bbb60a41cc79f4b60c6d91e58613170c53b467c6cf70fd33b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a76b101ae9d5ffbe09c5948634aa2116707d9400aadf91566b69cde5a68ddaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a76b101ae9d5ffbe09c5948634aa2116707d9400aadf91566b69cde5a68ddaa->enter($__internal_0a76b101ae9d5ffbe09c5948634aa2116707d9400aadf91566b69cde5a68ddaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a76b101ae9d5ffbe09c5948634aa2116707d9400aadf91566b69cde5a68ddaa->leave($__internal_0a76b101ae9d5ffbe09c5948634aa2116707d9400aadf91566b69cde5a68ddaa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75db87e2531f3d94b0fd3b8cf18cbb691021e1e56eda2f60b282cc0dde4dad8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75db87e2531f3d94b0fd3b8cf18cbb691021e1e56eda2f60b282cc0dde4dad8b->enter($__internal_75db87e2531f3d94b0fd3b8cf18cbb691021e1e56eda2f60b282cc0dde4dad8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_75db87e2531f3d94b0fd3b8cf18cbb691021e1e56eda2f60b282cc0dde4dad8b->leave($__internal_75db87e2531f3d94b0fd3b8cf18cbb691021e1e56eda2f60b282cc0dde4dad8b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_35c62ee02783afef0f2264f84ca2c976d89d135af479959b862fa8ccce4ceaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c62ee02783afef0f2264f84ca2c976d89d135af479959b862fa8ccce4ceaef->enter($__internal_35c62ee02783afef0f2264f84ca2c976d89d135af479959b862fa8ccce4ceaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_35c62ee02783afef0f2264f84ca2c976d89d135af479959b862fa8ccce4ceaef->leave($__internal_35c62ee02783afef0f2264f84ca2c976d89d135af479959b862fa8ccce4ceaef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
