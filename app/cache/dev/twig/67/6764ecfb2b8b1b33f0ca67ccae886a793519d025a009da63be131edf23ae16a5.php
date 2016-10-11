<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e244f8a164e33259727235ff0309da0d152ddf813d85ec15b3ecbe9412ed2f44 extends Twig_Template
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
        $__internal_d75474c7240d182634ff08d16c41152123ff49d015d15e36fecfe5b1416abd73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75474c7240d182634ff08d16c41152123ff49d015d15e36fecfe5b1416abd73->enter($__internal_d75474c7240d182634ff08d16c41152123ff49d015d15e36fecfe5b1416abd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d75474c7240d182634ff08d16c41152123ff49d015d15e36fecfe5b1416abd73->leave($__internal_d75474c7240d182634ff08d16c41152123ff49d015d15e36fecfe5b1416abd73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
