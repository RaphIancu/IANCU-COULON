<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_01c976ff8cf76ef5c4b15f1d5ba22f1d84af0d2ca963c8fa3b96cc34c6b57ba5 extends Twig_Template
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
        $__internal_8e37394c1e9bc8fb57cef01539dc239e973ebd49668a7eac1a425bd98b05417e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e37394c1e9bc8fb57cef01539dc239e973ebd49668a7eac1a425bd98b05417e->enter($__internal_8e37394c1e9bc8fb57cef01539dc239e973ebd49668a7eac1a425bd98b05417e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8e37394c1e9bc8fb57cef01539dc239e973ebd49668a7eac1a425bd98b05417e->leave($__internal_8e37394c1e9bc8fb57cef01539dc239e973ebd49668a7eac1a425bd98b05417e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
