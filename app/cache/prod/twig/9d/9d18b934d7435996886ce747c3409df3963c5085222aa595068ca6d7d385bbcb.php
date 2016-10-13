<?php

/* BibliothequeBundle:Livre:voir.html.twig */
class __TwigTemplate_650a7cc590e12c55ebf4b6e5fd16501443140dadc29b586ad7c5d5cf4f7fc8c5 extends Twig_Template
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
        $__internal_58bbcce577720e7f6eec10021f081a9a16104e47d5fbe0d8f31bfb15443be488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58bbcce577720e7f6eec10021f081a9a16104e47d5fbe0d8f31bfb15443be488->enter($__internal_58bbcce577720e7f6eec10021f081a9a16104e47d5fbe0d8f31bfb15443be488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Livre:voir.html.twig"));

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
        // line 33
        echo "\t</body>
</html>

";
        
        $__internal_58bbcce577720e7f6eec10021f081a9a16104e47d5fbe0d8f31bfb15443be488->leave($__internal_58bbcce577720e7f6eec10021f081a9a16104e47d5fbe0d8f31bfb15443be488_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_7bd157e85f5beddada05edea114d07593e95a03e31402017d678e61a864b9a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd157e85f5beddada05edea114d07593e95a03e31402017d678e61a864b9a2c->enter($__internal_7bd157e85f5beddada05edea114d07593e95a03e31402017d678e61a864b9a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "\t\t<div class=\"jumbotron\" id=\"titre\">
\t\t\t<h1 class=\"text-center\"><i class=\"fa fa-book\" aria-hidden=\"true\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "titre", array()), "html", null, true);
        echo "</h1>
\t\t</div>
\t\t<div class=\"describe\">
\t\t<dl class=\"row\">
\t\t\t<dt class=\"col-sm-3\" id=\"sstitre\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i> Catégorie</dt>
\t\t\t<dd class=\"col-sm-9\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "categorie", array()), "nom", array()), "html", null, true);
        echo "</dd>
  \t\t\t<dt class=\"col-sm-3\"></br></dt>
\t\t\t<dd class=\"col-sm-9\"></br></dd>
  \t\t\t<dt class=\"col-sm-3\" id=\"sstitre\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> Auteurs</dt>
\t\t\t<dd class=\"col-sm-9\">
\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "autheurs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 23
            echo "\t\t\t    ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["a"], "prenom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["a"], "nom", array())), "html", null, true);
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</dd>
\t\t</dl>
\t\t<hr class=\"style\">

\t\t<p class=\"lead\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "description", array()), "html", null, true);
        echo "</p>

\t\t<a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_livre_lister");
        echo "\"><button type=\"button\" class=\"btn btn-secondary\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i> Retour</button></a>
\t\t</div>
\t\t";
        
        $__internal_7bd157e85f5beddada05edea114d07593e95a03e31402017d678e61a864b9a2c->leave($__internal_7bd157e85f5beddada05edea114d07593e95a03e31402017d678e61a864b9a2c_prof);

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
        return array (  103 => 30,  98 => 28,  92 => 24,  81 => 23,  77 => 22,  69 => 17,  61 => 12,  58 => 11,  52 => 10,  42 => 33,  40 => 10,  33 => 6,  29 => 5,  23 => 1,);
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
\t\t<div class=\"jumbotron\" id=\"titre\">
\t\t\t<h1 class=\"text-center\"><i class=\"fa fa-book\" aria-hidden=\"true\"></i> {{ livre.titre }}</h1>
\t\t</div>
\t\t<div class=\"describe\">
\t\t<dl class=\"row\">
\t\t\t<dt class=\"col-sm-3\" id=\"sstitre\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i> Catégorie</dt>
\t\t\t<dd class=\"col-sm-9\">{{ livre.categorie.nom }}</dd>
  \t\t\t<dt class=\"col-sm-3\"></br></dt>
\t\t\t<dd class=\"col-sm-9\"></br></dd>
  \t\t\t<dt class=\"col-sm-3\" id=\"sstitre\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> Auteurs</dt>
\t\t\t<dd class=\"col-sm-9\">
\t\t\t{% for a in livre.autheurs %}
\t\t\t    {{ a.prenom |capitalize }} {{ a.nom |upper}}
\t\t\t{% endfor %}</dd>
\t\t</dl>
\t\t<hr class=\"style\">

\t\t<p class=\"lead\">{{ livre.description }}</p>

\t\t<a href=\"{{ path('myapp_livre_lister') }}\"><button type=\"button\" class=\"btn btn-secondary\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i> Retour</button></a>
\t\t</div>
\t\t{% endblock %}
\t</body>
</html>

";
    }
}
