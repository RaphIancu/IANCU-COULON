<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c0fe546c654569851be6cb348a0ab04d3a462329c01bbacfa3d7f57436348e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_0c36735c464d9ebb2bc638b2c2bf1cf11b03b72c4b97d26c5b55e69854235524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c36735c464d9ebb2bc638b2c2bf1cf11b03b72c4b97d26c5b55e69854235524->enter($__internal_0c36735c464d9ebb2bc638b2c2bf1cf11b03b72c4b97d26c5b55e69854235524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c36735c464d9ebb2bc638b2c2bf1cf11b03b72c4b97d26c5b55e69854235524->leave($__internal_0c36735c464d9ebb2bc638b2c2bf1cf11b03b72c4b97d26c5b55e69854235524_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d6cbb42d79226360a4f0e359e6537f12cb91c7f32bac0cb921b2ab1c113900a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6cbb42d79226360a4f0e359e6537f12cb91c7f32bac0cb921b2ab1c113900a->enter($__internal_3d6cbb42d79226360a4f0e359e6537f12cb91c7f32bac0cb921b2ab1c113900a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3d6cbb42d79226360a4f0e359e6537f12cb91c7f32bac0cb921b2ab1c113900a->leave($__internal_3d6cbb42d79226360a4f0e359e6537f12cb91c7f32bac0cb921b2ab1c113900a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04fafba05a9e1596b8d02b219e7b6d22bd2e25f73eefff2fa959a208b8a5d1cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04fafba05a9e1596b8d02b219e7b6d22bd2e25f73eefff2fa959a208b8a5d1cd->enter($__internal_04fafba05a9e1596b8d02b219e7b6d22bd2e25f73eefff2fa959a208b8a5d1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_04fafba05a9e1596b8d02b219e7b6d22bd2e25f73eefff2fa959a208b8a5d1cd->leave($__internal_04fafba05a9e1596b8d02b219e7b6d22bd2e25f73eefff2fa959a208b8a5d1cd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_332aaab7ecb31260cdf2147945091a02cc889be4018d0c66cb2f8bddf6ff6c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332aaab7ecb31260cdf2147945091a02cc889be4018d0c66cb2f8bddf6ff6c54->enter($__internal_332aaab7ecb31260cdf2147945091a02cc889be4018d0c66cb2f8bddf6ff6c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_332aaab7ecb31260cdf2147945091a02cc889be4018d0c66cb2f8bddf6ff6c54->leave($__internal_332aaab7ecb31260cdf2147945091a02cc889be4018d0c66cb2f8bddf6ff6c54_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
