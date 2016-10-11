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
        $__internal_3147dd43702d317fd95bac1ab783bb7120c997a729774f465658451a11be3eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3147dd43702d317fd95bac1ab783bb7120c997a729774f465658451a11be3eb9->enter($__internal_3147dd43702d317fd95bac1ab783bb7120c997a729774f465658451a11be3eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3147dd43702d317fd95bac1ab783bb7120c997a729774f465658451a11be3eb9->leave($__internal_3147dd43702d317fd95bac1ab783bb7120c997a729774f465658451a11be3eb9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24212bc6522bbf18284401d21841185a8bb0d77d798479df29db0f591c094e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24212bc6522bbf18284401d21841185a8bb0d77d798479df29db0f591c094e56->enter($__internal_24212bc6522bbf18284401d21841185a8bb0d77d798479df29db0f591c094e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_24212bc6522bbf18284401d21841185a8bb0d77d798479df29db0f591c094e56->leave($__internal_24212bc6522bbf18284401d21841185a8bb0d77d798479df29db0f591c094e56_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a58fe8f8db17857f62f8142cc1222788d0c4f177aa95df4e6affde819e18514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a58fe8f8db17857f62f8142cc1222788d0c4f177aa95df4e6affde819e18514->enter($__internal_7a58fe8f8db17857f62f8142cc1222788d0c4f177aa95df4e6affde819e18514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7a58fe8f8db17857f62f8142cc1222788d0c4f177aa95df4e6affde819e18514->leave($__internal_7a58fe8f8db17857f62f8142cc1222788d0c4f177aa95df4e6affde819e18514_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_55d71ce09c51e5156a3cd88edc72f009d73996af1b4d539fdbd9ebfd99f284de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d71ce09c51e5156a3cd88edc72f009d73996af1b4d539fdbd9ebfd99f284de->enter($__internal_55d71ce09c51e5156a3cd88edc72f009d73996af1b4d539fdbd9ebfd99f284de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_55d71ce09c51e5156a3cd88edc72f009d73996af1b4d539fdbd9ebfd99f284de->leave($__internal_55d71ce09c51e5156a3cd88edc72f009d73996af1b4d539fdbd9ebfd99f284de_prof);

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
