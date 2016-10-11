<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_df49d42f607ae8b28f72a1e984804d5c76e217dee2a3dd637b7e6c3b27baf058 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7eff5b77db21f101ce789543e2722123d67ce7f33a4c475a80b40d1fd6c58feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eff5b77db21f101ce789543e2722123d67ce7f33a4c475a80b40d1fd6c58feb->enter($__internal_7eff5b77db21f101ce789543e2722123d67ce7f33a4c475a80b40d1fd6c58feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7eff5b77db21f101ce789543e2722123d67ce7f33a4c475a80b40d1fd6c58feb->leave($__internal_7eff5b77db21f101ce789543e2722123d67ce7f33a4c475a80b40d1fd6c58feb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea2a4eb0f84c7226a85911d121432705dc3a5563ad5d6909c2a4268dde113509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2a4eb0f84c7226a85911d121432705dc3a5563ad5d6909c2a4268dde113509->enter($__internal_ea2a4eb0f84c7226a85911d121432705dc3a5563ad5d6909c2a4268dde113509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ea2a4eb0f84c7226a85911d121432705dc3a5563ad5d6909c2a4268dde113509->leave($__internal_ea2a4eb0f84c7226a85911d121432705dc3a5563ad5d6909c2a4268dde113509_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
