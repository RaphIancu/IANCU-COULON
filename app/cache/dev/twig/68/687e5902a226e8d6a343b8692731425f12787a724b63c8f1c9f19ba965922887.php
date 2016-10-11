<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_06489def89be5fe19db5039101a60fdba7b02143a9ad8e43a73d05c6e956a23e extends Twig_Template
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
        $__internal_2b0c193faee8e4b9eab79e027596a8ef96d6fc152f75be8e2b169f9c1f63ba86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0c193faee8e4b9eab79e027596a8ef96d6fc152f75be8e2b169f9c1f63ba86->enter($__internal_2b0c193faee8e4b9eab79e027596a8ef96d6fc152f75be8e2b169f9c1f63ba86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2b0c193faee8e4b9eab79e027596a8ef96d6fc152f75be8e2b169f9c1f63ba86->leave($__internal_2b0c193faee8e4b9eab79e027596a8ef96d6fc152f75be8e2b169f9c1f63ba86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
