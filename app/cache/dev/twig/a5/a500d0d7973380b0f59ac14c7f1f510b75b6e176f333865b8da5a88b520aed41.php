<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a8ae94358e92824d207489a272a2cda4e6cfb0fee018302a5cc1db6a5bbe9a01 extends Twig_Template
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
        $__internal_7fe112f1e991cf6f18bfa618d47584489f3f9f75df8c3714168eccea94354a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe112f1e991cf6f18bfa618d47584489f3f9f75df8c3714168eccea94354a70->enter($__internal_7fe112f1e991cf6f18bfa618d47584489f3f9f75df8c3714168eccea94354a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7fe112f1e991cf6f18bfa618d47584489f3f9f75df8c3714168eccea94354a70->leave($__internal_7fe112f1e991cf6f18bfa618d47584489f3f9f75df8c3714168eccea94354a70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
