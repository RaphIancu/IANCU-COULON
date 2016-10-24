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
        $__internal_7bf867b832a6bcb68ffe6a02cec45c033b5c2f5ca7a0908596f6870ada411504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf867b832a6bcb68ffe6a02cec45c033b5c2f5ca7a0908596f6870ada411504->enter($__internal_7bf867b832a6bcb68ffe6a02cec45c033b5c2f5ca7a0908596f6870ada411504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bf867b832a6bcb68ffe6a02cec45c033b5c2f5ca7a0908596f6870ada411504->leave($__internal_7bf867b832a6bcb68ffe6a02cec45c033b5c2f5ca7a0908596f6870ada411504_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0da4a0474ebd1bdb66ae2bbd00418689f8288bd45ddfb619eabae12475fcac7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da4a0474ebd1bdb66ae2bbd00418689f8288bd45ddfb619eabae12475fcac7a->enter($__internal_0da4a0474ebd1bdb66ae2bbd00418689f8288bd45ddfb619eabae12475fcac7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0da4a0474ebd1bdb66ae2bbd00418689f8288bd45ddfb619eabae12475fcac7a->leave($__internal_0da4a0474ebd1bdb66ae2bbd00418689f8288bd45ddfb619eabae12475fcac7a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f645a20f2cb61722131059e3cf23f13efff99c2f72060e15b6ec8c457568efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f645a20f2cb61722131059e3cf23f13efff99c2f72060e15b6ec8c457568efd->enter($__internal_4f645a20f2cb61722131059e3cf23f13efff99c2f72060e15b6ec8c457568efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4f645a20f2cb61722131059e3cf23f13efff99c2f72060e15b6ec8c457568efd->leave($__internal_4f645a20f2cb61722131059e3cf23f13efff99c2f72060e15b6ec8c457568efd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f13e3eb6f0f869749bd11749ef8af631b189fd65b8e5c4c66116963cfea1081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f13e3eb6f0f869749bd11749ef8af631b189fd65b8e5c4c66116963cfea1081->enter($__internal_4f13e3eb6f0f869749bd11749ef8af631b189fd65b8e5c4c66116963cfea1081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4f13e3eb6f0f869749bd11749ef8af631b189fd65b8e5c4c66116963cfea1081->leave($__internal_4f13e3eb6f0f869749bd11749ef8af631b189fd65b8e5c4c66116963cfea1081_prof);

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
