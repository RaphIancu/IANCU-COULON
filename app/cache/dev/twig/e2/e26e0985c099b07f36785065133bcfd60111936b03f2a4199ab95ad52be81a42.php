<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b268e52345f017dce1f0a8d8b3695d2e976a8743887aee8d65652df54ba66b7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_314460a06a1bb56c360c8e7ab129f28bdcc24fae935378edabf21fc72bf8e1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314460a06a1bb56c360c8e7ab129f28bdcc24fae935378edabf21fc72bf8e1a6->enter($__internal_314460a06a1bb56c360c8e7ab129f28bdcc24fae935378edabf21fc72bf8e1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_314460a06a1bb56c360c8e7ab129f28bdcc24fae935378edabf21fc72bf8e1a6->leave($__internal_314460a06a1bb56c360c8e7ab129f28bdcc24fae935378edabf21fc72bf8e1a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d15d19cc427bf6c21c99f630c0eb70b00e5f30901d5255a4af93af81f5884397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15d19cc427bf6c21c99f630c0eb70b00e5f30901d5255a4af93af81f5884397->enter($__internal_d15d19cc427bf6c21c99f630c0eb70b00e5f30901d5255a4af93af81f5884397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d15d19cc427bf6c21c99f630c0eb70b00e5f30901d5255a4af93af81f5884397->leave($__internal_d15d19cc427bf6c21c99f630c0eb70b00e5f30901d5255a4af93af81f5884397_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d8b452ffdf64dad3d12b15ae482b280f2c79807e6e8bcd650cba8fdee5d0243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8b452ffdf64dad3d12b15ae482b280f2c79807e6e8bcd650cba8fdee5d0243->enter($__internal_0d8b452ffdf64dad3d12b15ae482b280f2c79807e6e8bcd650cba8fdee5d0243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0d8b452ffdf64dad3d12b15ae482b280f2c79807e6e8bcd650cba8fdee5d0243->leave($__internal_0d8b452ffdf64dad3d12b15ae482b280f2c79807e6e8bcd650cba8fdee5d0243_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
