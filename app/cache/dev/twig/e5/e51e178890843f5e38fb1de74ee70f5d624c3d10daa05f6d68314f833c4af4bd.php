<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_562eb1c6aa4553a863a3343bf6102d7d539954de62537af9ab06912d71e59eef extends Twig_Template
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
        $__internal_1fbe8616bfeb59999bd1cbc89847fc9479d0870a86c343b3625a95c06e516112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fbe8616bfeb59999bd1cbc89847fc9479d0870a86c343b3625a95c06e516112->enter($__internal_1fbe8616bfeb59999bd1cbc89847fc9479d0870a86c343b3625a95c06e516112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1fbe8616bfeb59999bd1cbc89847fc9479d0870a86c343b3625a95c06e516112->leave($__internal_1fbe8616bfeb59999bd1cbc89847fc9479d0870a86c343b3625a95c06e516112_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
