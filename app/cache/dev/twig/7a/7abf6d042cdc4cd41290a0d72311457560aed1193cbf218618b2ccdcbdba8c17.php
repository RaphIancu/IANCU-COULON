<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_54934369fb3ad382c97347abf0b9dcb1d776ab08f1d5c18829e77318ffba552e extends Twig_Template
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
        $__internal_1bfacef8e352a1cfa77755025e1cc71570a4c1d4cddbed96e54594cbfddaa142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfacef8e352a1cfa77755025e1cc71570a4c1d4cddbed96e54594cbfddaa142->enter($__internal_1bfacef8e352a1cfa77755025e1cc71570a4c1d4cddbed96e54594cbfddaa142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1bfacef8e352a1cfa77755025e1cc71570a4c1d4cddbed96e54594cbfddaa142->leave($__internal_1bfacef8e352a1cfa77755025e1cc71570a4c1d4cddbed96e54594cbfddaa142_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
