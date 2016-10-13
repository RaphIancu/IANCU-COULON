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
        $__internal_2b4b3a59f0e1394cbbbf24e168269b45983f76a016960de5905cb634be82c852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4b3a59f0e1394cbbbf24e168269b45983f76a016960de5905cb634be82c852->enter($__internal_2b4b3a59f0e1394cbbbf24e168269b45983f76a016960de5905cb634be82c852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b4b3a59f0e1394cbbbf24e168269b45983f76a016960de5905cb634be82c852->leave($__internal_2b4b3a59f0e1394cbbbf24e168269b45983f76a016960de5905cb634be82c852_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7a818296151626fa4929a322fa2e7fe910661772292d4258b2b59443f046da45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a818296151626fa4929a322fa2e7fe910661772292d4258b2b59443f046da45->enter($__internal_7a818296151626fa4929a322fa2e7fe910661772292d4258b2b59443f046da45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7a818296151626fa4929a322fa2e7fe910661772292d4258b2b59443f046da45->leave($__internal_7a818296151626fa4929a322fa2e7fe910661772292d4258b2b59443f046da45_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2dcc05038b3cbead5cfc75394c9983d19d2e1b3478229d9d59d0afe4bd17b42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcc05038b3cbead5cfc75394c9983d19d2e1b3478229d9d59d0afe4bd17b42e->enter($__internal_2dcc05038b3cbead5cfc75394c9983d19d2e1b3478229d9d59d0afe4bd17b42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2dcc05038b3cbead5cfc75394c9983d19d2e1b3478229d9d59d0afe4bd17b42e->leave($__internal_2dcc05038b3cbead5cfc75394c9983d19d2e1b3478229d9d59d0afe4bd17b42e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49ff131eab949f699316edf546bf63c7c25405242792b087aea342f5c827f0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ff131eab949f699316edf546bf63c7c25405242792b087aea342f5c827f0b1->enter($__internal_49ff131eab949f699316edf546bf63c7c25405242792b087aea342f5c827f0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_49ff131eab949f699316edf546bf63c7c25405242792b087aea342f5c827f0b1->leave($__internal_49ff131eab949f699316edf546bf63c7c25405242792b087aea342f5c827f0b1_prof);

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
