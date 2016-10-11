<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_bfddeb21e2fd1c044217755765185694a29d7ba3d3e3306bd7c0f65f09c1923f extends Twig_Template
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
        $__internal_708fbe3a70eff340f312cf858f965d1b139815e94fe630d5142154eff612e7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708fbe3a70eff340f312cf858f965d1b139815e94fe630d5142154eff612e7df->enter($__internal_708fbe3a70eff340f312cf858f965d1b139815e94fe630d5142154eff612e7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_708fbe3a70eff340f312cf858f965d1b139815e94fe630d5142154eff612e7df->leave($__internal_708fbe3a70eff340f312cf858f965d1b139815e94fe630d5142154eff612e7df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
