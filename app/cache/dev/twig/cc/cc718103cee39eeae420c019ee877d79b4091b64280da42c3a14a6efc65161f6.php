<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a9fa11f7a413b2812b3b8552daec49eba9558a917865011968d6323344b60b11 extends Twig_Template
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
        $__internal_b79125a147641e28f389cc5ddaf8c2c5473a2b3e1ea838c57a78d4a2296ebe63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79125a147641e28f389cc5ddaf8c2c5473a2b3e1ea838c57a78d4a2296ebe63->enter($__internal_b79125a147641e28f389cc5ddaf8c2c5473a2b3e1ea838c57a78d4a2296ebe63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b79125a147641e28f389cc5ddaf8c2c5473a2b3e1ea838c57a78d4a2296ebe63->leave($__internal_b79125a147641e28f389cc5ddaf8c2c5473a2b3e1ea838c57a78d4a2296ebe63_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
