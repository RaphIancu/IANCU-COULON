<?php

/* BibliothequeBundle:Autheur:liste.html.twig */
class __TwigTemplate_1bde4da812be554fe854fcba7fa3f00467c955123c0ff5cc1e59767466f4816b extends Twig_Template
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
        $__internal_e36b73fb4e8cfa6f03bf32aadc85144e702ee09fc50a1c19a0aa3e3a8b1d6a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36b73fb4e8cfa6f03bf32aadc85144e702ee09fc50a1c19a0aa3e3a8b1d6a2e->enter($__internal_e36b73fb4e8cfa6f03bf32aadc85144e702ee09fc50a1c19a0aa3e3a8b1d6a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Autheur:liste.html.twig"));

        // line 1
        echo "<table class=\"table\">
<thead>
\t<tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de naissance</th>
        <th>Sexe</th>
        <th>Modifications</th>
        <th>Suppression</th>
\t</tr>
</thead>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["autheurs"]) ? $context["autheurs"] : $this->getContext($context, "autheurs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 13
            echo "<tbody>
    <tr>
\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nom", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "dateNaissance", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "sexe", array()), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_autheur_modifier", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t<td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_autheur_supprimer", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
\t</tr>
</tbody>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "    <tr>
\t\t<td>Aucun autheur n'a été trouvé.</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</table>";
        
        $__internal_e36b73fb4e8cfa6f03bf32aadc85144e702ee09fc50a1c19a0aa3e3a8b1d6a2e->leave($__internal_e36b73fb4e8cfa6f03bf32aadc85144e702ee09fc50a1c19a0aa3e3a8b1d6a2e_prof);

    }

    public function getTemplateName()
    {
        return "BibliothequeBundle:Autheur:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  73 => 24,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  40 => 13,  35 => 12,  22 => 1,);
    }

    public function getSource()
    {
        return "<table class=\"table\">
<thead>
\t<tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de naissance</th>
        <th>Sexe</th>
        <th>Modifications</th>
        <th>Suppression</th>
\t</tr>
</thead>
{% for a in autheurs %}
<tbody>
    <tr>
\t\t<td>{{ a.nom }}</td>
\t\t<td>{{ a.prenom }}</td>
\t\t<td>{{ a.dateNaissance|date('d/m/Y') }}</td>
\t\t<td>{{ a.sexe }}</td>
\t\t<td><a href=\"{{ path('myapp_autheur_modifier', { 'id': a.id }) }}\">Modifier</a></td>
\t\t<td><a href=\"{{ path('myapp_autheur_supprimer', { 'id': a.id }) }}\">Supprimer</a></td>
\t</tr>
</tbody>
{% else %}
    <tr>
\t\t<td>Aucun autheur n'a été trouvé.</td>
    </tr>
{% endfor %}
</table>";
    }
}
