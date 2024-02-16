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

/* politiquecookies.html.twig */
class __TwigTemplate_d07fd6ad9d9cc39fb6e2fad82e756f68 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "politiquecookies.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "politiquecookies.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "politiquecookies.html.twig", 1);
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

        echo " Politique en matière de cookies - Réalisation de visites immersives à 360° ";
        
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
        $this->loadTemplate("tools/navbar.html.twig", "politiquecookies.html.twig", 47)->display($context);
        // line 48
        echo "
    <section class='Cadre'>

        <div class='Partie-Exemples-5' style=\"text-align: left\">

            <h1 class=\"h1-titre-page\">Politique en matière de cookies</h1>

            <h3 style=\"margin-top: 60px; font-size: 15px;text-align: left; padding: 0px 55px;\">1. Introduction</h2>
            <p style=\"text-align: left\">Nous utilisons des cookies et des technologies similaires sur notre site web pour améliorer votre expérience utilisateur et vous fournir des services personnalisés. Cette politique de cookies explique ce que sont les cookies, comment nous les utilisons et comment vous pouvez les gérer.
            </p>

            <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">2. Qu'est-ce qu'un cookie ?</h2>
            <p style=\"text-align: left\">
                Un cookie est un petit fichier texte qui est stocké sur votre ordinateur ou votre appareil mobile lorsque vous visitez notre site web. Les cookies nous permettent de vous reconnaître et de vous proposer des fonctionnalités personnalisées, comme la mémorisation de vos préférences de langue ou la conservation de votre panier d'achat.
            </p>

            <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">3. Comment utilisons-nous les cookies ?</h2>
            <p style=\"text-align: left\">
              Nous utilisons des cookies pour les finalités suivantes :
            </p>
            <ul style=\"margin-top: 8px; font-size: 14px;text-align: left; padding: 0px 75px; font-weight: 300\">
             <li  class=\"li-text\">Fonctionnalité : ces cookies sont nécessaires au bon fonctionnement de notre site web et nous permettent de mémoriser vos préférences de langue et vos informations de connexion.</li>

             <li  class=\"li-text\">Analyse : nous utilisons des cookies d'analyse pour collecter des données sur la manière dont les visiteurs utilisent notre site web. Ces données nous aident à améliorer nos services et à mieux comprendre les besoins de nos clients.</li>

            <li  class=\"li-text\"> Publicité : nous utilisons des cookies publicitaires pour afficher des publicités pertinentes et personnalisées en fonction de vos intérêts.</li>
            </ul>

            <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">4. Gestion des cookies</h2>
            <p style=\"text-align: left\">
               Vous pouvez gérer les cookies en modifiant les paramètres de votre navigateur. Vous pouvez choisir d'accepter ou de refuser les cookies, ou de demander une notification chaque fois qu'un cookie est utilisé. Veuillez noter que si vous refusez les cookies, certaines fonctionnalités de notre site web peuvent ne pas fonctionner correctement.
            </p>

            <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">5. Cookies tiers</h2>
            <p style=\"text-align: left\">
                Nous pouvons utiliser des cookies tiers sur notre site web pour des finalités d'analyse ou de publicité. Ces cookies sont placés par des tiers et nous n'avons pas le contrôle sur leur utilisation. Nous vous recommandons de consulter la politique de confidentialité et la politique de cookies de ces tiers pour en savoir plus sur leur utilisation des cookies.
            </p>

            <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">6. Modification de la politique de cookies</h2>
            <p style=\"text-align: left\">
               Nous nous réservons le droit de modifier cette politique de cookies à tout moment. Nous vous recommandons de consulter régulièrement cette politique pour être informé des éventuelles modifications.
            </p>
        </div>

    </section>

    ";
        // line 94
        $this->loadTemplate("tools/footer.html.twig", "politiquecookies.html.twig", 94)->display($context);
        // line 95
        echo "</section>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "politiquecookies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 95,  234 => 94,  186 => 48,  184 => 47,  172 => 37,  159 => 30,  156 => 29,  152 => 28,  148 => 26,  135 => 19,  132 => 18,  128 => 17,  122 => 14,  119 => 13,  109 => 12,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Politique en matière de cookies - Réalisation de visites immersives à 360° {% endblock %}

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

        <div class='Partie-Exemples-5' style=\"text-align: left\">

            <h1 class=\"h1-titre-page\">Politique en matière de cookies</h1>

            <h3 style=\"margin-top: 60px; font-size: 15px;text-align: left; padding: 0px 55px;\">1. Introduction</h2>
            <p style=\"text-align: left\">Nous utilisons des cookies et des technologies similaires sur notre site web pour améliorer votre expérience utilisateur et vous fournir des services personnalisés. Cette politique de cookies explique ce que sont les cookies, comment nous les utilisons et comment vous pouvez les gérer.
            </p>

            <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">2. Qu'est-ce qu'un cookie ?</h2>
            <p style=\"text-align: left\">
                Un cookie est un petit fichier texte qui est stocké sur votre ordinateur ou votre appareil mobile lorsque vous visitez notre site web. Les cookies nous permettent de vous reconnaître et de vous proposer des fonctionnalités personnalisées, comme la mémorisation de vos préférences de langue ou la conservation de votre panier d'achat.
            </p>

            <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">3. Comment utilisons-nous les cookies ?</h2>
            <p style=\"text-align: left\">
              Nous utilisons des cookies pour les finalités suivantes :
            </p>
            <ul style=\"margin-top: 8px; font-size: 14px;text-align: left; padding: 0px 75px; font-weight: 300\">
             <li  class=\"li-text\">Fonctionnalité : ces cookies sont nécessaires au bon fonctionnement de notre site web et nous permettent de mémoriser vos préférences de langue et vos informations de connexion.</li>

             <li  class=\"li-text\">Analyse : nous utilisons des cookies d'analyse pour collecter des données sur la manière dont les visiteurs utilisent notre site web. Ces données nous aident à améliorer nos services et à mieux comprendre les besoins de nos clients.</li>

            <li  class=\"li-text\"> Publicité : nous utilisons des cookies publicitaires pour afficher des publicités pertinentes et personnalisées en fonction de vos intérêts.</li>
            </ul>

            <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">4. Gestion des cookies</h2>
            <p style=\"text-align: left\">
               Vous pouvez gérer les cookies en modifiant les paramètres de votre navigateur. Vous pouvez choisir d'accepter ou de refuser les cookies, ou de demander une notification chaque fois qu'un cookie est utilisé. Veuillez noter que si vous refusez les cookies, certaines fonctionnalités de notre site web peuvent ne pas fonctionner correctement.
            </p>

            <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">5. Cookies tiers</h2>
            <p style=\"text-align: left\">
                Nous pouvons utiliser des cookies tiers sur notre site web pour des finalités d'analyse ou de publicité. Ces cookies sont placés par des tiers et nous n'avons pas le contrôle sur leur utilisation. Nous vous recommandons de consulter la politique de confidentialité et la politique de cookies de ces tiers pour en savoir plus sur leur utilisation des cookies.
            </p>

            <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">6. Modification de la politique de cookies</h2>
            <p style=\"text-align: left\">
               Nous nous réservons le droit de modifier cette politique de cookies à tout moment. Nous vous recommandons de consulter régulièrement cette politique pour être informé des éventuelles modifications.
            </p>
        </div>

    </section>

    {% include 'tools/footer.html.twig' %}
</section>




{% endblock %}", "politiquecookies.html.twig", "C:\\Users\\utils\\Documents\\lookaround\\Website\\lookaround\\templates\\politiquecookies.html.twig");
    }
}
