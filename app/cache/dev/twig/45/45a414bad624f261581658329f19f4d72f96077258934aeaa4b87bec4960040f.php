<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_731e438d9f66c5d29184bda708b89121fd77b05934475d6a6bb62770aa2e83f1 extends Twig_Template
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
        $__internal_2f8bc36bd25fede412d6cd6ad0d5428b3dc834a3029a12791cfa649a90ee813c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8bc36bd25fede412d6cd6ad0d5428b3dc834a3029a12791cfa649a90ee813c->enter($__internal_2f8bc36bd25fede412d6cd6ad0d5428b3dc834a3029a12791cfa649a90ee813c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_2f8bc36bd25fede412d6cd6ad0d5428b3dc834a3029a12791cfa649a90ee813c->leave($__internal_2f8bc36bd25fede412d6cd6ad0d5428b3dc834a3029a12791cfa649a90ee813c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
