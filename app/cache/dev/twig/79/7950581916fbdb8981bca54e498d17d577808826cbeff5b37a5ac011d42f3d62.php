<?php

/* @Bibliotheque/Livre/liste.html.twig */
class __TwigTemplate_88a4dd0728e2fa92230a74b7af170c31576d546c79681a868eaab04072119e4d extends Twig_Template
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
        $__internal_995301b59d15236cd43e8fb682f1d11b83a4054fc213f9ef9c4d913752425d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995301b59d15236cd43e8fb682f1d11b83a4054fc213f9ef9c4d913752425d6e->enter($__internal_995301b59d15236cd43e8fb682f1d11b83a4054fc213f9ef9c4d913752425d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Bibliotheque/Livre/liste.html.twig"));

        // line 1
        echo "<table class=\"table\">
<thead>
\t<tr>
        <th>Titre</th>
        <th>Description</th>
        <th>Lecture</th>
        <th>Modification</th>
        <th>Suppression</th>
\t</tr>
</thead>
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) ? $context["livres"] : $this->getContext($context, "livres")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 12
            echo "<tbody>
\t<tr>
\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "titre", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["f"], "description", array()), 50, false, "..."), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_livre_voir", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Voir</a></td>
\t\t<td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_livre_modifier", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t<td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_livre_supprimer", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
\t</tr>
</tbody>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "\t<tr>
\t\t<td>Aucun livre n’a été trouvé.</td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</table>



";
        
        $__internal_995301b59d15236cd43e8fb682f1d11b83a4054fc213f9ef9c4d913752425d6e->leave($__internal_995301b59d15236cd43e8fb682f1d11b83a4054fc213f9ef9c4d913752425d6e_prof);

    }

    public function getTemplateName()
    {
        return "@Bibliotheque/Livre/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 26,  68 => 22,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 12,  34 => 11,  22 => 1,);
    }

    public function getSource()
    {
        return "<table class=\"table\">
<thead>
\t<tr>
        <th>Titre</th>
        <th>Description</th>
        <th>Lecture</th>
        <th>Modification</th>
        <th>Suppression</th>
\t</tr>
</thead>
{% for f in livres %}
<tbody>
\t<tr>
\t\t<td>{{ f.titre }}</td>
\t\t<td>{{ f.description | truncate(50, false, \"...\") }}</td>
\t\t<td><a href=\"{{ path('myapp_livre_voir', { 'id': f.id }) }}\">Voir</a></td>
\t\t<td><a href=\"{{ path('myapp_livre_modifier', { 'id': f.id }) }}\">Modifier</a></td>
\t\t<td><a href=\"{{ path('myapp_livre_supprimer', { 'id': f.id }) }}\">Supprimer</a></td>
\t</tr>
</tbody>
{% else %}
\t<tr>
\t\t<td>Aucun livre n’a été trouvé.</td>
\t</tr>
{% endfor %}
</table>



";
    }
}
