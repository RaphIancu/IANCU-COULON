<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f8a2a0768448d28b20de5435a0884c1e92d4cbd319f9c69cb2f1100d459649db extends Twig_Template
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
        $__internal_9ea009767938c68a01f7a0a44261b94a3930d5db14026355a7237c9311dcaad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea009767938c68a01f7a0a44261b94a3930d5db14026355a7237c9311dcaad9->enter($__internal_9ea009767938c68a01f7a0a44261b94a3930d5db14026355a7237c9311dcaad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ea009767938c68a01f7a0a44261b94a3930d5db14026355a7237c9311dcaad9->leave($__internal_9ea009767938c68a01f7a0a44261b94a3930d5db14026355a7237c9311dcaad9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a333ca735c3f6afc9c9149a9e2c3c585c9455623a86a611a0443c6e2acbdf90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a333ca735c3f6afc9c9149a9e2c3c585c9455623a86a611a0443c6e2acbdf90c->enter($__internal_a333ca735c3f6afc9c9149a9e2c3c585c9455623a86a611a0443c6e2acbdf90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a333ca735c3f6afc9c9149a9e2c3c585c9455623a86a611a0443c6e2acbdf90c->leave($__internal_a333ca735c3f6afc9c9149a9e2c3c585c9455623a86a611a0443c6e2acbdf90c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_17c7ec7fa4c4f766626dc0bdcb2867340ca9a27a1a1dada996cb6e632a9f3220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c7ec7fa4c4f766626dc0bdcb2867340ca9a27a1a1dada996cb6e632a9f3220->enter($__internal_17c7ec7fa4c4f766626dc0bdcb2867340ca9a27a1a1dada996cb6e632a9f3220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_17c7ec7fa4c4f766626dc0bdcb2867340ca9a27a1a1dada996cb6e632a9f3220->leave($__internal_17c7ec7fa4c4f766626dc0bdcb2867340ca9a27a1a1dada996cb6e632a9f3220_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_400db65190c3320a419d0cbdbcfc234bee44ef3666ea19c2f7c1ecdda4d0bce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400db65190c3320a419d0cbdbcfc234bee44ef3666ea19c2f7c1ecdda4d0bce3->enter($__internal_400db65190c3320a419d0cbdbcfc234bee44ef3666ea19c2f7c1ecdda4d0bce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_400db65190c3320a419d0cbdbcfc234bee44ef3666ea19c2f7c1ecdda4d0bce3->leave($__internal_400db65190c3320a419d0cbdbcfc234bee44ef3666ea19c2f7c1ecdda4d0bce3_prof);

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
