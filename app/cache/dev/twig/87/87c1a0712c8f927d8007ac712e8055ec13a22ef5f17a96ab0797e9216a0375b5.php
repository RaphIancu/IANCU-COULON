<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_f7dd660b4590a154950aeeed2276010e68e2478f20f7a8f579739f7017d19abe extends Twig_Template
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
        $__internal_cdc9259130a2a43b8bf9f75fc568499df49c986faf33687816f2acff99ed2317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc9259130a2a43b8bf9f75fc568499df49c986faf33687816f2acff99ed2317->enter($__internal_cdc9259130a2a43b8bf9f75fc568499df49c986faf33687816f2acff99ed2317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_cdc9259130a2a43b8bf9f75fc568499df49c986faf33687816f2acff99ed2317->leave($__internal_cdc9259130a2a43b8bf9f75fc568499df49c986faf33687816f2acff99ed2317_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
