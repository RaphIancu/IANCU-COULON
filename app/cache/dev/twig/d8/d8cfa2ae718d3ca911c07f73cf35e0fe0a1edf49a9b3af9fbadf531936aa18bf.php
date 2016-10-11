<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_8920e305840d4119caf1c07dcbe12355d831f50c7e33294f9d0f4c9096ff7e93 extends Twig_Template
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
        $__internal_398a1a2eb2ad282ad749d5855f08af69efcfcf5f49050aa44e5373d36086e97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398a1a2eb2ad282ad749d5855f08af69efcfcf5f49050aa44e5373d36086e97a->enter($__internal_398a1a2eb2ad282ad749d5855f08af69efcfcf5f49050aa44e5373d36086e97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_398a1a2eb2ad282ad749d5855f08af69efcfcf5f49050aa44e5373d36086e97a->leave($__internal_398a1a2eb2ad282ad749d5855f08af69efcfcf5f49050aa44e5373d36086e97a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
