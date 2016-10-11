<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8700b1a53830e1237bcc9328a28f8888d9d2f53766cc2eb30089fe9b4c55ffcc extends Twig_Template
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
        $__internal_1c477302470d128a791c70f9b7006860f83da8c02b3ec67ced4a199861859373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c477302470d128a791c70f9b7006860f83da8c02b3ec67ced4a199861859373->enter($__internal_1c477302470d128a791c70f9b7006860f83da8c02b3ec67ced4a199861859373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1c477302470d128a791c70f9b7006860f83da8c02b3ec67ced4a199861859373->leave($__internal_1c477302470d128a791c70f9b7006860f83da8c02b3ec67ced4a199861859373_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
