<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_04e00efab065fbf50b48e9eb8c7de8bd524df039197efc2c047a1514e6b0f474 extends Twig_Template
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
        $__internal_ce1119f8ab9562a137158c40b8abef32fa38f4a586d3d6220acefc2e2a7f1210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1119f8ab9562a137158c40b8abef32fa38f4a586d3d6220acefc2e2a7f1210->enter($__internal_ce1119f8ab9562a137158c40b8abef32fa38f4a586d3d6220acefc2e2a7f1210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ce1119f8ab9562a137158c40b8abef32fa38f4a586d3d6220acefc2e2a7f1210->leave($__internal_ce1119f8ab9562a137158c40b8abef32fa38f4a586d3d6220acefc2e2a7f1210_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
