<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_251ec6fe679d687be468642ce1bf80424ec61c0756a52cc8a383b1d5c66795d7 extends Twig_Template
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
        $__internal_2b32b3ea55e51851dc03cda6aaaf16edfa5f2782e2996c978b0b64455c26edef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b32b3ea55e51851dc03cda6aaaf16edfa5f2782e2996c978b0b64455c26edef->enter($__internal_2b32b3ea55e51851dc03cda6aaaf16edfa5f2782e2996c978b0b64455c26edef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b32b3ea55e51851dc03cda6aaaf16edfa5f2782e2996c978b0b64455c26edef->leave($__internal_2b32b3ea55e51851dc03cda6aaaf16edfa5f2782e2996c978b0b64455c26edef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff780fda0072dd6db5c2ad27be8b3c832acedf7e86c2d95dfd966535d8e50f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff780fda0072dd6db5c2ad27be8b3c832acedf7e86c2d95dfd966535d8e50f31->enter($__internal_ff780fda0072dd6db5c2ad27be8b3c832acedf7e86c2d95dfd966535d8e50f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ff780fda0072dd6db5c2ad27be8b3c832acedf7e86c2d95dfd966535d8e50f31->leave($__internal_ff780fda0072dd6db5c2ad27be8b3c832acedf7e86c2d95dfd966535d8e50f31_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ffd1553a9f4c30bdeda91e276a3d4f81f683727cd5f724f7dca0e3ecbb68b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ffd1553a9f4c30bdeda91e276a3d4f81f683727cd5f724f7dca0e3ecbb68b7c->enter($__internal_2ffd1553a9f4c30bdeda91e276a3d4f81f683727cd5f724f7dca0e3ecbb68b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2ffd1553a9f4c30bdeda91e276a3d4f81f683727cd5f724f7dca0e3ecbb68b7c->leave($__internal_2ffd1553a9f4c30bdeda91e276a3d4f81f683727cd5f724f7dca0e3ecbb68b7c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c02fafe5139d7b55f571ede6a5c3e985fed2d74e716f315575fed93434ec592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c02fafe5139d7b55f571ede6a5c3e985fed2d74e716f315575fed93434ec592->enter($__internal_2c02fafe5139d7b55f571ede6a5c3e985fed2d74e716f315575fed93434ec592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2c02fafe5139d7b55f571ede6a5c3e985fed2d74e716f315575fed93434ec592->leave($__internal_2c02fafe5139d7b55f571ede6a5c3e985fed2d74e716f315575fed93434ec592_prof);

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
