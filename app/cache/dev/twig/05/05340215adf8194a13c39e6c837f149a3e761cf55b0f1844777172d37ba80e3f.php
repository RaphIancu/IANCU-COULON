<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_29d6a4241cd3a3fa2c4236efa2bd9c4eff24b12a0fcaa6e2ef04aabf4dbe93b6 extends Twig_Template
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
        $__internal_312385f797dd7e8d1f9fa7b705bc5a8c366b11b3b456883ae97b246ac9dfd152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312385f797dd7e8d1f9fa7b705bc5a8c366b11b3b456883ae97b246ac9dfd152->enter($__internal_312385f797dd7e8d1f9fa7b705bc5a8c366b11b3b456883ae97b246ac9dfd152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_312385f797dd7e8d1f9fa7b705bc5a8c366b11b3b456883ae97b246ac9dfd152->leave($__internal_312385f797dd7e8d1f9fa7b705bc5a8c366b11b3b456883ae97b246ac9dfd152_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_23cfd40aaf5d1c87fb835473860f353f9196c67be70a1567e652a832fbab2d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23cfd40aaf5d1c87fb835473860f353f9196c67be70a1567e652a832fbab2d9d->enter($__internal_23cfd40aaf5d1c87fb835473860f353f9196c67be70a1567e652a832fbab2d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_23cfd40aaf5d1c87fb835473860f353f9196c67be70a1567e652a832fbab2d9d->leave($__internal_23cfd40aaf5d1c87fb835473860f353f9196c67be70a1567e652a832fbab2d9d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
