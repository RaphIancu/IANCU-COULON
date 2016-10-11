<?php

/* base.html.twig */
class __TwigTemplate_48a694a8a89a94fe51136165471f90ed736718651e145c2fd985bd32d737ce76 extends Twig_Template
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
        $__internal_b15fc74b4545200e9e1308c1a16cdb55b3ddd7495f5279c7efcbdc061dcf133e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15fc74b4545200e9e1308c1a16cdb55b3ddd7495f5279c7efcbdc061dcf133e->enter($__internal_b15fc74b4545200e9e1308c1a16cdb55b3ddd7495f5279c7efcbdc061dcf133e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b15fc74b4545200e9e1308c1a16cdb55b3ddd7495f5279c7efcbdc061dcf133e->leave($__internal_b15fc74b4545200e9e1308c1a16cdb55b3ddd7495f5279c7efcbdc061dcf133e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4669c9432e45e929b7ddb9d30e2a4380ff611b8c65cb7e85180bd9dce1fafea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4669c9432e45e929b7ddb9d30e2a4380ff611b8c65cb7e85180bd9dce1fafea4->enter($__internal_4669c9432e45e929b7ddb9d30e2a4380ff611b8c65cb7e85180bd9dce1fafea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4669c9432e45e929b7ddb9d30e2a4380ff611b8c65cb7e85180bd9dce1fafea4->leave($__internal_4669c9432e45e929b7ddb9d30e2a4380ff611b8c65cb7e85180bd9dce1fafea4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a6f3f767861167912796511b3331a8abecb4323ca8baecd61b23d08bcd8b51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6f3f767861167912796511b3331a8abecb4323ca8baecd61b23d08bcd8b51a->enter($__internal_2a6f3f767861167912796511b3331a8abecb4323ca8baecd61b23d08bcd8b51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2a6f3f767861167912796511b3331a8abecb4323ca8baecd61b23d08bcd8b51a->leave($__internal_2a6f3f767861167912796511b3331a8abecb4323ca8baecd61b23d08bcd8b51a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_927c7819c0bbdf67bbd46eeb86b18ba11baea061f79386238012cca5874e8e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927c7819c0bbdf67bbd46eeb86b18ba11baea061f79386238012cca5874e8e59->enter($__internal_927c7819c0bbdf67bbd46eeb86b18ba11baea061f79386238012cca5874e8e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_927c7819c0bbdf67bbd46eeb86b18ba11baea061f79386238012cca5874e8e59->leave($__internal_927c7819c0bbdf67bbd46eeb86b18ba11baea061f79386238012cca5874e8e59_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e994d6db32a4a024043a6e0bd22c62c5ef1d376eb78e9bcf59ef5e5b907ce210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e994d6db32a4a024043a6e0bd22c62c5ef1d376eb78e9bcf59ef5e5b907ce210->enter($__internal_e994d6db32a4a024043a6e0bd22c62c5ef1d376eb78e9bcf59ef5e5b907ce210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e994d6db32a4a024043a6e0bd22c62c5ef1d376eb78e9bcf59ef5e5b907ce210->leave($__internal_e994d6db32a4a024043a6e0bd22c62c5ef1d376eb78e9bcf59ef5e5b907ce210_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
