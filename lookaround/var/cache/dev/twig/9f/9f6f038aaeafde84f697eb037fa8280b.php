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

/* tarifs.html.twig */
class __TwigTemplate_811f6967e30d48f327feef6b20771364 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarifs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarifs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tarifs.html.twig", 1);
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

        echo " Nos tarifs - Réalisation de visites immersives à 360° ";
        
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
        $this->loadTemplate("tools/navbar.html.twig", "tarifs.html.twig", 47)->display($context);
        // line 48
        echo "
    <section class='Cadre'>

        <div class='Partie-Exemples-Tarifs'>

            <h1 class=\"h1-titre-page\">Obtenez rapidement un devis grâce à notre simulateur de tarif</h1>

            <div class='pagetarif-container'>
                
                <div class=\"container-infos-pdv\">
                    <span class=\"span-intitulé-question\"> Quel nombre de prises de vues choisir pour ma visite immersive ?</span>
                    <p>Le choix du nombre de prises dépend de plusieurs facteurs, tels que la taille de l'espace, l'objectif de la visite et les détails que vous souhaitez capturer.</p>
                    <p style=\"margin-top: 10px;\"> Vous aurez générallement besoin de :

                    <br> ▪️ <strong>1 à 10 photos</strong> pour une chambre d'hotel, un studio, un commerce, un restaurant, une salle de cinéma, etc...

                    <br> ▪️ <strong>11 à 20 photos</strong> pour une salle de sport, un appartement, une galerie d'art, une concession, etc...

                    <br> ▪️ <strong>21 à 30 photos</strong> pour un campus universitaire, une grande surface, un site touristique, un espace événementiel, etc...</p>

                    <p style=\"margin-top: 10px;\">Si vous avez encore un doute sur le nombre de prises de vues qu'il vous faut, nous pourrons en convenir durant un entretien</p>

                    <br>
    
                    <span class=\"span-intitulé-question\"> Hébergement de la visite sur nos serveurs</span>
                    <p> Lors de la livraison d'une commande, nous vous envoyons les fichiers votre visite virtuelle sous le format d'un projet html, et nous l'hébergeons sur nos serveurs, ce qui vous permettera une très simple intégration à votre site via une url ou une balise IFrame,
                    et une facilité de partage grâce à une adresse url.</p>
                    <br>

                    <span class=\"span-intitulé-question\"> Pourquoi les tarifs sont-ils plus élevés en dehors de l'Ile de France ?</span>
                    <p>look<span style=\"font-weight : 500; color: #219988;\">around®</span> étant une société basée en région parisienne, et voulant opérer dans toute la France, il nous faut pouvoir couvrir les frais de déplacement lorsque la mission se trouve en dehors de l'Ile de France.
                    C'est donc la raison pour laquelle une prestation y sera un peu plus cher.</p>
                    <br>
                </div>

                <div class=\"card-tarif\">

                    <div style=\"margin-top: 25px;\">
                      
                        <h1 class=\"h1-tarif-container\" style=\"padding: 40px;\"> 
                        
                            <span id=\"prix-Total\" >---</span><span class=\"euros-span\" style=\"font-size: 25px;\">€</span> <span class=\"ttc-span\" style=\"font-size: 15px;\">TTC</span>
                            <p id=\"prix-Heber\" style=\"font-size: 14px;\">&nbsp;</p> 
                        </h1>
                    </div>
                    
                    <p style=\"width: 100%\">Localisation de votre site :</p>
                    <div style=\"width: 100%;border: 1px solid;border-radius: 4px; border-color: #e8e8e8; display: flex; justify-content: center; margin-bottom: 8px; overflow: hidden;\">
                        <input type=\"radio\" id=\"radio-idf\" name=\"radioSelect-Zone\"/>
                        <label style=\"width: 33.33%;\" for=\"radio-idf\">Ile de France</label>
                        <input type=\"radio\" id=\"radio-hors-idf\" name=\"radioSelect-Zone\"/>
                        <label style=\"width: 33.33%;\" for=\"radio-hors-idf\">Autres régions</label>
                        <input type=\"radio\" id=\"radio-suisse-belgique\" name=\"radioSelect-Zone\"/>
                        <label style=\"width: 33.33%;\" for=\"radio-suisse-belgique\">Belgique / Genève</label>
                    </div>
            
                    <p>Nombre de prises de vues souhaités :</p>

                    <div style=\"width: 100%;border: 1px solid;border-radius: 4px; border-color: #e8e8e8; display: flex; justify-content: center; margin-bottom: 8px; overflow: hidden;\">
                        <input type=\"radio\" id=\"radio-1-10\" name=\"radioSelect-PDV\"/>
                        <label style=\"width: 33.33%;\"  for=\"radio-1-10\">1 à 10 photos</label>
                        <input type=\"radio\" id=\"radio-11-20\" name=\"radioSelect-PDV\"/>
                        <label style=\"width: 33.33%;\"  for=\"radio-11-20\">11 à 20 photos</label>
                        <input type=\"radio\" id=\"radio-21-30\" name=\"radioSelect-PDV\"/>
                        <label style=\"width: 33.33%;\"  for=\"radio-21-30\">21 à 30 photos</label>
                    </div>
<!--
                    <p>Aide à l'intégration de la visite à votre site web :</p>
                    <div style=\"width: 100%;border: 1px solid;border-radius: 4px; border-color: #e8e8e8; display: flex; justify-content: center; margin-bottom: 8px; overflow: hidden;\">
                        <input type=\"radio\" id=\"radio-oui-iframe\" name=\"radioSelect-IFrame\"/>
                        <label style=\"width: 50%;\"  for=\"radio-oui-iframe\">Oui</label>
                        <input type=\"radio\" id=\"radio-non-iframe\" name=\"radioSelect-IFrame\"/>
                        <label style=\"width: 50%;\"  for=\"radio-non-iframe\">Non</label>
                    </div>
-->
                    <div style='margin-top: 20px;'>
                        <p>Seront compris dans le service :</p>
                        <p style='margin-top: 10px;'>✔️ Les prises de vues à 360° sur votre site</p>
                        <p>✔️ Le traitement et l'édition des photos</p>
                        <p>✔️ La livraison de la visite virtuelle</p>
                     <!--   <p id='p-aide-integration'>❌ Aide à l'intégration de la visite à votre site web</p>-->
                    </div>

                    <form method='post' action=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index_scroll");
        echo "\">
                        <input type=\"submit\" class='reserver-creneau-btn3' value =\"Prendre rendez-vous\"></input>
                    </form>
                </div>
            </div>
        </div>


</section>
    ";
        // line 140
        $this->loadTemplate("tools/footer.html.twig", "tarifs.html.twig", 140)->display($context);
        // line 141
        echo "

<script>

    const boutonsRadioZone = document.getElementsByName('radioSelect-Zone');
    const boutonsRadioPDV = document.getElementsByName('radioSelect-PDV');
    const boutonsRadioGA= document.getElementsByName('radioSelect-GA');
    const boutonsRadioIFrame= document.getElementsByName('radioSelect-IFrame');

    const boutonsRadio = document.querySelectorAll('input[type=\"radio\"]');


    for (let i = 0; i < boutonsRadio.length; i++) {
        boutonsRadio[i].addEventListener(\"click\", function () {
            defTarif()
        })
    }


    function defTarif(){

        const radiosToTarif = {
        \"radio-1-10\" : 100, \"radio-11-20\" : 150, \"radio-21-30\" : 200, 
        \"radio-idf\" : 149.90, \"radio-hors-idf\" : 279.90, \"radio-suisse-belgique\" : 489.90}

        var finalTarif = 0;

        var isAllChecked = true;

        if (isAllChecked){
            for (let i = 0; i < boutonsRadioZone.length; i++) {
                if (boutonsRadioZone[i].checked) {
                    finalTarif += radiosToTarif[boutonsRadioZone[i].id];
                    isAllChecked = true;
                    break;
                }  
                else
                    isAllChecked = false;
            }
        }

        if (isAllChecked){
            for (let i = 0; i < boutonsRadioPDV.length; i++) {
                if (boutonsRadioPDV[i].checked){
                    //console.log(boutonsRadioPDV[i].id)
                    finalTarif += radiosToTarif[boutonsRadioPDV[i].id];
                    isAllChecked = true;
                    break;
                }
                else
                    isAllChecked = false;
            }
        }


        if (isAllChecked){
            document.getElementById(\"prix-Total\").innerHTML = finalTarif.toFixed(2);
            document.getElementById(\"prix-Heber\").innerHTML = \"\";
        }
        else {
            document.getElementById(\"prix-Total\").innerHTML = \"---\" ;
            document.getElementById(\"prix-Heber\").innerHTML = \"&nbsp;\" ;
        }
        
    }

    defTarif();

</script>
      

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tarifs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 141,  283 => 140,  271 => 131,  186 => 48,  184 => 47,  172 => 37,  159 => 30,  156 => 29,  152 => 28,  148 => 26,  135 => 19,  132 => 18,  128 => 17,  122 => 14,  119 => 13,  109 => 12,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Nos tarifs - Réalisation de visites immersives à 360° {% endblock %}

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

        <div class='Partie-Exemples-Tarifs'>

            <h1 class=\"h1-titre-page\">Obtenez rapidement un devis grâce à notre simulateur de tarif</h1>

            <div class='pagetarif-container'>
                
                <div class=\"container-infos-pdv\">
                    <span class=\"span-intitulé-question\"> Quel nombre de prises de vues choisir pour ma visite immersive ?</span>
                    <p>Le choix du nombre de prises dépend de plusieurs facteurs, tels que la taille de l'espace, l'objectif de la visite et les détails que vous souhaitez capturer.</p>
                    <p style=\"margin-top: 10px;\"> Vous aurez générallement besoin de :

                    <br> ▪️ <strong>1 à 10 photos</strong> pour une chambre d'hotel, un studio, un commerce, un restaurant, une salle de cinéma, etc...

                    <br> ▪️ <strong>11 à 20 photos</strong> pour une salle de sport, un appartement, une galerie d'art, une concession, etc...

                    <br> ▪️ <strong>21 à 30 photos</strong> pour un campus universitaire, une grande surface, un site touristique, un espace événementiel, etc...</p>

                    <p style=\"margin-top: 10px;\">Si vous avez encore un doute sur le nombre de prises de vues qu'il vous faut, nous pourrons en convenir durant un entretien</p>

                    <br>
    
                    <span class=\"span-intitulé-question\"> Hébergement de la visite sur nos serveurs</span>
                    <p> Lors de la livraison d'une commande, nous vous envoyons les fichiers votre visite virtuelle sous le format d'un projet html, et nous l'hébergeons sur nos serveurs, ce qui vous permettera une très simple intégration à votre site via une url ou une balise IFrame,
                    et une facilité de partage grâce à une adresse url.</p>
                    <br>

                    <span class=\"span-intitulé-question\"> Pourquoi les tarifs sont-ils plus élevés en dehors de l'Ile de France ?</span>
                    <p>look<span style=\"font-weight : 500; color: #219988;\">around®</span> étant une société basée en région parisienne, et voulant opérer dans toute la France, il nous faut pouvoir couvrir les frais de déplacement lorsque la mission se trouve en dehors de l'Ile de France.
                    C'est donc la raison pour laquelle une prestation y sera un peu plus cher.</p>
                    <br>
                </div>

                <div class=\"card-tarif\">

                    <div style=\"margin-top: 25px;\">
                      
                        <h1 class=\"h1-tarif-container\" style=\"padding: 40px;\"> 
                        
                            <span id=\"prix-Total\" >---</span><span class=\"euros-span\" style=\"font-size: 25px;\">€</span> <span class=\"ttc-span\" style=\"font-size: 15px;\">TTC</span>
                            <p id=\"prix-Heber\" style=\"font-size: 14px;\">&nbsp;</p> 
                        </h1>
                    </div>
                    
                    <p style=\"width: 100%\">Localisation de votre site :</p>
                    <div style=\"width: 100%;border: 1px solid;border-radius: 4px; border-color: #e8e8e8; display: flex; justify-content: center; margin-bottom: 8px; overflow: hidden;\">
                        <input type=\"radio\" id=\"radio-idf\" name=\"radioSelect-Zone\"/>
                        <label style=\"width: 33.33%;\" for=\"radio-idf\">Ile de France</label>
                        <input type=\"radio\" id=\"radio-hors-idf\" name=\"radioSelect-Zone\"/>
                        <label style=\"width: 33.33%;\" for=\"radio-hors-idf\">Autres régions</label>
                        <input type=\"radio\" id=\"radio-suisse-belgique\" name=\"radioSelect-Zone\"/>
                        <label style=\"width: 33.33%;\" for=\"radio-suisse-belgique\">Belgique / Genève</label>
                    </div>
            
                    <p>Nombre de prises de vues souhaités :</p>

                    <div style=\"width: 100%;border: 1px solid;border-radius: 4px; border-color: #e8e8e8; display: flex; justify-content: center; margin-bottom: 8px; overflow: hidden;\">
                        <input type=\"radio\" id=\"radio-1-10\" name=\"radioSelect-PDV\"/>
                        <label style=\"width: 33.33%;\"  for=\"radio-1-10\">1 à 10 photos</label>
                        <input type=\"radio\" id=\"radio-11-20\" name=\"radioSelect-PDV\"/>
                        <label style=\"width: 33.33%;\"  for=\"radio-11-20\">11 à 20 photos</label>
                        <input type=\"radio\" id=\"radio-21-30\" name=\"radioSelect-PDV\"/>
                        <label style=\"width: 33.33%;\"  for=\"radio-21-30\">21 à 30 photos</label>
                    </div>
<!--
                    <p>Aide à l'intégration de la visite à votre site web :</p>
                    <div style=\"width: 100%;border: 1px solid;border-radius: 4px; border-color: #e8e8e8; display: flex; justify-content: center; margin-bottom: 8px; overflow: hidden;\">
                        <input type=\"radio\" id=\"radio-oui-iframe\" name=\"radioSelect-IFrame\"/>
                        <label style=\"width: 50%;\"  for=\"radio-oui-iframe\">Oui</label>
                        <input type=\"radio\" id=\"radio-non-iframe\" name=\"radioSelect-IFrame\"/>
                        <label style=\"width: 50%;\"  for=\"radio-non-iframe\">Non</label>
                    </div>
-->
                    <div style='margin-top: 20px;'>
                        <p>Seront compris dans le service :</p>
                        <p style='margin-top: 10px;'>✔️ Les prises de vues à 360° sur votre site</p>
                        <p>✔️ Le traitement et l'édition des photos</p>
                        <p>✔️ La livraison de la visite virtuelle</p>
                     <!--   <p id='p-aide-integration'>❌ Aide à l'intégration de la visite à votre site web</p>-->
                    </div>

                    <form method='post' action=\"{{ path('app_index_scroll') }}\">
                        <input type=\"submit\" class='reserver-creneau-btn3' value =\"Prendre rendez-vous\"></input>
                    </form>
                </div>
            </div>
        </div>


</section>
    {% include 'tools/footer.html.twig' %}


<script>

    const boutonsRadioZone = document.getElementsByName('radioSelect-Zone');
    const boutonsRadioPDV = document.getElementsByName('radioSelect-PDV');
    const boutonsRadioGA= document.getElementsByName('radioSelect-GA');
    const boutonsRadioIFrame= document.getElementsByName('radioSelect-IFrame');

    const boutonsRadio = document.querySelectorAll('input[type=\"radio\"]');


    for (let i = 0; i < boutonsRadio.length; i++) {
        boutonsRadio[i].addEventListener(\"click\", function () {
            defTarif()
        })
    }


    function defTarif(){

        const radiosToTarif = {
        \"radio-1-10\" : 100, \"radio-11-20\" : 150, \"radio-21-30\" : 200, 
        \"radio-idf\" : 149.90, \"radio-hors-idf\" : 279.90, \"radio-suisse-belgique\" : 489.90}

        var finalTarif = 0;

        var isAllChecked = true;

        if (isAllChecked){
            for (let i = 0; i < boutonsRadioZone.length; i++) {
                if (boutonsRadioZone[i].checked) {
                    finalTarif += radiosToTarif[boutonsRadioZone[i].id];
                    isAllChecked = true;
                    break;
                }  
                else
                    isAllChecked = false;
            }
        }

        if (isAllChecked){
            for (let i = 0; i < boutonsRadioPDV.length; i++) {
                if (boutonsRadioPDV[i].checked){
                    //console.log(boutonsRadioPDV[i].id)
                    finalTarif += radiosToTarif[boutonsRadioPDV[i].id];
                    isAllChecked = true;
                    break;
                }
                else
                    isAllChecked = false;
            }
        }


        if (isAllChecked){
            document.getElementById(\"prix-Total\").innerHTML = finalTarif.toFixed(2);
            document.getElementById(\"prix-Heber\").innerHTML = \"\";
        }
        else {
            document.getElementById(\"prix-Total\").innerHTML = \"---\" ;
            document.getElementById(\"prix-Heber\").innerHTML = \"&nbsp;\" ;
        }
        
    }

    defTarif();

</script>
      

{% endblock %}", "tarifs.html.twig", "C:\\Users\\utils\\Documents\\lookaround\\Website\\lookaround\\templates\\tarifs.html.twig");
    }
}
