<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_af656883c85787ef353f4300594183a4b6cc3a8976015a7d4793751578ea1347 extends Twig_Template
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
        $__internal_c364e9acb3d2007d9089842aac34cc353794937ee6dc9ffaacc6093243743475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c364e9acb3d2007d9089842aac34cc353794937ee6dc9ffaacc6093243743475->enter($__internal_c364e9acb3d2007d9089842aac34cc353794937ee6dc9ffaacc6093243743475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c364e9acb3d2007d9089842aac34cc353794937ee6dc9ffaacc6093243743475->leave($__internal_c364e9acb3d2007d9089842aac34cc353794937ee6dc9ffaacc6093243743475_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
