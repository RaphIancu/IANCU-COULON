<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_da615251e8f0c0f2f580b525a2a486b2dbf84dac02a9d2f16121bc8320ba52b3 extends Twig_Template
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
        $__internal_dd9391a3b847831448369d7ee9093177e26f9e6087245ab4753c0f035ff13ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9391a3b847831448369d7ee9093177e26f9e6087245ab4753c0f035ff13ddc->enter($__internal_dd9391a3b847831448369d7ee9093177e26f9e6087245ab4753c0f035ff13ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd9391a3b847831448369d7ee9093177e26f9e6087245ab4753c0f035ff13ddc->leave($__internal_dd9391a3b847831448369d7ee9093177e26f9e6087245ab4753c0f035ff13ddc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_72e9d8a4a2aa420b9991519a89b4c72297dbc21f1cca7344d0119141235a91ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e9d8a4a2aa420b9991519a89b4c72297dbc21f1cca7344d0119141235a91ef->enter($__internal_72e9d8a4a2aa420b9991519a89b4c72297dbc21f1cca7344d0119141235a91ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_72e9d8a4a2aa420b9991519a89b4c72297dbc21f1cca7344d0119141235a91ef->leave($__internal_72e9d8a4a2aa420b9991519a89b4c72297dbc21f1cca7344d0119141235a91ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d042b33cfdb49e0ecb81ad22e796ca486d79b792a258c6f206ba87e55b0bd7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d042b33cfdb49e0ecb81ad22e796ca486d79b792a258c6f206ba87e55b0bd7bb->enter($__internal_d042b33cfdb49e0ecb81ad22e796ca486d79b792a258c6f206ba87e55b0bd7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d042b33cfdb49e0ecb81ad22e796ca486d79b792a258c6f206ba87e55b0bd7bb->leave($__internal_d042b33cfdb49e0ecb81ad22e796ca486d79b792a258c6f206ba87e55b0bd7bb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce3637fceccbb3c4ffb9828b6e6638d2e29a5d2f3de40a09202fb784136d527d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3637fceccbb3c4ffb9828b6e6638d2e29a5d2f3de40a09202fb784136d527d->enter($__internal_ce3637fceccbb3c4ffb9828b6e6638d2e29a5d2f3de40a09202fb784136d527d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ce3637fceccbb3c4ffb9828b6e6638d2e29a5d2f3de40a09202fb784136d527d->leave($__internal_ce3637fceccbb3c4ffb9828b6e6638d2e29a5d2f3de40a09202fb784136d527d_prof);

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
