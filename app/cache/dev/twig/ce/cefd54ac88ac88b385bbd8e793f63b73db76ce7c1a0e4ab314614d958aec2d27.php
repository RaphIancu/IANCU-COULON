<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_95d4a040abaaae0fb92c70b431ae7549b5504154a339408357c8343cd7b21b9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_2b4459434694dbffc8836d6d0dfc6814f81cfed6340b5f6b97bc4c707572e7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4459434694dbffc8836d6d0dfc6814f81cfed6340b5f6b97bc4c707572e7b4->enter($__internal_2b4459434694dbffc8836d6d0dfc6814f81cfed6340b5f6b97bc4c707572e7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b4459434694dbffc8836d6d0dfc6814f81cfed6340b5f6b97bc4c707572e7b4->leave($__internal_2b4459434694dbffc8836d6d0dfc6814f81cfed6340b5f6b97bc4c707572e7b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a07675091d2f1fb8bcec5d71abcb184daacb8b6c35bd80d43d76c1bdc83321a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07675091d2f1fb8bcec5d71abcb184daacb8b6c35bd80d43d76c1bdc83321a9->enter($__internal_a07675091d2f1fb8bcec5d71abcb184daacb8b6c35bd80d43d76c1bdc83321a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a07675091d2f1fb8bcec5d71abcb184daacb8b6c35bd80d43d76c1bdc83321a9->leave($__internal_a07675091d2f1fb8bcec5d71abcb184daacb8b6c35bd80d43d76c1bdc83321a9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a684f57dbcf44b666641186021701be4bc7d87f28c34215b8e62c4e9073f41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a684f57dbcf44b666641186021701be4bc7d87f28c34215b8e62c4e9073f41e->enter($__internal_8a684f57dbcf44b666641186021701be4bc7d87f28c34215b8e62c4e9073f41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a684f57dbcf44b666641186021701be4bc7d87f28c34215b8e62c4e9073f41e->leave($__internal_8a684f57dbcf44b666641186021701be4bc7d87f28c34215b8e62c4e9073f41e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2633eda7f0ac294a74c8bb65e0c71f34baf821a4ced825cd342207fbc44112b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2633eda7f0ac294a74c8bb65e0c71f34baf821a4ced825cd342207fbc44112b->enter($__internal_f2633eda7f0ac294a74c8bb65e0c71f34baf821a4ced825cd342207fbc44112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f2633eda7f0ac294a74c8bb65e0c71f34baf821a4ced825cd342207fbc44112b->leave($__internal_f2633eda7f0ac294a74c8bb65e0c71f34baf821a4ced825cd342207fbc44112b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
