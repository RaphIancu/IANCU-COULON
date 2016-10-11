<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1e767072fb87784c4325be1bd28918982e8066eb4b27480376a533f7805141c9 extends Twig_Template
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
        $__internal_1cb4b16fc7089fbefbd493f702508ece899b6cbcf787459a140bb2f87b77c274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb4b16fc7089fbefbd493f702508ece899b6cbcf787459a140bb2f87b77c274->enter($__internal_1cb4b16fc7089fbefbd493f702508ece899b6cbcf787459a140bb2f87b77c274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1cb4b16fc7089fbefbd493f702508ece899b6cbcf787459a140bb2f87b77c274->leave($__internal_1cb4b16fc7089fbefbd493f702508ece899b6cbcf787459a140bb2f87b77c274_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
