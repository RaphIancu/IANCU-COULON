<?php

/* BibliothequeBundle::layout.html.twig */
class __TwigTemplate_95ed600fea14211004bbb4af76a7e69bad7dd9b57b28b8e72f1bd1a8cce9cc1a extends Twig_Template
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
        $__internal_28ef76b5d6f90525f736391f99a8b47537810c44dc8aec4d159b32f5d6c207eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ef76b5d6f90525f736391f99a8b47537810c44dc8aec4d159b32f5d6c207eb->enter($__internal_28ef76b5d6f90525f736391f99a8b47537810c44dc8aec4d159b32f5d6c207eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BibliothequeBundle::layout.html.twig"));

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
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_accueil");
        echo "\" role=\"button\">Accueil</a></li>
                    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_livre_lister");
        echo "\" role=\"button\">Livres</a></li>
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myapp_autheur_lister");
        echo "\" role=\"button\">Acteurs</a></li>
                </ul>
            </div>

            <div id=\"content\">
                ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 25
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
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bibliotheque/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bibliotheque/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
        
        $__internal_28ef76b5d6f90525f736391f99a8b47537810c44dc8aec4d159b32f5d6c207eb->leave($__internal_28ef76b5d6f90525f736391f99a8b47537810c44dc8aec4d159b32f5d6c207eb_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_f7c19d5c14c5368685d26153c865f1a059121b181293cedb7f1772fc61ab47c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c19d5c14c5368685d26153c865f1a059121b181293cedb7f1772fc61ab47c4->enter($__internal_f7c19d5c14c5368685d26153c865f1a059121b181293cedb7f1772fc61ab47c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "                ";
        
        $__internal_f7c19d5c14c5368685d26153c865f1a059121b181293cedb7f1772fc61ab47c4->leave($__internal_f7c19d5c14c5368685d26153c865f1a059121b181293cedb7f1772fc61ab47c4_prof);

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
        return array (  102 => 24,  96 => 23,  86 => 42,  82 => 41,  64 => 25,  62 => 23,  54 => 18,  50 => 17,  46 => 16,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSource()
    {
        return "<html>
    <head>
        <title>Biblio Tech</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/bibliotheque/css/style.css') }}\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/bibliotheque/css/bootstrap.min.css') }}\" />
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
                    <li><a href=\"{{ path('myapp_autheur_lister') }}\" role=\"button\">Acteurs</a></li>
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
