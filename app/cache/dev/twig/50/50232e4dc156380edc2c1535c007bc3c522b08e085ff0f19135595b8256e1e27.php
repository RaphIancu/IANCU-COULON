<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bcc13d0f3e44bcb4f49970cd2a4acccc50941555535faf903ef108e130fbd503 extends Twig_Template
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
        $__internal_0a923e1d127f898bdc6263ff0f0a6f8b5335ed62e2016f53a74babf8b428c943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a923e1d127f898bdc6263ff0f0a6f8b5335ed62e2016f53a74babf8b428c943->enter($__internal_0a923e1d127f898bdc6263ff0f0a6f8b5335ed62e2016f53a74babf8b428c943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_0a923e1d127f898bdc6263ff0f0a6f8b5335ed62e2016f53a74babf8b428c943->leave($__internal_0a923e1d127f898bdc6263ff0f0a6f8b5335ed62e2016f53a74babf8b428c943_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
