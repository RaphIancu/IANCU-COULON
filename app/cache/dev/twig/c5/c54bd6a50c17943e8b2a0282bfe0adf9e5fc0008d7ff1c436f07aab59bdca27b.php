<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c718307889352248c99bcb66f68387c47fcf5681877d31a3bd8ebb5b441a5470 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1c0deb499e80042ef06e11d9030ddea5ced2ee634faab5911c8a14d2b6528ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c0deb499e80042ef06e11d9030ddea5ced2ee634faab5911c8a14d2b6528ac->enter($__internal_d1c0deb499e80042ef06e11d9030ddea5ced2ee634faab5911c8a14d2b6528ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1c0deb499e80042ef06e11d9030ddea5ced2ee634faab5911c8a14d2b6528ac->leave($__internal_d1c0deb499e80042ef06e11d9030ddea5ced2ee634faab5911c8a14d2b6528ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98ee8e7a33662ee6902aeaa6ec3fc163fcd57e3a16cf3933539c7c924c7dba6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ee8e7a33662ee6902aeaa6ec3fc163fcd57e3a16cf3933539c7c924c7dba6c->enter($__internal_98ee8e7a33662ee6902aeaa6ec3fc163fcd57e3a16cf3933539c7c924c7dba6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_98ee8e7a33662ee6902aeaa6ec3fc163fcd57e3a16cf3933539c7c924c7dba6c->leave($__internal_98ee8e7a33662ee6902aeaa6ec3fc163fcd57e3a16cf3933539c7c924c7dba6c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3546729af6dad832809f9d3e4e829ed27a45dde0b445370aae267e22fcb5d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3546729af6dad832809f9d3e4e829ed27a45dde0b445370aae267e22fcb5d03->enter($__internal_d3546729af6dad832809f9d3e4e829ed27a45dde0b445370aae267e22fcb5d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d3546729af6dad832809f9d3e4e829ed27a45dde0b445370aae267e22fcb5d03->leave($__internal_d3546729af6dad832809f9d3e4e829ed27a45dde0b445370aae267e22fcb5d03_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85bb4caac02a562317a56226fc436e936606615defb0af704582b575b8d3aab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85bb4caac02a562317a56226fc436e936606615defb0af704582b575b8d3aab0->enter($__internal_85bb4caac02a562317a56226fc436e936606615defb0af704582b575b8d3aab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_85bb4caac02a562317a56226fc436e936606615defb0af704582b575b8d3aab0->leave($__internal_85bb4caac02a562317a56226fc436e936606615defb0af704582b575b8d3aab0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
