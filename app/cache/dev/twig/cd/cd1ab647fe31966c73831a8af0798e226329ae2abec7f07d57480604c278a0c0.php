<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d6f61620f54bcb4c848526fe5e3e5947b576dcd0cfcdd8bfb2808dbe31bc38f2 extends Twig_Template
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
        $__internal_9f23b072b549ef0f9d4e47089d9d9faf71876c2c9f04b96ec10eba3a221d6fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f23b072b549ef0f9d4e47089d9d9faf71876c2c9f04b96ec10eba3a221d6fde->enter($__internal_9f23b072b549ef0f9d4e47089d9d9faf71876c2c9f04b96ec10eba3a221d6fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9f23b072b549ef0f9d4e47089d9d9faf71876c2c9f04b96ec10eba3a221d6fde->leave($__internal_9f23b072b549ef0f9d4e47089d9d9faf71876c2c9f04b96ec10eba3a221d6fde_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
