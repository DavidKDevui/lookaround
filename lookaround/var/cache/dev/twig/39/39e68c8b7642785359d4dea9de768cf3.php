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

/* moncompte.html.twig */
class __TwigTemplate_c08dff7f765cf29532125e86b2fa322f extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moncompte.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moncompte.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "moncompte.html.twig", 1);
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

        echo " Mes commandes - Réalisation de visites virtuelles à 360° ";
        
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
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tata.js"), "html", null, true);
        echo "\"></script>


";
        // line 18
        $context["mois"] = ["01" => "Janvier", "02" => "Février", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Août", "09" => "Septembre", "10" => "Octobre", "11" => "Novembre", "12" => "Décembre"];
        // line 32
        echo "

";
        // line 34
        $context["jour"] = ["Monday" => "Lundi", "Tuesday" => "Mardi", "Wednesday" => "Mercredi", "Thursday" => "Jeudi", "Friday" => "Vendredi", "Saturday" => "Samedi", "Sunday" => "Dimanche"];
        // line 43
        echo "

";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "session", [], "any", false, false, false, 45), "flashbag", [], "any", false, false, false, 45), "get", [0 => "success"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 46
            echo "    <script>
        tata.success(\"\", \"";
            // line 47
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
        // line 55
        echo "
";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "session", [], "any", false, false, false, 56), "flashbag", [], "any", false, false, false, 56), "get", [0 => "failed"], "method", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 57
            echo "    <script>
        tata.error(\"\", \"";
            // line 58
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
        // line 65
        echo "



<section class='Body-Section-White'>

    ";
        // line 71
        $this->loadTemplate("tools/navbar.html.twig", "moncompte.html.twig", 71)->display($context);
        // line 72
        echo "
<section class='Cadre'>
    
    <h1 class=\"bonjour-pseudo\">Bonjour ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "nom", [], "any", false, false, false, 75), "html", null, true);
        echo "</h1>
    <br>
    <h2 style=\"margin : 0 auto; font-weight: 400; font-size: 17px; margin-bottom: 18px; width: 80%\">Mes commandes</h2>

    ";
        // line 79
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "commandes", [], "any", false, false, false, 79)) > 0)) {
            // line 80
            echo "
        ";
            // line 81
            $context["commandes"] = twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "commandes", [], "any", false, false, false, 81), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 81, $this->source); })()), "datecommande", [], "any", false, false, false, 81) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 81, $this->source); })()), "datecommande", [], "any", false, false, false, 81)); });
            // line 82
            echo "        <ul style=\"list-style-type: none; width: 80%; margin: 0 auto;\">
        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 83, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 84
                echo "
            ";
                // line 85
                $context["nomFormule"] = "";
                // line 86
                echo "
            ";
                // line 87
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["commande"], "getFormuleId", [], "method", false, false, false, 87))) {
                    // line 88
                    echo "                ";
                    $context["nomFormule"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formules"]) || array_key_exists("formules", $context) ? $context["formules"] : (function () { throw new RuntimeError('Variable "formules" does not exist.', 88, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["commande"], "getFormuleId", [], "method", false, false, false, 88), [], "array", false, false, false, 88), "getNom", [], "method", false, false, false, 88);
                    // line 89
                    echo "            ";
                } else {
                    // line 90
                    echo "                ";
                    $context["nomFormule"] = "À DÉFINIR";
                    // line 91
                    echo "            ";
                }
                // line 92
                echo "
            ";
                // line 93
                if ((twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 93) == "EN ATTENTE D'UN CRÉNEAU")) {
                    // line 94
                    echo "                <li class=\"item-order\"> <p class=\"titre-order\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 94), "html", null, true);
                    echo "</p> <p class=\"soustitre-order\">Nous vous contacterons très prochainement par ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "preferenceContact", [], "any", false, false, false, 94), "html", null, true);
                    echo "</p>  
                    <div class=\"line-1-4\"> <h2 class=\"h2-titre-order\">";
                    // line 95
                    echo twig_escape_filter($this->env, (isset($context["nomFormule"]) || array_key_exists("nomFormule", $context) ? $context["nomFormule"] : (function () { throw new RuntimeError('Variable "nomFormule" does not exist.', 95, $this->source); })()), "html", null, true);
                    echo "</h2>
                    <div style=\"font-weight: 300\">N° de commande : <a> ";
                    // line 96
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 96), "html", null, true);
                    echo "</a> <br> Commande effectuée le ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecommande", [], "any", false, false, false, 96), "d"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 96, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecommande", [], "any", false, false, false, 96), "m"), [], "array", false, false, false, 96), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecommande", [], "any", false, false, false, 96), "Y"), "html", null, true);
                    echo "<br>Description : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "preferenceCreneau", [], "any", false, false, false, 96), "html", null, true);
                    echo " <br>     
                    ";
                    // line 98
                    echo "                    <br>
                    <button class='reserver-creneau-btn5' onclick=\"modal3.style.display = 'block';\" type=\"button\">Annuler la demande</button>

                    <div id=\"myModal4\" class=\"modal\">
                        <div class=\"modal-content\">
                        <h3 >Vous êtes sur le point d'annuler la commande</h3>
                        <p>Cette action est irreversible</p>
                        <form method=\"post\" action=\"";
                    // line 105
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deleteCommande");
                    echo "\" style=\"display: grid; grid-template-columns: 1fr 0.6fr; grid-column-gap: 5px;margin-top: 10px;\">
                            <input type=\"hidden\" name=\"id\" value=\"";
                    // line 106
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 106), "html", null, true);
                    echo "\">
                                <button class='reserver-creneau-btn4' type=\"submit\">Confirmer l'annulation</button>
                                <button class='reserver-creneau-btn5' onclick=\"modal3.style.display = 'none';\" type=\"button\">Retour</button>
                        </form>
   
                        </div>
                    </div>

                </div></div></li>

            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 116
$context["commande"], "statut", [], "any", false, false, false, 116) == "EXPIRÉ")) {
                    // line 117
                    echo "                <li class=\"item-order\"> <p class=\"titre-order\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 117), "html", null, true);
                    echo "</p> <p class=\"soustitre-order\">Vous avez raté le délai de paiement, veuillez redemander un créneau ou créer une nouvelle commande</p> 
                <div class=\"line-1-4\"> <h2  class=\"h2-titre-order\">";
                    // line 118
                    echo twig_escape_filter($this->env, (isset($context["nomFormule"]) || array_key_exists("nomFormule", $context) ? $context["nomFormule"] : (function () { throw new RuntimeError('Variable "nomFormule" does not exist.', 118, $this->source); })()), "html", null, true);
                    echo "</h2> 
                <div style=\"font-weight: 300\">N° de commande : <a> ";
                    // line 119
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 119), "html", null, true);
                    echo "</a> <br> Commande effectuée le ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecommande", [], "any", false, false, false, 119), "d"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 119, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecommande", [], "any", false, false, false, 119), "m"), [], "array", false, false, false, 119), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecommande", [], "any", false, false, false, 119), "Y"), "html", null, true);
                    echo "<br>Description : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "preferenceCreneau", [], "any", false, false, false, 119), "html", null, true);
                    echo " <br>

                    <form method=\"post\" action=\"";
                    // line 121
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reprendreCommande");
                    echo "\">
                        <input type=\"hidden\" name=\"id\" value=\"";
                    // line 122
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 122), "html", null, true);
                    echo "\">
                        <button class='reserver-creneau-btn5' type=\"submit\">Demander un nouveau créneau</button>
                    </form>
                </li>


            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 128
$context["commande"], "statut", [], "any", false, false, false, 128) == "EN ATTENTE DU PAIEMENT")) {
                    // line 129
                    echo "                ";
                    $context["nouvelle_date"] = twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "dateOuverturePaiement", [], "any", false, false, false, 129), "+1 day");
                    // line 130
                    echo "                <li class=\"item-order\"><p class=\"titre-order\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 130), "html", null, true);
                    echo "</p> <p class=\"soustitre-order\">Vous pouvez procéder au paiement pour valider votre rendez-vous. Vous avez jusqu'au ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecommande", [], "any", false, false, false, 130), "d"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 130, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecommande", [], "any", false, false, false, 130), "m"), [], "array", false, false, false, 130), "html", null, true);
                    echo " à ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecommande", [], "any", false, false, false, 130), "H:i"), "html", null, true);
                    echo "</p>   
                
                <div class=\"line-1-4\"> <h2 class=\"h2-titre-order\">";
                    // line 132
                    echo twig_escape_filter($this->env, (isset($context["nomFormule"]) || array_key_exists("nomFormule", $context) ? $context["nomFormule"] : (function () { throw new RuntimeError('Variable "nomFormule" does not exist.', 132, $this->source); })()), "html", null, true);
                    echo "</h2> <div style=\"font-weight: 300\">N° de commande : <a> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 132), "html", null, true);
                    echo "</a> <br> Commande effectuée le ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecommande", [], "any", false, false, false, 132), "d"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 132, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecommande", [], "any", false, false, false, 132), "m"), [], "array", false, false, false, 132), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecommande", [], "any", false, false, false, 132), "Y"), "html", null, true);
                    echo "<br>
                
                ";
                    // line 134
                    if ((twig_get_attribute($this->env, $this->source, $context["commande"], "adresseRdv", [], "any", false, false, false, 134) != "remote")) {
                        // line 135
                        echo "                    Lieu du RDV : ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "adresseRdv", [], "any", false, false, false, 135), "html", null, true);
                        echo "
                ";
                    }
                    // line 137
                    echo "
                    <p>Créneau choisi : ";
                    // line 138
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 138), "d"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 138, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 138), "m"), [], "array", false, false, false, 138), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 138), "Y"), "html", null, true);
                    echo "</p>
                    <p>Nombre de prises de vue : ";
                    // line 139
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getNbPhotosCommande", [], "method", false, false, false, 139), "html", null, true);
                    echo " </p>
                              <br>    
                    <p>Total : ";
                    // line 141
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getPrix", [], "method", false, false, false, 141), 2, ".", " "), "html", null, true);
                    echo "€ </p>
                    <br>   
                    <div style=\"display: flex;\">
                        <br>
                        ";
                    // line 145
                    if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "commandes", [], "any", false, false, false, 145), "owner", [], "any", false, false, false, 145), "getAdresseFacturation", [], "method", false, false, false, 145))) {
                        // line 146
                        echo "
                            ";
                        // line 147
                        if ((twig_get_attribute($this->env, $this->source, $context["commande"], "getPrix", [], "method", false, false, false, 147) == 0)) {
                            // line 148
                            echo "                                <div style=\"margin-right: 5px;\">
                                    <button class='reserver-creneau-btn4' onclick=\"modal.style.display = 'block'\">Procéder à la souscription</button>
                                </div>
                            ";
                        } else {
                            // line 152
                            echo "
                                <div style=\"margin-right: 5px;\">
                                    <button class='reserver-creneau-btn4' onclick=\"modal.style.display = 'block'\">Procéder au paiement</button>
                                </div>
                            ";
                        }
                        // line 157
                        echo "
                            <div id=\"myModal2\" class=\"modal\">
                                <div class=\"modal-content\">
                                    ";
                        // line 160
                        if ((twig_get_attribute($this->env, $this->source, $context["commande"], "getPrix", [], "method", false, false, false, 160) == 0)) {
                            // line 161
                            echo "                                        <form method=\"post\" onsubmit=\"submitVerifieAdresseFacturation(event, this)\" action=\"";
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_goToAbonnement");
                            echo "\">
                                            <h3 class=\"info-h3-facturation\"> Vous devez d'abord renseigner une adresse de facturation (qui figurera sur votre facture)</h3>
                                            <input type=\"text\" placeholder=\"Adresse + code postal\"  name=\"adresse\"  class=\"input_connexion\"  required>
                                            <input type=\"hidden\" name=\"id\" value=\"";
                            // line 164
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 164), "html", null, true);
                            echo "\">
                                            <br>
                                            <p id=\"text-error-facturation-adresse\" class=\"text-error\" style=\"margin-top: 7px;\">Format de l'adresse incorrect (Ex: 75 rue de la Tour 75016 Paris)</p>
                                            <br>
                                            <button type=\"submit\"  class=\"reserver-creneau-btn4\" >Valider</button>
                                        </form>
                                    ";
                        } else {
                            // line 171
                            echo "                                        <form method=\"post\" onsubmit=\"submitVerifieAdresseFacturation(event, this)\"  action=\"";
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_goToPaiement");
                            echo "\">
                                            <h3 class=\"info-h3-facturation\"> Vous devez d'abord renseigner une adresse de facturation (qui figurera sur votre facture)</h3>
                                            <input type=\"text\" placeholder=\"Adresse + code postal\"  name=\"adresse\"  class=\"input_connexion\"  required>
                                            <input type=\"hidden\" name=\"id\" value=\"";
                            // line 174
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 174), "html", null, true);
                            echo "\">
                                            <br>
                                            <p id=\"text-error-facturation-adresse\" class=\"text-error\" style=\"margin-top: 7px;\">Format de l'adresse incorrect (Ex: 75 rue de la Tour 75016 Paris)</p>
                                            <br>
                                            <button type=\"submit\"  class=\"reserver-creneau-btn4\" >Valider</button>
                                        </form>
                                    ";
                        }
                        // line 181
                        echo "
                                </div>
                            </div> 
                        ";
                    } else {
                        // line 185
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["commande"], "getPrix", [], "method", false, false, false, 185) == 0)) {
                            // line 186
                            echo "                                <form method=\"post\" action=\"";
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_goToAbonnement");
                            echo "\"  style=\"margin-right: 5px;\">
                                    <input type=\"hidden\" name=\"id\" value=\"";
                            // line 187
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 187), "html", null, true);
                            echo "\">
                                    <button class='reserver-creneau-btn4' type=\"submit\" >Procéder à la souscription</button>
                                </form>
                            ";
                        } else {
                            // line 191
                            echo "                                <form method=\"post\" action=\"";
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_goToPaiement");
                            echo "\"  style=\"margin-right: 5px;\">
                                    <input type=\"hidden\" name=\"id\" value=\"";
                            // line 192
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 192), "html", null, true);
                            echo "\">
                                    <button class='reserver-creneau-btn4' type=\"submit\" >Procéder au paiement</button>
                                </form>
                            ";
                        }
                        // line 195
                        echo "    
                        ";
                    }
                    // line 197
                    echo "                  
                    <button class='reserver-creneau-btn5' onclick=\"modal3.style.display = 'block';\" type=\"button\">Annuler la commande</button>

                    <div id=\"myModal4\" class=\"modal\">
                        <div class=\"modal-content\">
                        <h3 class=\"info-h3-facturation\">Vous êtes sur le point d'annuler la commande</h3>
                        <p>Cette action est irreversible</p>
                        <form method=\"post\" action=\"";
                    // line 204
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deleteCommande");
                    echo "\" style=\"display: grid; grid-template-columns: 1fr 0.6fr; grid-column-gap: 5px;margin-top: 10px;\">
                            <input type=\"hidden\" name=\"id\" value=\"";
                    // line 205
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 205), "html", null, true);
                    echo "\">
                                <button class='reserver-creneau-btn4' type=\"submit\">Confirmer l'annulation</button>
                                <button class='reserver-creneau-btn5' onclick=\"modal3.style.display = 'none';\" type=\"button\">Retour</button>
                        </form>
   
                        </div>
                    </div>

                   </div></div></div></li>


            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 216
$context["commande"], "statut", [], "any", false, false, false, 216) == "EN COURS")) {
                    // line 217
                    echo "                <li class=\"item-order\"><p class=\"titre-order\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 217), "html", null, true);
                    echo "</p> <p class=\"soustitre-order\">Votre rendez-vous ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "tempsRestantes", [], "any", false, false, false, 217), "html", null, true);
                    echo "</p>   
                    <div class=\"line-1-4\"> <h2  class=\"h2-titre-order\">";
                    // line 218
                    echo twig_escape_filter($this->env, (isset($context["nomFormule"]) || array_key_exists("nomFormule", $context) ? $context["nomFormule"] : (function () { throw new RuntimeError('Variable "nomFormule" does not exist.', 218, $this->source); })()), "html", null, true);
                    echo "</h2> 
                    <div style=\"font-weight: 300\">N° de commande : <a> ";
                    // line 219
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 219), "html", null, true);
                    echo "</a> <br>

                ";
                    // line 221
                    if ((twig_get_attribute($this->env, $this->source, $context["commande"], "adresseRdv", [], "any", false, false, false, 221) != "remote")) {
                        // line 222
                        echo "                    Lieu du RDV : ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "adresseRdv", [], "any", false, false, false, 222), "html", null, true);
                        echo "
                ";
                    }
                    // line 224
                    echo "
                <p>Date du RDV :  ";
                    // line 225
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 225, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 225), "l"), [], "array", false, false, false, 225), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 225), "d"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 225, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 225), "m"), [], "array", false, false, false, 225), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 225), "Y à H:i"), "html", null, true);
                    echo "</p>
                <p>Nombre de prises de vue : ";
                    // line 226
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getNbPhotosCommande", [], "method", false, false, false, 226), "html", null, true);
                    echo " </p>
                 <br>
                ";
                    // line 228
                    if ((twig_get_attribute($this->env, $this->source, $context["commande"], "joursRestantes", [], "any", false, false, false, 228) > 0)) {
                        // line 229
                        echo "                   
                <!--    <button type=\"button\"  onclick=\"modal4.style.display = 'block';\" class='reserver-creneau-btn5'>Annuler la commande / Remboursement</button> -->

                    <div id=\"myModal5\" class=\"modal\">
                        <div class=\"modal-content\">
                            <h3 class=\"info-h3-facturation\">Vous êtes sur le point d'annuler la commande</h3>
                            <p>Vous serez remboursé sous 24 heures</p>
                            <form method=\"post\" action=\"";
                        // line 236
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rembourserCommande");
                        echo "\" style=\"display: grid; grid-template-columns: 1fr 0.6fr; grid-column-gap: 5px;margin-top: 10px;\">
                                <input type=\"hidden\" name=\"id\" value=\"";
                        // line 237
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 237), "html", null, true);
                        echo "\">
                                <button class='reserver-creneau-btn4' type=\"submit\">Confirmer l'annulation</button>
                                <button class='reserver-creneau-btn5' onclick=\"modal3.style.display = 'none';\" type=\"button\">Retour</button>
                            </form>
                        </div>
                    </div>

                ";
                        // line 247
                        echo "                ";
                    }
                    // line 248
                    echo "            </div></div></li>



            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 252
$context["commande"], "statut", [], "any", false, false, false, 252) == "ANNULÉ / REMBOURSEMENT")) {
                    // line 253
                    echo "                <li class=\"item-order\"><p class=\"titre-order\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 253), "html", null, true);
                    echo "</p> 
                
                ";
                    // line 255
                    if ((twig_get_attribute($this->env, $this->source, $context["commande"], "getIsRemboursed", [], "any", false, false, false, 255) < 24)) {
                        // line 256
                        echo "                    <p class=\"soustitre-order\">Le remboursement sera émis sous 24 heures</p>   
                ";
                    } else {
                        // line 258
                        echo "                    <p class=\"soustitre-order\">Le remboursement a été émis</p>   
                ";
                    }
                    // line 260
                    echo "
                    <div class=\"line-1-4\"> <h2  class=\"h2-titre-order\">";
                    // line 261
                    echo twig_escape_filter($this->env, (isset($context["nomFormule"]) || array_key_exists("nomFormule", $context) ? $context["nomFormule"] : (function () { throw new RuntimeError('Variable "nomFormule" does not exist.', 261, $this->source); })()), "html", null, true);
                    echo "</h2> 
                    <div style=\"font-weight: 300\">N° de commande : <a> ";
                    // line 262
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 262), "html", null, true);
                    echo "</a> <br> Commande effectuée le ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecommande", [], "any", false, false, false, 262), "d"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 262, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecommande", [], "any", false, false, false, 262), "m"), [], "array", false, false, false, 262), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecommande", [], "any", false, false, false, 262), "Y"), "html", null, true);
                    echo "<br>

                ";
                    // line 264
                    if ((twig_get_attribute($this->env, $this->source, $context["commande"], "adresseRdv", [], "any", false, false, false, 264) != "remote")) {
                        // line 265
                        echo "                    Lieu du RDV : ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "adresseRdv", [], "any", false, false, false, 265), "html", null, true);
                        echo "
                ";
                    }
                    // line 267
                    echo "
            </div></div></li>
            

            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 271
$context["commande"], "statut", [], "any", false, false, false, 271) == "EN LIVRAISON")) {
                    // line 272
                    echo "                <li class=\"item-order\"><p class=\"titre-order\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 272), "html", null, true);
                    echo "</p> 
                    <p class=\"soustitre-order\">Vous serez livré sous ";
                    // line 273
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formules"]) || array_key_exists("formules", $context) ? $context["formules"] : (function () { throw new RuntimeError('Variable "formules" does not exist.', 273, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["commande"], "getFormuleId", [], "method", false, false, false, 273), [], "array", false, false, false, 273), "getDelaiLivraisonHeure", [], "method", false, false, false, 273), "html", null, true);
                    echo " heures</p>  

                    <div class=\"line-1-4\"> <h2  class=\"h2-titre-order\">";
                    // line 275
                    echo twig_escape_filter($this->env, (isset($context["nomFormule"]) || array_key_exists("nomFormule", $context) ? $context["nomFormule"] : (function () { throw new RuntimeError('Variable "nomFormule" does not exist.', 275, $this->source); })()), "html", null, true);
                    echo "</h2> 
                    <div style=\"font-weight: 300\">N° de commande : <a> ";
                    // line 276
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 276), "html", null, true);
                    echo "</a><br>

                ";
                    // line 278
                    if ((twig_get_attribute($this->env, $this->source, $context["commande"], "adresseRdv", [], "any", false, false, false, 278) != "remote")) {
                        // line 279
                        echo "                    Lieu du RDV : ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "adresseRdv", [], "any", false, false, false, 279), "html", null, true);
                        echo "
                ";
                    }
                    // line 281
                    echo "
                <p>Date du RDV : ";
                    // line 282
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 282, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 282), "l"), [], "array", false, false, false, 282), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 282), "d"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 282, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 282), "m"), [], "array", false, false, false, 282), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 282), "Y à H:i"), "html", null, true);
                    echo "</p>
                <p>Nombre de prises de vue : ";
                    // line 283
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getNbPhotosCommande", [], "method", false, false, false, 283), "html", null, true);
                    echo " </p>
                <br>

            </div></div></li>


            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 289
$context["commande"], "statut", [], "any", false, false, false, 289) == "TERMINÉ")) {
                    // line 290
                    echo "                <li class=\"item-order\"><p class=\"titre-order\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 290), "html", null, true);
                    echo "</p>
                <p class=\"soustitre-order\">La commande a été livrée le ";
                    // line 291
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getDateLivraison", [], "method", false, false, false, 291), "d"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 291, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getDateLivraison", [], "method", false, false, false, 291), "m"), [], "array", false, false, false, 291), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getDateLivraison", [], "method", false, false, false, 291), "Y"), "html", null, true);
                    echo "</p>     
                <div class=\"line-1-4\"> <h2  class=\"h2-titre-order\">";
                    // line 292
                    echo twig_escape_filter($this->env, (isset($context["nomFormule"]) || array_key_exists("nomFormule", $context) ? $context["nomFormule"] : (function () { throw new RuntimeError('Variable "nomFormule" does not exist.', 292, $this->source); })()), "html", null, true);
                    echo "</h2> 

                <div style=\"font-weight: 300\">N° de commande : <a> ";
                    // line 294
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 294), "html", null, true);
                    echo "</a><br>


                ";
                    // line 297
                    if ((twig_get_attribute($this->env, $this->source, $context["commande"], "adresseRdv", [], "any", false, false, false, 297) != "remote")) {
                        // line 298
                        echo "                    Lieu du RDV : ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "adresseRdv", [], "any", false, false, false, 298), "html", null, true);
                        echo "
                ";
                    }
                    // line 300
                    echo "
                <p>Date du RDV :  ";
                    // line 301
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 301, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 301), "l"), [], "array", false, false, false, 301), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 301), "d"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 301, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 301), "m"), [], "array", false, false, false, 301), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 301), "Y à H:i"), "html", null, true);
                    echo "</p>
                <p>Nombre de prises de vue : ";
                    // line 302
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getNbPhotosCommande", [], "method", false, false, false, 302), "html", null, true);
                    echo " </p>

                <br>
                <div style=\"display: flex;\">
                    <form  id=\"formVoirCommande\" style=\"margin-right: 5px;\" onsubmit='submitVoirCommandes(event, this)'>
                        <input type=\"hidden\" name=\"id\" value=\"";
                    // line 307
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 307), "html", null, true);
                    echo "\">
                        <button type=\"submit\"  class='reserver-creneau-btn4'>Voir la commande</button>
                    </form>

                   

                    <form style=\"margin-right: 5px;\" onsubmit=\"submitForm(event, this)\">
                        <input type=\"hidden\" name=\"id\" value=\"";
                    // line 314
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 314), "html", null, true);
                    echo "\">
                        <button type=\"submit\"  class='reserver-creneau-btn4'>Télécharger les photos</button>
                    </form>


                    ";
                    // line 319
                    if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "note", [], "any", false, false, false, 319))) {
                        echo "    
                        <button  class='reserver-creneau-btn5' onclick=\"modal2.style.display = 'block'\">Laisser un commentaire</button>

                        <div id=\"myModal3\" class=\"modal\">
                            <div class=\"modal-content\" style=\"margin: 5% auto;\">
                                <form method=\"post\" id=\"formNotes\" name=\"formNotes\" action=\"";
                        // line 324
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_setNote");
                        echo "\">
                                    <br>

                                    <h3 class=\"h1-titre-page\">Laisser un commentaire</h3>
                                    <br>

                                    <div id=\"rating\">
                                        <span class=\"star\" onclick=\"setRating(1)\" onmouseover=\"setHoverRating(1)\" onmouseout=\"setHoverRating(0)\">★</span>
                                        <span class=\"star\" onclick=\"setRating(2)\" onmouseover=\"setHoverRating(2)\" onmouseout=\"setHoverRating(0)\">★</span>
                                        <span class=\"star\" onclick=\"setRating(3)\" onmouseover=\"setHoverRating(3)\" onmouseout=\"setHoverRating(0)\">★</span>
                                        <span class=\"star\" onclick=\"setRating(4)\" onmouseover=\"setHoverRating(4)\" onmouseout=\"setHoverRating(0)\">★</span>
                                        <span class=\"star\" onclick=\"setRating(5)\" onmouseover=\"setHoverRating(5)\" onmouseout=\"setHoverRating(0)\">★</span>
                                    </div>

                                    <input id=\"ref-note-stars\" type=\"hidden\" placeholder=\"Note\"  name=\"note\"  class=\"input_connexion\"  required>
                                    <input id=\"comment-track\" type=\"hidden\" placeholder=\"Commentaire\"  name=\"commentaire\"  class=\"input_connexion\"  required>
                                    <textarea id=\"comment-track2\" class=\"input_connexion3\"  placeholder=\"Partagez nous votre expérience\"required> </textarea>

                                    <script>

                                            function setRating(rating) {

                                                var stars = document.querySelectorAll(\".star\");
                                                for (var i = 0; i < stars.length; i++) {
                                                    if (i < rating) {
                                                        stars[i].classList.add(\"selected-star\");
                                                    } else {
                                                        stars[i].classList.remove(\"selected-star\");
                                                    }
                                                }

                                                document.getElementById(\"ref-note-stars\").value = rating;
                                            }


                                        var inputTrack = document.getElementById(\"comment-track\");
                                            var textAreaTrack =  document.getElementById(\"comment-track2\");

                                            inputTrack.value = textAreaTrack.value;

                                            textAreaTrack.addEventListener(\"input\", function() {
                                                inputTrack.value = textAreaTrack.value;
                                            })

                                        document.getElementById(\"ref-note-stars\").value = 0;
                                        setRating(0);

                                    </script>

                                    <br><br>
                                    <p class=\"consent-text\"> <input type=\"checkbox\" name=\"checkbox-consent\" id=\"checkbox-consent\"/> J'autorise la publication de mon commentaire sur le site, les rendant visibles par tous les visiteurs.</p>
                                    <br>
                                    <p id=\"text-error\" class=\"text-error\">Veullez choisir une note</p>

                                    <input type=\"hidden\" name=\"prenom\" value=\"";
                        // line 378
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 378, $this->source); })()), "user", [], "any", false, false, false, 378), "commandes", [], "any", false, false, false, 378), "owner", [], "any", false, false, false, 378), "getNom", [], "method", false, false, false, 378), "html", null, true);
                        echo "\">
                                    <input type=\"hidden\" name=\"id\" value=\"";
                        // line 379
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 379), "html", null, true);
                        echo "\">
                                    <br>
                                    <button id=\"fake-btn-form-note\" type=\"button\"  class=\"reserver-creneau-btn4\">Publier</button>

                                    <script>
                                        var btnFakeFormNotes = document.getElementById(\"fake-btn-form-note\");
                                        var textError = document.getElementById(\"text-error\");


                                        btnFakeFormNotes.addEventListener(\"click\", function() {
                                            var laNote = document.getElementById(\"ref-note-stars\").value;
                                            var leComment = document.getElementById(\"comment-track\").value;

                                            if (laNote == 0){
                                                textError.style.display = \"block\";
                                                textError.innerHTML = \"Veuiilez séléctionner une note\"
                                            }

                                            else if (leComment.trim().length == 0){
                                                textError.style.display = \"block\";
                                                textError.innerHTML = \"Veuiilez écrire un commentaire\"
                                            }

                                            else {
                                                textError.style.display = \"none\";
                                                document.forms.formNotes.submit();
                                            }

                                        });
                                    </script>

                                </form>
                            </div>
                        </div> 
                ";
                    }
                    // line 414
                    echo "
                 </div>  
            </div></div></li>
            ";
                }
                // line 418
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 420
            echo " 
        </ul>
";
        } else {
            // line 423
            echo "    <p style=\"font-size: 14px; margin: 0 auto; width: 80%;\">Vous n'avez passé aucune commande</p>
";
        }
        // line 425
        echo "<br>

<form method=\"post\" name=\"formNotes\" action=\"";
        // line 427
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
    <input type=\"submit\" class='reserver-creneau-btn10' value=\"Déconnexion\" style=\"margin : 0 auto\"/>
</form>
<br>

<div id=\"container\"></div>

</section>

 ";
        // line 436
        $this->loadTemplate("tools/footer.html.twig", "moncompte.html.twig", 436)->display($context);
        // line 437
        echo "
</section>




<script>


function submitVerifieAdresseFacturation(event, form){
    event.preventDefault();

    if (verifierAdressePostale(form.querySelector('[name=\"adresse\"]').value)){
        form.submit()
    }
    else {
        document.getElementById(\"text-error-facturation-adresse\").style.display = \"block\";
        document.getElementById(\"text-error-facturation-adresse\").innerHTML = \"Format de l'adresse incorrect (Ex: 75 rue de la Tour 75016 Paris)\"
    }
}



function submitVoirCommandes(event, form){

        event.preventDefault()
        const hiddenInputValue = form.querySelector('[name=\"id\"]').value;
        getVisitesListe(hiddenInputValue)
}

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


        function submitForm(event, form) {
                event.preventDefault();
                const hiddenInputValue = form.querySelector('[name=\"id\"]').value;
                downloadFile(hiddenInputValue);
        }

       async function downloadFile(parameter) {
            var url = 'https://fichiers.lookaround.fr/PHOTOS_' + parameter + '.zip'

            const response = await fetch('/isPhotosExiste', {
                                    method: 'POST',
                                    body: JSON.stringify({ id: parameter }) 
                                });
                                const data = await response.json()

                                //console.log(data)

                                if (data.Accesible)
                                    window.location.href  = url;
                                else {
                                    tata.error(\"\", \"Photos inexistantes ou inaccessibles\", {
                                        duration: 3000,
                                        closeBtn: false,
                                        animate: \"slide\",       
                                    });
                                }
            
        }




    function setRating(rating) {
        var stars = document.querySelectorAll(\".star\");
        for (var i = 0; i < stars.length; i++) {
            if (i < rating) {
                stars[i].classList.add(\"selected-star\");
            } else {
                stars[i].classList.remove(\"selected-star\");
            }
        }
        document.getElementById(\"ref-note-stars\").value = rating;
    }

    function setHoverRating(rating) {
    // Mettre en surbrillance l'étoile sélectionnée
    var stars = document.querySelectorAll(\".star\");
    for (var i = 0; i < stars.length; i++) {
        if (i < rating) {
        stars[i].classList.add(\"hovered-star\");
        } else {
        stars[i].classList.remove(\"hovered-star\");
        }
    }
    }

    function displayToastError(text){
        tata.error(\"\", text, {
            duration: 3000,
            closeBtn: false,
            animate: \"slide\",   
        });
    }

    function displayToastSuccess(){
        tata.success(\"\", text, {
            duration: 3000,
            closeBtn: false,
            animate: \"slide\",   
        });
    }

    var modal = document.getElementById(\"myModal2\");
    var modal2 = document.getElementById(\"myModal3\");
    var modal3 = document.getElementById(\"myModal4\");
    var modal4 = document.getElementById(\"myModal5\");

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = \"none\";
        }
        else if (event.target == modal2){
            modal2.style.display = \"none\";
        }
        else if (event.target == modal3){
            modal3.style.display = \"none\";
        }
        else if (event.target == modal4){
            modal4.style.display = \"none\";
        }
    } 

  async function showCreneaux(event, id){
        event.preventDefault();

        const response = await fetch('";
        // line 584
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_getCreneauxDispo");
        echo "', {
            method: 'POST'
        });
        const data = await response.json();
        const ul = document.createElement('form');

        //console.log(data)

        data.forEach((creneau) => {
            const li = document.createElement('li');
            li.textContent = creneau;

            li.addEventListener('click', async (event) => {
                if (event.target.tagName === 'LI') {

                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '";
        // line 601
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updateCreneau");
        echo "';

                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'creneau';
                    input.value = li.textContent;
                    form.appendChild(input);

                    const input2 = document.createElement('input');
                    input2.type = 'hidden';
                    input2.name = 'id';
                    input2.value = id;
                    form.appendChild(input2);

                    document.body.appendChild(form);
                    form.submit();
                }
            });

            ul.appendChild(li);
            });

        const container = document.getElementById('container');
        container.appendChild(ul);

    }

function verifierAdressePostale (adresse) {
  var regexAdresse = /^.*\\s+\\d{5}\\s+[a-zA-Z\\s]+\$/;
  return regexAdresse.test(adresse.trim());
}

   
        function genereFacture(id_commande, email_client, creneau, date_commande, nom_entreprise, id_client, adresse_facturation, formule, lieu, nbphoto, prix){

                var adresse = adresse_facturation;
                var regex = /(.*)\\s+(\\b\\d{5}\\b\\s+.*)/;
                var match = regex.exec(adresse);
                var adresseComplete = match[1];
                var codePostalVille = match[2];

                var facture = {
                    numero: id_commande,
                    date: date_commande,
                    client: {
                        nom: nom_entreprise,
                        adresse: adresseComplete,
                        ville: codePostalVille,
                        id : id_client,
                    },

                    articles: [
                        {
                            designation: formule + \" - \" + lieu + \" - \" +  nbphoto,
                            quantite: 1,
                            prixUnitaire: prix
                        },
                    ]
                };


            var doc = new jsPDF();

        
                const logo = \"data:image/png;base64,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\";
                doc.addImage(logo, 'PNG', 8, 27, 65, 10);

                doc.setFontSize(13);

                doc.text(facture.client.nom, 197, 62,  'right');
                doc.text(facture.client.adresse, 197, 69, 'right');
                doc.text(facture.client.ville, 197, 76, 'right');

                doc.text(\"N° Client   : \" + facture.client.id, 10, 88);
                doc.text(\"N° Commande : \"  + facture.numero , 10, 95);
                doc.text(\"Date de la commande : \" + facture.date , 10, 109);

                doc.setFontSize(16);
                doc.text(\"Détails de la facture :\", 10, 155);
                doc.setFontSize(12);
                doc.text(\"Désignation\", 10, 165);
                doc.text(\"Quantité\", 80, 165);
                doc.text(\"Prix unitaire\", 110, 165);
                doc.text(\"Total\", 160, 165);
                doc.line(10, 158, 200, 158);


                var ligne = 177;

                var bigTotal = 0;

                for (var i = 0; i < facture.articles.length; i++) {
                    var article = facture.articles[i];
                    var totalHT = (article.quantite * article.prixUnitaire);
                    bigTotal += totalHT;

                    doc.text(article.designation, 10, ligne);
                    doc.text(\"\" + article.quantite, 80, ligne);
                    doc.text(\"\" + parseFloat(article.prixUnitaire).toFixed(2) + \" €\", 110, ligne);
                    doc.text(\"\" + parseFloat(totalHT).toFixed(2) + \" €\", 160, ligne);
                    ligne += 10;
                }
                doc.line(10, ligne, 200, ligne);
                ligne += 10;
                doc.text(\"Total :\", 10, ligne);
                doc.text(\"\" + parseFloat(bigTotal).toFixed(2) + \" €\", 160, ligne);

                //doc.save('Facture N°' + facture.numero +  '.pdf');

                var pdfData = btoa(doc.output());

                var data = 'idCommande=' + encodeURIComponent(id_commande) +   
                            '&email=' + encodeURIComponent(email_client)+    
                            '&creneau=' + encodeURIComponent(creneau) + 
                            '&pdfData=' + encodeURIComponent(pdfData);

                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/paiementPrisEnCompteMail', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function () {
       
                };
                xhr.send(data);
            }



    </script>



";
        // line 732
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 732, $this->source); })()), "session", [], "any", false, false, false, 732), "flashBag", [], "any", false, false, false, 732), "has", [0 => "FactureMail"], "method", false, false, false, 732)) {
            // line 733
            echo "
        ";
            // line 734
            $context["FM_id"] = "";
            // line 735
            echo "        ";
            $context["FM_email"] = "";
            // line 736
            echo "
        ";
            // line 737
            $context["FM_creneau"] = "";
            // line 738
            echo "        ";
            $context["FM_date_commande"] = "";
            // line 739
            echo "
        ";
            // line 740
            $context["FM_nom_entreprise"] = "";
            // line 741
            echo "        ";
            $context["FM_id_client"] = "";
            // line 742
            echo "
        ";
            // line 743
            $context["FM_adresse_facturation"] = "";
            // line 744
            echo "        ";
            $context["FM_nomFormule"] = "";
            // line 745
            echo "
        ";
            // line 746
            $context["FM_localisation"] = "";
            // line 747
            echo "        ";
            $context["FM_nbphotos"] = "";
            // line 748
            echo "        
        ";
            // line 749
            $context["FM_prix"] = "";
            // line 750
            echo "

    ";
            // line 752
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 752, $this->source); })()), "session", [], "any", false, false, false, 752), "flashbag", [], "any", false, false, false, 752), "get", [0 => "FactureMail"], "method", false, false, false, 752));
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 753
                echo "
        ";
                // line 754
                if ( !twig_test_empty($context["flash_message"])) {
                    // line 755
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["flash_message"]);
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 756
                        echo "
                ";
                        // line 757
                        if (($context["key"] == "FM_id")) {
                            // line 758
                            echo "                    ";
                            $context["FM_id"] = $context["value"];
                            // line 759
                            echo "
                ";
                        } elseif ((                        // line 760
$context["key"] == "FM_email")) {
                            // line 761
                            echo "                    ";
                            $context["FM_email"] = $context["value"];
                            // line 762
                            echo "
                ";
                        } elseif ((                        // line 763
$context["key"] == "FM_creneau")) {
                            // line 764
                            echo "                    ";
                            $context["FM_creneau"] = twig_date_format_filter($this->env, $context["value"], "Y-m-d H:i");
                            // line 765
                            echo "
                ";
                        } elseif ((                        // line 766
$context["key"] == "FM_date_commande")) {
                            // line 767
                            echo "                    ";
                            $context["FM_date_commande"] = twig_date_format_filter($this->env, $context["value"], "d/m/Y");
                            // line 768
                            echo "
                ";
                        } elseif ((                        // line 769
$context["key"] == "FM_nom_entreprise")) {
                            // line 770
                            echo "                    ";
                            $context["FM_nom_entreprise"] = $context["value"];
                            // line 771
                            echo "
                ";
                        } elseif ((                        // line 772
$context["key"] == "FM_id_client")) {
                            // line 773
                            echo "                    ";
                            $context["FM_id_client"] = $context["value"];
                            // line 774
                            echo "
                ";
                        } elseif ((                        // line 775
$context["key"] == "FM_adresse_facturation")) {
                            // line 776
                            echo "                    ";
                            $context["FM_adresse_facturation"] = $context["value"];
                            // line 777
                            echo "
                ";
                        } elseif ((                        // line 778
$context["key"] == "FM_nomFormule")) {
                            // line 779
                            echo "                    ";
                            $context["FM_nomFormule"] = $context["value"];
                            // line 780
                            echo "
                ";
                        } elseif ((                        // line 781
$context["key"] == "FM_localisation")) {
                            // line 782
                            echo "                    ";
                            $context["FM_localisation"] = $context["value"];
                            // line 783
                            echo "
                ";
                        } elseif ((                        // line 784
$context["key"] == "FM_nbphotos")) {
                            // line 785
                            echo "                    ";
                            $context["FM_nbphotos"] = $context["value"];
                            // line 786
                            echo "
                ";
                        } elseif ((                        // line 787
$context["key"] == "FM_prix")) {
                            // line 788
                            echo "                    ";
                            $context["FM_prix"] = $context["value"];
                            // line 789
                            echo "
                ";
                        }
                        // line 791
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 792
                    echo "        ";
                }
                // line 793
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 794
            echo "
    <script>
        var FM_id = \"";
            // line 796
            echo twig_escape_filter($this->env, (isset($context["FM_id"]) || array_key_exists("FM_id", $context) ? $context["FM_id"] : (function () { throw new RuntimeError('Variable "FM_id" does not exist.', 796, $this->source); })()), "html", null, true);
            echo "\";
        var FM_email = \"";
            // line 797
            echo twig_escape_filter($this->env, (isset($context["FM_email"]) || array_key_exists("FM_email", $context) ? $context["FM_email"] : (function () { throw new RuntimeError('Variable "FM_email" does not exist.', 797, $this->source); })()), "html", null, true);
            echo "\";

        var FM_creneau = \"";
            // line 799
            echo twig_escape_filter($this->env, (isset($context["FM_creneau"]) || array_key_exists("FM_creneau", $context) ? $context["FM_creneau"] : (function () { throw new RuntimeError('Variable "FM_creneau" does not exist.', 799, $this->source); })()), "html", null, true);
            echo "\";
        var FM_date_commande = \"";
            // line 800
            echo twig_escape_filter($this->env, (isset($context["FM_date_commande"]) || array_key_exists("FM_date_commande", $context) ? $context["FM_date_commande"] : (function () { throw new RuntimeError('Variable "FM_date_commande" does not exist.', 800, $this->source); })()), "html", null, true);
            echo "\";

        var FM_nom_entreprise = \"";
            // line 802
            echo twig_escape_filter($this->env, (isset($context["FM_nom_entreprise"]) || array_key_exists("FM_nom_entreprise", $context) ? $context["FM_nom_entreprise"] : (function () { throw new RuntimeError('Variable "FM_nom_entreprise" does not exist.', 802, $this->source); })()), "html", null, true);
            echo "\";
        var FM_id_client = \"";
            // line 803
            echo twig_escape_filter($this->env, (isset($context["FM_id_client"]) || array_key_exists("FM_id_client", $context) ? $context["FM_id_client"] : (function () { throw new RuntimeError('Variable "FM_id_client" does not exist.', 803, $this->source); })()), "html", null, true);
            echo "\";

        var FM_adresse_facturation = \"";
            // line 805
            echo twig_escape_filter($this->env, (isset($context["FM_adresse_facturation"]) || array_key_exists("FM_adresse_facturation", $context) ? $context["FM_adresse_facturation"] : (function () { throw new RuntimeError('Variable "FM_adresse_facturation" does not exist.', 805, $this->source); })()), "html", null, true);
            echo "\";
        var FM_nomFormule = \"";
            // line 806
            echo twig_escape_filter($this->env, (isset($context["FM_nomFormule"]) || array_key_exists("FM_nomFormule", $context) ? $context["FM_nomFormule"] : (function () { throw new RuntimeError('Variable "FM_nomFormule" does not exist.', 806, $this->source); })()), "html", null, true);
            echo "\";

        var FM_localisation = \"";
            // line 808
            echo twig_escape_filter($this->env, (isset($context["FM_localisation"]) || array_key_exists("FM_localisation", $context) ? $context["FM_localisation"] : (function () { throw new RuntimeError('Variable "FM_localisation" does not exist.', 808, $this->source); })()), "html", null, true);
            echo "\";
        var FM_nbphotos = \"";
            // line 809
            echo twig_escape_filter($this->env, (isset($context["FM_nbphotos"]) || array_key_exists("FM_nbphotos", $context) ? $context["FM_nbphotos"] : (function () { throw new RuntimeError('Variable "FM_nbphotos" does not exist.', 809, $this->source); })()), "html", null, true);
            echo "\";

        var FM_prix = \"";
            // line 811
            echo twig_escape_filter($this->env, (isset($context["FM_prix"]) || array_key_exists("FM_prix", $context) ? $context["FM_prix"] : (function () { throw new RuntimeError('Variable "FM_prix" does not exist.', 811, $this->source); })()), "html", null, true);
            echo "\";


        genereFacture( FM_id, FM_email, FM_creneau, FM_date_commande, FM_nom_entreprise, FM_id_client, FM_adresse_facturation, FM_nomFormule, FM_localisation, FM_nbphotos, FM_prix)

    </script>
    
";
        }
        // line 819
        echo "




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "moncompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1454 => 819,  1443 => 811,  1438 => 809,  1434 => 808,  1429 => 806,  1425 => 805,  1420 => 803,  1416 => 802,  1411 => 800,  1407 => 799,  1402 => 797,  1398 => 796,  1394 => 794,  1388 => 793,  1385 => 792,  1379 => 791,  1375 => 789,  1372 => 788,  1370 => 787,  1367 => 786,  1364 => 785,  1362 => 784,  1359 => 783,  1356 => 782,  1354 => 781,  1351 => 780,  1348 => 779,  1346 => 778,  1343 => 777,  1340 => 776,  1338 => 775,  1335 => 774,  1332 => 773,  1330 => 772,  1327 => 771,  1324 => 770,  1322 => 769,  1319 => 768,  1316 => 767,  1314 => 766,  1311 => 765,  1308 => 764,  1306 => 763,  1303 => 762,  1300 => 761,  1298 => 760,  1295 => 759,  1292 => 758,  1290 => 757,  1287 => 756,  1282 => 755,  1280 => 754,  1277 => 753,  1273 => 752,  1269 => 750,  1267 => 749,  1264 => 748,  1261 => 747,  1259 => 746,  1256 => 745,  1253 => 744,  1251 => 743,  1248 => 742,  1245 => 741,  1243 => 740,  1240 => 739,  1237 => 738,  1235 => 737,  1232 => 736,  1229 => 735,  1227 => 734,  1224 => 733,  1222 => 732,  1088 => 601,  1068 => 584,  919 => 437,  917 => 436,  905 => 427,  901 => 425,  897 => 423,  892 => 420,  885 => 418,  879 => 414,  841 => 379,  837 => 378,  780 => 324,  772 => 319,  764 => 314,  754 => 307,  746 => 302,  736 => 301,  733 => 300,  727 => 298,  725 => 297,  719 => 294,  714 => 292,  706 => 291,  701 => 290,  699 => 289,  690 => 283,  680 => 282,  677 => 281,  671 => 279,  669 => 278,  664 => 276,  660 => 275,  655 => 273,  650 => 272,  648 => 271,  642 => 267,  636 => 265,  634 => 264,  623 => 262,  619 => 261,  616 => 260,  612 => 258,  608 => 256,  606 => 255,  600 => 253,  598 => 252,  592 => 248,  589 => 247,  579 => 237,  575 => 236,  566 => 229,  564 => 228,  559 => 226,  549 => 225,  546 => 224,  540 => 222,  538 => 221,  533 => 219,  529 => 218,  522 => 217,  520 => 216,  506 => 205,  502 => 204,  493 => 197,  489 => 195,  482 => 192,  477 => 191,  470 => 187,  465 => 186,  462 => 185,  456 => 181,  446 => 174,  439 => 171,  429 => 164,  422 => 161,  420 => 160,  415 => 157,  408 => 152,  402 => 148,  400 => 147,  397 => 146,  395 => 145,  388 => 141,  383 => 139,  375 => 138,  372 => 137,  366 => 135,  364 => 134,  351 => 132,  339 => 130,  336 => 129,  334 => 128,  325 => 122,  321 => 121,  308 => 119,  304 => 118,  299 => 117,  297 => 116,  284 => 106,  280 => 105,  271 => 98,  259 => 96,  255 => 95,  248 => 94,  246 => 93,  243 => 92,  240 => 91,  237 => 90,  234 => 89,  231 => 88,  229 => 87,  226 => 86,  224 => 85,  221 => 84,  217 => 83,  214 => 82,  212 => 81,  209 => 80,  207 => 79,  200 => 75,  195 => 72,  193 => 71,  185 => 65,  172 => 58,  169 => 57,  165 => 56,  162 => 55,  148 => 47,  145 => 46,  141 => 45,  137 => 43,  135 => 34,  131 => 32,  129 => 18,  123 => 15,  119 => 13,  109 => 12,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Mes commandes - Réalisation de visites virtuelles à 360° {% endblock %}

{% block stylesheets %}

<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/inoca.png') }}\">

{% endblock %}

{% block body %}

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js\"></script>
<script src=\"{{ asset('js/tata.js') }}\"></script>


{% set mois = {
    '01': 'Janvier',
    '02': 'Février',
    '03': 'Mars',
    '04': 'Avril',
    '05': 'Mai',
    '06': 'Juin',
    '07': 'Juillet',
    '08': 'Août',
    '09': 'Septembre',
    '10': 'Octobre',
    '11': 'Novembre',
    '12': 'Décembre'
} %}


{% set jour = {
    'Monday': 'Lundi',
    'Tuesday': 'Mardi',
    'Wednesday': 'Mercredi',
    'Thursday': 'Jeudi',
    'Friday': 'Vendredi',
    'Saturday': 'Samedi',
    'Sunday': 'Dimanche'
} %}


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
    
    <h1 class=\"bonjour-pseudo\">Bonjour {{app.user.nom}}</h1>
    <br>
    <h2 style=\"margin : 0 auto; font-weight: 400; font-size: 17px; margin-bottom: 18px; width: 80%\">Mes commandes</h2>

    {% if app.user.commandes|length > 0 %}

        {% set commandes = app.user.commandes|sort((a, b) => b.datecommande <=> a.datecommande) %}
        <ul style=\"list-style-type: none; width: 80%; margin: 0 auto;\">
        {% for commande in commandes %}

            {% set nomFormule = \"\"  %}

            {% if commande.getFormuleId() is not null %}
                {% set  nomFormule =  formules[commande.getFormuleId()].getNom() %}
            {% else %}
                {% set nomFormule =   \"À DÉFINIR\" %}
            {% endif %}

            {% if commande.statut == \"EN ATTENTE D'UN CRÉNEAU\" %}
                <li class=\"item-order\"> <p class=\"titre-order\">{{ commande.statut }}</p> <p class=\"soustitre-order\">Nous vous contacterons très prochainement par {{ commande.preferenceContact}}</p>  
                    <div class=\"line-1-4\"> <h2 class=\"h2-titre-order\">{{nomFormule}}</h2>
                    <div style=\"font-weight: 300\">N° de commande : <a> {{ commande.id }}</a> <br> Commande effectuée le {{ commande.datecommande|date('d') }} {{ mois[commande.datecommande|date('m')] }} {{ commande.datecommande|date('Y') }}<br>Description : {{ commande.preferenceCreneau}} <br>     
                    {#<p>Total : {{ (formules[(commande.getFormuleId())].getPrixHoraire())}}€ </p>#}
                    <br>
                    <button class='reserver-creneau-btn5' onclick=\"modal3.style.display = 'block';\" type=\"button\">Annuler la demande</button>

                    <div id=\"myModal4\" class=\"modal\">
                        <div class=\"modal-content\">
                        <h3 >Vous êtes sur le point d'annuler la commande</h3>
                        <p>Cette action est irreversible</p>
                        <form method=\"post\" action=\"{{ path('app_deleteCommande') }}\" style=\"display: grid; grid-template-columns: 1fr 0.6fr; grid-column-gap: 5px;margin-top: 10px;\">
                            <input type=\"hidden\" name=\"id\" value=\"{{ commande.id }}\">
                                <button class='reserver-creneau-btn4' type=\"submit\">Confirmer l'annulation</button>
                                <button class='reserver-creneau-btn5' onclick=\"modal3.style.display = 'none';\" type=\"button\">Retour</button>
                        </form>
   
                        </div>
                    </div>

                </div></div></li>

            {% elseif commande.statut == \"EXPIRÉ\" %}
                <li class=\"item-order\"> <p class=\"titre-order\">{{ commande.statut }}</p> <p class=\"soustitre-order\">Vous avez raté le délai de paiement, veuillez redemander un créneau ou créer une nouvelle commande</p> 
                <div class=\"line-1-4\"> <h2  class=\"h2-titre-order\">{{nomFormule}}</h2> 
                <div style=\"font-weight: 300\">N° de commande : <a> {{ commande.id }}</a> <br> Commande effectuée le {{ commande.datecommande|date('d') }} {{ mois[commande.datecommande|date('m')] }} {{ commande.datecommande|date('Y') }}<br>Description : {{ commande.preferenceCreneau}} <br>

                    <form method=\"post\" action=\"{{ path('app_reprendreCommande') }}\">
                        <input type=\"hidden\" name=\"id\" value=\"{{ commande.id }}\">
                        <button class='reserver-creneau-btn5' type=\"submit\">Demander un nouveau créneau</button>
                    </form>
                </li>


            {% elseif commande.statut == \"EN ATTENTE DU PAIEMENT\" %}
                {% set nouvelle_date = commande.dateOuverturePaiement|date_modify('+1 day') %}
                <li class=\"item-order\"><p class=\"titre-order\">{{ commande.statut }}</p> <p class=\"soustitre-order\">Vous pouvez procéder au paiement pour valider votre rendez-vous. Vous avez jusqu'au {{ commande.datecommande|date('d') }} {{ mois[commande.datecommande|date('m')] }} à {{ commande.datecommande|date('H:i') }}</p>   
                
                <div class=\"line-1-4\"> <h2 class=\"h2-titre-order\">{{nomFormule}}</h2> <div style=\"font-weight: 300\">N° de commande : <a> {{ commande.id }}</a> <br> Commande effectuée le {{ commande.datecommande|date('d') }} {{ mois[commande.datecommande|date('m')] }} {{ commande.datecommande|date('Y') }}<br>
                
                {% if commande.adresseRdv != \"remote\" %}
                    Lieu du RDV : {{ commande.adresseRdv }}
                {% endif %}

                    <p>Créneau choisi : {{ commande.creneau|date('d') }} {{ mois[commande.creneau|date('m')] }} {{ commande.creneau|date('Y') }}</p>
                    <p>Nombre de prises de vue : {{ commande.getNbPhotosCommande() }} </p>
                              <br>    
                    <p>Total : {{ commande.getPrix()|number_format(2, '.', ' ')}}€ </p>
                    <br>   
                    <div style=\"display: flex;\">
                        <br>
                        {% if (app.user.commandes.owner.getAdresseFacturation() is null) %}

                            {% if commande.getPrix() == 0 %}
                                <div style=\"margin-right: 5px;\">
                                    <button class='reserver-creneau-btn4' onclick=\"modal.style.display = 'block'\">Procéder à la souscription</button>
                                </div>
                            {% else %}

                                <div style=\"margin-right: 5px;\">
                                    <button class='reserver-creneau-btn4' onclick=\"modal.style.display = 'block'\">Procéder au paiement</button>
                                </div>
                            {% endif %}

                            <div id=\"myModal2\" class=\"modal\">
                                <div class=\"modal-content\">
                                    {% if commande.getPrix() == 0 %}
                                        <form method=\"post\" onsubmit=\"submitVerifieAdresseFacturation(event, this)\" action=\"{{ path('app_goToAbonnement') }}\">
                                            <h3 class=\"info-h3-facturation\"> Vous devez d'abord renseigner une adresse de facturation (qui figurera sur votre facture)</h3>
                                            <input type=\"text\" placeholder=\"Adresse + code postal\"  name=\"adresse\"  class=\"input_connexion\"  required>
                                            <input type=\"hidden\" name=\"id\" value=\"{{ commande.id }}\">
                                            <br>
                                            <p id=\"text-error-facturation-adresse\" class=\"text-error\" style=\"margin-top: 7px;\">Format de l'adresse incorrect (Ex: 75 rue de la Tour 75016 Paris)</p>
                                            <br>
                                            <button type=\"submit\"  class=\"reserver-creneau-btn4\" >Valider</button>
                                        </form>
                                    {% else %}
                                        <form method=\"post\" onsubmit=\"submitVerifieAdresseFacturation(event, this)\"  action=\"{{ path('app_goToPaiement') }}\">
                                            <h3 class=\"info-h3-facturation\"> Vous devez d'abord renseigner une adresse de facturation (qui figurera sur votre facture)</h3>
                                            <input type=\"text\" placeholder=\"Adresse + code postal\"  name=\"adresse\"  class=\"input_connexion\"  required>
                                            <input type=\"hidden\" name=\"id\" value=\"{{ commande.id }}\">
                                            <br>
                                            <p id=\"text-error-facturation-adresse\" class=\"text-error\" style=\"margin-top: 7px;\">Format de l'adresse incorrect (Ex: 75 rue de la Tour 75016 Paris)</p>
                                            <br>
                                            <button type=\"submit\"  class=\"reserver-creneau-btn4\" >Valider</button>
                                        </form>
                                    {% endif %}

                                </div>
                            </div> 
                        {% else %}
                            {% if commande.getPrix() == 0 %}
                                <form method=\"post\" action=\"{{ path('app_goToAbonnement') }}\"  style=\"margin-right: 5px;\">
                                    <input type=\"hidden\" name=\"id\" value=\"{{ commande.id }}\">
                                    <button class='reserver-creneau-btn4' type=\"submit\" >Procéder à la souscription</button>
                                </form>
                            {% else %}
                                <form method=\"post\" action=\"{{ path('app_goToPaiement') }}\"  style=\"margin-right: 5px;\">
                                    <input type=\"hidden\" name=\"id\" value=\"{{ commande.id }}\">
                                    <button class='reserver-creneau-btn4' type=\"submit\" >Procéder au paiement</button>
                                </form>
                            {% endif %}    
                        {% endif %}
                  
                    <button class='reserver-creneau-btn5' onclick=\"modal3.style.display = 'block';\" type=\"button\">Annuler la commande</button>

                    <div id=\"myModal4\" class=\"modal\">
                        <div class=\"modal-content\">
                        <h3 class=\"info-h3-facturation\">Vous êtes sur le point d'annuler la commande</h3>
                        <p>Cette action est irreversible</p>
                        <form method=\"post\" action=\"{{ path('app_deleteCommande') }}\" style=\"display: grid; grid-template-columns: 1fr 0.6fr; grid-column-gap: 5px;margin-top: 10px;\">
                            <input type=\"hidden\" name=\"id\" value=\"{{ commande.id }}\">
                                <button class='reserver-creneau-btn4' type=\"submit\">Confirmer l'annulation</button>
                                <button class='reserver-creneau-btn5' onclick=\"modal3.style.display = 'none';\" type=\"button\">Retour</button>
                        </form>
   
                        </div>
                    </div>

                   </div></div></div></li>


            {% elseif commande.statut == \"EN COURS\" %}
                <li class=\"item-order\"><p class=\"titre-order\">{{ commande.statut }}</p> <p class=\"soustitre-order\">Votre rendez-vous {{commande.tempsRestantes}}</p>   
                    <div class=\"line-1-4\"> <h2  class=\"h2-titre-order\">{{nomFormule}}</h2> 
                    <div style=\"font-weight: 300\">N° de commande : <a> {{ commande.id }}</a> <br>

                {% if commande.adresseRdv != \"remote\" %}
                    Lieu du RDV : {{ commande.adresseRdv }}
                {% endif %}

                <p>Date du RDV :  {{ jour[commande.creneau|date('l')] }} {{ commande.creneau|date('d') }} {{ mois[commande.creneau|date('m')] }} {{ commande.creneau|date('Y à H:i') }}</p>
                <p>Nombre de prises de vue : {{ commande.getNbPhotosCommande() }} </p>
                 <br>
                {% if commande.joursRestantes > 0 %}
                   
                <!--    <button type=\"button\"  onclick=\"modal4.style.display = 'block';\" class='reserver-creneau-btn5'>Annuler la commande / Remboursement</button> -->

                    <div id=\"myModal5\" class=\"modal\">
                        <div class=\"modal-content\">
                            <h3 class=\"info-h3-facturation\">Vous êtes sur le point d'annuler la commande</h3>
                            <p>Vous serez remboursé sous 24 heures</p>
                            <form method=\"post\" action=\"{{ path('app_rembourserCommande') }}\" style=\"display: grid; grid-template-columns: 1fr 0.6fr; grid-column-gap: 5px;margin-top: 10px;\">
                                <input type=\"hidden\" name=\"id\" value=\"{{ commande.id }}\">
                                <button class='reserver-creneau-btn4' type=\"submit\">Confirmer l'annulation</button>
                                <button class='reserver-creneau-btn5' onclick=\"modal3.style.display = 'none';\" type=\"button\">Retour</button>
                            </form>
                        </div>
                    </div>

                {#% else %}
                    <br>
                    <strong style='font-weight: 500;'>Vous ne pouvez pas modifier ou annuler le RDV à moins de 24h de ce dernier</strong>#}
                {% endif %}
            </div></div></li>



            {% elseif commande.statut == \"ANNULÉ / REMBOURSEMENT\" %}
                <li class=\"item-order\"><p class=\"titre-order\">{{ commande.statut }}</p> 
                
                {% if commande.getIsRemboursed < 24 %}
                    <p class=\"soustitre-order\">Le remboursement sera émis sous 24 heures</p>   
                {% else %}
                    <p class=\"soustitre-order\">Le remboursement a été émis</p>   
                {% endif %}

                    <div class=\"line-1-4\"> <h2  class=\"h2-titre-order\">{{nomFormule}}</h2> 
                    <div style=\"font-weight: 300\">N° de commande : <a> {{ commande.id }}</a> <br> Commande effectuée le {{ commande.datecommande|date('d') }} {{ mois[commande.datecommande|date('m')] }} {{ commande.datecommande|date('Y') }}<br>

                {% if commande.adresseRdv != \"remote\" %}
                    Lieu du RDV : {{ commande.adresseRdv }}
                {% endif %}

            </div></div></li>
            

            {% elseif commande.statut == \"EN LIVRAISON\" %}
                <li class=\"item-order\"><p class=\"titre-order\">{{ commande.statut }}</p> 
                    <p class=\"soustitre-order\">Vous serez livré sous {{ (formules[(commande.getFormuleId())].getDelaiLivraisonHeure())}} heures</p>  

                    <div class=\"line-1-4\"> <h2  class=\"h2-titre-order\">{{nomFormule}}</h2> 
                    <div style=\"font-weight: 300\">N° de commande : <a> {{ commande.id }}</a><br>

                {% if commande.adresseRdv != \"remote\" %}
                    Lieu du RDV : {{ commande.adresseRdv }}
                {% endif %}

                <p>Date du RDV : {{ jour[commande.creneau|date('l')] }} {{ commande.creneau|date('d') }} {{ mois[commande.creneau|date('m')] }} {{ commande.creneau|date('Y à H:i') }}</p>
                <p>Nombre de prises de vue : {{ commande.getNbPhotosCommande() }} </p>
                <br>

            </div></div></li>


            {% elseif commande.statut == \"TERMINÉ\" %}
                <li class=\"item-order\"><p class=\"titre-order\">{{ commande.statut }}</p>
                <p class=\"soustitre-order\">La commande a été livrée le {{ commande.getDateLivraison()|date('d') }} {{ mois[commande.getDateLivraison()|date('m')] }} {{ commande.getDateLivraison()|date('Y') }}</p>     
                <div class=\"line-1-4\"> <h2  class=\"h2-titre-order\">{{nomFormule}}</h2> 

                <div style=\"font-weight: 300\">N° de commande : <a> {{ commande.id }}</a><br>


                {% if commande.adresseRdv != \"remote\" %}
                    Lieu du RDV : {{ commande.adresseRdv }}
                {% endif %}

                <p>Date du RDV :  {{ jour[commande.creneau|date('l')] }} {{ commande.creneau|date('d') }} {{ mois[commande.creneau|date('m')] }} {{ commande.creneau|date('Y à H:i') }}</p>
                <p>Nombre de prises de vue : {{ commande.getNbPhotosCommande() }} </p>

                <br>
                <div style=\"display: flex;\">
                    <form  id=\"formVoirCommande\" style=\"margin-right: 5px;\" onsubmit='submitVoirCommandes(event, this)'>
                        <input type=\"hidden\" name=\"id\" value=\"{{ commande.id }}\">
                        <button type=\"submit\"  class='reserver-creneau-btn4'>Voir la commande</button>
                    </form>

                   

                    <form style=\"margin-right: 5px;\" onsubmit=\"submitForm(event, this)\">
                        <input type=\"hidden\" name=\"id\" value=\"{{ commande.id }}\">
                        <button type=\"submit\"  class='reserver-creneau-btn4'>Télécharger les photos</button>
                    </form>


                    {% if commande.note is null %}    
                        <button  class='reserver-creneau-btn5' onclick=\"modal2.style.display = 'block'\">Laisser un commentaire</button>

                        <div id=\"myModal3\" class=\"modal\">
                            <div class=\"modal-content\" style=\"margin: 5% auto;\">
                                <form method=\"post\" id=\"formNotes\" name=\"formNotes\" action=\"{{ path('app_setNote') }}\">
                                    <br>

                                    <h3 class=\"h1-titre-page\">Laisser un commentaire</h3>
                                    <br>

                                    <div id=\"rating\">
                                        <span class=\"star\" onclick=\"setRating(1)\" onmouseover=\"setHoverRating(1)\" onmouseout=\"setHoverRating(0)\">★</span>
                                        <span class=\"star\" onclick=\"setRating(2)\" onmouseover=\"setHoverRating(2)\" onmouseout=\"setHoverRating(0)\">★</span>
                                        <span class=\"star\" onclick=\"setRating(3)\" onmouseover=\"setHoverRating(3)\" onmouseout=\"setHoverRating(0)\">★</span>
                                        <span class=\"star\" onclick=\"setRating(4)\" onmouseover=\"setHoverRating(4)\" onmouseout=\"setHoverRating(0)\">★</span>
                                        <span class=\"star\" onclick=\"setRating(5)\" onmouseover=\"setHoverRating(5)\" onmouseout=\"setHoverRating(0)\">★</span>
                                    </div>

                                    <input id=\"ref-note-stars\" type=\"hidden\" placeholder=\"Note\"  name=\"note\"  class=\"input_connexion\"  required>
                                    <input id=\"comment-track\" type=\"hidden\" placeholder=\"Commentaire\"  name=\"commentaire\"  class=\"input_connexion\"  required>
                                    <textarea id=\"comment-track2\" class=\"input_connexion3\"  placeholder=\"Partagez nous votre expérience\"required> </textarea>

                                    <script>

                                            function setRating(rating) {

                                                var stars = document.querySelectorAll(\".star\");
                                                for (var i = 0; i < stars.length; i++) {
                                                    if (i < rating) {
                                                        stars[i].classList.add(\"selected-star\");
                                                    } else {
                                                        stars[i].classList.remove(\"selected-star\");
                                                    }
                                                }

                                                document.getElementById(\"ref-note-stars\").value = rating;
                                            }


                                        var inputTrack = document.getElementById(\"comment-track\");
                                            var textAreaTrack =  document.getElementById(\"comment-track2\");

                                            inputTrack.value = textAreaTrack.value;

                                            textAreaTrack.addEventListener(\"input\", function() {
                                                inputTrack.value = textAreaTrack.value;
                                            })

                                        document.getElementById(\"ref-note-stars\").value = 0;
                                        setRating(0);

                                    </script>

                                    <br><br>
                                    <p class=\"consent-text\"> <input type=\"checkbox\" name=\"checkbox-consent\" id=\"checkbox-consent\"/> J'autorise la publication de mon commentaire sur le site, les rendant visibles par tous les visiteurs.</p>
                                    <br>
                                    <p id=\"text-error\" class=\"text-error\">Veullez choisir une note</p>

                                    <input type=\"hidden\" name=\"prenom\" value=\"{{ app.user.commandes.owner.getNom() }}\">
                                    <input type=\"hidden\" name=\"id\" value=\"{{ commande.id }}\">
                                    <br>
                                    <button id=\"fake-btn-form-note\" type=\"button\"  class=\"reserver-creneau-btn4\">Publier</button>

                                    <script>
                                        var btnFakeFormNotes = document.getElementById(\"fake-btn-form-note\");
                                        var textError = document.getElementById(\"text-error\");


                                        btnFakeFormNotes.addEventListener(\"click\", function() {
                                            var laNote = document.getElementById(\"ref-note-stars\").value;
                                            var leComment = document.getElementById(\"comment-track\").value;

                                            if (laNote == 0){
                                                textError.style.display = \"block\";
                                                textError.innerHTML = \"Veuiilez séléctionner une note\"
                                            }

                                            else if (leComment.trim().length == 0){
                                                textError.style.display = \"block\";
                                                textError.innerHTML = \"Veuiilez écrire un commentaire\"
                                            }

                                            else {
                                                textError.style.display = \"none\";
                                                document.forms.formNotes.submit();
                                            }

                                        });
                                    </script>

                                </form>
                            </div>
                        </div> 
                {% endif %}

                 </div>  
            </div></div></li>
            {% endif %}

        {% endfor %}
 
        </ul>
{% else %}
    <p style=\"font-size: 14px; margin: 0 auto; width: 80%;\">Vous n'avez passé aucune commande</p>
{% endif %}
<br>

<form method=\"post\" name=\"formNotes\" action=\"{{ path('app_logout') }}\">
    <input type=\"submit\" class='reserver-creneau-btn10' value=\"Déconnexion\" style=\"margin : 0 auto\"/>
</form>
<br>

<div id=\"container\"></div>

</section>

 {% include 'tools/footer.html.twig' %}

</section>




<script>


function submitVerifieAdresseFacturation(event, form){
    event.preventDefault();

    if (verifierAdressePostale(form.querySelector('[name=\"adresse\"]').value)){
        form.submit()
    }
    else {
        document.getElementById(\"text-error-facturation-adresse\").style.display = \"block\";
        document.getElementById(\"text-error-facturation-adresse\").innerHTML = \"Format de l'adresse incorrect (Ex: 75 rue de la Tour 75016 Paris)\"
    }
}



function submitVoirCommandes(event, form){

        event.preventDefault()
        const hiddenInputValue = form.querySelector('[name=\"id\"]').value;
        getVisitesListe(hiddenInputValue)
}

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


        function submitForm(event, form) {
                event.preventDefault();
                const hiddenInputValue = form.querySelector('[name=\"id\"]').value;
                downloadFile(hiddenInputValue);
        }

       async function downloadFile(parameter) {
            var url = 'https://fichiers.lookaround.fr/PHOTOS_' + parameter + '.zip'

            const response = await fetch('/isPhotosExiste', {
                                    method: 'POST',
                                    body: JSON.stringify({ id: parameter }) 
                                });
                                const data = await response.json()

                                //console.log(data)

                                if (data.Accesible)
                                    window.location.href  = url;
                                else {
                                    tata.error(\"\", \"Photos inexistantes ou inaccessibles\", {
                                        duration: 3000,
                                        closeBtn: false,
                                        animate: \"slide\",       
                                    });
                                }
            
        }




    function setRating(rating) {
        var stars = document.querySelectorAll(\".star\");
        for (var i = 0; i < stars.length; i++) {
            if (i < rating) {
                stars[i].classList.add(\"selected-star\");
            } else {
                stars[i].classList.remove(\"selected-star\");
            }
        }
        document.getElementById(\"ref-note-stars\").value = rating;
    }

    function setHoverRating(rating) {
    // Mettre en surbrillance l'étoile sélectionnée
    var stars = document.querySelectorAll(\".star\");
    for (var i = 0; i < stars.length; i++) {
        if (i < rating) {
        stars[i].classList.add(\"hovered-star\");
        } else {
        stars[i].classList.remove(\"hovered-star\");
        }
    }
    }

    function displayToastError(text){
        tata.error(\"\", text, {
            duration: 3000,
            closeBtn: false,
            animate: \"slide\",   
        });
    }

    function displayToastSuccess(){
        tata.success(\"\", text, {
            duration: 3000,
            closeBtn: false,
            animate: \"slide\",   
        });
    }

    var modal = document.getElementById(\"myModal2\");
    var modal2 = document.getElementById(\"myModal3\");
    var modal3 = document.getElementById(\"myModal4\");
    var modal4 = document.getElementById(\"myModal5\");

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = \"none\";
        }
        else if (event.target == modal2){
            modal2.style.display = \"none\";
        }
        else if (event.target == modal3){
            modal3.style.display = \"none\";
        }
        else if (event.target == modal4){
            modal4.style.display = \"none\";
        }
    } 

  async function showCreneaux(event, id){
        event.preventDefault();

        const response = await fetch('{{ path('app_getCreneauxDispo') }}', {
            method: 'POST'
        });
        const data = await response.json();
        const ul = document.createElement('form');

        //console.log(data)

        data.forEach((creneau) => {
            const li = document.createElement('li');
            li.textContent = creneau;

            li.addEventListener('click', async (event) => {
                if (event.target.tagName === 'LI') {

                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '{{ path('app_updateCreneau') }}';

                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'creneau';
                    input.value = li.textContent;
                    form.appendChild(input);

                    const input2 = document.createElement('input');
                    input2.type = 'hidden';
                    input2.name = 'id';
                    input2.value = id;
                    form.appendChild(input2);

                    document.body.appendChild(form);
                    form.submit();
                }
            });

            ul.appendChild(li);
            });

        const container = document.getElementById('container');
        container.appendChild(ul);

    }

function verifierAdressePostale (adresse) {
  var regexAdresse = /^.*\\s+\\d{5}\\s+[a-zA-Z\\s]+\$/;
  return regexAdresse.test(adresse.trim());
}

   
        function genereFacture(id_commande, email_client, creneau, date_commande, nom_entreprise, id_client, adresse_facturation, formule, lieu, nbphoto, prix){

                var adresse = adresse_facturation;
                var regex = /(.*)\\s+(\\b\\d{5}\\b\\s+.*)/;
                var match = regex.exec(adresse);
                var adresseComplete = match[1];
                var codePostalVille = match[2];

                var facture = {
                    numero: id_commande,
                    date: date_commande,
                    client: {
                        nom: nom_entreprise,
                        adresse: adresseComplete,
                        ville: codePostalVille,
                        id : id_client,
                    },

                    articles: [
                        {
                            designation: formule + \" - \" + lieu + \" - \" +  nbphoto,
                            quantite: 1,
                            prixUnitaire: prix
                        },
                    ]
                };


            var doc = new jsPDF();

        
                const logo = \"data:image/png;base64,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\";
                doc.addImage(logo, 'PNG', 8, 27, 65, 10);

                doc.setFontSize(13);

                doc.text(facture.client.nom, 197, 62,  'right');
                doc.text(facture.client.adresse, 197, 69, 'right');
                doc.text(facture.client.ville, 197, 76, 'right');

                doc.text(\"N° Client   : \" + facture.client.id, 10, 88);
                doc.text(\"N° Commande : \"  + facture.numero , 10, 95);
                doc.text(\"Date de la commande : \" + facture.date , 10, 109);

                doc.setFontSize(16);
                doc.text(\"Détails de la facture :\", 10, 155);
                doc.setFontSize(12);
                doc.text(\"Désignation\", 10, 165);
                doc.text(\"Quantité\", 80, 165);
                doc.text(\"Prix unitaire\", 110, 165);
                doc.text(\"Total\", 160, 165);
                doc.line(10, 158, 200, 158);


                var ligne = 177;

                var bigTotal = 0;

                for (var i = 0; i < facture.articles.length; i++) {
                    var article = facture.articles[i];
                    var totalHT = (article.quantite * article.prixUnitaire);
                    bigTotal += totalHT;

                    doc.text(article.designation, 10, ligne);
                    doc.text(\"\" + article.quantite, 80, ligne);
                    doc.text(\"\" + parseFloat(article.prixUnitaire).toFixed(2) + \" €\", 110, ligne);
                    doc.text(\"\" + parseFloat(totalHT).toFixed(2) + \" €\", 160, ligne);
                    ligne += 10;
                }
                doc.line(10, ligne, 200, ligne);
                ligne += 10;
                doc.text(\"Total :\", 10, ligne);
                doc.text(\"\" + parseFloat(bigTotal).toFixed(2) + \" €\", 160, ligne);

                //doc.save('Facture N°' + facture.numero +  '.pdf');

                var pdfData = btoa(doc.output());

                var data = 'idCommande=' + encodeURIComponent(id_commande) +   
                            '&email=' + encodeURIComponent(email_client)+    
                            '&creneau=' + encodeURIComponent(creneau) + 
                            '&pdfData=' + encodeURIComponent(pdfData);

                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/paiementPrisEnCompteMail', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function () {
       
                };
                xhr.send(data);
            }



    </script>



{% if app.session.flashBag.has('FactureMail') %}

        {% set FM_id = \"\" %}
        {% set FM_email = \"\" %}

        {% set FM_creneau = \"\" %}
        {% set FM_date_commande = \"\" %}

        {% set FM_nom_entreprise = \"\" %}
        {% set FM_id_client = \"\" %}

        {% set FM_adresse_facturation = \"\" %}
        {% set FM_nomFormule = \"\" %}

        {% set FM_localisation = \"\" %}
        {% set FM_nbphotos = \"\" %}
        
        {% set FM_prix = \"\" %}


    {% for flash_message in app.session.flashbag.get('FactureMail') %}

        {% if flash_message is not empty %}
            {% for key, value in flash_message %}

                {% if key == \"FM_id\"%}
                    {% set FM_id = value %}

                {% elseif key == \"FM_email\"%}
                    {% set FM_email = value %}

                {% elseif key == \"FM_creneau\"%}
                    {% set FM_creneau = value|date('Y-m-d H:i') %}

                {% elseif key == \"FM_date_commande\"%}
                    {% set FM_date_commande = value|date('d/m/Y') %}

                {% elseif key == \"FM_nom_entreprise\"%}
                    {% set FM_nom_entreprise = value %}

                {% elseif key == \"FM_id_client\"%}
                    {% set FM_id_client = value %}

                {% elseif key == \"FM_adresse_facturation\"%}
                    {% set FM_adresse_facturation = value %}

                {% elseif key == \"FM_nomFormule\"%}
                    {% set FM_nomFormule = value %}

                {% elseif key == \"FM_localisation\"%}
                    {% set FM_localisation = value %}

                {% elseif key == \"FM_nbphotos\"%}
                    {% set FM_nbphotos = value %}

                {% elseif key == \"FM_prix\"%}
                    {% set FM_prix = value %}

                {% endif %}
            {% endfor %}
        {% endif %}
    {% endfor %}

    <script>
        var FM_id = \"{{ FM_id }}\";
        var FM_email = \"{{ FM_email }}\";

        var FM_creneau = \"{{ FM_creneau }}\";
        var FM_date_commande = \"{{ FM_date_commande }}\";

        var FM_nom_entreprise = \"{{ FM_nom_entreprise }}\";
        var FM_id_client = \"{{ FM_id_client }}\";

        var FM_adresse_facturation = \"{{ FM_adresse_facturation }}\";
        var FM_nomFormule = \"{{ FM_nomFormule }}\";

        var FM_localisation = \"{{ FM_localisation }}\";
        var FM_nbphotos = \"{{ FM_nbphotos }}\";

        var FM_prix = \"{{ FM_prix }}\";


        genereFacture( FM_id, FM_email, FM_creneau, FM_date_commande, FM_nom_entreprise, FM_id_client, FM_adresse_facturation, FM_nomFormule, FM_localisation, FM_nbphotos, FM_prix)

    </script>
    
{% endif %}





{% endblock %}", "moncompte.html.twig", "C:\\Users\\utils\\Documents\\lookaround\\Website\\lookaround\\templates\\moncompte.html.twig");
    }
}
