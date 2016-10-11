<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_88b5619f6348f37d58eacffdebbbc73495cf3bf407edaae935d015cd4dfdd732 extends Twig_Template
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
        $__internal_b4bfe953f62f3472bb1d645378b9b4f7fe6b95865494536c38142248c4b4ece2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bfe953f62f3472bb1d645378b9b4f7fe6b95865494536c38142248c4b4ece2->enter($__internal_b4bfe953f62f3472bb1d645378b9b4f7fe6b95865494536c38142248c4b4ece2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b4bfe953f62f3472bb1d645378b9b4f7fe6b95865494536c38142248c4b4ece2->leave($__internal_b4bfe953f62f3472bb1d645378b9b4f7fe6b95865494536c38142248c4b4ece2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
