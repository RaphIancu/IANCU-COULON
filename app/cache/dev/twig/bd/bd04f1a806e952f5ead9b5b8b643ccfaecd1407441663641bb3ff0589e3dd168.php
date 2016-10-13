<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_42f6543c6718b5b2c7a857996b15468c617a346dfbf11c842cecdadbd468e2a2 extends Twig_Template
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
        $__internal_5adf82aaa9c8de0c77025f285440e025509a4434d03411d017189e20fa3811eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5adf82aaa9c8de0c77025f285440e025509a4434d03411d017189e20fa3811eb->enter($__internal_5adf82aaa9c8de0c77025f285440e025509a4434d03411d017189e20fa3811eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5adf82aaa9c8de0c77025f285440e025509a4434d03411d017189e20fa3811eb->leave($__internal_5adf82aaa9c8de0c77025f285440e025509a4434d03411d017189e20fa3811eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b4e2549a3b0c7a470be4ef67ebe2b4b592bdb7f302ee1dfd1861c32fbf4d4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4e2549a3b0c7a470be4ef67ebe2b4b592bdb7f302ee1dfd1861c32fbf4d4e9->enter($__internal_4b4e2549a3b0c7a470be4ef67ebe2b4b592bdb7f302ee1dfd1861c32fbf4d4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4b4e2549a3b0c7a470be4ef67ebe2b4b592bdb7f302ee1dfd1861c32fbf4d4e9->leave($__internal_4b4e2549a3b0c7a470be4ef67ebe2b4b592bdb7f302ee1dfd1861c32fbf4d4e9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_83c2fbd07220955a41d86db947d0be753b2fd9c5fdc8fefa768975dc1b64a852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c2fbd07220955a41d86db947d0be753b2fd9c5fdc8fefa768975dc1b64a852->enter($__internal_83c2fbd07220955a41d86db947d0be753b2fd9c5fdc8fefa768975dc1b64a852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_83c2fbd07220955a41d86db947d0be753b2fd9c5fdc8fefa768975dc1b64a852->leave($__internal_83c2fbd07220955a41d86db947d0be753b2fd9c5fdc8fefa768975dc1b64a852_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb751f3a01ba65db754e560b544fe4ec5bfd22d43d4aae7c1f9396ba7b98e688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb751f3a01ba65db754e560b544fe4ec5bfd22d43d4aae7c1f9396ba7b98e688->enter($__internal_eb751f3a01ba65db754e560b544fe4ec5bfd22d43d4aae7c1f9396ba7b98e688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_eb751f3a01ba65db754e560b544fe4ec5bfd22d43d4aae7c1f9396ba7b98e688->leave($__internal_eb751f3a01ba65db754e560b544fe4ec5bfd22d43d4aae7c1f9396ba7b98e688_prof);

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
