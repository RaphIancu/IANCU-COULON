<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_56b96191953f0d95809bc505f90154c4a802643fa179e6f35db96f39b03557d0 extends Twig_Template
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
        $__internal_92d2e77f9e47590bb4c9da783dd294b5f3f8b4f01438b09530b1ab68042c10c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d2e77f9e47590bb4c9da783dd294b5f3f8b4f01438b09530b1ab68042c10c9->enter($__internal_92d2e77f9e47590bb4c9da783dd294b5f3f8b4f01438b09530b1ab68042c10c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92d2e77f9e47590bb4c9da783dd294b5f3f8b4f01438b09530b1ab68042c10c9->leave($__internal_92d2e77f9e47590bb4c9da783dd294b5f3f8b4f01438b09530b1ab68042c10c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_59e1034efb9f20fa78bc62ab75f0ea2be01e23d240447a08ddb9ad27fe14f9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e1034efb9f20fa78bc62ab75f0ea2be01e23d240447a08ddb9ad27fe14f9ef->enter($__internal_59e1034efb9f20fa78bc62ab75f0ea2be01e23d240447a08ddb9ad27fe14f9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_59e1034efb9f20fa78bc62ab75f0ea2be01e23d240447a08ddb9ad27fe14f9ef->leave($__internal_59e1034efb9f20fa78bc62ab75f0ea2be01e23d240447a08ddb9ad27fe14f9ef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7980f9d4b74c52197608942849e7f60fb47f514f98200560a0684ca13d79ea6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7980f9d4b74c52197608942849e7f60fb47f514f98200560a0684ca13d79ea6e->enter($__internal_7980f9d4b74c52197608942849e7f60fb47f514f98200560a0684ca13d79ea6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7980f9d4b74c52197608942849e7f60fb47f514f98200560a0684ca13d79ea6e->leave($__internal_7980f9d4b74c52197608942849e7f60fb47f514f98200560a0684ca13d79ea6e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_80296ba9d4754b30cf31c75b1be1ae60b09481d057108f09deb9a03666301ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80296ba9d4754b30cf31c75b1be1ae60b09481d057108f09deb9a03666301ea3->enter($__internal_80296ba9d4754b30cf31c75b1be1ae60b09481d057108f09deb9a03666301ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_80296ba9d4754b30cf31c75b1be1ae60b09481d057108f09deb9a03666301ea3->leave($__internal_80296ba9d4754b30cf31c75b1be1ae60b09481d057108f09deb9a03666301ea3_prof);

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
