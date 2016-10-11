<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_576e12d126e2f664c11ae24827ec35d871de3d9e632665d8742fbfdd3d58bc36 extends Twig_Template
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
        $__internal_cb9758190aae3f67b90a4e4c66e02f6e5262a0935e996725c64f18fd3d3e0ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9758190aae3f67b90a4e4c66e02f6e5262a0935e996725c64f18fd3d3e0ef9->enter($__internal_cb9758190aae3f67b90a4e4c66e02f6e5262a0935e996725c64f18fd3d3e0ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cb9758190aae3f67b90a4e4c66e02f6e5262a0935e996725c64f18fd3d3e0ef9->leave($__internal_cb9758190aae3f67b90a4e4c66e02f6e5262a0935e996725c64f18fd3d3e0ef9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
