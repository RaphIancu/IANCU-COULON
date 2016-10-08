<?php

/* BibliothequeBundle:Livre:voir.html.twig */
class __TwigTemplate_19285123a4968a7bc4cd98951f541e2fe5839a83b06806720e36d6c4199ff452 extends Twig_Template
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
        $__internal_58e0f9a98d7601605b59331f5d85d1b9362dcf71dc2f18a5e4ccf04f30eaf378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e0f9a98d7601605b59331f5d85d1b9362dcf71dc2f18a5e4ccf04f30eaf378->enter($__internal_58e0f9a98d7601605b59331f5d85d1b9362dcf71dc2f18a5e4ccf04f30eaf378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Livre:voir.html.twig"));

        // line 1
        echo "<html>
    <head>
        <title>Biblio Tech</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bibliotheque/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bibliotheque/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">
    </head>
    <body>
\t\t";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "\t</body>
</html>";
        
        $__internal_58e0f9a98d7601605b59331f5d85d1b9362dcf71dc2f18a5e4ccf04f30eaf378->leave($__internal_58e0f9a98d7601605b59331f5d85d1b9362dcf71dc2f18a5e4ccf04f30eaf378_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_67e7745478088729d0d979b02443cab80506cd9cc8bf43bcd310a60f311cbfda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e7745478088729d0d979b02443cab80506cd9cc8bf43bcd310a60f311cbfda->enter($__internal_67e7745478088729d0d979b02443cab80506cd9cc8bf43bcd310a60f311cbfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "\t\t<div class=\"jumbotron\">
\t\t\t<h1 class=\"text-center\"><i class=\"fa fa-book\" aria-hidden=\"true\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "titre", array()), "html", null, true);
        echo "</h1>
\t\t</div>
\t\t<p class=\"lead\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "description", array()), "html", null, true);
        echo "</p>

\t\t<p>Catégorie : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "categorie", array()), "nom", array()), "html", null, true);
        echo "</p>

\t\t<p>Autheurs</p>
\t\t<ul>
\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "autheurs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 21
            echo "\t\t    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nom", array()), "html", null, true);
            echo "</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</ul>

\t\t<p><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_livre_lister");
        echo "\">Retour à la liste des livres</a></p>

\t\t";
        
        $__internal_67e7745478088729d0d979b02443cab80506cd9cc8bf43bcd310a60f311cbfda->leave($__internal_67e7745478088729d0d979b02443cab80506cd9cc8bf43bcd310a60f311cbfda_prof);

    }

    public function getTemplateName()
    {
        return "BibliothequeBundle:Livre:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  91 => 23,  80 => 21,  76 => 20,  69 => 16,  64 => 14,  59 => 12,  56 => 11,  50 => 10,  42 => 28,  40 => 10,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSource()
    {
        return "<html>
    <head>
        <title>Biblio Tech</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/bibliotheque/css/style.css') }}\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/bibliotheque/css/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">
    </head>
    <body>
\t\t{% block content %}
\t\t<div class=\"jumbotron\">
\t\t\t<h1 class=\"text-center\"><i class=\"fa fa-book\" aria-hidden=\"true\"></i> {{ livre.titre }}</h1>
\t\t</div>
\t\t<p class=\"lead\">{{ livre.description }}</p>

\t\t<p>Catégorie : {{ livre.categorie.nom }}</p>

\t\t<p>Autheurs</p>
\t\t<ul>
\t\t{% for a in livre.autheurs %}
\t\t    <li>{{ a.prenom }} {{ a.nom}}</li>
\t\t{% endfor %}
\t\t</ul>

\t\t<p><a href=\"{{ path('myapp_livre_lister') }}\">Retour à la liste des livres</a></p>

\t\t{% endblock %}
\t</body>
</html>";
    }
}
