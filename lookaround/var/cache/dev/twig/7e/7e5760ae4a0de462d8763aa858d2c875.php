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
<script src='https://www.google.com/recaptcha/api.js'></script>

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
            echo "    <script>
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
            echo "    <script>
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


<section class='Body-Section-White'>
    ";
        // line 42
        $this->loadTemplate("tools/navbar.html.twig", "index.html.twig", 42)->display($context);
        // line 43
        echo "<section class='Cadre'>

<div id=\"user-status\" data-is-connected=\"";
        // line 45
        echo twig_escape_filter($this->env,  !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)), "html", null, true);
        echo "\"></div>

    <div class='Partie-Exemples-1'>
        <div class=\"video-container\">

            <video autoplay muted loop playsinline webkit-playsinline id=\"video-element\">
                <source type=\"video/mp4\" src=\"";
        // line 51
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
        // line 61
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
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_realisations");
        echo "' >notre page dédiée</a></p>
    </div>

    <div class='Partie-Exemples-5'>
        <div id=\"visite-containe\" class=\"visite-container\" style=\"text-align: center\">
            <iframe src=\"https://visite.lookaround.fr/18476801/?startscene=1&startlookat=-178.63,1.02,123.94,0.35,0;\" scrolling=\"no\" id=\"iframe-fullscreen\" FRAMEBORDER=\"no\" style=\"box-shadow: 0 1px 1px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.12),0 4px 4px rgba(0,0,0,.12),0 8px 8px rgba(0,0,0,.12),0 16px 16px rgba(0,0,0,.12);\" allowfullscreen></iframe>
        </div>
    </div>

     <div class='Partie-Exemples-5'  style=\"padding: 27px 3px; border-bottom: 1px solid #8282821c; background-image: url('../img/circle-scatter-haikei(3).png');\">
        <h3>Qu'apporterais une visite virtuelle à mon site ?</h3>
        <div class='line-3'  style=\"margin-top:20px\">

        <div class=\"argument-card\">
        <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/360-view.png"), "html", null, true);
        echo "\" class=\"argument-img\">
        <h3>Une réelle projection virtuelle</h3>
            <p>Immergez vos visiteurs dans une projection virtuelle, leur permettant d'explorer votre espace depuis le confort de leur domicile
            </p>
        </div>

        <div class=\"argument-card\">
            <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/24-hours.png"), "html", null, true);
        echo "\" class=\"argument-img\">
        <h3>Une accessibilité en continu</h3>
        <p>Attirez des potentiels clients à toute heure de la journée ou de la nuit, même en dehors de vos heures d'ouverture
        </p>
        </div>

        <div class=\"argument-card\">
            <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/competition(1).png"), "html", null, true);
        echo "\" class=\"argument-img\">
        <h3>Une différenciation concurrentielle</h3>
        <p>Démarquez vous de vos concurrents en offrant une expérience plus virtuelle et interactive à vos futurs clients
        </p>
        </div>

        <div class=\"argument-card\">
        <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/euro(1).png"), "html", null, true);
        echo "\" class=\"argument-img\">
        <h3>Une réduction des coûts de gestion des visites physiques</h3>
            <p>Maximisez votre temps et vos ressources, et de concentrer vos efforts sur d'autres aspects de votre entreprise
            </p>
        </div>

        <div class=\"argument-card\">
        <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/la-technologie.png"), "html", null, true);
        echo "\" class=\"argument-img\">
        <h3>Une présentation au gout du jour</h3>
            <p>Mettez en avant votre espace de manière plus attrayante et interactive, en captivant l'attention de vos visiteurs
            </p>
        </div>

        <div class=\"argument-card\">
        <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/communications.png"), "html", null, true);
        echo "\" class=\"argument-img\">
        <h3>Une facilité de partage</h3>
            <p>Vos visiteurs pourront facilement partager leur expérience avec leur entourage, ce qui peut générer du bouche-à-oreille et accroître votre visibilité.
            </p>
        </div>
    </div>
    </div>

     <div class='Partie-Exemples-5'>
        <h3>Ils nous ont fait confiance</h3>
        <div style=\"grid-template-columns: 1fr 1fr 1fr 1fr;display: grid;width: 75%; padding: 20px;margin-top: 15px;margin: 0 auto; \">
            <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/clients/isifa.png"), "html", null, true);
        echo "\" class=\"partenaires-img\" onclick=\"ouvrirNouvelOnglet('https://www.isifaplusvalues.com/')\">
            <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/clients/ihecf.jpg"), "html", null, true);
        echo "\" class=\"partenaires-img\" onclick=\"ouvrirNouvelOnglet('https://www.ihecf.fr/')\">
            <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/clients/mbway.png"), "html", null, true);
        echo "\" class=\"partenaires-img\" onclick=\"ouvrirNouvelOnglet('https://www.mbway.com/')\">
            <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/clients/ipac.jpg"), "html", null, true);
        echo "\" class=\"partenaires-img\" onclick=\"ouvrirNouvelOnglet('https://www.ipacbachelorfactory.com/')\">
        </div>
    </div>

<div class='Partie-Exemples-5' style=\"background-image: url('img/circle-scatter-haikei(3).png')\">

    <h3>Comment se déroule une prise de vue <span>look<span style=\"font-weight : 500; color: #219988;\">around®</span></span> ?</h3>
    <br>
    <div class=\"line-6\" style=\"grid-template-columns : 1fr 1fr 1fr 1fr\">
        <div class=\"argument-card\"> <img class=\"argument-img\" src='";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/telephone(1).png"), "html", null, true);
        echo "' /><br> <h3>1- Premier contact</h3><p>Durant un appel, nous réponderons à toutes vos questions, puis nous pourront convenir d'un RDV.</p></div>
        <div class=\"argument-card\"> <img class=\"argument-img\" src='";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/camera(1).png"), "html", null, true);
        echo "'/><br> <h3>2- Prise de vue</h3><p >Le jour J, nous effectuons les prises de vues dans vos espaces. Cela peut durer entre 20 et 45 minutes.</p></div>
        <div class=\"argument-card\"> <img class=\"argument-img\" src='";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/computer.png"), "html", null, true);
        echo "'/><br> <h3>3- Création de la visite</h3><p>Après le traitement et l'édition des photos, nous nous attelons à la création de la visite.</p></div>
        <div class=\"argument-card\"> <img class=\"argument-img\" src='";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/paquet.png"), "html", null, true);
        echo "'/><br> <h3>4- Livraison de la visite</h3><p>Nous vous envoyons les packages de votre visite, ainsi que l'url sur laquelle nous l'hébergeons.</p></div>
    </div>
</div>


    <div class=\"line-2\">

        <div style=\"position: relative;\">
            <br>
          <!--  <h1 onclick=\"goWelcome.submit()\" class=\"logo-LA\">look<span style=\"font-weight : 500; color: #219988;\">around®</span></h1> -->
                <div style=\"position: relative; width: 100%; height: 100%;\">
                <div class=\"block-contact-sheet\">
                    <div class=\"line-contact-sheet\">

                        <div class=\"contact-div\">
                            <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/telephone(1).png"), "html", null, true);
        echo "\" class=\"middleinDiv\"/>
                            <p contenteditable=\"true\" style=\"cursor: default; text-decoration: none!important; color: black !important;\">06 51 45 01 06</p>
                        </div>
                      
                        <div class=\"contact-div\">
                                <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gmail.png"), "html", null, true);
        echo "\" class=\"middleinDiv\"/>
                                <p>contact@lookaround.fr</p>
                        </div>
                    </div>

                    <div class=\"line-contact-sheet\"     style='display:none'>
                          <div class=\"contact-div\">
                                <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/office.png"), "html", null, true);
        echo "\" class=\"middleinDiv\"/>
                                <p>N°892 074 774 00019</p>
                        </div>
                        
                        <div class=\"contact-div\">
                                <img src=\"";
        // line 187
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
        // line 201
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 201, $this->source); })()), 'form_start');
        echo " 
    <br>
        <div class=\"line-1\">
            ";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 204, $this->source); })()), "nom", [], "any", false, false, false, 204), 'row');
        echo "
        </div>
    <br>
        <div class=\"line-2\">
            ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 208, $this->source); })()), "email", [], "any", false, false, false, 208), 'row');
        echo "
            ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 209, $this->source); })()), "numero_telephone", [], "any", false, false, false, 209), 'row');
        echo "
        </div>
    <br>    
            ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 212, $this->source); })()), "preference_creneau", [], "any", false, false, false, 212), 'row');
        echo "
    <br>
    <div class=\"line-2-3\" style=\" display:none\">
            <p style=\"font-size : 14px;\">Préference de contact :</p>
            ";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 216, $this->source); })()), "preference_contact", [], "any", false, false, false, 216), 'row');
        echo "
        </div>


        <div class=\"wrapper\">
<!--
            <div class=\"captcha-area\">
                <div class=\"captcha-img\">
                    <span class=\"captcha\"></span>
                </div>
                <button class=\"reload-btn\"><p class=\"fas fa-redo-alt\">⟳</p></button>
            </div>

            
-->

            <div class=\"g-recaptcha\" data-callback=\"setCaptchaValide\"  data-sitekey=\"6LffU4YpAAAAAIQvvsIfNNiejIpl3yI_tHLzIEuI\"></div>
        </div>




            <p class=\"text-error\" id=\"text-error\"></p>

             <br> 
   
        <!--<button type=\"submit\" class=\"reserver-creneau-btn\">Valider</button>-->
            <button type=\"button\" id='go-submit-form' class=\"reserver-creneau-btn1\">Valider</button>

            ";
        // line 246
        echo "
             ";
        // line 248
        echo "                
            ";
        // line 249
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 249, $this->source); })()), 'form_end');
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
        // line 260
        $this->loadTemplate("tools/footer.html.twig", "index.html.twig", 260)->display($context);
        // line 261
        echo "</section>


<script>    

    var isCaptchaValidated = false;

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


        function setCaptchaValide(){
            isCaptchaValidated = true;
        }

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

            else if (!isCaptchaValidated) {
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
        // line 349
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


<script>/*
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
 
};

function removeContent(){
 inputField.value = \"\";
 captcha.innerText = \"\";
}*/
</script>


<script>

 function ouvrirNouvelOnglet(url) {
    window.open(url, '_blank');
  }

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
        // line 521
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
        // line 608
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 608, $this->source); })()), "session", [], "any", false, false, false, 608), "flashbag", [], "any", false, false, false, 608), "get", [0 => "smoothScroll"], "method", false, false, false, 608));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 609
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
        // line 615
        echo "

        ";
        // line 617
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 617, $this->source); })()), "session", [], "any", false, false, false, 617), "flashbag", [], "any", false, false, false, 617), "get", [0 => "smoothScroll2"], "method", false, false, false, 617));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 618
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
        // line 624
        echo "

    
";
        // line 627
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 627, $this->source); })()), "session", [], "any", false, false, false, 627), "flashbag", [], "any", false, false, false, 627), "get", [0 => "connexionGo"], "method", false, false, false, 627));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 628
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
        // line 636
        echo "

";
        // line 638
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 638, $this->source); })()), "session", [], "any", false, false, false, 638), "flashbag", [], "any", false, false, false, 638), "get", [0 => "mdpReinit"], "method", false, false, false, 638));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 639
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
        // line 649
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
        return array (  937 => 649,  922 => 639,  918 => 638,  914 => 636,  901 => 628,  897 => 627,  892 => 624,  881 => 618,  877 => 617,  873 => 615,  862 => 609,  858 => 608,  760 => 521,  581 => 349,  491 => 261,  489 => 260,  475 => 249,  472 => 248,  469 => 246,  437 => 216,  430 => 212,  424 => 209,  420 => 208,  413 => 204,  407 => 201,  390 => 187,  382 => 182,  372 => 175,  364 => 170,  346 => 155,  342 => 154,  338 => 153,  334 => 152,  322 => 143,  318 => 142,  314 => 141,  310 => 140,  296 => 129,  286 => 122,  276 => 115,  266 => 108,  256 => 101,  246 => 94,  229 => 80,  207 => 61,  194 => 51,  185 => 45,  181 => 43,  179 => 42,  173 => 38,  160 => 31,  157 => 30,  153 => 29,  149 => 27,  136 => 20,  133 => 19,  129 => 18,  123 => 15,  120 => 14,  110 => 13,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - Réalisation de visites virtuelles à 360° {% endblock %}

{% block stylesheets %}

<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" type=\"text/css\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/inoca.png') }}\">
<script src='https://www.google.com/recaptcha/api.js'></script>

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
            <iframe src=\"https://visite.lookaround.fr/18476801/?startscene=1&startlookat=-178.63,1.02,123.94,0.35,0;\" scrolling=\"no\" id=\"iframe-fullscreen\" FRAMEBORDER=\"no\" style=\"box-shadow: 0 1px 1px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.12),0 4px 4px rgba(0,0,0,.12),0 8px 8px rgba(0,0,0,.12),0 16px 16px rgba(0,0,0,.12);\" allowfullscreen></iframe>
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

     <div class='Partie-Exemples-5'>
        <h3>Ils nous ont fait confiance</h3>
        <div style=\"grid-template-columns: 1fr 1fr 1fr 1fr;display: grid;width: 75%; padding: 20px;margin-top: 15px;margin: 0 auto; \">
            <img src=\"{{asset('img/clients/isifa.png')}}\" class=\"partenaires-img\" onclick=\"ouvrirNouvelOnglet('https://www.isifaplusvalues.com/')\">
            <img src=\"{{asset('img/clients/ihecf.jpg')}}\" class=\"partenaires-img\" onclick=\"ouvrirNouvelOnglet('https://www.ihecf.fr/')\">
            <img src=\"{{asset('img/clients/mbway.png')}}\" class=\"partenaires-img\" onclick=\"ouvrirNouvelOnglet('https://www.mbway.com/')\">
            <img src=\"{{asset('img/clients/ipac.jpg')}}\" class=\"partenaires-img\" onclick=\"ouvrirNouvelOnglet('https://www.ipacbachelorfactory.com/')\">
        </div>
    </div>

<div class='Partie-Exemples-5' style=\"background-image: url('img/circle-scatter-haikei(3).png')\">

    <h3>Comment se déroule une prise de vue <span>look<span style=\"font-weight : 500; color: #219988;\">around®</span></span> ?</h3>
    <br>
    <div class=\"line-6\" style=\"grid-template-columns : 1fr 1fr 1fr 1fr\">
        <div class=\"argument-card\"> <img class=\"argument-img\" src='{{asset(\"img/telephone(1).png\")}}' /><br> <h3>1- Premier contact</h3><p>Durant un appel, nous réponderons à toutes vos questions, puis nous pourront convenir d'un RDV.</p></div>
        <div class=\"argument-card\"> <img class=\"argument-img\" src='{{asset(\"img/camera(1).png\")}}'/><br> <h3>2- Prise de vue</h3><p >Le jour J, nous effectuons les prises de vues dans vos espaces. Cela peut durer entre 20 et 45 minutes.</p></div>
        <div class=\"argument-card\"> <img class=\"argument-img\" src='{{asset(\"img/computer.png\")}}'/><br> <h3>3- Création de la visite</h3><p>Après le traitement et l'édition des photos, nous nous attelons à la création de la visite.</p></div>
        <div class=\"argument-card\"> <img class=\"argument-img\" src='{{asset(\"img/paquet.png\")}}'/><br> <h3>4- Livraison de la visite</h3><p>Nous vous envoyons les packages de votre visite, ainsi que l'url sur laquelle nous l'hébergeons.</p></div>
    </div>
</div>


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
<!--
            <div class=\"captcha-area\">
                <div class=\"captcha-img\">
                    <span class=\"captcha\"></span>
                </div>
                <button class=\"reload-btn\"><p class=\"fas fa-redo-alt\">⟳</p></button>
            </div>

            
-->

            <div class=\"g-recaptcha\" data-callback=\"setCaptchaValide\"  data-sitekey=\"6LffU4YpAAAAAIQvvsIfNNiejIpl3yI_tHLzIEuI\"></div>
        </div>




            <p class=\"text-error\" id=\"text-error\"></p>

             <br> 
   
        <!--<button type=\"submit\" class=\"reserver-creneau-btn\">Valider</button>-->
            <button type=\"button\" id='go-submit-form' class=\"reserver-creneau-btn1\">Valider</button>

            {#registrationForm.adresse_facturation#}

             {#{ form_end(registrationForm._token) }#}
                
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

    var isCaptchaValidated = false;

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


        function setCaptchaValide(){
            isCaptchaValidated = true;
        }

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

            else if (!isCaptchaValidated) {
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


<script>/*
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
 
};

function removeContent(){
 inputField.value = \"\";
 captcha.innerText = \"\";
}*/
</script>


<script>

 function ouvrirNouvelOnglet(url) {
    window.open(url, '_blank');
  }

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
