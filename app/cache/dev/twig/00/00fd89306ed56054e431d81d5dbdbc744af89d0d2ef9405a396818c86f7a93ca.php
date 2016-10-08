<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5c08612aacc8e3f8623e80051c8ed48a366853a555047e2d27c7cc2b627c8811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_bef1c931e5876a84daa5c3ad92b45384540381cb31b8d5baa294684fb8edb9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef1c931e5876a84daa5c3ad92b45384540381cb31b8d5baa294684fb8edb9a8->enter($__internal_bef1c931e5876a84daa5c3ad92b45384540381cb31b8d5baa294684fb8edb9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bef1c931e5876a84daa5c3ad92b45384540381cb31b8d5baa294684fb8edb9a8->leave($__internal_bef1c931e5876a84daa5c3ad92b45384540381cb31b8d5baa294684fb8edb9a8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90c202a8de37b641160790745b7df471f0d26b226b0f55a32c1efe39e33a129d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c202a8de37b641160790745b7df471f0d26b226b0f55a32c1efe39e33a129d->enter($__internal_90c202a8de37b641160790745b7df471f0d26b226b0f55a32c1efe39e33a129d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_90c202a8de37b641160790745b7df471f0d26b226b0f55a32c1efe39e33a129d->leave($__internal_90c202a8de37b641160790745b7df471f0d26b226b0f55a32c1efe39e33a129d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7322e47c44be1aebc97e908c5bcb0f014a89e2b16f20761c7566eb1dd622041a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7322e47c44be1aebc97e908c5bcb0f014a89e2b16f20761c7566eb1dd622041a->enter($__internal_7322e47c44be1aebc97e908c5bcb0f014a89e2b16f20761c7566eb1dd622041a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7322e47c44be1aebc97e908c5bcb0f014a89e2b16f20761c7566eb1dd622041a->leave($__internal_7322e47c44be1aebc97e908c5bcb0f014a89e2b16f20761c7566eb1dd622041a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_21852e8cfb9a427fe5d839c17dfd51d241a6498351eac58f61b295edc42b95b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21852e8cfb9a427fe5d839c17dfd51d241a6498351eac58f61b295edc42b95b2->enter($__internal_21852e8cfb9a427fe5d839c17dfd51d241a6498351eac58f61b295edc42b95b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_21852e8cfb9a427fe5d839c17dfd51d241a6498351eac58f61b295edc42b95b2->leave($__internal_21852e8cfb9a427fe5d839c17dfd51d241a6498351eac58f61b295edc42b95b2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
