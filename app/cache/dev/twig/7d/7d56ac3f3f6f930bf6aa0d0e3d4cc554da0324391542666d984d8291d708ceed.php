<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_2320cb68105c73224138ac854e68bd9df0322fcaa84b58ae06fc035d5e1f65d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a295f9d9159c07f7f3b496a89759e0a4671d79fc432ebff501e97fe32f76e983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a295f9d9159c07f7f3b496a89759e0a4671d79fc432ebff501e97fe32f76e983->enter($__internal_a295f9d9159c07f7f3b496a89759e0a4671d79fc432ebff501e97fe32f76e983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a295f9d9159c07f7f3b496a89759e0a4671d79fc432ebff501e97fe32f76e983->leave($__internal_a295f9d9159c07f7f3b496a89759e0a4671d79fc432ebff501e97fe32f76e983_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
