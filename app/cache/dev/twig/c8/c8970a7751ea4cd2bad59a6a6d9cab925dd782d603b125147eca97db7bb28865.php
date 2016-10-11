<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_fd7b4354493308df624165fc134375260d9673df72cd5feb0e68645d421592d3 extends Twig_Template
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
        $__internal_88b69215598bfad3ef2474eb441327b31e69b44b5a625efd40bf24339c43cf67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b69215598bfad3ef2474eb441327b31e69b44b5a625efd40bf24339c43cf67->enter($__internal_88b69215598bfad3ef2474eb441327b31e69b44b5a625efd40bf24339c43cf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_88b69215598bfad3ef2474eb441327b31e69b44b5a625efd40bf24339c43cf67->leave($__internal_88b69215598bfad3ef2474eb441327b31e69b44b5a625efd40bf24339c43cf67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
