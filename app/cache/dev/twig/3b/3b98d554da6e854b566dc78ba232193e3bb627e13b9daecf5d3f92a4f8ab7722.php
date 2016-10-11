<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_308e77ea364562c3033dcf8c6433cd62962db912aed04cfcad5cb91ebd403b95 extends Twig_Template
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
        $__internal_ec2e5e3508f25650c25cd8521a2ba67f5e00650ca4ecbfd0c8264bdf16caabed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2e5e3508f25650c25cd8521a2ba67f5e00650ca4ecbfd0c8264bdf16caabed->enter($__internal_ec2e5e3508f25650c25cd8521a2ba67f5e00650ca4ecbfd0c8264bdf16caabed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ec2e5e3508f25650c25cd8521a2ba67f5e00650ca4ecbfd0c8264bdf16caabed->leave($__internal_ec2e5e3508f25650c25cd8521a2ba67f5e00650ca4ecbfd0c8264bdf16caabed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
