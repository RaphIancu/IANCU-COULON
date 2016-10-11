<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4caf3cc38be62edfa1b20fafc89349c639198a1a88113bba56cf52d0b088e2f3 extends Twig_Template
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
        $__internal_1a23d32e4ad62e616dcbe0a45a26dbbd255d4aa71d6e3c50bf05864652dc3824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a23d32e4ad62e616dcbe0a45a26dbbd255d4aa71d6e3c50bf05864652dc3824->enter($__internal_1a23d32e4ad62e616dcbe0a45a26dbbd255d4aa71d6e3c50bf05864652dc3824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1a23d32e4ad62e616dcbe0a45a26dbbd255d4aa71d6e3c50bf05864652dc3824->leave($__internal_1a23d32e4ad62e616dcbe0a45a26dbbd255d4aa71d6e3c50bf05864652dc3824_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
