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
        $__internal_75285ffb53107be28cda9d227659f4c909927fb8b5d0c9a53e90335c634736a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75285ffb53107be28cda9d227659f4c909927fb8b5d0c9a53e90335c634736a5->enter($__internal_75285ffb53107be28cda9d227659f4c909927fb8b5d0c9a53e90335c634736a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75285ffb53107be28cda9d227659f4c909927fb8b5d0c9a53e90335c634736a5->leave($__internal_75285ffb53107be28cda9d227659f4c909927fb8b5d0c9a53e90335c634736a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3caac77f9e9fb0a2e6909266bccc1eff8b14f502eaf9566edd41580b1e5b5fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3caac77f9e9fb0a2e6909266bccc1eff8b14f502eaf9566edd41580b1e5b5fb5->enter($__internal_3caac77f9e9fb0a2e6909266bccc1eff8b14f502eaf9566edd41580b1e5b5fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3caac77f9e9fb0a2e6909266bccc1eff8b14f502eaf9566edd41580b1e5b5fb5->leave($__internal_3caac77f9e9fb0a2e6909266bccc1eff8b14f502eaf9566edd41580b1e5b5fb5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7110121a4fddff140ed641c511cbb6c6431fc1695fe32c2839452cc2fa0edc06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7110121a4fddff140ed641c511cbb6c6431fc1695fe32c2839452cc2fa0edc06->enter($__internal_7110121a4fddff140ed641c511cbb6c6431fc1695fe32c2839452cc2fa0edc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7110121a4fddff140ed641c511cbb6c6431fc1695fe32c2839452cc2fa0edc06->leave($__internal_7110121a4fddff140ed641c511cbb6c6431fc1695fe32c2839452cc2fa0edc06_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfde2111613a957a446e3da746ceaf770b20489508e06e16f546d8997f9fd27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfde2111613a957a446e3da746ceaf770b20489508e06e16f546d8997f9fd27a->enter($__internal_cfde2111613a957a446e3da746ceaf770b20489508e06e16f546d8997f9fd27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cfde2111613a957a446e3da746ceaf770b20489508e06e16f546d8997f9fd27a->leave($__internal_cfde2111613a957a446e3da746ceaf770b20489508e06e16f546d8997f9fd27a_prof);

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
