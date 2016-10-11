<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a99cab70f0451698144df1efdc834acb50bbfb562b85cda680694f54621642b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_f3a815e046ba4a2602db43dd2c5adbaa5434a17998c938c5fc585b5e7d6de4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a815e046ba4a2602db43dd2c5adbaa5434a17998c938c5fc585b5e7d6de4b2->enter($__internal_f3a815e046ba4a2602db43dd2c5adbaa5434a17998c938c5fc585b5e7d6de4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3a815e046ba4a2602db43dd2c5adbaa5434a17998c938c5fc585b5e7d6de4b2->leave($__internal_f3a815e046ba4a2602db43dd2c5adbaa5434a17998c938c5fc585b5e7d6de4b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7d7af459d52fcf6c3dd277506b8c0d2f3a38ea923d6db14dcf368bb7e4958a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d7af459d52fcf6c3dd277506b8c0d2f3a38ea923d6db14dcf368bb7e4958a7->enter($__internal_a7d7af459d52fcf6c3dd277506b8c0d2f3a38ea923d6db14dcf368bb7e4958a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a7d7af459d52fcf6c3dd277506b8c0d2f3a38ea923d6db14dcf368bb7e4958a7->leave($__internal_a7d7af459d52fcf6c3dd277506b8c0d2f3a38ea923d6db14dcf368bb7e4958a7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d893fee0c77960438ee9bfd913baf7967477a0d8ca586a254ef2bf7577739e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d893fee0c77960438ee9bfd913baf7967477a0d8ca586a254ef2bf7577739e50->enter($__internal_d893fee0c77960438ee9bfd913baf7967477a0d8ca586a254ef2bf7577739e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d893fee0c77960438ee9bfd913baf7967477a0d8ca586a254ef2bf7577739e50->leave($__internal_d893fee0c77960438ee9bfd913baf7967477a0d8ca586a254ef2bf7577739e50_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f01a91317d58b147338ad270509c5988f6c818dcc49ce0be207d0a944e92387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f01a91317d58b147338ad270509c5988f6c818dcc49ce0be207d0a944e92387->enter($__internal_4f01a91317d58b147338ad270509c5988f6c818dcc49ce0be207d0a944e92387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4f01a91317d58b147338ad270509c5988f6c818dcc49ce0be207d0a944e92387->leave($__internal_4f01a91317d58b147338ad270509c5988f6c818dcc49ce0be207d0a944e92387_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
