<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f6993d03dbfdf9944ea9bfde23e5c0e6cab9fbb55cca9dfcf849ff1a6cf56530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_815f9c3a49dee759cf2aebf23a16af04c92af0e6a6f43573f974cd31be42cc08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815f9c3a49dee759cf2aebf23a16af04c92af0e6a6f43573f974cd31be42cc08->enter($__internal_815f9c3a49dee759cf2aebf23a16af04c92af0e6a6f43573f974cd31be42cc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_815f9c3a49dee759cf2aebf23a16af04c92af0e6a6f43573f974cd31be42cc08->leave($__internal_815f9c3a49dee759cf2aebf23a16af04c92af0e6a6f43573f974cd31be42cc08_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aba83f5c5cfae0cd20665dfd4a2b2a98efc77def919c23dda761e7d89bf01550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba83f5c5cfae0cd20665dfd4a2b2a98efc77def919c23dda761e7d89bf01550->enter($__internal_aba83f5c5cfae0cd20665dfd4a2b2a98efc77def919c23dda761e7d89bf01550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aba83f5c5cfae0cd20665dfd4a2b2a98efc77def919c23dda761e7d89bf01550->leave($__internal_aba83f5c5cfae0cd20665dfd4a2b2a98efc77def919c23dda761e7d89bf01550_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_340347f438b51bd9f65f211e7b412248bb654dd5e2a8ac33317703c9d1128e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340347f438b51bd9f65f211e7b412248bb654dd5e2a8ac33317703c9d1128e22->enter($__internal_340347f438b51bd9f65f211e7b412248bb654dd5e2a8ac33317703c9d1128e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_340347f438b51bd9f65f211e7b412248bb654dd5e2a8ac33317703c9d1128e22->leave($__internal_340347f438b51bd9f65f211e7b412248bb654dd5e2a8ac33317703c9d1128e22_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_76a7c9587d10ef3cb9622c86b192fd49935c620f3edea478772d15fca1fe7ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a7c9587d10ef3cb9622c86b192fd49935c620f3edea478772d15fca1fe7ae9->enter($__internal_76a7c9587d10ef3cb9622c86b192fd49935c620f3edea478772d15fca1fe7ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_76a7c9587d10ef3cb9622c86b192fd49935c620f3edea478772d15fca1fe7ae9->leave($__internal_76a7c9587d10ef3cb9622c86b192fd49935c620f3edea478772d15fca1fe7ae9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
