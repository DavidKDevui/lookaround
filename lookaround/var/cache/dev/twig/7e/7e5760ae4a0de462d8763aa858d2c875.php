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

/* index.html.twig */
class __TwigTemplate_5fe55d02fc554caf02780ffadb199dfe extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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

        echo "Accueil - Réalisation de visites virtuelles à 360° ";
        
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
        echo "\" type=\"text/css\">
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
            echo "    <script>
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
            echo "    <script>
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


<section class='Body-Section-White'>
    ";
        // line 41
        $this->loadTemplate("tools/navbar.html.twig", "index.html.twig", 41)->display($context);
        // line 42
        echo "<section class='Cadre'>

<div id=\"user-status\" data-is-connected=\"";
        // line 44
        echo twig_escape_filter($this->env,  !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)), "html", null, true);
        echo "\"></div>

    <div class='Partie-Exemples-1'>
        <div class=\"video-container\">

            <video autoplay muted loop playsinline webkit-playsinline id=\"video-element\">
                <source type=\"video/mp4\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/test-video-set.mp4"), "html", null, true);
        echo "\"  />
            </video>

            <div class=\"video-container-content\">
                <div class=\"video-container-subcontent1\">
                    <h1></h1>
                    <h1 id='LeTitre' class='video-container-content-titre'>Réalisation de visites virtuelles à 360°</h1>
                    <h2 class='video-container-content-text'>Offrez à vos clients une expérience unique qui les transportera directement dans vos espaces, où qu'ils se trouvent. Il s'agit de l'outil idéal pour promouvoir votre entreprise et générer des conversions.</h2>
                    <div class=\"reserver-creneau\">
                        <input onclick=\"smoothScroll('Partie-Exemples-4')\" type='button' value='Prendre rendez-vous' class='reserver-creneau-btn1'/>
                         <form method='post' action=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tarifs");
        echo "\" style=\"width: min-content;\">
                            <input type=\"submit\" class='reserver-creneau-btn2' value =\"Nos tarifs\"></input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class='Partie-Exemples-5' style=\"background-image: url('img/circle-scatter-haikei(3).png');\">
       <h3>Qu'est-ce qu'une visite virtuelle ?</h3>

          <p class=\"align-center-vertically\" style=\"background-color: #ffffff8f;\">Une visite virtuelle est une expérience interactive qui permet aux utilisateurs de parcourir et d'explorer un espace en utilisant des technologies numériques. 
            Elle recrée, grâce à des photos à 360°, une représentation visuelle d'un lieu, permettant aux utilisateurs de s'y déplacer librement et de regarder autour d'eux dans toutes les directions à l'aide d'un ordinateur ou d'un smartphone, sans avoir à s'y rendre physiquement.  
        </p>

        <p class=\"align-center-vertically\" style=\"background-color: #ffffff8f;\">Cela peut être particulièrement utile pour explorer des destinations touristiques, des propriétés immobilières, des musées, des sites historiques, des campus universitaires, des hôtels, des commerces, des salles de sport, etc.  
        </p>

        <p>Jetez un oeil à nos réalisations sur <a style=\"color: #219988; cursor: pointer; background-color: white;\" href ='";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_realisations");
        echo "' >notre page dédiée</a></p>
    </div>

    <div class='Partie-Exemples-5'>
        <div id=\"visite-containe\" class=\"visite-container\" style=\"text-align: center\">
            <iframe src=\"https://visite.lookaround.fr/32890391/?startscene=2&startlookat=216.39,-0.83,120,0,0;\" scrolling=\"no\" id=\"iframe-fullscreen\" FRAMEBORDER=\"no\" style=\"box-shadow: 0 1px 1px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.12),0 4px 4px rgba(0,0,0,.12),0 8px 8px rgba(0,0,0,.12),0 16px 16px rgba(0,0,0,.12);\" allowfullscreen></iframe>
        </div>
    </div>

     <div class='Partie-Exemples-5'  style=\"padding: 27px 3px; border-bottom: 1px solid #8282821c; background-image: url('../img/circle-scatter-haikei(3).png');\">
        <h3>Qu'apporterais une visite virtuelle à mon site ?</h3>
        <div class='line-3'  style=\"margin-top:20px\">

        <div class=\"argument-card\">
        <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/360-view.png"), "html", null, true);
        echo "\" class=\"argument-img\">
        <h3>Une réelle projection virtuelle</h3>
            <p>Immergez vos visiteurs dans une projection virtuelle, leur permettant d'explorer votre espace depuis le confort de leur domicile
            </p>
        </div>

        <div class=\"argument-card\">
            <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/24-hours.png"), "html", null, true);
        echo "\" class=\"argument-img\">
        <h3>Une accessibilité en continu</h3>
        <p>Attirez des potentiels clients à toute heure de la journée ou de la nuit, même en dehors de vos heures d'ouverture
        </p>
        </div>

        <div class=\"argument-card\">
            <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/competition(1).png"), "html", null, true);
        echo "\" class=\"argument-img\">
        <h3>Une différenciation concurrentielle</h3>
        <p>Démarquez vous de vos concurrents en offrant une expérience plus virtuelle et interactive à vos futurs clients
        </p>
        </div>

        <div class=\"argument-card\">
        <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/euro(1).png"), "html", null, true);
        echo "\" class=\"argument-img\">
        <h3>Une réduction des coûts de gestion des visites physiques</h3>
            <p>Maximisez votre temps et vos ressources, et de concentrer vos efforts sur d'autres aspects de votre entreprise
            </p>
        </div>

        <div class=\"argument-card\">
        <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/la-technologie.png"), "html", null, true);
        echo "\" class=\"argument-img\">
        <h3>Une présentation au gout du jour</h3>
            <p>Mettez en avant votre espace de manière plus attrayante et interactive, en captivant l'attention de vos visiteurs
            </p>
        </div>

        <div class=\"argument-card\">
        <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/communications.png"), "html", null, true);
        echo "\" class=\"argument-img\">
        <h3>Une facilité de partage</h3>
            <p>Vos visiteurs pourront facilement partager leur expérience avec leur entourage, ce qui peut générer du bouche-à-oreille et accroître votre visibilité.
            </p>
        </div>
    </div>
    </div>


    <div class='Partie-Exemples-5' id=\"div-aide\" style=\"display:none\">
       <h3>Comment se déroule une création de visite virtuelle avec look<span style=\"font-weight : 500; color: #219988;\">around®</span> ?</h3>

        <div class=\"carousel-tuto\" id=\"carousel-tuto\" style=\"display: grid; grid-template-rows : 5fr 1fr;\">

            <img id=\"carousel-img\" class=\"carousel-img\" src='";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tuto11.jpg"), "html", null, true);
        echo "'/>
            
            <div>
                <p id=\"container-descriptionTuto\" class=\"container-descriptionTuto\" style=\"padding-bottom: 28px; font-weight: 400;\"></p>
                <div class=\"indicators-tuto\"></div>
            </div>
            
            <div class=\"nav-left\" id=\"nav-left2\" onclick=\"carouselTutoPrevious()\">&lsaquo;</div>
            <div class=\"nav-right\" id=\"nav-right2\" onclick=\"carouselTutoSuivant()\">&rsaquo;</div>

        </div>
    </div>


<!--<button onclick=\"myModalDefinition.style.display = 'block'\">Définition IFrame</button>

<div id=\"myModalDefinition\" class=\"modal\">
        <div class=\"modal-content\" style=\"width: 70%; font-size: 15px; border-radius: 8px;\">   
            <div style=\"display : grid; grid-template-columns: 1fr 3.5fr; align-items: center;\">
                <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/langage-de-programmation.png"), "html", null, true);
        echo "\" style=\"width: 150px;\"/>
                <p style=\"padding: 8px;\">Un IFrame est un élément HTML utilisé pour intégrer un contenu d'une autre source à l'intérieur d'une page web. 
                    Cela permet aux développeurs de combiner différentes ressources et fonctionnalités provenant de diverses sources en les incorporant harmonieusement dans une seule page.
                    L'IFrame est généralement défini avec une source (URL) spécifique qui indique le contenu à charger à l'intérieur de l'IFrame. </p>
            </div>    
        </div>
</div>

<script>
    var myModalDefinition = document.getElementById(\"myModalDefinition\");
</script>
-->

<div class='Partie-Exemples-5' style=\"background-image: url('img/circle-scatter-haikei(3).png')\">

    <h3>L'efficacité des visites virtuelles en quelques chiffres</h3>

        <div class=\"line-3\" style=\"margin-top: 20px\">
            <div style='display: grid; grid-template-rows 1.5fr 1fr; padding: 5px 5px; background-color: #ffffff91;text-align: center;'>
                <span class=\"pourcentage\">67%</span>
                <p class=\"reference-p\"  >Augmentation des réservations en ligne pour des chambres d'hôtel</p>
                <p class=\"reference-source\">Source: Best Western Hotels & Resorts</p>
            </div>

            <div style='display: grid;  grid-template-rows 1.5fr 1fr; padding: 5px 5px; background-color: #ffffff91;text-align: center;'>
                <span class=\"pourcentage\">62%</span>
                <p class=\"reference-p\"  >Consommateurs utilisant les visites virtuelles pour choisir un restaurant</p>
                <p class=\"reference-source\">Source: TechValidate</p>
            </div>

            <div style='display: grid;  grid-template-rows 1.5fr 1fr; padding: 5px 5px; background-color: #ffffff91;text-align: center;'>
                <span class=\"pourcentage\">94%</span>
                <p class=\"reference-p\"  >Étudiants préférant visiter un campus virtuellement avant de prendre une décision</p>
                <p class=\"reference-source\">Source: Cappex</p>
            </div>
        </div>
    </div>

<!--
    <div class='Partie-Exemples-5'>
       <h3>Nous proposons également de la photographie grand angle</h3>

        <img src=\"https://www.camif-habitat.fr/wp-content/uploads/2022/08/Renovation-dun-appartement-a-Avignon-85-10.jpg\" style=\"width: 700px; height : 300px; border-radius: 25px; padding : 20px; margin: 0 auto\"/>

       <p class=\"align-center-vertically\">La photographie grand angle est une technique utilisée en photographie pour capturer un champ de vision plus large que ce que l'œil humain peut naturellement voir. Elle implique l'utilisation d'un objectif grand angle qui a une distance focale plus courte que les objectifs standards, ce qui permet d'inclure davantage d'espace dans le cadre de la photo.</p>
       <p class=\"align-center-vertically\">Il peut donc être interessant de proposer des photos grand angle sur votre site, car ça peut avoir beaucoup d'utilité</p>

      
    </div>
-->


    <div class=\"line-2\">

        <div style=\"position: relative;\">
            <br>
          <!--  <h1 onclick=\"goWelcome.submit()\" class=\"logo-LA\">look<span style=\"font-weight : 500; color: #219988;\">around®</span></h1> -->
                <div style=\"position: relative; width: 100%; height: 100%;\">
                <div class=\"block-contact-sheet\">
                    <div class=\"line-contact-sheet\">

                        <div class=\"contact-div\">
                            <img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/telephone(1).png"), "html", null, true);
        echo "\" class=\"middleinDiv\"/>
                            <p contenteditable=\"true\" style=\"cursor: default; text-decoration: none!important; color: black !important;\">06 51 45 01 06</p>
                        </div>
                      
                        <div class=\"contact-div\">
                                <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gmail.png"), "html", null, true);
        echo "\" class=\"middleinDiv\"/>
                                <p>contact@lookaround.fr</p>
                        </div>
                    </div>

                    <div class=\"line-contact-sheet\"     style='display:none'>
                          <div class=\"contact-div\">
                                <img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/office.png"), "html", null, true);
        echo "\" class=\"middleinDiv\"/>
                                <p>N°892 074 774 00019</p>
                        </div>
                        
                        <div class=\"contact-div\">
                                <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/linkedin.png"), "html", null, true);
        echo "\" class=\"middleinDiv\"/>
                                <p>lookaround</p>
                        </div>

                    </div>
                </div>
                </div>
        </div>



  <div id=\"Partie-Exemples-4\" class=\"Partie-Exemples-4\" style=\"border-left: 1px solid #8282821c;\">
        <h2 class=\"titre2\">Prendre rendez-vous</h2>

        ";
        // line 254
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 254, $this->source); })()), 'form_start');
        echo " 
    <br>
        <div class=\"line-1\">
            ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 257, $this->source); })()), "nom", [], "any", false, false, false, 257), 'row');
        echo "
        </div>
    <br>
        <div class=\"line-2\">
            ";
        // line 261
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 261, $this->source); })()), "email", [], "any", false, false, false, 261), 'row');
        echo "
            ";
        // line 262
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 262, $this->source); })()), "numero_telephone", [], "any", false, false, false, 262), 'row');
        echo "
        </div>
    <br>    
            ";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 265, $this->source); })()), "preference_creneau", [], "any", false, false, false, 265), 'row');
        echo "
    <br>
    <div class=\"line-2-3\" style=\" display:none\">
            <p style=\"font-size : 14px;\">Préference de contact :</p>
            ";
        // line 269
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 269, $this->source); })()), "preference_contact", [], "any", false, false, false, 269), 'row');
        echo "
        </div>


        <div class=\"wrapper\">
            <div class=\"captcha-area\">
                <div class=\"captcha-img\">
                    <span class=\"captcha\"></span>
                </div>
                <button class=\"reload-btn\"><p class=\"fas fa-redo-alt\">⟳</p></button>
            </div>

            <div class=\"input-area\">
                <input class=\"input_form_inscription\" type=\"text\" placeholder=\"Entrez le captcha\" maxlength=\"6\">
            </div>
        </div>


            <p class=\"text-error\" id=\"text-error\"></p>

             <br> 
   
        <!--<button type=\"submit\" class=\"reserver-creneau-btn\">Valider</button>-->
            <button type=\"button\" id='go-submit-form' class=\"reserver-creneau-btn1\">Valider</button>

            ";
        // line 295
        echo "                
            ";
        // line 296
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 296, $this->source); })()), 'form_end');
        echo "
    </div>
 </div>


<div style=\"display: none\">
    <div id=\"notes\"></div>
    <div id=\"commentaires\"></div>
    <div id=\"prenoms\"></div>
</div>
</section>
    ";
        // line 307
        $this->loadTemplate("tools/footer.html.twig", "index.html.twig", 307)->display($context);
        // line 308
        echo "</section>


<script>    

    const userStatusElement = document.getElementById('user-status');
    const isConnected = userStatusElement.dataset.isConnected;

        var myForm = document.forms.registration_form;
        var btnValidForm = document.getElementById(\"go-submit-form\");

        var formNom = myForm.querySelector('input[name=\"registration_form[nom]\"]');
        var formEmail = myForm.querySelector('input[name=\"registration_form[email]\"]');

        var formNumero = myForm.querySelector('input[name=\"registration_form[numero_telephone]\"]');

        var formPrefCreneau = myForm.querySelector('textarea[name=\"registration_form[preference_creneau]\"]')

        btnValidForm.addEventListener('click', onClickHandler);

        const textError = document.getElementById('text-error');
        textError.style.display = \"block\";


        async function onClickHandler() {
            
        //const emailList = await getMailList();

            if (formNom.value.length < 3)
                textError.innerHTML = \"Le nom choisi est trop court\"

            else if (!validateEmail(formEmail.value))
                textError.innerHTML = \"Adresse mail incorrecte\"
            
            else if (formNumero.value.length !== 14)
                textError.innerHTML = \"Numéro de téléphone incorrect\"

            else if (formPrefCreneau.value.length < 3)
                textError.innerHTML = \"Description trop courte\"

            else if (!isCaptchaCorrect()) {
                textError.innerHTML = \"Captcha incorrect\"
            }

            else {
                textError.style.display = \"none\";
                myForm.submit()
            }
        }

    //}

function validateEmail(email) {
  const re = /\\S+@\\S+\\.\\S+/;
  return re.test(email);
}

document.addEventListener('DOMContentLoaded', function() {
    var elements = document.querySelectorAll('.pnlm-about-msg');
    for (var i = 0; i < elements.length; i++) {
    elements[i].parentElement.removeChild(elements[i]);
    }
})

/*

videojs('panoramaExemple4', {
    plugins: {
        pannellum: {}
    }
});
*/
/*

var carouselNumber = -1;
var carouselMax = 2;

var LeTitre = document.getElementById(\"LeTitre\");

var video = document.getElementById(\"video-element\");
video.disablePictureInPicture = true;

var arrayVideoLinks = [\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/look.mp4"), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/coffee.mp4"), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/sea.mp4"), "html", null, true);
        echo "\"]

const indicatorsContainer = document.querySelector('.indicators');


for (let i = 0; i < carouselMax + 1; i++) {
    const indicator = document.createElement('span');
    indicator.classList.add('indicator');
    if (i === 0) {
        indicator.classList.add('active');
    }
    indicatorsContainer.appendChild(indicator);
}

changeVideoSource(\"right\")

var LeTitre = document.getElementById(\"LeTitre\");

function changeVideoSource(sens) {

    if (sens == \"right\"){
        if (carouselNumber != carouselMax)
            carouselNumber ++;
    }

    if (sens == \"left\"){
        if (carouselNumber != 0)
            carouselNumber --;
    }

    const indicators = document.querySelectorAll('.indicator');
    indicators.forEach((indicator, index) => {
        indicator.classList.remove('active');
        if (index  === carouselNumber) {
            indicator.classList.add('active');
        }
    });
   // LeTitre.innerHTML = nomsCommerciaux[carouselNumber];

    var source = video.getElementsByTagName(\"source\")[0];
    source.setAttribute(\"src\", arrayVideoLinks[carouselNumber]);
    video.load();


    if (carouselNumber == 0) {
        document.getElementById(\"nav-left\").style.display = \"none\";
    }

    else if (carouselNumber == carouselMax) {
        document.getElementById(\"nav-right\").style.display = \"none\";
    }

    else  {
        document.getElementById(\"nav-right\").style.display = \"block\";
        document.getElementById(\"nav-left\").style.display = \"block\";
    }
}
*/



    function formatPhone() {

         const input = document.getElementById('registration_form_numero_telephone');

       
        let value = input.value.replace(/\\D/g, ''); // ne garder que les chiffres

        var v = value.replace(/\\s+/g, \"\").replace(/[^0-9]/gi, \"\");
        var matches = v.match(/\\d{2,16}/g);
        var match = (matches && matches[0]) || \"\";
        var parts = [];

            for (i = 0, len = match.length; i < len; i += 2)
                parts.push(match.substring(i, i + 2));

            if (parts.length) 
                input.value = parts.join(\" \");
            else 
                input.value = value;
    }



    function displayToast (erreur, conseil) {

        tata.text(erreur, conseil, {
            duration: 3000,
            closeBtn: false,
            animate: \"slide\",    
        });
    }

</script>


<script>
const captcha = document.querySelector(\".captcha\")
reloadBtn = document.querySelector(\".reload-btn\")
inputField = document.querySelector(\".input-area input\")

inputField.addEventListener(\"keypress\", function(event) {
  if (event.key === \"Enter\") {
    event.preventDefault(); 
  }
});


//storing all captcha characters in array
let allCharacters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
                     'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd',
                     'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's',
                     't', 'u', 'v', 'w', 'x', 'y', 'z', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
function getCaptcha(){
  for (let i = 0; i < 6; i++) { //getting 6 random characters from the array
    let randomCharacter = allCharacters[Math.floor(Math.random() * allCharacters.length)];
    captcha.innerText += ` \${randomCharacter}`; //passing 6 random characters inside captcha innerText
  }
}
getCaptcha(); //calling getCaptcha when the page open
//calling getCaptcha & removeContent on the reload btn click
reloadBtn.addEventListener(\"click\", (event)=>{
  event.preventDefault(); 
  removeContent();
  getCaptcha();
});

function isCaptchaCorrect(){
  let inputVal = inputField.value.split('').join(' ');
  
  return inputVal == captcha.innerText;
  /*
  if(inputVal == captcha.innerText){ //if captcha matched
    statusTxt.style.color = \"#4db2ec\";
    statusTxt.innerText = \"Nice! You don't appear to be a robot.\";
    setTimeout(()=>{
      removeContent();
      getCaptcha();
    }, 2000);
  }else{
    statusTxt.style.color = \"#ff0000\";
    statusTxt.innerText = \"Captcha not matched. Please try again!\";
  }
  */
};

function removeContent(){
 inputField.value = \"\";
 captcha.innerText = \"\";
}
</script>


<script>

    var descriptionTutoArray = [
        \"1. Remplissez notre formulaire de prise de rendez-vous, en nous décrivant les spécificités de votre besoin\",
        \"2. Par la suite, nous vous contacterons pour étudier votre demande et pour convenir ensemble d'un créneau de rendez-vous\",
        \"3. Le jour J, nous réaliserons les prises de vues sur votre site. Nous vous recommandons de limiter le nombre de personnes présentes sur site ce jour là\",
        \"4. Vous pourrez facilement suivre l'avancée et toutes les étapes du processus de votre commande via votre espace client\",
        \"5. Nous commencerons le processus en éditant et en effectuant le traitement de vos photos, puis nous les utiliserons pour créer votre visite\",
        \"6. Dans les 48 heures après le rendez-vous, nous vous livrerons la visite sous la forme d'un code d'intégration IFrame, ainsi que les photos 360°\",
        \"7. Intégrez la visite et les photos à votre site web, et faites profiter vos visiteurs d'une expérience interactive (exmpl insta carousel, bannière site , use cases)\"
    ];

    var compteurCarouselTuto = 0;
    var maxItemCarouselTuto = descriptionTutoArray.length;

    var arrayImageTutos = [\"";
        // line 558
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tuto11.jpg"), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tuto2.jpg"), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tuto3.jpg"), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tuto44.jpg"), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tuto5.jpg"), "html", null, true);
        echo "\"]


    function carouselTutoSuivant(){
        compteurCarouselTuto++;
        setIndicatorsTuto();

        if (compteurCarouselTuto > 0)
            document.getElementById(\"nav-left2\").style.display = \"block\"; 

        if (compteurCarouselTuto == maxItemCarouselTuto - 1)
            document.getElementById(\"nav-right2\").style.display = \"none\"; 
    }

    function carouselTutoPrevious(){
        compteurCarouselTuto--;
        setIndicatorsTuto();

        if (compteurCarouselTuto == 0)
            document.getElementById(\"nav-left2\").style.display = \"none\"; 
        if (compteurCarouselTuto != maxItemCarouselTuto - 1)
            document.getElementById(\"nav-right2\").style.display = \"block\"; 
    }

    
    function setIndicatorsTuto(){

        

        const indicatorsContainer2 = document.querySelector('.indicators-tuto');

        while (indicatorsContainer2.firstChild) {
            indicatorsContainer2.removeChild(indicatorsContainer2.firstChild);
        }

        for (let i = 0; i < maxItemCarouselTuto; i++) {
            const indicator = document.createElement('span');
            indicator.classList.add('indicator2');
            if (i === compteurCarouselTuto) {
                indicator.classList.add('active');
            }
            indicatorsContainer2.appendChild(indicator);
        }

        document.getElementById(\"container-descriptionTuto\").innerHTML = descriptionTutoArray[compteurCarouselTuto];
        document.getElementById(\"carousel-img\").src = arrayImageTutos[compteurCarouselTuto];

    }

    setIndicatorsTuto();


    function smoothScroll(target) {
        var element = document.getElementById(target);
        var rect = element.getBoundingClientRect();
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        var start = scrollTop;
        var end = rect.top + scrollTop;
        var duration = 800; // Durée de l'animation en millisecondes
        var clock = Date.now();
        
        var requestAnimationFrame = window.requestAnimationFrame ||
                                        window.mozRequestAnimationFrame ||
                                        window.webkitRequestAnimationFrame ||
                                        function(fn){window.setTimeout(fn, 15)};
                                        
        function step() {
            var elapsed = Date.now() - clock;
            var position = null;
            if (elapsed > duration) {
            position = end;
            } else {
            position = start + (end - start) * easeInOutQuad(elapsed / duration);
            requestAnimationFrame(step);
            }
            window.scrollTo(0, position);
        }
        
        function easeInOutQuad(t) {
            return t<0.5 ? 2*t*t : -1+(4-2*t)*t;
        }
        
        requestAnimationFrame(step);
    }

</script>

    ";
        // line 645
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 645, $this->source); })()), "session", [], "any", false, false, false, 645), "flashbag", [], "any", false, false, false, 645), "get", [0 => "smoothScroll"], "method", false, false, false, 645));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 646
            echo "        <script>
            document.addEventListener('DOMContentLoaded', function() {
                smoothScroll('Partie-Exemples-4')
            });
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 652
        echo "

        ";
        // line 654
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 654, $this->source); })()), "session", [], "any", false, false, false, 654), "flashbag", [], "any", false, false, false, 654), "get", [0 => "smoothScroll2"], "method", false, false, false, 654));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 655
            echo "        <script>
            document.addEventListener('DOMContentLoaded', function() {
                smoothScroll('div-aide')
            });
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 661
        echo "

    
";
        // line 664
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 664, $this->source); })()), "session", [], "any", false, false, false, 664), "flashbag", [], "any", false, false, false, 664), "get", [0 => "connexionGo"], "method", false, false, false, 664));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 665
            echo "
    <script>
        setTimeout(function() {
          document.getElementById(\"myModal\").style.display = \"block\";
        }, 200);
    </script>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 673
        echo "

";
        // line 675
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 675, $this->source); })()), "session", [], "any", false, false, false, 675), "flashbag", [], "any", false, false, false, 675), "get", [0 => "mdpReinit"], "method", false, false, false, 675));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 676
            echo "
    <script>
        tata.success(\"\", \"Mot de passe réinitialisé avec succès !\", {
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
        // line 686
        echo "

<script>
    var screenWidth = window.innerWidth;
   // alert(\"Screen width: \" + screenWidth + \" pixels\");
</script>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  955 => 686,  940 => 676,  936 => 675,  932 => 673,  919 => 665,  915 => 664,  910 => 661,  899 => 655,  895 => 654,  891 => 652,  880 => 646,  876 => 645,  778 => 558,  603 => 390,  519 => 308,  517 => 307,  503 => 296,  500 => 295,  472 => 269,  465 => 265,  459 => 262,  455 => 261,  448 => 257,  442 => 254,  425 => 240,  417 => 235,  407 => 228,  399 => 223,  334 => 161,  312 => 142,  295 => 128,  285 => 121,  275 => 114,  265 => 107,  255 => 100,  245 => 93,  228 => 79,  206 => 60,  193 => 50,  184 => 44,  180 => 42,  178 => 41,  172 => 37,  159 => 30,  156 => 29,  152 => 28,  148 => 26,  135 => 19,  132 => 18,  128 => 17,  122 => 14,  119 => 13,  109 => 12,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - Réalisation de visites virtuelles à 360° {% endblock %}

{% block stylesheets %}

<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" type=\"text/css\">
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



<section class='Body-Section-White'>
    {% include 'tools/navbar.html.twig' %}
<section class='Cadre'>

<div id=\"user-status\" data-is-connected=\"{{ app.user is not null }}\"></div>

    <div class='Partie-Exemples-1'>
        <div class=\"video-container\">

            <video autoplay muted loop playsinline webkit-playsinline id=\"video-element\">
                <source type=\"video/mp4\" src=\"{{ asset ('videos/test-video-set.mp4')}}\"  />
            </video>

            <div class=\"video-container-content\">
                <div class=\"video-container-subcontent1\">
                    <h1></h1>
                    <h1 id='LeTitre' class='video-container-content-titre'>Réalisation de visites virtuelles à 360°</h1>
                    <h2 class='video-container-content-text'>Offrez à vos clients une expérience unique qui les transportera directement dans vos espaces, où qu'ils se trouvent. Il s'agit de l'outil idéal pour promouvoir votre entreprise et générer des conversions.</h2>
                    <div class=\"reserver-creneau\">
                        <input onclick=\"smoothScroll('Partie-Exemples-4')\" type='button' value='Prendre rendez-vous' class='reserver-creneau-btn1'/>
                         <form method='post' action=\"{{ path('app_tarifs') }}\" style=\"width: min-content;\">
                            <input type=\"submit\" class='reserver-creneau-btn2' value =\"Nos tarifs\"></input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class='Partie-Exemples-5' style=\"background-image: url('img/circle-scatter-haikei(3).png');\">
       <h3>Qu'est-ce qu'une visite virtuelle ?</h3>

          <p class=\"align-center-vertically\" style=\"background-color: #ffffff8f;\">Une visite virtuelle est une expérience interactive qui permet aux utilisateurs de parcourir et d'explorer un espace en utilisant des technologies numériques. 
            Elle recrée, grâce à des photos à 360°, une représentation visuelle d'un lieu, permettant aux utilisateurs de s'y déplacer librement et de regarder autour d'eux dans toutes les directions à l'aide d'un ordinateur ou d'un smartphone, sans avoir à s'y rendre physiquement.  
        </p>

        <p class=\"align-center-vertically\" style=\"background-color: #ffffff8f;\">Cela peut être particulièrement utile pour explorer des destinations touristiques, des propriétés immobilières, des musées, des sites historiques, des campus universitaires, des hôtels, des commerces, des salles de sport, etc.  
        </p>

        <p>Jetez un oeil à nos réalisations sur <a style=\"color: #219988; cursor: pointer; background-color: white;\" href ='{{ path(\"app_realisations\")}}' >notre page dédiée</a></p>
    </div>

    <div class='Partie-Exemples-5'>
        <div id=\"visite-containe\" class=\"visite-container\" style=\"text-align: center\">
            <iframe src=\"https://visite.lookaround.fr/32890391/?startscene=2&startlookat=216.39,-0.83,120,0,0;\" scrolling=\"no\" id=\"iframe-fullscreen\" FRAMEBORDER=\"no\" style=\"box-shadow: 0 1px 1px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.12),0 4px 4px rgba(0,0,0,.12),0 8px 8px rgba(0,0,0,.12),0 16px 16px rgba(0,0,0,.12);\" allowfullscreen></iframe>
        </div>
    </div>

     <div class='Partie-Exemples-5'  style=\"padding: 27px 3px; border-bottom: 1px solid #8282821c; background-image: url('../img/circle-scatter-haikei(3).png');\">
        <h3>Qu'apporterais une visite virtuelle à mon site ?</h3>
        <div class='line-3'  style=\"margin-top:20px\">

        <div class=\"argument-card\">
        <img src=\"{{asset('img/360-view.png')}}\" class=\"argument-img\">
        <h3>Une réelle projection virtuelle</h3>
            <p>Immergez vos visiteurs dans une projection virtuelle, leur permettant d'explorer votre espace depuis le confort de leur domicile
            </p>
        </div>

        <div class=\"argument-card\">
            <img src=\"{{asset('img/24-hours.png')}}\" class=\"argument-img\">
        <h3>Une accessibilité en continu</h3>
        <p>Attirez des potentiels clients à toute heure de la journée ou de la nuit, même en dehors de vos heures d'ouverture
        </p>
        </div>

        <div class=\"argument-card\">
            <img src=\"{{asset('img/competition(1).png')}}\" class=\"argument-img\">
        <h3>Une différenciation concurrentielle</h3>
        <p>Démarquez vous de vos concurrents en offrant une expérience plus virtuelle et interactive à vos futurs clients
        </p>
        </div>

        <div class=\"argument-card\">
        <img src=\"{{asset('img/euro(1).png')}}\" class=\"argument-img\">
        <h3>Une réduction des coûts de gestion des visites physiques</h3>
            <p>Maximisez votre temps et vos ressources, et de concentrer vos efforts sur d'autres aspects de votre entreprise
            </p>
        </div>

        <div class=\"argument-card\">
        <img src=\"{{asset('img/la-technologie.png')}}\" class=\"argument-img\">
        <h3>Une présentation au gout du jour</h3>
            <p>Mettez en avant votre espace de manière plus attrayante et interactive, en captivant l'attention de vos visiteurs
            </p>
        </div>

        <div class=\"argument-card\">
        <img src=\"{{asset('img/communications.png')}}\" class=\"argument-img\">
        <h3>Une facilité de partage</h3>
            <p>Vos visiteurs pourront facilement partager leur expérience avec leur entourage, ce qui peut générer du bouche-à-oreille et accroître votre visibilité.
            </p>
        </div>
    </div>
    </div>


    <div class='Partie-Exemples-5' id=\"div-aide\" style=\"display:none\">
       <h3>Comment se déroule une création de visite virtuelle avec look<span style=\"font-weight : 500; color: #219988;\">around®</span> ?</h3>

        <div class=\"carousel-tuto\" id=\"carousel-tuto\" style=\"display: grid; grid-template-rows : 5fr 1fr;\">

            <img id=\"carousel-img\" class=\"carousel-img\" src='{{asset(\"img/tuto11.jpg\")}}'/>
            
            <div>
                <p id=\"container-descriptionTuto\" class=\"container-descriptionTuto\" style=\"padding-bottom: 28px; font-weight: 400;\"></p>
                <div class=\"indicators-tuto\"></div>
            </div>
            
            <div class=\"nav-left\" id=\"nav-left2\" onclick=\"carouselTutoPrevious()\">&lsaquo;</div>
            <div class=\"nav-right\" id=\"nav-right2\" onclick=\"carouselTutoSuivant()\">&rsaquo;</div>

        </div>
    </div>


<!--<button onclick=\"myModalDefinition.style.display = 'block'\">Définition IFrame</button>

<div id=\"myModalDefinition\" class=\"modal\">
        <div class=\"modal-content\" style=\"width: 70%; font-size: 15px; border-radius: 8px;\">   
            <div style=\"display : grid; grid-template-columns: 1fr 3.5fr; align-items: center;\">
                <img src=\"{{ asset('img/langage-de-programmation.png') }}\" style=\"width: 150px;\"/>
                <p style=\"padding: 8px;\">Un IFrame est un élément HTML utilisé pour intégrer un contenu d'une autre source à l'intérieur d'une page web. 
                    Cela permet aux développeurs de combiner différentes ressources et fonctionnalités provenant de diverses sources en les incorporant harmonieusement dans une seule page.
                    L'IFrame est généralement défini avec une source (URL) spécifique qui indique le contenu à charger à l'intérieur de l'IFrame. </p>
            </div>    
        </div>
</div>

<script>
    var myModalDefinition = document.getElementById(\"myModalDefinition\");
</script>
-->

<div class='Partie-Exemples-5' style=\"background-image: url('img/circle-scatter-haikei(3).png')\">

    <h3>L'efficacité des visites virtuelles en quelques chiffres</h3>

        <div class=\"line-3\" style=\"margin-top: 20px\">
            <div style='display: grid; grid-template-rows 1.5fr 1fr; padding: 5px 5px; background-color: #ffffff91;text-align: center;'>
                <span class=\"pourcentage\">67%</span>
                <p class=\"reference-p\"  >Augmentation des réservations en ligne pour des chambres d'hôtel</p>
                <p class=\"reference-source\">Source: Best Western Hotels & Resorts</p>
            </div>

            <div style='display: grid;  grid-template-rows 1.5fr 1fr; padding: 5px 5px; background-color: #ffffff91;text-align: center;'>
                <span class=\"pourcentage\">62%</span>
                <p class=\"reference-p\"  >Consommateurs utilisant les visites virtuelles pour choisir un restaurant</p>
                <p class=\"reference-source\">Source: TechValidate</p>
            </div>

            <div style='display: grid;  grid-template-rows 1.5fr 1fr; padding: 5px 5px; background-color: #ffffff91;text-align: center;'>
                <span class=\"pourcentage\">94%</span>
                <p class=\"reference-p\"  >Étudiants préférant visiter un campus virtuellement avant de prendre une décision</p>
                <p class=\"reference-source\">Source: Cappex</p>
            </div>
        </div>
    </div>

<!--
    <div class='Partie-Exemples-5'>
       <h3>Nous proposons également de la photographie grand angle</h3>

        <img src=\"https://www.camif-habitat.fr/wp-content/uploads/2022/08/Renovation-dun-appartement-a-Avignon-85-10.jpg\" style=\"width: 700px; height : 300px; border-radius: 25px; padding : 20px; margin: 0 auto\"/>

       <p class=\"align-center-vertically\">La photographie grand angle est une technique utilisée en photographie pour capturer un champ de vision plus large que ce que l'œil humain peut naturellement voir. Elle implique l'utilisation d'un objectif grand angle qui a une distance focale plus courte que les objectifs standards, ce qui permet d'inclure davantage d'espace dans le cadre de la photo.</p>
       <p class=\"align-center-vertically\">Il peut donc être interessant de proposer des photos grand angle sur votre site, car ça peut avoir beaucoup d'utilité</p>

      
    </div>
-->


    <div class=\"line-2\">

        <div style=\"position: relative;\">
            <br>
          <!--  <h1 onclick=\"goWelcome.submit()\" class=\"logo-LA\">look<span style=\"font-weight : 500; color: #219988;\">around®</span></h1> -->
                <div style=\"position: relative; width: 100%; height: 100%;\">
                <div class=\"block-contact-sheet\">
                    <div class=\"line-contact-sheet\">

                        <div class=\"contact-div\">
                            <img src=\"{{ asset('img/telephone(1).png') }}\" class=\"middleinDiv\"/>
                            <p contenteditable=\"true\" style=\"cursor: default; text-decoration: none!important; color: black !important;\">06 51 45 01 06</p>
                        </div>
                      
                        <div class=\"contact-div\">
                                <img src=\"{{ asset('img/gmail.png') }}\" class=\"middleinDiv\"/>
                                <p>contact@lookaround.fr</p>
                        </div>
                    </div>

                    <div class=\"line-contact-sheet\"     style='display:none'>
                          <div class=\"contact-div\">
                                <img src=\"{{ asset('img/office.png') }}\" class=\"middleinDiv\"/>
                                <p>N°892 074 774 00019</p>
                        </div>
                        
                        <div class=\"contact-div\">
                                <img src=\"{{ asset('img/linkedin.png') }}\" class=\"middleinDiv\"/>
                                <p>lookaround</p>
                        </div>

                    </div>
                </div>
                </div>
        </div>



  <div id=\"Partie-Exemples-4\" class=\"Partie-Exemples-4\" style=\"border-left: 1px solid #8282821c;\">
        <h2 class=\"titre2\">Prendre rendez-vous</h2>

        {{ form_start(registrationForm) }} 
    <br>
        <div class=\"line-1\">
            {{ form_row(registrationForm.nom)}}
        </div>
    <br>
        <div class=\"line-2\">
            {{ form_row(registrationForm.email)}}
            {{ form_row(registrationForm.numero_telephone)}}
        </div>
    <br>    
            {{ form_row(registrationForm.preference_creneau)}}
    <br>
    <div class=\"line-2-3\" style=\" display:none\">
            <p style=\"font-size : 14px;\">Préference de contact :</p>
            {{ form_row(registrationForm.preference_contact)}}
        </div>


        <div class=\"wrapper\">
            <div class=\"captcha-area\">
                <div class=\"captcha-img\">
                    <span class=\"captcha\"></span>
                </div>
                <button class=\"reload-btn\"><p class=\"fas fa-redo-alt\">⟳</p></button>
            </div>

            <div class=\"input-area\">
                <input class=\"input_form_inscription\" type=\"text\" placeholder=\"Entrez le captcha\" maxlength=\"6\">
            </div>
        </div>


            <p class=\"text-error\" id=\"text-error\"></p>

             <br> 
   
        <!--<button type=\"submit\" class=\"reserver-creneau-btn\">Valider</button>-->
            <button type=\"button\" id='go-submit-form' class=\"reserver-creneau-btn1\">Valider</button>

            {#registrationForm.adresse_facturation#}
                
            {{ form_end(registrationForm) }}
    </div>
 </div>


<div style=\"display: none\">
    <div id=\"notes\"></div>
    <div id=\"commentaires\"></div>
    <div id=\"prenoms\"></div>
</div>
</section>
    {% include 'tools/footer.html.twig' %}
</section>


<script>    

    const userStatusElement = document.getElementById('user-status');
    const isConnected = userStatusElement.dataset.isConnected;

        var myForm = document.forms.registration_form;
        var btnValidForm = document.getElementById(\"go-submit-form\");

        var formNom = myForm.querySelector('input[name=\"registration_form[nom]\"]');
        var formEmail = myForm.querySelector('input[name=\"registration_form[email]\"]');

        var formNumero = myForm.querySelector('input[name=\"registration_form[numero_telephone]\"]');

        var formPrefCreneau = myForm.querySelector('textarea[name=\"registration_form[preference_creneau]\"]')

        btnValidForm.addEventListener('click', onClickHandler);

        const textError = document.getElementById('text-error');
        textError.style.display = \"block\";


        async function onClickHandler() {
            
        //const emailList = await getMailList();

            if (formNom.value.length < 3)
                textError.innerHTML = \"Le nom choisi est trop court\"

            else if (!validateEmail(formEmail.value))
                textError.innerHTML = \"Adresse mail incorrecte\"
            
            else if (formNumero.value.length !== 14)
                textError.innerHTML = \"Numéro de téléphone incorrect\"

            else if (formPrefCreneau.value.length < 3)
                textError.innerHTML = \"Description trop courte\"

            else if (!isCaptchaCorrect()) {
                textError.innerHTML = \"Captcha incorrect\"
            }

            else {
                textError.style.display = \"none\";
                myForm.submit()
            }
        }

    //}

function validateEmail(email) {
  const re = /\\S+@\\S+\\.\\S+/;
  return re.test(email);
}

document.addEventListener('DOMContentLoaded', function() {
    var elements = document.querySelectorAll('.pnlm-about-msg');
    for (var i = 0; i < elements.length; i++) {
    elements[i].parentElement.removeChild(elements[i]);
    }
})

/*

videojs('panoramaExemple4', {
    plugins: {
        pannellum: {}
    }
});
*/
/*

var carouselNumber = -1;
var carouselMax = 2;

var LeTitre = document.getElementById(\"LeTitre\");

var video = document.getElementById(\"video-element\");
video.disablePictureInPicture = true;

var arrayVideoLinks = [\"{{ asset('videos/look.mp4') }}\", \"{{ asset('videos/coffee.mp4') }}\", \"{{ asset('videos/sea.mp4') }}\"]

const indicatorsContainer = document.querySelector('.indicators');


for (let i = 0; i < carouselMax + 1; i++) {
    const indicator = document.createElement('span');
    indicator.classList.add('indicator');
    if (i === 0) {
        indicator.classList.add('active');
    }
    indicatorsContainer.appendChild(indicator);
}

changeVideoSource(\"right\")

var LeTitre = document.getElementById(\"LeTitre\");

function changeVideoSource(sens) {

    if (sens == \"right\"){
        if (carouselNumber != carouselMax)
            carouselNumber ++;
    }

    if (sens == \"left\"){
        if (carouselNumber != 0)
            carouselNumber --;
    }

    const indicators = document.querySelectorAll('.indicator');
    indicators.forEach((indicator, index) => {
        indicator.classList.remove('active');
        if (index  === carouselNumber) {
            indicator.classList.add('active');
        }
    });
   // LeTitre.innerHTML = nomsCommerciaux[carouselNumber];

    var source = video.getElementsByTagName(\"source\")[0];
    source.setAttribute(\"src\", arrayVideoLinks[carouselNumber]);
    video.load();


    if (carouselNumber == 0) {
        document.getElementById(\"nav-left\").style.display = \"none\";
    }

    else if (carouselNumber == carouselMax) {
        document.getElementById(\"nav-right\").style.display = \"none\";
    }

    else  {
        document.getElementById(\"nav-right\").style.display = \"block\";
        document.getElementById(\"nav-left\").style.display = \"block\";
    }
}
*/



    function formatPhone() {

         const input = document.getElementById('registration_form_numero_telephone');

       
        let value = input.value.replace(/\\D/g, ''); // ne garder que les chiffres

        var v = value.replace(/\\s+/g, \"\").replace(/[^0-9]/gi, \"\");
        var matches = v.match(/\\d{2,16}/g);
        var match = (matches && matches[0]) || \"\";
        var parts = [];

            for (i = 0, len = match.length; i < len; i += 2)
                parts.push(match.substring(i, i + 2));

            if (parts.length) 
                input.value = parts.join(\" \");
            else 
                input.value = value;
    }



    function displayToast (erreur, conseil) {

        tata.text(erreur, conseil, {
            duration: 3000,
            closeBtn: false,
            animate: \"slide\",    
        });
    }

</script>


<script>
const captcha = document.querySelector(\".captcha\")
reloadBtn = document.querySelector(\".reload-btn\")
inputField = document.querySelector(\".input-area input\")

inputField.addEventListener(\"keypress\", function(event) {
  if (event.key === \"Enter\") {
    event.preventDefault(); 
  }
});


//storing all captcha characters in array
let allCharacters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
                     'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd',
                     'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's',
                     't', 'u', 'v', 'w', 'x', 'y', 'z', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
function getCaptcha(){
  for (let i = 0; i < 6; i++) { //getting 6 random characters from the array
    let randomCharacter = allCharacters[Math.floor(Math.random() * allCharacters.length)];
    captcha.innerText += ` \${randomCharacter}`; //passing 6 random characters inside captcha innerText
  }
}
getCaptcha(); //calling getCaptcha when the page open
//calling getCaptcha & removeContent on the reload btn click
reloadBtn.addEventListener(\"click\", (event)=>{
  event.preventDefault(); 
  removeContent();
  getCaptcha();
});

function isCaptchaCorrect(){
  let inputVal = inputField.value.split('').join(' ');
  
  return inputVal == captcha.innerText;
  /*
  if(inputVal == captcha.innerText){ //if captcha matched
    statusTxt.style.color = \"#4db2ec\";
    statusTxt.innerText = \"Nice! You don't appear to be a robot.\";
    setTimeout(()=>{
      removeContent();
      getCaptcha();
    }, 2000);
  }else{
    statusTxt.style.color = \"#ff0000\";
    statusTxt.innerText = \"Captcha not matched. Please try again!\";
  }
  */
};

function removeContent(){
 inputField.value = \"\";
 captcha.innerText = \"\";
}
</script>


<script>

    var descriptionTutoArray = [
        \"1. Remplissez notre formulaire de prise de rendez-vous, en nous décrivant les spécificités de votre besoin\",
        \"2. Par la suite, nous vous contacterons pour étudier votre demande et pour convenir ensemble d'un créneau de rendez-vous\",
        \"3. Le jour J, nous réaliserons les prises de vues sur votre site. Nous vous recommandons de limiter le nombre de personnes présentes sur site ce jour là\",
        \"4. Vous pourrez facilement suivre l'avancée et toutes les étapes du processus de votre commande via votre espace client\",
        \"5. Nous commencerons le processus en éditant et en effectuant le traitement de vos photos, puis nous les utiliserons pour créer votre visite\",
        \"6. Dans les 48 heures après le rendez-vous, nous vous livrerons la visite sous la forme d'un code d'intégration IFrame, ainsi que les photos 360°\",
        \"7. Intégrez la visite et les photos à votre site web, et faites profiter vos visiteurs d'une expérience interactive (exmpl insta carousel, bannière site , use cases)\"
    ];

    var compteurCarouselTuto = 0;
    var maxItemCarouselTuto = descriptionTutoArray.length;

    var arrayImageTutos = [\"{{ asset('img/tuto11.jpg') }}\", \"{{ asset('img/tuto2.jpg') }}\", \"{{ asset('img/tuto3.jpg') }}\", \"{{ asset('img/tuto44.jpg') }}\", \"{{ asset('img/tuto5.jpg') }}\"]


    function carouselTutoSuivant(){
        compteurCarouselTuto++;
        setIndicatorsTuto();

        if (compteurCarouselTuto > 0)
            document.getElementById(\"nav-left2\").style.display = \"block\"; 

        if (compteurCarouselTuto == maxItemCarouselTuto - 1)
            document.getElementById(\"nav-right2\").style.display = \"none\"; 
    }

    function carouselTutoPrevious(){
        compteurCarouselTuto--;
        setIndicatorsTuto();

        if (compteurCarouselTuto == 0)
            document.getElementById(\"nav-left2\").style.display = \"none\"; 
        if (compteurCarouselTuto != maxItemCarouselTuto - 1)
            document.getElementById(\"nav-right2\").style.display = \"block\"; 
    }

    
    function setIndicatorsTuto(){

        

        const indicatorsContainer2 = document.querySelector('.indicators-tuto');

        while (indicatorsContainer2.firstChild) {
            indicatorsContainer2.removeChild(indicatorsContainer2.firstChild);
        }

        for (let i = 0; i < maxItemCarouselTuto; i++) {
            const indicator = document.createElement('span');
            indicator.classList.add('indicator2');
            if (i === compteurCarouselTuto) {
                indicator.classList.add('active');
            }
            indicatorsContainer2.appendChild(indicator);
        }

        document.getElementById(\"container-descriptionTuto\").innerHTML = descriptionTutoArray[compteurCarouselTuto];
        document.getElementById(\"carousel-img\").src = arrayImageTutos[compteurCarouselTuto];

    }

    setIndicatorsTuto();


    function smoothScroll(target) {
        var element = document.getElementById(target);
        var rect = element.getBoundingClientRect();
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        var start = scrollTop;
        var end = rect.top + scrollTop;
        var duration = 800; // Durée de l'animation en millisecondes
        var clock = Date.now();
        
        var requestAnimationFrame = window.requestAnimationFrame ||
                                        window.mozRequestAnimationFrame ||
                                        window.webkitRequestAnimationFrame ||
                                        function(fn){window.setTimeout(fn, 15)};
                                        
        function step() {
            var elapsed = Date.now() - clock;
            var position = null;
            if (elapsed > duration) {
            position = end;
            } else {
            position = start + (end - start) * easeInOutQuad(elapsed / duration);
            requestAnimationFrame(step);
            }
            window.scrollTo(0, position);
        }
        
        function easeInOutQuad(t) {
            return t<0.5 ? 2*t*t : -1+(4-2*t)*t;
        }
        
        requestAnimationFrame(step);
    }

</script>

    {% for flash_message in app.session.flashbag.get('smoothScroll') %}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                smoothScroll('Partie-Exemples-4')
            });
        </script>
    {% endfor %}


        {% for flash_message in app.session.flashbag.get('smoothScroll2') %}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                smoothScroll('div-aide')
            });
        </script>
    {% endfor %}


    
{% for flash_message in app.session.flashbag.get('connexionGo') %}

    <script>
        setTimeout(function() {
          document.getElementById(\"myModal\").style.display = \"block\";
        }, 200);
    </script>

{% endfor %}


{% for flash_message in app.session.flashbag.get('mdpReinit') %}

    <script>
        tata.success(\"\", \"Mot de passe réinitialisé avec succès !\", {
            duration: 3000,
            closeBtn: false,
            animate: \"slide\",    
        });
    </script>

{% endfor %}


<script>
    var screenWidth = window.innerWidth;
   // alert(\"Screen width: \" + screenWidth + \" pixels\");
</script>


{% endblock %}
", "index.html.twig", "C:\\Users\\utils\\Documents\\lookaround\\Website\\lookaround\\templates\\index.html.twig");
    }
}
