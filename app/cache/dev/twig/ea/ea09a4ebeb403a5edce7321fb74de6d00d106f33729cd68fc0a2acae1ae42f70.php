<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_936a94e875011eb5953a6dc9173f4f9649b0308bb27631f6b57a1a0adc1794b6 extends Twig_Template
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
        $__internal_bf30140c04afc5f7b4a56fb1908b54c2fee12d67d2100251069a0e58c4a8aa36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf30140c04afc5f7b4a56fb1908b54c2fee12d67d2100251069a0e58c4a8aa36->enter($__internal_bf30140c04afc5f7b4a56fb1908b54c2fee12d67d2100251069a0e58c4a8aa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_bf30140c04afc5f7b4a56fb1908b54c2fee12d67d2100251069a0e58c4a8aa36->leave($__internal_bf30140c04afc5f7b4a56fb1908b54c2fee12d67d2100251069a0e58c4a8aa36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
