<?php

/* BibliothequeBundle:Autheur:editer.html.twig */
class __TwigTemplate_7641fdaf3c5cc9596f555903ad9494addb937e3c7b5bca44b740041c4fdc76da extends Twig_Template
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
        $__internal_609c21daf6098e248d94a24416a78b64c325a5514eb2ec9a174554af53447c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609c21daf6098e248d94a24416a78b64c325a5514eb2ec9a174554af53447c7d->enter($__internal_609c21daf6098e248d94a24416a78b64c325a5514eb2ec9a174554af53447c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle:Autheur:editer.html.twig"));

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
        <div id=\"page\">
            <div id=\"header\">
                <div class=\"jumbotron\">
        \t\t    <h1>Biblio Tech</h1>
                    <p>Créer ta propre biliothèque !</p>
                </div>
                <ul class=\"nav nav-pills nav-justified\">
                    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_accueil");
        echo "\" role=\"button\">Accueil</a></li>
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_livre_lister");
        echo "\" role=\"button\">Livres</a></li>
                    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_autheur_lister");
        echo "\" role=\"button\">Auteur</a></li>
                </ul>
            </div>
            <div id=\"content\">
\t            ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "\t\t\t</div>
\t\t</div>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bibliotheque/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bibliotheque/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
        
        $__internal_609c21daf6098e248d94a24416a78b64c325a5514eb2ec9a174554af53447c7d->leave($__internal_609c21daf6098e248d94a24416a78b64c325a5514eb2ec9a174554af53447c7d_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_8c13e732b380adc46d8eed70d24d6dde6321cd258efc630bfbd60e930e914f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c13e732b380adc46d8eed70d24d6dde6321cd258efc630bfbd60e930e914f3c->enter($__internal_8c13e732b380adc46d8eed70d24d6dde6321cd258efc630bfbd60e930e914f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "
\t\t\t\t<h1>Ajouter/Modifier un auteur</h1>

\t\t\t\t";
        // line 27
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 28
            echo "\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 32
        echo "
\t\t\t\t<form action=\"\" method=\"post\" ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t    <button type=\"submit\" class=\"btn btn-default btn-block\">Valider</button>
\t\t\t\t</form>
\t\t\t\t

\t\t\t\t<a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_autheur_lister");
        echo "\"><button type=\"button\" class=\"btn btn-secondary\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i> Retour</button></a>

\t\t\t\t";
        
        $__internal_8c13e732b380adc46d8eed70d24d6dde6321cd258efc630bfbd60e930e914f3c->leave($__internal_8c13e732b380adc46d8eed70d24d6dde6321cd258efc630bfbd60e930e914f3c_prof);

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
        return array (  119 => 39,  111 => 34,  107 => 33,  104 => 32,  98 => 29,  95 => 28,  93 => 27,  88 => 24,  82 => 23,  72 => 45,  68 => 44,  64 => 42,  62 => 23,  55 => 19,  51 => 18,  47 => 17,  33 => 6,  29 => 5,  23 => 1,);
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
        <div id=\"page\">
            <div id=\"header\">
                <div class=\"jumbotron\">
        \t\t    <h1>Biblio Tech</h1>
                    <p>Créer ta propre biliothèque !</p>
                </div>
                <ul class=\"nav nav-pills nav-justified\">
                    <li><a href=\"{{ path('myapp_accueil') }}\" role=\"button\">Accueil</a></li>
                    <li><a href=\"{{ path('myapp_livre_lister') }}\" role=\"button\">Livres</a></li>
                    <li><a href=\"{{ path('myapp_autheur_lister') }}\" role=\"button\">Auteur</a></li>
                </ul>
            </div>
            <div id=\"content\">
\t            {% block content %}

\t\t\t\t<h1>Ajouter/Modifier un auteur</h1>

\t\t\t\t{% if message %}
\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t\t{{ message }}
\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t<form action=\"\" method=\"post\" {{ form_enctype(form) }}>
\t\t\t\t    {{ form_widget(form) }}
\t\t\t\t    <button type=\"submit\" class=\"btn btn-default btn-block\">Valider</button>
\t\t\t\t</form>
\t\t\t\t

\t\t\t\t<a href=\"{{ path('myapp_autheur_lister') }}\"><button type=\"button\" class=\"btn btn-secondary\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i> Retour</button></a>

\t\t\t\t{% endblock %}
\t\t\t</div>
\t\t</div>
        <script src=\"{{ asset('bundles/bibliotheque/js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/bibliotheque/js/bootstrap.min.js') }}\"></script>
    </body>
</html>";
    }
}
