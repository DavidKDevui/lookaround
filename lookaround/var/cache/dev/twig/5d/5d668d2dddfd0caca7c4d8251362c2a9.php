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

/* politiqueconfidentialite.html.twig */
class __TwigTemplate_41b1dd4e45ee93f382e5b8a862df403f extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "politiqueconfidentialite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "politiqueconfidentialite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "politiqueconfidentialite.html.twig", 1);
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

        echo " Politique de confidentialité - Réalisation de visites virtuelles à 360° ";
        
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
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tata.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tata.js"), "html", null, true);
        echo "\"></script>


    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "session", [], "any", false, false, false, 18), "flashbag", [], "any", false, false, false, 18), "get", [0 => "success"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 19
            echo "        <script>
            tata.success(\"\", \"";
            // line 20
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
        // line 27
        echo "

    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "session", [], "any", false, false, false, 29), "flashbag", [], "any", false, false, false, 29), "get", [0 => "failed"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 30
            echo "        <script>
            tata.error(\"\", \"";
            // line 31
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
        // line 38
        echo "

<link rel=\"stylesheet\" href=\"https://cdn.pannellum.org/2.5/pannellum.css\"/>
<script type=\"text/javascript\" src=\"https://cdn.pannellum.org/2.5/pannellum.js\"></script>

<link href=\"https://vjs.zencdn.net/7.1.0/video-js.css\" rel=\"stylesheet\" type=\"text/css\">
<script src=\"https://vjs.zencdn.net/7.1.0/video.js\"></script>
 

<section class='Body-Section-White'>
    ";
        // line 48
        $this->loadTemplate("tools/navbar.html.twig", "politiqueconfidentialite.html.twig", 48)->display($context);
        // line 49
        echo "
    <section class='Cadre'>

        <div class='Partie-Exemples-5'  style=\"text-align: left\">

            <h1 class=\"h1-titre-page\">Politique de confidentialité</h1>

    <h3 style=\"margin-top: 60px; font-size: 15px;text-align: left; padding: 0px 55px;\">1. Introduction</h3>
    <p style=\"text-align: left\">Nous prenons très au sérieux la protection de vos données personnelles et nous nous engageons à respecter la législation en vigueur en matière de protection des données. Cette politique de confidentialité a pour objectif de vous informer sur la manière dont nous collectons, traitons et utilisons vos données personnelles.</p>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">2. Données personnelles collectées</h3>
    <p style=\"text-align: left\">Nous collectons les données personnelles suivantes :</p>
    <ul style=\"margin-top: 8px; font-size: 14px;text-align: left; padding: 0px 75px; font-weight: 300\">
        <li class=\"li-text\">Nom de société</li>
        <li class=\"li-text\">Adresse e-mail</li>
        <li class=\"li-text\">Adresses postale</li>
        <li class=\"li-text\">Numéro de téléphone</li>
    </ul>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">3. Finalités de la collecte de données</h3>
    <p style=\"text-align: left\">Nous collectons vos données personnelles pour les finalités suivantes :</p>
    <ul style=\"margin-top: 8px; font-size: 14px;text-align: left; padding: 0px 75px; font-weight: 300\">
        <li class=\"li-text\">Traitement des commandes : nous avons besoin de vos données personnelles pour traiter et livrer votre commande.</li>
        <li class=\"li-text\">Amélioration de nos services : nous utilisons vos données personnelles pour améliorer nos services et mieux répondre à vos besoins.</li>
    </ul>
    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">4. Durée de conservation des données</h3>
    <p style=\"text-align: left\">Nous conservons vos données personnelles pendant la durée nécessaire à la réalisation des finalités pour lesquelles elles ont été collectées, sauf si une durée de conservation plus longue est exigée ou autorisée par la loi.</p>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">5. Sécurité des données</h3>
    <p style=\"text-align: left\">Nous avons mis en place des mesures de sécurité techniques et organisationnelles appropriées pour protéger vos données personnelles contre toute perte, destruction, altération ou divulgation non autorisée.</p>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">6. Partage des données</h3>
    <p style=\"text-align: left\">Nous ne partageons pas vos données personnelles avec des tiers, sauf si cela est nécessaire pour la réalisation des finalités pour lesquelles elles ont été collectées, ou si nous sommes tenus de le faire par la loi.</p>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">7. Droits des personnes concernées</h3>
    <p style=\"text-align: left\">Vous avez le droit de demander l'accès, la rectification ou la suppression de vos données personnelles. Vous avez également le droit de demander la limitation du traitement de vos données personnelles ou de vous opposer à leur traitement. Pour exercer vos droits, vous pouvez nous contacter <a href='";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index_scroll");
        echo "'>ici</a>.</p>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">8. Contact</h3>
    <p style=\"text-align: left\">Si vous avez des questions ou des préoccupations concernant cette politique de confidentialité, vous pouvez nous contacter  <a href='";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index_scroll");
        echo "'>ici</a></p>

        </div>

    </section>

    ";
        // line 93
        $this->loadTemplate("tools/footer.html.twig", "politiqueconfidentialite.html.twig", 93)->display($context);
        // line 94
        echo "</section>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "politiqueconfidentialite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 94,  242 => 93,  233 => 87,  227 => 84,  190 => 49,  188 => 48,  176 => 38,  163 => 31,  160 => 30,  156 => 29,  152 => 27,  139 => 20,  136 => 19,  132 => 18,  126 => 15,  123 => 14,  113 => 13,  100 => 9,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Politique de confidentialité - Réalisation de visites virtuelles à 360° {% endblock %}

{% block stylesheets %}

<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/inoca.png') }}\">
<script src=\"{{ asset('js/tata.js') }}\"></script>

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

        <div class='Partie-Exemples-5'  style=\"text-align: left\">

            <h1 class=\"h1-titre-page\">Politique de confidentialité</h1>

    <h3 style=\"margin-top: 60px; font-size: 15px;text-align: left; padding: 0px 55px;\">1. Introduction</h3>
    <p style=\"text-align: left\">Nous prenons très au sérieux la protection de vos données personnelles et nous nous engageons à respecter la législation en vigueur en matière de protection des données. Cette politique de confidentialité a pour objectif de vous informer sur la manière dont nous collectons, traitons et utilisons vos données personnelles.</p>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">2. Données personnelles collectées</h3>
    <p style=\"text-align: left\">Nous collectons les données personnelles suivantes :</p>
    <ul style=\"margin-top: 8px; font-size: 14px;text-align: left; padding: 0px 75px; font-weight: 300\">
        <li class=\"li-text\">Nom de société</li>
        <li class=\"li-text\">Adresse e-mail</li>
        <li class=\"li-text\">Adresses postale</li>
        <li class=\"li-text\">Numéro de téléphone</li>
    </ul>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">3. Finalités de la collecte de données</h3>
    <p style=\"text-align: left\">Nous collectons vos données personnelles pour les finalités suivantes :</p>
    <ul style=\"margin-top: 8px; font-size: 14px;text-align: left; padding: 0px 75px; font-weight: 300\">
        <li class=\"li-text\">Traitement des commandes : nous avons besoin de vos données personnelles pour traiter et livrer votre commande.</li>
        <li class=\"li-text\">Amélioration de nos services : nous utilisons vos données personnelles pour améliorer nos services et mieux répondre à vos besoins.</li>
    </ul>
    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">4. Durée de conservation des données</h3>
    <p style=\"text-align: left\">Nous conservons vos données personnelles pendant la durée nécessaire à la réalisation des finalités pour lesquelles elles ont été collectées, sauf si une durée de conservation plus longue est exigée ou autorisée par la loi.</p>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">5. Sécurité des données</h3>
    <p style=\"text-align: left\">Nous avons mis en place des mesures de sécurité techniques et organisationnelles appropriées pour protéger vos données personnelles contre toute perte, destruction, altération ou divulgation non autorisée.</p>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">6. Partage des données</h3>
    <p style=\"text-align: left\">Nous ne partageons pas vos données personnelles avec des tiers, sauf si cela est nécessaire pour la réalisation des finalités pour lesquelles elles ont été collectées, ou si nous sommes tenus de le faire par la loi.</p>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">7. Droits des personnes concernées</h3>
    <p style=\"text-align: left\">Vous avez le droit de demander l'accès, la rectification ou la suppression de vos données personnelles. Vous avez également le droit de demander la limitation du traitement de vos données personnelles ou de vous opposer à leur traitement. Pour exercer vos droits, vous pouvez nous contacter <a href='{{ path('app_index_scroll')}}'>ici</a>.</p>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">8. Contact</h3>
    <p style=\"text-align: left\">Si vous avez des questions ou des préoccupations concernant cette politique de confidentialité, vous pouvez nous contacter  <a href='{{ path('app_index_scroll')}}'>ici</a></p>

        </div>

    </section>

    {% include 'tools/footer.html.twig' %}
</section>




{% endblock %}", "politiqueconfidentialite.html.twig", "C:\\Users\\utils\\Documents\\lookaround\\Website\\lookaround\\templates\\politiqueconfidentialite.html.twig");
    }
}
