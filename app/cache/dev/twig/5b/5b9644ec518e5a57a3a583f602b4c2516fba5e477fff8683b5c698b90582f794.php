<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d2ddb331719ba080a861d8c93d0427a28a009e57ad71715c5af2c377089bdeba extends Twig_Template
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
        $__internal_7e38946762808011ba6fafd3c567b965af06915d0e0f4d118c885ef2a47bc2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e38946762808011ba6fafd3c567b965af06915d0e0f4d118c885ef2a47bc2fb->enter($__internal_7e38946762808011ba6fafd3c567b965af06915d0e0f4d118c885ef2a47bc2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_7e38946762808011ba6fafd3c567b965af06915d0e0f4d118c885ef2a47bc2fb->leave($__internal_7e38946762808011ba6fafd3c567b965af06915d0e0f4d118c885ef2a47bc2fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
