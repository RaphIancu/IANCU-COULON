<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_68064acfdc17a3d054610a4ee9821a14572aced4849adc524b650f9c8d1fa5eb extends Twig_Template
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
        $__internal_8bc6ec933d05ef8f251da3eaeddf6ea9ee13745177f5e8ac46d4e2b206a1e02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc6ec933d05ef8f251da3eaeddf6ea9ee13745177f5e8ac46d4e2b206a1e02b->enter($__internal_8bc6ec933d05ef8f251da3eaeddf6ea9ee13745177f5e8ac46d4e2b206a1e02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8bc6ec933d05ef8f251da3eaeddf6ea9ee13745177f5e8ac46d4e2b206a1e02b->leave($__internal_8bc6ec933d05ef8f251da3eaeddf6ea9ee13745177f5e8ac46d4e2b206a1e02b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
