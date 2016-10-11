<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_92c210db46b4c0c5b209e467b7cd296c68c491531ec6ddd174dfbb98e0fa63b5 extends Twig_Template
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
        $__internal_64d0abd72714ee275020c0d2ebf0d15253ecd63b2b82842a8954b8654d5ac7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d0abd72714ee275020c0d2ebf0d15253ecd63b2b82842a8954b8654d5ac7aa->enter($__internal_64d0abd72714ee275020c0d2ebf0d15253ecd63b2b82842a8954b8654d5ac7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_64d0abd72714ee275020c0d2ebf0d15253ecd63b2b82842a8954b8654d5ac7aa->leave($__internal_64d0abd72714ee275020c0d2ebf0d15253ecd63b2b82842a8954b8654d5ac7aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
