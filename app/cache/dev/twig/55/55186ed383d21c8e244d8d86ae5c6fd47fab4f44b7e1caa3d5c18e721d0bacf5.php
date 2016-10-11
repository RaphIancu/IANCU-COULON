<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_4b03f68bdcc9029f3b5dfe16ba22b2bda6b36de16bd0062016173e56b3afae4e extends Twig_Template
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
        $__internal_930ca668df03e80c29cf0d005bd8ba11b99c37acac90deaf20e7bb1d01c3fc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930ca668df03e80c29cf0d005bd8ba11b99c37acac90deaf20e7bb1d01c3fc7e->enter($__internal_930ca668df03e80c29cf0d005bd8ba11b99c37acac90deaf20e7bb1d01c3fc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_930ca668df03e80c29cf0d005bd8ba11b99c37acac90deaf20e7bb1d01c3fc7e->leave($__internal_930ca668df03e80c29cf0d005bd8ba11b99c37acac90deaf20e7bb1d01c3fc7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
