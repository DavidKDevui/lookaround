<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* quisommesnous.html.twig */
class __TwigTemplate_f8d14911ce676dadb0d5ed04f1e04e82 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quisommesnous.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quisommesnous.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quisommesnous.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Qui sommes-nous ? - Réalisation de visites virtuelles à 360° ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/inoca.png"), "html", null, true);
        echo "\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tata.js"), "html", null, true);
        echo "\"></script>


    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "session", [], "any", false, false, false, 17), "flashbag", [], "any", false, false, false, 17), "get", [0 => "success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 18
            echo "        <script>
            tata.success(\"\", \"";
            // line 19
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "\", {
                duration: 3000,
                closeBtn: false,
                animate: \"slide\",    
            });
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "

    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "session", [], "any", false, false, false, 28), "flashbag", [], "any", false, false, false, 28), "get", [0 => "failed"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 29
            echo "        <script>
            tata.error(\"\", \"";
            // line 30
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "\", {
                duration: 3000,
                closeBtn: false,
                animate: \"slide\",       
            });
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "

<link rel=\"stylesheet\" href=\"https://cdn.pannellum.org/2.5/pannellum.css\"/>
<script type=\"text/javascript\" src=\"https://cdn.pannellum.org/2.5/pannellum.js\"></script>

<link href=\"https://vjs.zencdn.net/7.1.0/video-js.css\" rel=\"stylesheet\" type=\"text/css\">
<script src=\"https://vjs.zencdn.net/7.1.0/video.js\"></script>
 

<section class='Body-Section-White'>
    ";
        // line 47
        $this->loadTemplate("tools/navbar.html.twig", "quisommesnous.html.twig", 47)->display($context);
        // line 48
        echo "
    <section class='Cadre'>

        <div class='Partie-Exemples-5'>

            <h1 class=\"h1-titre-page\">L'histoire de look<span style=\"font-weight : 500; color: #219988;\">around®</span></h1>

            <p style=\"margin-top: 25px; text-align: left\">
                Fondée en 2023, lookaround est une société spécialisée dans la réalisation de visites virtuelles en France métropolitaine, en Belgique et dans le canton de Genève.

                A l'aide de caméras 360°, appareils de pointe spécialement conçus pour capturer des images panoramiques de la plus haute qualité, nous offrons des expériences virtuelles qui permettront à vos clients de découvrir des lieux sans quitter le confort de leur domicile ou de leur bureau. 
                
                Grâce à cette technologie, nous sommes en mesure de créer des visites virtuelles interactives qui vous plongent au cœur de chaque lieu que vous explorez.

                <br><br>Que ce soit pour des biens immobiliers, des musées, des restaurants, des hôtels ou des sites touristiques, nous offrons une solution complète pour présenter votre établissement de manière captivante. Nos visites virtuelles vous permettent de vous déplacer librement dans l'espace et d'obtenir une vision réaliste et virtuelle de chaque endroit.

                Notre équipe est dévouée à fournir un rendu de haute qualité, offrant des détails précis et une expérience utilisateur fluide. Nous travaillons en étroite collaboration avec nos clients pour comprendre leurs besoins spécifiques et offrir des solutions personnalisées qui mettent en valeur les caractéristiques uniques de chaque lieu.

                <br><br>Chez lookaround, nous sommes fiers de notre engagement envers l'innovation technologique et la qualité de nos services. Nous restons constamment à la pointe des dernières avancées en matière de visites virtuelles et nous nous efforçons de fournir une expérience exceptionnelle à chaque client. Notre réputation repose sur notre expertise, notre intégrité et notre engagement à offrir des résultats qui dépassent les attentes.

                Explorez notre site pour en savoir plus sur nos services de visites virtuelles et découvrez comment lookaround peut vous aider à présenter vos espaces de manière virtuelle et attrayante.
                
                <br><br>Contactez-nous dès aujourd'hui pour discuter de votre projet et laissez-nous vous montrer comment lookaround peut faire la différence.
            </p>
        </div>

    </section>

    ";
        // line 76
        $this->loadTemplate("tools/footer.html.twig", "quisommesnous.html.twig", 76)->display($context);
        // line 77
        echo "</section>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "quisommesnous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 77,  216 => 76,  186 => 48,  184 => 47,  172 => 37,  159 => 30,  156 => 29,  152 => 28,  148 => 26,  135 => 19,  132 => 18,  128 => 17,  122 => 14,  119 => 13,  109 => 12,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Qui sommes-nous ? - Réalisation de visites virtuelles à 360° {% endblock %}

{% block stylesheets %}

<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/inoca.png') }}\">

{% endblock %}

{% block body %}

<script src=\"{{ asset('js/tata.js') }}\"></script>


    {% for flash_message in app.session.flashbag.get('success') %}
        <script>
            tata.success(\"\", \"{{ flash_message }}\", {
                duration: 3000,
                closeBtn: false,
                animate: \"slide\",    
            });
        </script>
    {% endfor %}


    {% for flash_message in app.session.flashbag.get('failed') %}
        <script>
            tata.error(\"\", \"{{ flash_message }}\", {
                duration: 3000,
                closeBtn: false,
                animate: \"slide\",       
            });
        </script>
    {% endfor %}


<link rel=\"stylesheet\" href=\"https://cdn.pannellum.org/2.5/pannellum.css\"/>
<script type=\"text/javascript\" src=\"https://cdn.pannellum.org/2.5/pannellum.js\"></script>

<link href=\"https://vjs.zencdn.net/7.1.0/video-js.css\" rel=\"stylesheet\" type=\"text/css\">
<script src=\"https://vjs.zencdn.net/7.1.0/video.js\"></script>
 

<section class='Body-Section-White'>
    {% include 'tools/navbar.html.twig' %}

    <section class='Cadre'>

        <div class='Partie-Exemples-5'>

            <h1 class=\"h1-titre-page\">L'histoire de look<span style=\"font-weight : 500; color: #219988;\">around®</span></h1>

            <p style=\"margin-top: 25px; text-align: left\">
                Fondée en 2023, lookaround est une société spécialisée dans la réalisation de visites virtuelles en France métropolitaine, en Belgique et dans le canton de Genève.

                A l'aide de caméras 360°, appareils de pointe spécialement conçus pour capturer des images panoramiques de la plus haute qualité, nous offrons des expériences virtuelles qui permettront à vos clients de découvrir des lieux sans quitter le confort de leur domicile ou de leur bureau. 
                
                Grâce à cette technologie, nous sommes en mesure de créer des visites virtuelles interactives qui vous plongent au cœur de chaque lieu que vous explorez.

                <br><br>Que ce soit pour des biens immobiliers, des musées, des restaurants, des hôtels ou des sites touristiques, nous offrons une solution complète pour présenter votre établissement de manière captivante. Nos visites virtuelles vous permettent de vous déplacer librement dans l'espace et d'obtenir une vision réaliste et virtuelle de chaque endroit.

                Notre équipe est dévouée à fournir un rendu de haute qualité, offrant des détails précis et une expérience utilisateur fluide. Nous travaillons en étroite collaboration avec nos clients pour comprendre leurs besoins spécifiques et offrir des solutions personnalisées qui mettent en valeur les caractéristiques uniques de chaque lieu.

                <br><br>Chez lookaround, nous sommes fiers de notre engagement envers l'innovation technologique et la qualité de nos services. Nous restons constamment à la pointe des dernières avancées en matière de visites virtuelles et nous nous efforçons de fournir une expérience exceptionnelle à chaque client. Notre réputation repose sur notre expertise, notre intégrité et notre engagement à offrir des résultats qui dépassent les attentes.

                Explorez notre site pour en savoir plus sur nos services de visites virtuelles et découvrez comment lookaround peut vous aider à présenter vos espaces de manière virtuelle et attrayante.
                
                <br><br>Contactez-nous dès aujourd'hui pour discuter de votre projet et laissez-nous vous montrer comment lookaround peut faire la différence.
            </p>
        </div>

    </section>

    {% include 'tools/footer.html.twig' %}
</section>




{% endblock %}", "quisommesnous.html.twig", "C:\\Users\\utils\\Documents\\lookaround\\Website\\lookaround\\templates\\quisommesnous.html.twig");
    }
}
