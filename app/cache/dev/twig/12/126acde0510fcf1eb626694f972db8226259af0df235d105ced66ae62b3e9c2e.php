<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_caabb6cac93dc42e19c43ca0a3e247db7225b8a511572d951c3f3bd3feb90a85 extends Twig_Template
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
        $__internal_e3e82de60815740947efcc6ae928c247859f585b648f7e6755d472e8ffd9e81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e82de60815740947efcc6ae928c247859f585b648f7e6755d472e8ffd9e81b->enter($__internal_e3e82de60815740947efcc6ae928c247859f585b648f7e6755d472e8ffd9e81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3e82de60815740947efcc6ae928c247859f585b648f7e6755d472e8ffd9e81b->leave($__internal_e3e82de60815740947efcc6ae928c247859f585b648f7e6755d472e8ffd9e81b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f7759f836d0f5f1274da415bef8b5ce74a07485583fb975144d075345a4f8a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7759f836d0f5f1274da415bef8b5ce74a07485583fb975144d075345a4f8a5f->enter($__internal_f7759f836d0f5f1274da415bef8b5ce74a07485583fb975144d075345a4f8a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f7759f836d0f5f1274da415bef8b5ce74a07485583fb975144d075345a4f8a5f->leave($__internal_f7759f836d0f5f1274da415bef8b5ce74a07485583fb975144d075345a4f8a5f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac84a423655f828d09a51460a689a18e08f6bcdce5dd84dd8783524e8be802c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac84a423655f828d09a51460a689a18e08f6bcdce5dd84dd8783524e8be802c9->enter($__internal_ac84a423655f828d09a51460a689a18e08f6bcdce5dd84dd8783524e8be802c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ac84a423655f828d09a51460a689a18e08f6bcdce5dd84dd8783524e8be802c9->leave($__internal_ac84a423655f828d09a51460a689a18e08f6bcdce5dd84dd8783524e8be802c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8a66c061d60b28bd39ddfe43440ec28fdc017e27bbcfd501f4899e2fef1f289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a66c061d60b28bd39ddfe43440ec28fdc017e27bbcfd501f4899e2fef1f289->enter($__internal_c8a66c061d60b28bd39ddfe43440ec28fdc017e27bbcfd501f4899e2fef1f289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c8a66c061d60b28bd39ddfe43440ec28fdc017e27bbcfd501f4899e2fef1f289->leave($__internal_c8a66c061d60b28bd39ddfe43440ec28fdc017e27bbcfd501f4899e2fef1f289_prof);

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
