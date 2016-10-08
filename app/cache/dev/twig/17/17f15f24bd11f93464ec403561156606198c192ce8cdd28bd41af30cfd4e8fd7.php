<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_99c45cc29b4d3bc8ca3b921fdc135ca661fc106cda5c574161a1cb57263306d8 extends Twig_Template
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
        $__internal_4ed4ed70f4cf783ee9456e79fe0f49c03d2c74b4c17829bb175b94cf93e1e962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed4ed70f4cf783ee9456e79fe0f49c03d2c74b4c17829bb175b94cf93e1e962->enter($__internal_4ed4ed70f4cf783ee9456e79fe0f49c03d2c74b4c17829bb175b94cf93e1e962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ed4ed70f4cf783ee9456e79fe0f49c03d2c74b4c17829bb175b94cf93e1e962->leave($__internal_4ed4ed70f4cf783ee9456e79fe0f49c03d2c74b4c17829bb175b94cf93e1e962_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1011014469f3cb461cc9f68182422590532fe31983bf33266ebe878e1acda0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1011014469f3cb461cc9f68182422590532fe31983bf33266ebe878e1acda0f4->enter($__internal_1011014469f3cb461cc9f68182422590532fe31983bf33266ebe878e1acda0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1011014469f3cb461cc9f68182422590532fe31983bf33266ebe878e1acda0f4->leave($__internal_1011014469f3cb461cc9f68182422590532fe31983bf33266ebe878e1acda0f4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_95adf8b3e38e23ff3b4bc07196bea7269ba0da5ea6d1f975ab65847e852a18af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95adf8b3e38e23ff3b4bc07196bea7269ba0da5ea6d1f975ab65847e852a18af->enter($__internal_95adf8b3e38e23ff3b4bc07196bea7269ba0da5ea6d1f975ab65847e852a18af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_95adf8b3e38e23ff3b4bc07196bea7269ba0da5ea6d1f975ab65847e852a18af->leave($__internal_95adf8b3e38e23ff3b4bc07196bea7269ba0da5ea6d1f975ab65847e852a18af_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc34df229ac6b36e1a8b29ef5f27505712ccd7263c4fbee7babbe96eeb30ce3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc34df229ac6b36e1a8b29ef5f27505712ccd7263c4fbee7babbe96eeb30ce3a->enter($__internal_dc34df229ac6b36e1a8b29ef5f27505712ccd7263c4fbee7babbe96eeb30ce3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dc34df229ac6b36e1a8b29ef5f27505712ccd7263c4fbee7babbe96eeb30ce3a->leave($__internal_dc34df229ac6b36e1a8b29ef5f27505712ccd7263c4fbee7babbe96eeb30ce3a_prof);

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
