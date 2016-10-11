<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7524e91b239960134fb15066c82a49512239eccb012a5315dc0db50fc45e8928 extends Twig_Template
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
        $__internal_3b343602ddd287faaf8832c1acf8d32de866469aaaa9cf9911725293df0abf77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b343602ddd287faaf8832c1acf8d32de866469aaaa9cf9911725293df0abf77->enter($__internal_3b343602ddd287faaf8832c1acf8d32de866469aaaa9cf9911725293df0abf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3b343602ddd287faaf8832c1acf8d32de866469aaaa9cf9911725293df0abf77->leave($__internal_3b343602ddd287faaf8832c1acf8d32de866469aaaa9cf9911725293df0abf77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
