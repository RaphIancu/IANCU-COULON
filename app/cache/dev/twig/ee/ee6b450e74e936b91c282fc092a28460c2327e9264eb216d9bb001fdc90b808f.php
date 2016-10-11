<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e067b6e5aef9eff2b3b95d179fd81484177de389bc70b0663c7485a2cbcef191 extends Twig_Template
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
        $__internal_3157d76285fcc134b9dec64d7bf16879adce5d34db21669811876b5e33d9e8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3157d76285fcc134b9dec64d7bf16879adce5d34db21669811876b5e33d9e8d2->enter($__internal_3157d76285fcc134b9dec64d7bf16879adce5d34db21669811876b5e33d9e8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3157d76285fcc134b9dec64d7bf16879adce5d34db21669811876b5e33d9e8d2->leave($__internal_3157d76285fcc134b9dec64d7bf16879adce5d34db21669811876b5e33d9e8d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
