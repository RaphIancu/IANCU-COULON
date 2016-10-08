<?php

/* BibliothequeBundle:Livre:editer.html.twig */
class __TwigTemplate_555a8ae01747075c7471c909c38b14e113885592e8ba3bc1d227796207ef9b78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80a12dfd71050df8a81b240cf69369296cee121d93e8c27d61754e576484ac4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a12dfd71050df8a81b240cf69369296cee121d93e8c27d61754e576484ac4a->enter($__internal_80a12dfd71050df8a81b240cf69369296cee121d93e8c27d61754e576484ac4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Livre:editer.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_80a12dfd71050df8a81b240cf69369296cee121d93e8c27d61754e576484ac4a->leave($__internal_80a12dfd71050df8a81b240cf69369296cee121d93e8c27d61754e576484ac4a_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_a422d9cbe0f2a8061c12db0c950ce54dc7ed3b58531fd15a0c173b8579722ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a422d9cbe0f2a8061c12db0c950ce54dc7ed3b58531fd15a0c173b8579722ec3->enter($__internal_a422d9cbe0f2a8061c12db0c950ce54dc7ed3b58531fd15a0c173b8579722ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "
<h1>Ajouter un livre</h1>

";
        // line 5
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 6
            echo "<p>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
";
        }
        // line 8
        echo "<form action=\"\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" />
</form>
<p><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_livre_lister");
        echo "\">Retour à la liste des livres</a></p>

";
        
        $__internal_a422d9cbe0f2a8061c12db0c950ce54dc7ed3b58531fd15a0c173b8579722ec3->leave($__internal_a422d9cbe0f2a8061c12db0c950ce54dc7ed3b58531fd15a0c173b8579722ec3_prof);

    }

    public function getTemplateName()
    {
        return "BibliothequeBundle:Livre:editer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  53 => 9,  48 => 8,  42 => 6,  40 => 5,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block content %}

<h1>Ajouter un livre</h1>

{% if message %}
<p>{{ message }}</p>
{% endif %}
<form action=\"\" method=\"post\" {{ form_enctype(form) }}>
    {{ form_widget(form) }}
    <input type=\"submit\" />
</form>
<p><a href=\"{{ path('myapp_livre_lister') }}\">Retour à la liste des livres</a></p>

{% endblock %}";
    }
}
