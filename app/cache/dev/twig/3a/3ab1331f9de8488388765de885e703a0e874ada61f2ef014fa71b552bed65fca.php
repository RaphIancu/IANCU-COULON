<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0686ca3bcf566c4c13ce1ab6ccec15a2b8e080276c18a87267ce14b54f1a3d9b extends Twig_Template
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
        $__internal_80fa312492c7b8c32ab3ca1ee7863a9868f648851585e171f36b86e259a2689b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80fa312492c7b8c32ab3ca1ee7863a9868f648851585e171f36b86e259a2689b->enter($__internal_80fa312492c7b8c32ab3ca1ee7863a9868f648851585e171f36b86e259a2689b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_80fa312492c7b8c32ab3ca1ee7863a9868f648851585e171f36b86e259a2689b->leave($__internal_80fa312492c7b8c32ab3ca1ee7863a9868f648851585e171f36b86e259a2689b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
