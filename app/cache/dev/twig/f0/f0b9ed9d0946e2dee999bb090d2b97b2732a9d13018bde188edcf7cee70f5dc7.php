<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_82414883360d649109803d15d9ec7d69371f2584f4cff719b5f2b9628673a964 extends Twig_Template
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
        $__internal_64884dc2f627ad1cce105e01abcaac0de92762bb61a6a2ea5fdefd30c1e2b186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64884dc2f627ad1cce105e01abcaac0de92762bb61a6a2ea5fdefd30c1e2b186->enter($__internal_64884dc2f627ad1cce105e01abcaac0de92762bb61a6a2ea5fdefd30c1e2b186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_64884dc2f627ad1cce105e01abcaac0de92762bb61a6a2ea5fdefd30c1e2b186->leave($__internal_64884dc2f627ad1cce105e01abcaac0de92762bb61a6a2ea5fdefd30c1e2b186_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
