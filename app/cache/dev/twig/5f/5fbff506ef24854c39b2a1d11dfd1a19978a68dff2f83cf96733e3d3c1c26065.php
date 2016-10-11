<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_90d1ef51959afd59c8dbcb0f948c6a5a56c1c608577dbb3ac7e6568d319b565c extends Twig_Template
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
        $__internal_a85994d6825bfba49d4dd08f9e0de2177a1dc90aaa47495f5651e0bf72e6932f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85994d6825bfba49d4dd08f9e0de2177a1dc90aaa47495f5651e0bf72e6932f->enter($__internal_a85994d6825bfba49d4dd08f9e0de2177a1dc90aaa47495f5651e0bf72e6932f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a85994d6825bfba49d4dd08f9e0de2177a1dc90aaa47495f5651e0bf72e6932f->leave($__internal_a85994d6825bfba49d4dd08f9e0de2177a1dc90aaa47495f5651e0bf72e6932f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
