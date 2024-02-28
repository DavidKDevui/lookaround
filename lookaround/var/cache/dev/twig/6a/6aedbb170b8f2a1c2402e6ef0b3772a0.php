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

/* trouvervisite.html.twig */
class __TwigTemplate_5534928a62af31971670eca64f97a81d extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trouvervisite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trouvervisite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trouvervisite.html.twig", 1);
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

        echo " Trouver une visite - Réalisation de visites virtuelles à 360° ";
        
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
";
        // line 15
        $context["listKeys"] = [];
        // line 16
        echo "
";
        // line 17
        if (array_key_exists("photos", $context)) {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 19
                echo "        ";
                $context["listKeys"] = twig_array_merge((isset($context["listKeys"]) || array_key_exists("listKeys", $context) ? $context["listKeys"] : (function () { throw new RuntimeError('Variable "listKeys" does not exist.', 19, $this->source); })()), [$context["key"] => $context["value"]]);
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 22
        echo "


<section class='Body-Section-White'>

";
        // line 27
        $this->loadTemplate("tools/navbar.html.twig", "trouvervisite.html.twig", 27)->display($context);
        // line 28
        echo "
<section class='Cadre'>

<div class='Partie-Exemples-5'>

<h1 class=\"h1-titre-page\">Recherchez une visite à l'aide d'un numéro de référence</h1>

<br><br>

 <div style=\"text-align: center; margin-top: 75px; margin-bottom: 120px\">
    <input class=\"gros-input\" type=\"text\" id=\"id\" name=\"id\" value=\"\" minLength=\"8\" maxlength=\"8\" placeholder=\"Entrez votre numéro de référence\"/><br>
    <input type=\"button\" value=\"Trouver une visite\" id=\"go-visite\" onclick=\"getVisitesListe(inputId.value)\" class=\"reserver-creneau-btn3\"  style=\"width: 200px; opacity: 0.55; pointer-events: none;\"/>
</div>


";
        // line 43
        if ( !array_key_exists("photos", $context)) {
            // line 44
            echo "    ";
            if (array_key_exists("info", $context)) {
                // line 45
                echo "        <p>";
                echo twig_escape_filter($this->env, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 45, $this->source); })()), "html", null, true);
                echo "</p>
    ";
            }
            // line 46
            echo " 

";
        } else {
            // line 49
            echo "

<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css\"/>
<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js\"></script>

<div id=\"panorama\"></div>

<script>
    var photos = ";
            // line 57
            echo json_encode((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 57, $this->source); })()));
            echo ";
    /*console.log(photos['Salon'])*/

    var panoramaParams = (";
            // line 60
            echo json_encode((isset($context["jsonSample"]) || array_key_exists("jsonSample", $context) ? $context["jsonSample"] : (function () { throw new RuntimeError('Variable "jsonSample" does not exist.', 60, $this->source); })()));
            echo ")
   /* console.log(panoramaParams)*/

    for (var key in photos) {
        var remplacement = \"{photos.\" + key + \"}\";
       /* console.log(remplacement)*/
        panoramaParams = panoramaParams.replace('{' + remplacement + '}', photos[key])   
    }
    
    pannellum.viewer('panorama', JSON.parse(panoramaParams));



</script>

</div>


";
        }
        // line 79
        echo "



<script>

    var visiteBtn = document.getElementById('go-visite');
    var inputId = document.getElementById('id');

    gestionOpacityBtnVisite()

    function gestionOpacityBtnVisite(){
        if (inputId.value.length == 8 ){
            visiteBtn.style.opacity = \"1\";
            visiteBtn.style.pointerEvents = \"all\";
        }
        else {
            visiteBtn.style.opacity = \"0.55\";
            visiteBtn.style.pointerEvents = \"none\";
        }
    }
    
    inputId.addEventListener('input', function(event) {
        inputId.value = inputId.value.replace(/\\D/g, '');
        gestionOpacityBtnVisite()
    });

    inputId.addEventListener(\"keydown\", function(event) {
        if (event.key === \"Enter\" && inputId.value.length == 8) {
            getVisitesListe(inputId.value)
        }
    });


    async function getVisitesListe(id) {

            var url = \"https://visite.lookaround.fr/\" + id;

            const response = await fetch('/isVisiteExiste', {
                method: 'POST',
                body: JSON.stringify({ id: id }) 
            });
            const data = await response.json()

            if (data.Accesible)
                window.open(url, '_blank');
            else {
                tata.error(\"\", \"Visite inexistante ou introuvable\", {
                    duration: 3000,
                    closeBtn: false,
                    animate: \"slide\",       
                });
            }
    }

</script>


</section>

 ";
        // line 139
        $this->loadTemplate("tools/footer.html.twig", "trouvervisite.html.twig", 139)->display($context);
        // line 140
        echo "
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "trouvervisite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 140,  290 => 139,  228 => 79,  206 => 60,  200 => 57,  190 => 49,  185 => 46,  179 => 45,  176 => 44,  174 => 43,  157 => 28,  155 => 27,  148 => 22,  141 => 20,  138 => 19,  133 => 18,  131 => 17,  128 => 16,  126 => 15,  123 => 14,  113 => 13,  100 => 9,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Trouver une visite - Réalisation de visites virtuelles à 360° {% endblock %}

{% block stylesheets %}

<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/inoca.png') }}\">
<script src=\"{{ asset('js/tata.js') }}\"></script>

{% endblock %}

{% block body %}

{% set listKeys = {} %}

{% if  photos is defined %}
    {% for key, value in photos %}
        {% set listKeys = listKeys|merge({(key): value}) %}
    {% endfor %}
{% endif %}



<section class='Body-Section-White'>

{% include 'tools/navbar.html.twig' %}

<section class='Cadre'>

<div class='Partie-Exemples-5'>

<h1 class=\"h1-titre-page\">Recherchez une visite à l'aide d'un numéro de référence</h1>

<br><br>

 <div style=\"text-align: center; margin-top: 75px; margin-bottom: 120px\">
    <input class=\"gros-input\" type=\"text\" id=\"id\" name=\"id\" value=\"\" minLength=\"8\" maxlength=\"8\" placeholder=\"Entrez votre numéro de référence\"/><br>
    <input type=\"button\" value=\"Trouver une visite\" id=\"go-visite\" onclick=\"getVisitesListe(inputId.value)\" class=\"reserver-creneau-btn3\"  style=\"width: 200px; opacity: 0.55; pointer-events: none;\"/>
</div>


{% if photos is not defined %}
    {% if info is defined %}
        <p>{{info}}</p>
    {% endif %} 

{% else %}


<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css\"/>
<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js\"></script>

<div id=\"panorama\"></div>

<script>
    var photos = {{ photos|json_encode|raw }};
    /*console.log(photos['Salon'])*/

    var panoramaParams = ({{ jsonSample|json_encode|raw }})
   /* console.log(panoramaParams)*/

    for (var key in photos) {
        var remplacement = \"{photos.\" + key + \"}\";
       /* console.log(remplacement)*/
        panoramaParams = panoramaParams.replace('{' + remplacement + '}', photos[key])   
    }
    
    pannellum.viewer('panorama', JSON.parse(panoramaParams));



</script>

</div>


{% endif %}




<script>

    var visiteBtn = document.getElementById('go-visite');
    var inputId = document.getElementById('id');

    gestionOpacityBtnVisite()

    function gestionOpacityBtnVisite(){
        if (inputId.value.length == 8 ){
            visiteBtn.style.opacity = \"1\";
            visiteBtn.style.pointerEvents = \"all\";
        }
        else {
            visiteBtn.style.opacity = \"0.55\";
            visiteBtn.style.pointerEvents = \"none\";
        }
    }
    
    inputId.addEventListener('input', function(event) {
        inputId.value = inputId.value.replace(/\\D/g, '');
        gestionOpacityBtnVisite()
    });

    inputId.addEventListener(\"keydown\", function(event) {
        if (event.key === \"Enter\" && inputId.value.length == 8) {
            getVisitesListe(inputId.value)
        }
    });


    async function getVisitesListe(id) {

            var url = \"https://visite.lookaround.fr/\" + id;

            const response = await fetch('/isVisiteExiste', {
                method: 'POST',
                body: JSON.stringify({ id: id }) 
            });
            const data = await response.json()

            if (data.Accesible)
                window.open(url, '_blank');
            else {
                tata.error(\"\", \"Visite inexistante ou introuvable\", {
                    duration: 3000,
                    closeBtn: false,
                    animate: \"slide\",       
                });
            }
    }

</script>


</section>

 {% include 'tools/footer.html.twig' %}

</section>

{% endblock %}
", "trouvervisite.html.twig", "C:\\Users\\utils\\Documents\\lookaround\\Website\\lookaround\\templates\\trouvervisite.html.twig");
    }
}
