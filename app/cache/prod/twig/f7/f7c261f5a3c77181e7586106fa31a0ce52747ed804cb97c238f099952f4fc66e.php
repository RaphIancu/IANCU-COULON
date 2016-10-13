<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4d0523b5c14bf4fe0f28e4404b1805b45897384ba00c0f5c9955e266fff0709b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b1b33f2e80802380b6169b7b81c408087544ff3044d6f61ca9972e4698401fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b33f2e80802380b6169b7b81c408087544ff3044d6f61ca9972e4698401fd8->enter($__internal_b1b33f2e80802380b6169b7b81c408087544ff3044d6f61ca9972e4698401fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b33f2e80802380b6169b7b81c408087544ff3044d6f61ca9972e4698401fd8->leave($__internal_b1b33f2e80802380b6169b7b81c408087544ff3044d6f61ca9972e4698401fd8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2c3c3139e2819c6fd9b6e9cb2662cd06af558836620ea88e0ce719a3b8614a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c3c3139e2819c6fd9b6e9cb2662cd06af558836620ea88e0ce719a3b8614a3->enter($__internal_a2c3c3139e2819c6fd9b6e9cb2662cd06af558836620ea88e0ce719a3b8614a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a2c3c3139e2819c6fd9b6e9cb2662cd06af558836620ea88e0ce719a3b8614a3->leave($__internal_a2c3c3139e2819c6fd9b6e9cb2662cd06af558836620ea88e0ce719a3b8614a3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_87a22af9de9e5a5360b6ffce80fc9676dcf1573c6195a7dca9dd9f62b8b9b1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a22af9de9e5a5360b6ffce80fc9676dcf1573c6195a7dca9dd9f62b8b9b1c2->enter($__internal_87a22af9de9e5a5360b6ffce80fc9676dcf1573c6195a7dca9dd9f62b8b9b1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_87a22af9de9e5a5360b6ffce80fc9676dcf1573c6195a7dca9dd9f62b8b9b1c2->leave($__internal_87a22af9de9e5a5360b6ffce80fc9676dcf1573c6195a7dca9dd9f62b8b9b1c2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_214655a654aa24addcc01548b4f8cf50615892ee45c969164b9af57a46b0ebc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214655a654aa24addcc01548b4f8cf50615892ee45c969164b9af57a46b0ebc3->enter($__internal_214655a654aa24addcc01548b4f8cf50615892ee45c969164b9af57a46b0ebc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_214655a654aa24addcc01548b4f8cf50615892ee45c969164b9af57a46b0ebc3->leave($__internal_214655a654aa24addcc01548b4f8cf50615892ee45c969164b9af57a46b0ebc3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
