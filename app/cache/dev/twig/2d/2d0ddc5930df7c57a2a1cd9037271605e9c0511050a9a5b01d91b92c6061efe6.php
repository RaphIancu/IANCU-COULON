<?php

/* @Bibliotheque/layout.html.twig */
class __TwigTemplate_4f423251b7a9f16db0e5b4b8f45e7937f24034dadabc9bb3fd9424a8035eac75 extends Twig_Template
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
        $__internal_199b551ba6416f525cf7907b4fec12ebb6f04cc32551b8d9c8017e7a411eafe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199b551ba6416f525cf7907b4fec12ebb6f04cc32551b8d9c8017e7a411eafe9->enter($__internal_199b551ba6416f525cf7907b4fec12ebb6f04cc32551b8d9c8017e7a411eafe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Bibliotheque/layout.html.twig"));

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
                        <h4>Présentation</4>
                    </div>
                    <div class=\"col-xs-6 col-sm-4\">
                        <h4>Copyright</h4>
                    </div>
                    <div class=\"col-xs-6 col-sm-4\">
                        <h4>Créer par:</h4>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bibliotheque/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bibliotheque/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
        
        $__internal_199b551ba6416f525cf7907b4fec12ebb6f04cc32551b8d9c8017e7a411eafe9->leave($__internal_199b551ba6416f525cf7907b4fec12ebb6f04cc32551b8d9c8017e7a411eafe9_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_9a53d2230a8dab9d8c88c895bd5944f8f925891ea95bba5bc013d94494a4431d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a53d2230a8dab9d8c88c895bd5944f8f925891ea95bba5bc013d94494a4431d->enter($__internal_9a53d2230a8dab9d8c88c895bd5944f8f925891ea95bba5bc013d94494a4431d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "                ";
        
        $__internal_9a53d2230a8dab9d8c88c895bd5944f8f925891ea95bba5bc013d94494a4431d->leave($__internal_9a53d2230a8dab9d8c88c895bd5944f8f925891ea95bba5bc013d94494a4431d_prof);

    }

    public function getTemplateName()
    {
        return "@Bibliotheque/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  97 => 24,  87 => 43,  83 => 42,  65 => 26,  63 => 24,  55 => 19,  51 => 18,  47 => 17,  33 => 6,  29 => 5,  23 => 1,);
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
                        <h4>Présentation</4>
                    </div>
                    <div class=\"col-xs-6 col-sm-4\">
                        <h4>Copyright</h4>
                    </div>
                    <div class=\"col-xs-6 col-sm-4\">
                        <h4>Créer par:</h4>
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
