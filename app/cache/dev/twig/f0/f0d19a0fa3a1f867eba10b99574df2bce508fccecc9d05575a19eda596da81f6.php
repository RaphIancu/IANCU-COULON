<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8d4efcfbbcaf9b51d39e520441827538f53eaf0e17409aa6b734f0911e0ce6b7 extends Twig_Template
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
        $__internal_1997c24315ab9394935bfc9701993b8e6347f7e2135f9eeed08da24e62aa62cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1997c24315ab9394935bfc9701993b8e6347f7e2135f9eeed08da24e62aa62cf->enter($__internal_1997c24315ab9394935bfc9701993b8e6347f7e2135f9eeed08da24e62aa62cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1997c24315ab9394935bfc9701993b8e6347f7e2135f9eeed08da24e62aa62cf->leave($__internal_1997c24315ab9394935bfc9701993b8e6347f7e2135f9eeed08da24e62aa62cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
