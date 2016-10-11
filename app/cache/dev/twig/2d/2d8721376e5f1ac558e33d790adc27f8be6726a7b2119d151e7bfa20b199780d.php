<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b6702e6310873b845c0afcf20344ac2174bba3c28af2009ceeeb5f43a52e2940 extends Twig_Template
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
        $__internal_95a5f25ee2d9f60449a8522f6a0287b5d18025baed2e13554c45bfb2d667a0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a5f25ee2d9f60449a8522f6a0287b5d18025baed2e13554c45bfb2d667a0b2->enter($__internal_95a5f25ee2d9f60449a8522f6a0287b5d18025baed2e13554c45bfb2d667a0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_95a5f25ee2d9f60449a8522f6a0287b5d18025baed2e13554c45bfb2d667a0b2->leave($__internal_95a5f25ee2d9f60449a8522f6a0287b5d18025baed2e13554c45bfb2d667a0b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
