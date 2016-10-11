<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_ac18b65f3834468df57093b82fd006a86d1d01a29b2744ea3cf9d99e87626e4b extends Twig_Template
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
        $__internal_45a2e92147695c98713378a6f9415968fde13a4091188c2c127caf69c0575199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a2e92147695c98713378a6f9415968fde13a4091188c2c127caf69c0575199->enter($__internal_45a2e92147695c98713378a6f9415968fde13a4091188c2c127caf69c0575199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_45a2e92147695c98713378a6f9415968fde13a4091188c2c127caf69c0575199->leave($__internal_45a2e92147695c98713378a6f9415968fde13a4091188c2c127caf69c0575199_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
