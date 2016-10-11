<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_95d3f8f53cb2eade40ee6633cc57a3a780dbca092e723c6969f59a1adc8b6b0b extends Twig_Template
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
        $__internal_3a6459a9a3510c9ba97dad8c6436c8cb83fb49a9c87cd9c59c646e70163e43cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6459a9a3510c9ba97dad8c6436c8cb83fb49a9c87cd9c59c646e70163e43cd->enter($__internal_3a6459a9a3510c9ba97dad8c6436c8cb83fb49a9c87cd9c59c646e70163e43cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_3a6459a9a3510c9ba97dad8c6436c8cb83fb49a9c87cd9c59c646e70163e43cd->leave($__internal_3a6459a9a3510c9ba97dad8c6436c8cb83fb49a9c87cd9c59c646e70163e43cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }
}
