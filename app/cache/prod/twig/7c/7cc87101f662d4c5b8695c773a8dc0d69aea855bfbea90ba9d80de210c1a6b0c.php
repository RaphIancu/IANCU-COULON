<?php

/* BibliothequeBundle::layout.html.twig */
class __TwigTemplate_a1083a42fa3c265336fcc4d086a5c7d8b0acd94be3186ef1763c9f9dc259050c extends Twig_Template
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
        $__internal_318cd419295a4bf968a6b31e34476aa7c9690f0a28350a1c7eee74346e4853ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318cd419295a4bf968a6b31e34476aa7c9690f0a28350a1c7eee74346e4853ab->enter($__internal_318cd419295a4bf968a6b31e34476aa7c9690f0a28350a1c7eee74346e4853ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle::layout.html.twig"));

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
        echo "\" role=\"button\" class=\"menu\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Accueil</a></li>
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_livre_lister");
        echo "\" role=\"button\" class=\"menu\"><i class=\"fa fa-book\" aria-hidden=\"true\"></i> Livres</a></li>
                    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_autheur_lister");
        echo "\" role=\"button\" class=\"menu\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> Auteurs</a></li>
                </ul>
            </div>

            <div id=\"content\">
                ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "            </div>

            <div id=\"footer\">
                <div class=\"row\">
                    <div class=\"col-xs-6 col-sm-4\">
                        <h4>Présentation</h4>
                        <p>Vous pouvez référencer toutes vos lectures pour ne pas les oublier.</p>
                    </div>
                    <div class=\"col-xs-6 col-sm-4\">
                        <h4><i class=\"fa fa-copyright\" aria-hidden=\"true\"></i> Copyright</h4>
                        <p>Raphaël IANCU</br>Florent COULON</p>
                    </div>
                    <div class=\"col-xs-6 col-sm-4\">
                        <h4>Futures fonctionnalités</h4>
                        <p>Ce site sera amené à évoluer avec la mise en place de session utilisateur, de permettre de noter les livres...</p>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bibliotheque/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bibliotheque/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
        
        $__internal_318cd419295a4bf968a6b31e34476aa7c9690f0a28350a1c7eee74346e4853ab->leave($__internal_318cd419295a4bf968a6b31e34476aa7c9690f0a28350a1c7eee74346e4853ab_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_e03b881cec7a8d6a0952be9aa04dcc2137d56d8c21a1d0c289e4b3f43b26d832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03b881cec7a8d6a0952be9aa04dcc2137d56d8c21a1d0c289e4b3f43b26d832->enter($__internal_e03b881cec7a8d6a0952be9aa04dcc2137d56d8c21a1d0c289e4b3f43b26d832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "                ";
        
        $__internal_e03b881cec7a8d6a0952be9aa04dcc2137d56d8c21a1d0c289e4b3f43b26d832->leave($__internal_e03b881cec7a8d6a0952be9aa04dcc2137d56d8c21a1d0c289e4b3f43b26d832_prof);

    }

    public function getTemplateName()
    {
        return "BibliothequeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 25,  100 => 24,  90 => 46,  86 => 45,  65 => 26,  63 => 24,  55 => 19,  51 => 18,  47 => 17,  33 => 6,  29 => 5,  23 => 1,);
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
                    <li><a href=\"{{ path('myapp_accueil') }}\" role=\"button\" class=\"menu\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Accueil</a></li>
                    <li><a href=\"{{ path('myapp_livre_lister') }}\" role=\"button\" class=\"menu\"><i class=\"fa fa-book\" aria-hidden=\"true\"></i> Livres</a></li>
                    <li><a href=\"{{ path('myapp_autheur_lister') }}\" role=\"button\" class=\"menu\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> Auteurs</a></li>
                </ul>
            </div>

            <div id=\"content\">
                {% block content %}
                {% endblock %}
            </div>

            <div id=\"footer\">
                <div class=\"row\">
                    <div class=\"col-xs-6 col-sm-4\">
                        <h4>Présentation</h4>
                        <p>Vous pouvez référencer toutes vos lectures pour ne pas les oublier.</p>
                    </div>
                    <div class=\"col-xs-6 col-sm-4\">
                        <h4><i class=\"fa fa-copyright\" aria-hidden=\"true\"></i> Copyright</h4>
                        <p>Raphaël IANCU</br>Florent COULON</p>
                    </div>
                    <div class=\"col-xs-6 col-sm-4\">
                        <h4>Futures fonctionnalités</h4>
                        <p>Ce site sera amené à évoluer avec la mise en place de session utilisateur, de permettre de noter les livres...</p>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"{{ asset('bundles/bibliotheque/js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/bibliotheque/js/bootstrap.min.js') }}\"></script>
    </body>
</html>";
    }
}
