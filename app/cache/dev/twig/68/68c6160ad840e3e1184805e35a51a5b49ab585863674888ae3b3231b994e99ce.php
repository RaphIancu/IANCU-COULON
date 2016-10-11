<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_86eb1357804b83559448ebd4db2491605dcd69d71e634306e171c8753402fa55 extends Twig_Template
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
        $__internal_b96580680a5e717f40c3e244118e1f40effec8d09be23bb722eae0a01c18b526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96580680a5e717f40c3e244118e1f40effec8d09be23bb722eae0a01c18b526->enter($__internal_b96580680a5e717f40c3e244118e1f40effec8d09be23bb722eae0a01c18b526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b96580680a5e717f40c3e244118e1f40effec8d09be23bb722eae0a01c18b526->leave($__internal_b96580680a5e717f40c3e244118e1f40effec8d09be23bb722eae0a01c18b526_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
