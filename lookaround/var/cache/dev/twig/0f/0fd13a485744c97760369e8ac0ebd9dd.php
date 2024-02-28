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

/* conditionsgenerales.html.twig */
class __TwigTemplate_e6ecf6a1ca0b35444c8df5273524bd5f extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conditionsgenerales.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conditionsgenerales.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conditionsgenerales.html.twig", 1);
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

        echo " Conditions générales d'utilisation - Réalisation de visites virtuelles à 360° ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/inoca.png"), "html", null, true);
        echo "\"/>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tata.js"), "html", null, true);
        echo "\"></script>


    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "session", [], "any", false, false, false, 20), "flashbag", [], "any", false, false, false, 20), "get", [0 => "success"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 21
            echo "        <script>
            tata.success(\"\", \"";
            // line 22
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
        // line 29
        echo "

    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31), "flashbag", [], "any", false, false, false, 31), "get", [0 => "failed"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 32
            echo "        <script>
            tata.error(\"\", \"";
            // line 33
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
        // line 40
        echo "

<link rel=\"stylesheet\" href=\"https://cdn.pannellum.org/2.5/pannellum.css\"/>
<script type=\"text/javascript\" src=\"https://cdn.pannellum.org/2.5/pannellum.js\"></script>

<link href=\"https://vjs.zencdn.net/7.1.0/video-js.css\" rel=\"stylesheet\" type=\"text/css\">
<script src=\"https://vjs.zencdn.net/7.1.0/video.js\"></script>
 

<section class='Body-Section-White'>
    ";
        // line 50
        $this->loadTemplate("tools/navbar.html.twig", "conditionsgenerales.html.twig", 50)->display($context);
        // line 51
        echo "
    <section class='Cadre'>

        <div class='Partie-Exemples-5'  style=\"text-align: left\">

            <h1 class=\"h1-titre-page\">Conditions générales d'utilisation</h1>




    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">1. Droits et obligations des utilisateurs</h2>
    <p style=\"text-align: left\">
        <strong>2.1</strong> Vous avez le droit d'utiliser le service conformément aux présentes conditions d'utilisation et aux lois en vigueur.
    </p>
    <p style=\"text-align: left\">
        <strong>2.2</strong> Vous vous engagez à utiliser le service de manière légale, éthique et appropriée, en respectant les droits des autres utilisateurs et en vous abstenant de toute activité frauduleuse, abusive ou illégale.
    </p>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">2. Visites virtuelles et hébergement</h2>
    <p style=\"text-align: left\">
        <strong>3.1</strong> Nous vous livrerons votre visite virtuelle sous la forme d'un projet HTML. Durant au minimum un an après la livraison de vore visite, vous hébergerons cette dernière sur nos serveurs, ce qui fait que vous pourrez aussi directement intégrer la visite via une balise iFrame sur votre site Web .
    </p>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">3. Propriété intellectuelle</h2>
    <p style=\"text-align: left\">
        <strong>3.1</strong> Vous conservez tous les droits de propriété intellectuelle sur le contenu que vous fournissez à lookaround pour la création de la visite virtuelle de votre site.
    </p>
    <p style=\"text-align: left\">
        <strong>3.2</strong> En utilisant le service, vous accordez à lookaround une licence mondiale, non exclusive, transférable et libre de redevances pour héberger, reproduire et distribuer votre visite virtuelle à des fins de promotion et de marketing de lookaround.
    </p>


    </div>

    </section>

    ";
        // line 87
        $this->loadTemplate("tools/footer.html.twig", "conditionsgenerales.html.twig", 87)->display($context);
        // line 88
        echo "</section>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "conditionsgenerales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 88,  224 => 87,  186 => 51,  184 => 50,  172 => 40,  159 => 33,  156 => 32,  152 => 31,  148 => 29,  135 => 22,  132 => 21,  128 => 20,  122 => 17,  119 => 16,  109 => 15,  96 => 9,  92 => 8,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Conditions générales d'utilisation - Réalisation de visites virtuelles à 360° {% endblock %}


{% block stylesheets %}

<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\"/>
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/inoca.png') }}\"/>

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

            <h1 class=\"h1-titre-page\">Conditions générales d'utilisation</h1>




    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">1. Droits et obligations des utilisateurs</h2>
    <p style=\"text-align: left\">
        <strong>2.1</strong> Vous avez le droit d'utiliser le service conformément aux présentes conditions d'utilisation et aux lois en vigueur.
    </p>
    <p style=\"text-align: left\">
        <strong>2.2</strong> Vous vous engagez à utiliser le service de manière légale, éthique et appropriée, en respectant les droits des autres utilisateurs et en vous abstenant de toute activité frauduleuse, abusive ou illégale.
    </p>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">2. Visites virtuelles et hébergement</h2>
    <p style=\"text-align: left\">
        <strong>3.1</strong> Nous vous livrerons votre visite virtuelle sous la forme d'un projet HTML. Durant au minimum un an après la livraison de vore visite, vous hébergerons cette dernière sur nos serveurs, ce qui fait que vous pourrez aussi directement intégrer la visite via une balise iFrame sur votre site Web .
    </p>

    <h3 style=\"margin-top: 30px; font-size: 15px;text-align: left; padding: 0px 55px;\">3. Propriété intellectuelle</h2>
    <p style=\"text-align: left\">
        <strong>3.1</strong> Vous conservez tous les droits de propriété intellectuelle sur le contenu que vous fournissez à lookaround pour la création de la visite virtuelle de votre site.
    </p>
    <p style=\"text-align: left\">
        <strong>3.2</strong> En utilisant le service, vous accordez à lookaround une licence mondiale, non exclusive, transférable et libre de redevances pour héberger, reproduire et distribuer votre visite virtuelle à des fins de promotion et de marketing de lookaround.
    </p>


    </div>

    </section>

    {% include 'tools/footer.html.twig' %}
</section>




{% endblock %}", "conditionsgenerales.html.twig", "C:\\Users\\utils\\Documents\\lookaround\\Website\\lookaround\\templates\\conditionsgenerales.html.twig");
    }
}
