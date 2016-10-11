<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_54767bfb71420e793fa43de3db53e4d67eff87ee625a4406dd0139630330feb3 extends Twig_Template
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
        $__internal_54a190175e421d19f32ac6da3551687f570dfcde1974e2573730895f34a03269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a190175e421d19f32ac6da3551687f570dfcde1974e2573730895f34a03269->enter($__internal_54a190175e421d19f32ac6da3551687f570dfcde1974e2573730895f34a03269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_54a190175e421d19f32ac6da3551687f570dfcde1974e2573730895f34a03269->leave($__internal_54a190175e421d19f32ac6da3551687f570dfcde1974e2573730895f34a03269_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
