<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0db7e9460396edf8cee38479a1bf512385dd5dada0ae1705f6403a8de6b2c98d extends Twig_Template
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
        $__internal_5a34f6fa11cd4f42c3457759aae8814e371fe2319cc30eba357dff9036c16903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a34f6fa11cd4f42c3457759aae8814e371fe2319cc30eba357dff9036c16903->enter($__internal_5a34f6fa11cd4f42c3457759aae8814e371fe2319cc30eba357dff9036c16903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5a34f6fa11cd4f42c3457759aae8814e371fe2319cc30eba357dff9036c16903->leave($__internal_5a34f6fa11cd4f42c3457759aae8814e371fe2319cc30eba357dff9036c16903_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
