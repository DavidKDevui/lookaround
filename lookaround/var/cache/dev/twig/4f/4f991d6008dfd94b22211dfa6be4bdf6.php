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

/* realisations.html.twig */
class __TwigTemplate_18653506180f123db8fa4aeb46adc456 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "realisations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "realisations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "realisations.html.twig", 1);
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

        echo " Nos réalisations - Réalisation de visites virtuelles à 360° ";
        
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
<link rel=\"stylesheet\" href=\"https://cdn.pannellum.org/2.5/pannellum.css\"/>
<script type=\"text/javascript\" src=\"https://cdn.pannellum.org/2.5/pannellum.js\"></script>

<link href=\"https://vjs.zencdn.net/7.1.0/video-js.css\" rel=\"stylesheet\" type=\"text/css\">
<script src=\"https://vjs.zencdn.net/7.1.0/video.js\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tata.js"), "html", null, true);
        echo "\"></script>


    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "session", [], "any", false, false, false, 22), "flashbag", [], "any", false, false, false, 22), "get", [0 => "success"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 23
            echo "        <script>
            tata.success(\"\", \"";
            // line 24
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
        // line 31
        echo "

    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "session", [], "any", false, false, false, 33), "flashbag", [], "any", false, false, false, 33), "get", [0 => "failed"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 34
            echo "        <script>
            tata.error(\"\", \"";
            // line 35
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
        // line 42
        echo "


 
<section class='Body-Section-White'>

    ";
        // line 48
        $this->loadTemplate("tools/navbar.html.twig", "realisations.html.twig", 48)->display($context);
        // line 49
        echo "
    <section class='Cadre'>
        <div class='Partie-Exemples-5'>
            <h1 class=\"h1-titre-page\">Découvrez nos visites virtuelles précédemment réalisées</h1>
            <div class=\"visite-container-realisation\" style=\"text-align: center; margin-top: 20px;\">
                
                <div class=\"line-exemple-real\">
                    <div class=\"image\" onclick=\"window.open('https://visite.lookaround.fr/18476801/?startscene=0&startlookat=-0.25,1.02,123.94,0.35,0;', '_blank');\" style=\"border-radius: 0px;overflow: hidden;\">
                        <iframe class=\"image__img\" src=\"https://visite.lookaround.fr/18476801/?startscene=0&startlookat=2.33,-0.74,138.05,0.35,0;\" scrolling=\"no\" height=\"100%\" frameborder=\"0\" allowfullscreen></iframe>
                        
                        <div class=\"image__overlay image__overlay--primary\">
                            <div class=\"image__title\" style=\"font-size: 20px;\">Isifa Plus Values</div>
                            <p class=\"image__description\"  style=\"font-size: 14.5px !important;\">
                                3 Rue Vaudetard<br>92130 Issy-les-Moulineaux
                            </p>
                        </div>
                    </div>

                    <div class=\"image\" onclick=\"window.open('https://visite.lookaround.fr/18476803/?startscene=0&startlookat=-151.02,-4.19,123.94,0.35,0;', '_blank');\" style=\"border-radius: 0px;overflow: hidden;\">
                        <iframe class=\"image__img\" src=\"https://visite.lookaround.fr/18476803/?startscene=0&startlookat=-150.37,-6.29,138.05,0.35,0;\" scrolling=\"no\" height=\"100%\" frameborder=\"0\" allowfullscreen></iframe>
                        
                        <div class=\"image__overlay image__overlay--primary\">
                            <div class=\"image__title\" style=\"font-size: 20px;\">IHECF Paris</div>
                            <p class=\"image__description\"  style=\"font-size: 14.5px !important;\">
                                9 rue Saint-Lambert<br>75015 Paris 
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</section>
    ";
        // line 82
        $this->loadTemplate("tools/footer.html.twig", "realisations.html.twig", 82)->display($context);
        // line 83
        echo "</section>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "realisations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 83,  222 => 82,  187 => 49,  185 => 48,  177 => 42,  164 => 35,  161 => 34,  157 => 33,  153 => 31,  140 => 24,  137 => 23,  133 => 22,  127 => 19,  124 => 18,  114 => 17,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Nos réalisations - Réalisation de visites virtuelles à 360° {% endblock %}

{% block stylesheets %}

<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/inoca.png') }}\">
<link rel=\"stylesheet\" href=\"https://cdn.pannellum.org/2.5/pannellum.css\"/>
<script type=\"text/javascript\" src=\"https://cdn.pannellum.org/2.5/pannellum.js\"></script>

<link href=\"https://vjs.zencdn.net/7.1.0/video-js.css\" rel=\"stylesheet\" type=\"text/css\">
<script src=\"https://vjs.zencdn.net/7.1.0/video.js\"></script>

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



 
<section class='Body-Section-White'>

    {% include 'tools/navbar.html.twig' %}

    <section class='Cadre'>
        <div class='Partie-Exemples-5'>
            <h1 class=\"h1-titre-page\">Découvrez nos visites virtuelles précédemment réalisées</h1>
            <div class=\"visite-container-realisation\" style=\"text-align: center; margin-top: 20px;\">
                
                <div class=\"line-exemple-real\">
                    <div class=\"image\" onclick=\"window.open('https://visite.lookaround.fr/18476801/?startscene=0&startlookat=-0.25,1.02,123.94,0.35,0;', '_blank');\" style=\"border-radius: 0px;overflow: hidden;\">
                        <iframe class=\"image__img\" src=\"https://visite.lookaround.fr/18476801/?startscene=0&startlookat=2.33,-0.74,138.05,0.35,0;\" scrolling=\"no\" height=\"100%\" frameborder=\"0\" allowfullscreen></iframe>
                        
                        <div class=\"image__overlay image__overlay--primary\">
                            <div class=\"image__title\" style=\"font-size: 20px;\">Isifa Plus Values</div>
                            <p class=\"image__description\"  style=\"font-size: 14.5px !important;\">
                                3 Rue Vaudetard<br>92130 Issy-les-Moulineaux
                            </p>
                        </div>
                    </div>

                    <div class=\"image\" onclick=\"window.open('https://visite.lookaround.fr/18476803/?startscene=0&startlookat=-151.02,-4.19,123.94,0.35,0;', '_blank');\" style=\"border-radius: 0px;overflow: hidden;\">
                        <iframe class=\"image__img\" src=\"https://visite.lookaround.fr/18476803/?startscene=0&startlookat=-150.37,-6.29,138.05,0.35,0;\" scrolling=\"no\" height=\"100%\" frameborder=\"0\" allowfullscreen></iframe>
                        
                        <div class=\"image__overlay image__overlay--primary\">
                            <div class=\"image__title\" style=\"font-size: 20px;\">IHECF Paris</div>
                            <p class=\"image__description\"  style=\"font-size: 14.5px !important;\">
                                9 rue Saint-Lambert<br>75015 Paris 
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</section>
    {% include 'tools/footer.html.twig' %}
</section>




{% endblock %}", "realisations.html.twig", "C:\\Users\\utils\\Documents\\lookaround\\Website\\lookaround\\templates\\realisations.html.twig");
    }
}
