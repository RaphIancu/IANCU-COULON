<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_93ff9c6c5d275cf8de8425564196bcc81c22363753d59887104d567a1997faa5 extends Twig_Template
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
        $__internal_5778ef068ebfa91de45a1e91d3d93d952ae4d36ee8051bbec3ad26859ee1fade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5778ef068ebfa91de45a1e91d3d93d952ae4d36ee8051bbec3ad26859ee1fade->enter($__internal_5778ef068ebfa91de45a1e91d3d93d952ae4d36ee8051bbec3ad26859ee1fade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5778ef068ebfa91de45a1e91d3d93d952ae4d36ee8051bbec3ad26859ee1fade->leave($__internal_5778ef068ebfa91de45a1e91d3d93d952ae4d36ee8051bbec3ad26859ee1fade_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
