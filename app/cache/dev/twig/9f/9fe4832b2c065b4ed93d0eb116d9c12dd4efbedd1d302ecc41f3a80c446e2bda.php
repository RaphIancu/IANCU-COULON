<?php

/* ::base.html.twig */
class __TwigTemplate_86226f0e89e519b2e06794eac314acf6e54c31c0169cbcceef5fd866f5240fe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9be0947d1048c89155a42b943946f80475e6b370b31ad2bad6bbe88142a3d941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be0947d1048c89155a42b943946f80475e6b370b31ad2bad6bbe88142a3d941->enter($__internal_9be0947d1048c89155a42b943946f80475e6b370b31ad2bad6bbe88142a3d941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9be0947d1048c89155a42b943946f80475e6b370b31ad2bad6bbe88142a3d941->leave($__internal_9be0947d1048c89155a42b943946f80475e6b370b31ad2bad6bbe88142a3d941_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_00ddda7cd554fc5fac5b080f21d80916ffac9f0a1bda31c9693b5842408cb52b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ddda7cd554fc5fac5b080f21d80916ffac9f0a1bda31c9693b5842408cb52b->enter($__internal_00ddda7cd554fc5fac5b080f21d80916ffac9f0a1bda31c9693b5842408cb52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_00ddda7cd554fc5fac5b080f21d80916ffac9f0a1bda31c9693b5842408cb52b->leave($__internal_00ddda7cd554fc5fac5b080f21d80916ffac9f0a1bda31c9693b5842408cb52b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9702fbf08fbdf6b7f5c787b0ea40ffcafaaf5ce021113d2ec1138568b0ac6d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9702fbf08fbdf6b7f5c787b0ea40ffcafaaf5ce021113d2ec1138568b0ac6d7a->enter($__internal_9702fbf08fbdf6b7f5c787b0ea40ffcafaaf5ce021113d2ec1138568b0ac6d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9702fbf08fbdf6b7f5c787b0ea40ffcafaaf5ce021113d2ec1138568b0ac6d7a->leave($__internal_9702fbf08fbdf6b7f5c787b0ea40ffcafaaf5ce021113d2ec1138568b0ac6d7a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_34eb80e7d10c07f43cb7ad85412740c0bc50899a72556d2008462f79dc9d2f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34eb80e7d10c07f43cb7ad85412740c0bc50899a72556d2008462f79dc9d2f98->enter($__internal_34eb80e7d10c07f43cb7ad85412740c0bc50899a72556d2008462f79dc9d2f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_34eb80e7d10c07f43cb7ad85412740c0bc50899a72556d2008462f79dc9d2f98->leave($__internal_34eb80e7d10c07f43cb7ad85412740c0bc50899a72556d2008462f79dc9d2f98_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8d938037ee92a3b9b072e016a19a1c13896ee0697b25866764f28d8d4590c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d938037ee92a3b9b072e016a19a1c13896ee0697b25866764f28d8d4590c53->enter($__internal_f8d938037ee92a3b9b072e016a19a1c13896ee0697b25866764f28d8d4590c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f8d938037ee92a3b9b072e016a19a1c13896ee0697b25866764f28d8d4590c53->leave($__internal_f8d938037ee92a3b9b072e016a19a1c13896ee0697b25866764f28d8d4590c53_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
