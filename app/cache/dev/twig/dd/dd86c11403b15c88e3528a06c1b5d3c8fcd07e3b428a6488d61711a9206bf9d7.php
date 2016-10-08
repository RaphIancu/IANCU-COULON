<?php

/* BibliothequeBundle:Autheur:editer.html.twig */
class __TwigTemplate_44650c946a10d1a07a3a121399c9fdcc9711c2e07244d75a158057f0f14d64c9 extends Twig_Template
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
        $__internal_26ac99c457af3b6582e8b9f8d791922e25e83dd45aa4d6cee5f81a6039a538cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ac99c457af3b6582e8b9f8d791922e25e83dd45aa4d6cee5f81a6039a538cd->enter($__internal_26ac99c457af3b6582e8b9f8d791922e25e83dd45aa4d6cee5f81a6039a538cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Autheur:editer.html.twig"));

        // line 1
        echo "<h1>Ajouter un autheur</h1>

";
        // line 3
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 4
            echo "<p class=\"message\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
";
        }
        // line 6
        echo "
<form action=\"\" method=\"post\" ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
<div class=\"error\">
\t";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
</div>
<table>
    <tr>
\t<td>";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "</td>
\t<td>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "</td>
        <td>";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'label');
        echo "</td>
        <td>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'label');
        echo "</td>
    </tr>
    <tr>
\t<td>
\t";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
\t</td>
\t<td>
\t";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
\t";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
\t</td>
\t<td>
\t";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'errors');
        echo "
\t";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'widget');
        echo "
\t</td>
\t<td>
\t";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
\t";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget');
        echo "
\t</td>        
    </tr>
</table>

";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<input type=\"submit\" />
</form>
<p><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_autheur_lister");
        echo "\">Retour à la liste des autheurs</a></p>";
        
        $__internal_26ac99c457af3b6582e8b9f8d791922e25e83dd45aa4d6cee5f81a6039a538cd->leave($__internal_26ac99c457af3b6582e8b9f8d791922e25e83dd45aa4d6cee5f81a6039a538cd_prof);

    }

    public function getTemplateName()
    {
        return "BibliothequeBundle:Autheur:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  110 => 38,  102 => 33,  98 => 32,  92 => 29,  88 => 28,  82 => 25,  78 => 24,  72 => 21,  68 => 20,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  42 => 9,  37 => 7,  34 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<h1>Ajouter un autheur</h1>

{% if message %}
<p class=\"message\">{{ message }}</p>
{% endif %}

<form action=\"\" method=\"post\" {{ form_enctype(form) }}>
<div class=\"error\">
\t{{ form_errors(form) }}
</div>
<table>
    <tr>
\t<td>{{ form_label(form.nom) }}</td>
\t<td>{{ form_label(form.prenom) }}</td>
        <td>{{ form_label(form.dateNaissance) }}</td>
        <td>{{ form_label(form.sexe) }}</td>
    </tr>
    <tr>
\t<td>
\t{{ form_errors(form.nom) }}
\t{{ form_widget(form.nom) }}
\t</td>
\t<td>
\t{{ form_errors(form.prenom) }}
\t{{ form_widget(form.prenom) }}
\t</td>
\t<td>
\t{{ form_errors(form.dateNaissance) }}
\t{{ form_widget(form.dateNaissance) }}
\t</td>
\t<td>
\t{{ form_errors(form.sexe) }}
\t{{ form_widget(form.sexe) }}
\t</td>        
    </tr>
</table>

{{ form_rest(form) }}

<input type=\"submit\" />
</form>
<p><a href=\"{{ path('myapp_autheur_lister') }}\">Retour à la liste des autheurs</a></p>";
    }
}
