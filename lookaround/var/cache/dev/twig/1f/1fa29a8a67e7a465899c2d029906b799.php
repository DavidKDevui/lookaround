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

/* dashboardadmin.html.twig */
class __TwigTemplate_35cc5f9504ee0fc4b177951d54ee85a3 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboardadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboardadmin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboardadmin.html.twig", 1);
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

        echo " Admin DashBoard | lookaround ";
        
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
";
        // line 14
        $this->loadTemplate("tools/navbar.html.twig", "dashboardadmin.html.twig", 14)->display($context);
        // line 15
        echo "

<h1 class=\"h1-titre-page\"> Admin DashBoard</h1>

<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>

    <form action=\"?\" method=\"POST\">
      <div class=\"g-recaptcha\" data-sitekey=\"6LeDSIYpAAAAAAS_lfWUkH69nFF_GU1ui9b7vOiU\"></div>
      <br/>
      <input type=\"submit\" value=\"Submit\">
    </form>


<h3 class='admin-titre-sections'>Toutes les commandes</h3>

<table class=\"dashBoard-table\">
    <thead>
        <tr class=\"tr-dashBoard\">
            <th>ID</th>
            <th>F.ID</th>
            <th>Prix</th>
            <th>Statut</th>
            <th>Date Order</th>
            <th>Créneau</th>
            <th>Préference</th>
            <th>Adresse RDV</th>
            <th>Lieu</th>
            <th>NB photos</th>
            <th>Aide iframe</th>
            <th>Date Pay</th>
            <th>Date OpenPay</th>
            <th>HELP</th>
        </tr>
    </thead>
  <tbody>

";
        // line 51
        $context["commandes"] = twig_sort_filter($this->env, (isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 51, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 51, $this->source); })()), "datecommande", [], "any", false, false, false, 51) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 51, $this->source); })()), "datecommande", [], "any", false, false, false, 51)); });
        // line 52
        echo "
  ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 54
            echo "  
    <tr>
    <form method=\"post\"  onsubmit=\"return confirmSubmit(event);\">
      <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getId", [], "method", false, false, false, 57), "html", null, true);
            echo " <input type=\"text\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getId", [], "method", false, false, false, 57), "html", null, true);
            echo "\" class=\"setInvisible\"/></td>


    ";
            // line 60
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getFormuleId", [], "method", false, false, false, 60))) {
                // line 61
                echo "      <td><input type=\"text\" name=\"formule_id\" value=\"\" style='width: 40px; background-color: yellow' required/></td>
    ";
            } else {
                // line 63
                echo "      ";
                if (((((twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 63) == "EN COURS") || (twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 63) == "ANNULÉ - REMBOURSEMENT")) || (twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 63) == "EN LIVRAISON")) || (twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 63) == "TERMINÉ"))) {
                    // line 64
                    echo "        <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getFormuleId", [], "method", false, false, false, 64), "html", null, true);
                    echo "</td>
      ";
                } else {
                    // line 66
                    echo "        <td><input type=\"text\" name='formule_id'  value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getFormuleId", [], "method", false, false, false, 66), "html", null, true);
                    echo "\" style='width: 40px;' required></td>
      ";
                }
                // line 68
                echo "    ";
            }
            // line 69
            echo "
      ";
            // line 70
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getPrix", [], "method", false, false, false, 70))) {
                echo " 
        <td><input type=\"text\" name=\"prix\" value=\"\" style='width: 40px; background-color: yellow;' required/></td>
      ";
            } else {
                // line 73
                echo "        <td><input type=\"text\" name=\"prix\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getPrix", [], "method", false, false, false, 73), "html", null, true);
                echo "\" style='width: 45px; font-size : 12px' required/></td>
      ";
            }
            // line 75
            echo "
      <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 76), "html", null, true);
            echo " <input type=\"text\" name=\"statut\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 76), "html", null, true);
            echo "\" style='width: 40px; font-size : 12px' class=\"setInvisible\"/></td>

      <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getDateCommande", [], "method", false, false, false, 78), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>

        ";
            // line 80
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getCreneau", [], "method", false, false, false, 80))) {
                // line 81
                echo "            <td><input type=\"text\" name='creneau' value=\"\" style='background-color: yellow;width: 130px; font-size : 12px'  pattern=\"[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}\" required></td>
        ";
            } else {
                // line 83
                echo "            <td><input type=\"text\" name='creneau'  style='width: 130px; font-size : 12px'   value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getCreneau", [], "method", false, false, false, 83), "Y-m-d H:i:s"), "html", null, true);
                echo "\" pattern=\"[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}\" required></td>
        ";
            }
            // line 85
            echo "
      <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getPreferenceCreneau", [], "method", false, false, false, 86), "html", null, true);
            echo "</td>

      ";
            // line 88
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getAdresseRdv", [], "method", false, false, false, 88))) {
                // line 89
                echo "        <td><input type='text' name=\"adresse_rdv\"  value=\"\"  style='background-color: yellow; width: 100px;'  required/></td>
      ";
            } else {
                // line 91
                echo "        <td><input type='text' name=\"adresse_rdv\"  style='width: 150px; font-size : 12px; width: 100px;' value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getAdresseRdv", [], "method", false, false, false, 91), "html", null, true);
                echo "\"  required/></td>
      ";
            }
            // line 93
            echo "

      ";
            // line 95
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getLocalisationCommande", [], "method", false, false, false, 95))) {
                // line 96
                echo "        <td><input type='text' name=\"localisation_commande\"  value=\"\"  style='background-color: yellow;  font-size : 12px; width: 70px'  required/></td>
      ";
            } else {
                // line 98
                echo "        <td><input type='text' name=\"localisation_commande\"  value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getLocalisationCommande", [], "method", false, false, false, 98), "html", null, true);
                echo "\"  style='font-size : 12px; width: 70px'  required/></td>
      ";
            }
            // line 100
            echo "
      ";
            // line 101
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getNbPhotosCommande", [], "method", false, false, false, 101))) {
                // line 102
                echo "        <td><input type='text' name=\"nb_photos_commande\"  value=\"\"  style='background-color: yellow;  font-size : 12px; width: 70px'  required/></td>
      ";
            } else {
                // line 104
                echo "        <td><input type='text' name=\"nb_photos_commande\"  style='font-size : 12px; width: 70px' value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getNbPhotosCommande", [], "method", false, false, false, 104), "html", null, true);
                echo "\"  required/></td>
      ";
            }
            // line 106
            echo "
      ";
            // line 107
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getAideIntegrationCommande", [], "method", false, false, false, 107))) {
                // line 108
                echo "        <td><input type='text' name=\"aide_integration_commande\"  value=\"\"  style='background-color: yellow; width: 40px'  required/></td>
      ";
            } else {
                // line 110
                echo "        <td><input type='text' name=\"aide_integration_commande\"  style='width: 40px' value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getAideIntegrationCommande", [], "method", false, false, false, 110), "html", null, true);
                echo "\"  required/></td>
      ";
            }
            // line 112
            echo "


      ";
            // line 115
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getDatePaiement", [], "method", false, false, false, 115))) {
                // line 116
                echo "            <td></td>
        ";
            } else {
                // line 118
                echo "            <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getDatePaiement", [], "method", false, false, false, 118), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
        ";
            }
            // line 120
            echo "

      ";
            // line 122
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getDateOuverturePaiement", [], "method", false, false, false, 122))) {
                // line 123
                echo "            <td></td>
        ";
            } else {
                // line 125
                echo "            <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getDateOuverturePaiement", [], "method", false, false, false, 125), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
        ";
            }
            // line 127
            echo "

      <td>
        ";
            // line 130
            if ((twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 130) == "EN ATTENTE D'UN CRÉNEAU")) {
                // line 131
                echo "            <p>- Contacter client par ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getPreferenceContact", [], "method", false, false, false, 131), "html", null, true);
                echo " <br>- Renseigner un créneau, un lieu de rdv et une formule</p>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 132
$context["commande"], "getStatut", [], "method", false, false, false, 132) == "EN ATTENTE DU PAIEMENT")) {
                // line 133
                echo "            <p>- Attente du paiement du client</p>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 134
$context["commande"], "getStatut", [], "method", false, false, false, 134) == "EN COURS")) {
                // line 135
                echo "            <p>- Réaliser la prestation</p>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 136
$context["commande"], "getStatut", [], "method", false, false, false, 136) == "EN LIVRAISON")) {
                // line 137
                echo "            <p>- Livrer le produit</p>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 138
$context["commande"], "getStatut", [], "method", false, false, false, 138) == "TERMINÉ")) {
                // line 139
                echo "            <p>- Fin de la commande</p>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 140
$context["commande"], "getStatut", [], "method", false, false, false, 140) == "EXPIRÉ")) {
                // line 141
                echo "            <p>- Le client n'a pas payé à temps</p>
        ";
            }
            // line 143
            echo "      </td>

        ";
            // line 145
            if ((twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 145) == "EN ATTENTE D'UN CRÉNEAU")) {
                // line 146
                echo "          <td><input type=\"submit\" style=\"font-size: 12px;\" value=\"Valider le creneau\" formaction=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminChoixCreneau");
                echo "\"/></td>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 147
$context["commande"], "getStatut", [], "method", false, false, false, 147) == "EN ATTENTE DU PAIEMENT")) {
                // line 148
                echo "          <td><input type=\"submit\" style=\"font-size: 12px;\" value=\"Modifier la commande\"  formaction=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminModifierCommande");
                echo "\" /></td>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 149
$context["commande"], "getStatut", [], "method", false, false, false, 149) == "EN COURS")) {
                // line 150
                echo "          <td><input type=\"submit\" style=\"font-size: 12px;\" style=\"font-size: 12px;\" value=\"J'ai réalisé la prestation\"  formaction=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminPrestationRealise");
                echo "\"/>
          <input type=\"submit\" style=\"font-size: 12px;\" value=\"Notifier que le rdv est soon\"  formaction=\"";
                // line 151
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rendezVousSoonMail");
                echo "\" />
          <input type=\"submit\" style=\"font-size: 12px;\" value=\"Modifier la commande\"  formaction=\"";
                // line 152
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminModifierCommande");
                echo "\" />
        <!-- <input type=\"submit\" value=\"Déclancher remboursement\"  formaction=\"";
                // line 153
                echo "\" /></td>-->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 154
$context["commande"], "getStatut", [], "method", false, false, false, 154) == "EN LIVRAISON")) {
                // line 155
                echo "          <input type='hidden' name=\"idCommande\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 155), "html", null, true);
                echo "\" />
          <input type='hidden' name=\"email\" value=\"";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "getClientId", [], "method", false, false, false, 156), "email", [], "any", false, false, false, 156), "html", null, true);
                echo "\" />

      
          <td><input type=\"submit\" style=\"font-size: 12px;\" value=\"J'ai livré la prestation\"  formaction=\"";
                // line 159
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminProduitLivre");
                echo "\" /></td>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 160
$context["commande"], "getStatut", [], "method", false, false, false, 160) == "TERMINÉ")) {
                // line 161
                echo "          <input type='hidden' name=\"idCommande\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 161), "html", null, true);
                echo "\" />
          <input type='hidden' name=\"email\" value=\"";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "getClientId", [], "method", false, false, false, 162), "email", [], "any", false, false, false, 162), "html", null, true);
                echo "\" />
          ";
                // line 163
                if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getNote", [], "method", false, false, false, 163))) {
                    // line 164
                    echo "            <td><input type=\"submit\" style=\"font-size: 12px;\" value=\"Demander un avis\"  formaction=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandeDeNoteeMail");
                    echo "\" /></td>
          ";
                }
                // line 166
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 166) == "EXPIRÉ")) {
                // line 167
                echo "        ";
            }
            // line 168
            echo "    </form>
      <tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "</tbody>

</table>


<h3 style='font-weight: 500; font-size: 16px; margin-bottom: 4px'>Prochains RDV</h3>

<table class=\"dashBoard-table\">
    <thead>
        <tr class=\"tr-dashBoard\">
            <th>ID</th>
            <th>Nom</th>
            <th>Adresse du RDV</th>
            <th>Numéro de telephone</th>
            <th>Email</th>
            <th>Créneau</th>
            <th>Action</th>
        </tr>
    </thead>
  <tbody>

  ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 192, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 193
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["client"], "commandes", [], "any", false, false, false, 193));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 194
                echo "      ";
                if (((twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 194) == "EN COURS") || (twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 194) == "EN LIVRAISON"))) {
                    // line 195
                    echo "      <tr>
        <td>";
                    // line 196
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 196), "html", null, true);
                    echo "</td>
        <td>";
                    // line 197
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 197), "html", null, true);
                    echo "</td>
        <td>";
                    // line 198
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "adresseRdv", [], "any", false, false, false, 198), "html", null, true);
                    echo "</td>
        <td>";
                    // line 199
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "numeroTelephone", [], "any", false, false, false, 199), "html", null, true);
                    echo "</td>
        <td>";
                    // line 200
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 200), "html", null, true);
                    echo "</td>
        <td>";
                    // line 201
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 201), "l j F à H:i"), "html", null, true);
                    echo "</td>

      <td>
        ";
                    // line 204
                    if ((twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 204) == "EN COURS")) {
                        // line 205
                        echo "          A faire
        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 206
$context["commande"], "statut", [], "any", false, false, false, 206) == "EN LIVRAISON")) {
                        // line 207
                        echo "         A livrer
        ";
                    }
                    // line 209
                    echo "      <tr>
    ";
                }
                // line 211
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "</tbody>

</table>



<h3 style='font-weight: 500; font-size: 16px; margin-bottom: 4px'>Notes</h3>

<table class=\"dashBoard-table\">
    <thead>
        <tr class=\"tr-dashBoard\">
            <th>Note</th>
            <th>Commentaire</th>
            <th>Commande ID</th>
        </tr>
    </thead>
  <tbody>


";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 232, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 233
            echo "  ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["commande"], "note", [], "any", false, false, false, 233))) {
                // line 234
                echo "    <tr>
      <td>";
                // line 235
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "note", [], "any", false, false, false, 235), "note", [], "any", false, false, false, 235), "html", null, true);
                echo " / 5</td>
      <td>";
                // line 236
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "note", [], "any", false, false, false, 236), "commentaire", [], "any", false, false, false, 236), "html", null, true);
                echo "</td>
      <td>";
                // line 237
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 237), "html", null, true);
                echo "</td>
    </tr>

  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "
</tbody>

</table>


<script>


function confirmSubmit(event) {
  var submitButton = event.submitter;
  var confirmationMessage = \"Êtes-vous sûr de vouloir soumettre '\" + submitButton.value + \" ?\";
  return confirm(confirmationMessage);
}


/*
  const input = document.getElementById('id-filter-input');
  input.addEventListener('input', function() {
    const inputValue = this.value;
    fetch(`/api/commandes?filter[id]=\${inputValue}`)
      .then(response => response.json())
      .then(data => {
        const tbody = document.getElementById('commandes-table-body');
        tbody.innerHTML = '';
        data.forEach(commande => {
          const tr = document.createElement('tr');
          tr.innerHTML = `
            <td>\${commande.id}</td>
            <td>\${commande.formule_id}</td>
            <td>\${commande.statut}</td>
          `;
          tbody.appendChild(tr);
        });
      })
      .catch(error => console.error(error));
  });*/
</script>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboardadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 242,  601 => 237,  597 => 236,  593 => 235,  590 => 234,  587 => 233,  583 => 232,  562 => 213,  552 => 211,  548 => 209,  544 => 207,  542 => 206,  539 => 205,  537 => 204,  531 => 201,  527 => 200,  523 => 199,  519 => 198,  515 => 197,  511 => 196,  508 => 195,  505 => 194,  500 => 193,  496 => 192,  473 => 171,  465 => 168,  462 => 167,  459 => 166,  453 => 164,  451 => 163,  447 => 162,  442 => 161,  440 => 160,  436 => 159,  430 => 156,  425 => 155,  423 => 154,  420 => 153,  416 => 152,  412 => 151,  407 => 150,  405 => 149,  400 => 148,  398 => 147,  393 => 146,  391 => 145,  387 => 143,  383 => 141,  381 => 140,  378 => 139,  376 => 138,  373 => 137,  371 => 136,  368 => 135,  366 => 134,  363 => 133,  361 => 132,  356 => 131,  354 => 130,  349 => 127,  343 => 125,  339 => 123,  337 => 122,  333 => 120,  327 => 118,  323 => 116,  321 => 115,  316 => 112,  310 => 110,  306 => 108,  304 => 107,  301 => 106,  295 => 104,  291 => 102,  289 => 101,  286 => 100,  280 => 98,  276 => 96,  274 => 95,  270 => 93,  264 => 91,  260 => 89,  258 => 88,  253 => 86,  250 => 85,  244 => 83,  240 => 81,  238 => 80,  233 => 78,  226 => 76,  223 => 75,  217 => 73,  211 => 70,  208 => 69,  205 => 68,  199 => 66,  193 => 64,  190 => 63,  186 => 61,  184 => 60,  176 => 57,  171 => 54,  167 => 53,  164 => 52,  162 => 51,  124 => 15,  122 => 14,  119 => 13,  109 => 12,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Admin DashBoard | lookaround {% endblock %}

{% block stylesheets %}

<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/inoca.png') }}\">

{% endblock %}

{% block body %}

{% include 'tools/navbar.html.twig' %}


<h1 class=\"h1-titre-page\"> Admin DashBoard</h1>

<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>

    <form action=\"?\" method=\"POST\">
      <div class=\"g-recaptcha\" data-sitekey=\"6LeDSIYpAAAAAAS_lfWUkH69nFF_GU1ui9b7vOiU\"></div>
      <br/>
      <input type=\"submit\" value=\"Submit\">
    </form>


<h3 class='admin-titre-sections'>Toutes les commandes</h3>

<table class=\"dashBoard-table\">
    <thead>
        <tr class=\"tr-dashBoard\">
            <th>ID</th>
            <th>F.ID</th>
            <th>Prix</th>
            <th>Statut</th>
            <th>Date Order</th>
            <th>Créneau</th>
            <th>Préference</th>
            <th>Adresse RDV</th>
            <th>Lieu</th>
            <th>NB photos</th>
            <th>Aide iframe</th>
            <th>Date Pay</th>
            <th>Date OpenPay</th>
            <th>HELP</th>
        </tr>
    </thead>
  <tbody>

{% set commandes = commandes|sort((a, b) => b.datecommande <=> a.datecommande) %}

  {% for commande in commandes %}
  
    <tr>
    <form method=\"post\"  onsubmit=\"return confirmSubmit(event);\">
      <td>{{commande.getId()}} <input type=\"text\" name=\"id\" value=\"{{commande.getId()}}\" class=\"setInvisible\"/></td>


    {% if commande.getFormuleId() is null %}
      <td><input type=\"text\" name=\"formule_id\" value=\"\" style='width: 40px; background-color: yellow' required/></td>
    {% else %}
      {% if (commande.getStatut() == \"EN COURS\")  or  (commande.getStatut() == \"ANNULÉ - REMBOURSEMENT\") or  (commande.getStatut() == \"EN LIVRAISON\")  or  (commande.getStatut() == \"TERMINÉ\")%}
        <td>{{commande.getFormuleId()}}</td>
      {% else %}
        <td><input type=\"text\" name='formule_id'  value=\"{{commande.getFormuleId()}}\" style='width: 40px;' required></td>
      {% endif %}
    {% endif %}

      {% if commande.getPrix() is null %} 
        <td><input type=\"text\" name=\"prix\" value=\"\" style='width: 40px; background-color: yellow;' required/></td>
      {% else %}
        <td><input type=\"text\" name=\"prix\" value=\"{{commande.getPrix()}}\" style='width: 45px; font-size : 12px' required/></td>
      {% endif %}

      <td>{{commande.getStatut()}} <input type=\"text\" name=\"statut\" value=\"{{commande.getStatut()}}\" style='width: 40px; font-size : 12px' class=\"setInvisible\"/></td>

      <td>{{commande.getDateCommande()|date('Y-m-d H:i:s')}}</td>

        {% if commande.getCreneau() is null %}
            <td><input type=\"text\" name='creneau' value=\"\" style='background-color: yellow;width: 130px; font-size : 12px'  pattern=\"[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}\" required></td>
        {% else %}
            <td><input type=\"text\" name='creneau'  style='width: 130px; font-size : 12px'   value=\"{{commande.getCreneau()|date('Y-m-d H:i:s')}}\" pattern=\"[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}\" required></td>
        {% endif %}

      <td>{{commande.getPreferenceCreneau()}}</td>

      {% if commande.getAdresseRdv() is null %}
        <td><input type='text' name=\"adresse_rdv\"  value=\"\"  style='background-color: yellow; width: 100px;'  required/></td>
      {% else %}
        <td><input type='text' name=\"adresse_rdv\"  style='width: 150px; font-size : 12px; width: 100px;' value=\"{{commande.getAdresseRdv()}}\"  required/></td>
      {% endif %}


      {% if commande.getLocalisationCommande() is null %}
        <td><input type='text' name=\"localisation_commande\"  value=\"\"  style='background-color: yellow;  font-size : 12px; width: 70px'  required/></td>
      {% else %}
        <td><input type='text' name=\"localisation_commande\"  value=\"{{commande.getLocalisationCommande()}}\"  style='font-size : 12px; width: 70px'  required/></td>
      {% endif %}

      {% if commande.getNbPhotosCommande() is null %}
        <td><input type='text' name=\"nb_photos_commande\"  value=\"\"  style='background-color: yellow;  font-size : 12px; width: 70px'  required/></td>
      {% else %}
        <td><input type='text' name=\"nb_photos_commande\"  style='font-size : 12px; width: 70px' value=\"{{commande.getNbPhotosCommande()}}\"  required/></td>
      {% endif %}

      {% if commande.getAideIntegrationCommande() is null %}
        <td><input type='text' name=\"aide_integration_commande\"  value=\"\"  style='background-color: yellow; width: 40px'  required/></td>
      {% else %}
        <td><input type='text' name=\"aide_integration_commande\"  style='width: 40px' value=\"{{commande.getAideIntegrationCommande()}}\"  required/></td>
      {% endif %}



      {% if commande.getDatePaiement() is null %}
            <td></td>
        {% else %}
            <td>{{commande.getDatePaiement()|date('Y-m-d H:i:s')}}</td>
        {% endif %}


      {% if commande.getDateOuverturePaiement() is null %}
            <td></td>
        {% else %}
            <td>{{commande.getDateOuverturePaiement()|date('Y-m-d H:i:s')}}</td>
        {% endif %}


      <td>
        {% if commande.getStatut() == \"EN ATTENTE D'UN CRÉNEAU\" %}
            <p>- Contacter client par {{commande.getPreferenceContact()}} <br>- Renseigner un créneau, un lieu de rdv et une formule</p>
        {% elseif commande.getStatut() == \"EN ATTENTE DU PAIEMENT\" %}
            <p>- Attente du paiement du client</p>
        {% elseif commande.getStatut() == \"EN COURS\" %}
            <p>- Réaliser la prestation</p>
        {% elseif commande.getStatut() == \"EN LIVRAISON\" %}
            <p>- Livrer le produit</p>
        {% elseif commande.getStatut() == \"TERMINÉ\" %}
            <p>- Fin de la commande</p>
        {% elseif commande.getStatut() == \"EXPIRÉ\" %}
            <p>- Le client n'a pas payé à temps</p>
        {% endif %}
      </td>

        {% if commande.getStatut() == \"EN ATTENTE D'UN CRÉNEAU\" %}
          <td><input type=\"submit\" style=\"font-size: 12px;\" value=\"Valider le creneau\" formaction=\"{{ path('app_adminChoixCreneau')}}\"/></td>
        {% elseif commande.getStatut() == \"EN ATTENTE DU PAIEMENT\" %}
          <td><input type=\"submit\" style=\"font-size: 12px;\" value=\"Modifier la commande\"  formaction=\"{{ path('app_adminModifierCommande')}}\" /></td>
        {% elseif commande.getStatut() == \"EN COURS\" %}
          <td><input type=\"submit\" style=\"font-size: 12px;\" style=\"font-size: 12px;\" value=\"J'ai réalisé la prestation\"  formaction=\"{{ path('app_adminPrestationRealise')}}\"/>
          <input type=\"submit\" style=\"font-size: 12px;\" value=\"Notifier que le rdv est soon\"  formaction=\"{{ path('app_rendezVousSoonMail')}}\" />
          <input type=\"submit\" style=\"font-size: 12px;\" value=\"Modifier la commande\"  formaction=\"{{ path('app_adminModifierCommande')}}\" />
        <!-- <input type=\"submit\" value=\"Déclancher remboursement\"  formaction=\"{#{ path('app_adminSupprimerCommande')}#}\" /></td>-->
        {% elseif commande.getStatut() == \"EN LIVRAISON\" %}
          <input type='hidden' name=\"idCommande\" value=\"{{commande.id}}\" />
          <input type='hidden' name=\"email\" value=\"{{commande.getClientId().email}}\" />

      
          <td><input type=\"submit\" style=\"font-size: 12px;\" value=\"J'ai livré la prestation\"  formaction=\"{{ path('app_adminProduitLivre')}}\" /></td>
        {% elseif commande.getStatut() == \"TERMINÉ\" %}
          <input type='hidden' name=\"idCommande\" value=\"{{commande.id}}\" />
          <input type='hidden' name=\"email\" value=\"{{commande.getClientId().email}}\" />
          {% if commande.getNote() is null  %}
            <td><input type=\"submit\" style=\"font-size: 12px;\" value=\"Demander un avis\"  formaction=\"{{ path('app_demandeDeNoteeMail')}}\" /></td>
          {% endif %}
        {% elseif commande.getStatut() == \"EXPIRÉ\" %}
        {% endif %}
    </form>
      <tr>
  {% endfor %}
</tbody>

</table>


<h3 style='font-weight: 500; font-size: 16px; margin-bottom: 4px'>Prochains RDV</h3>

<table class=\"dashBoard-table\">
    <thead>
        <tr class=\"tr-dashBoard\">
            <th>ID</th>
            <th>Nom</th>
            <th>Adresse du RDV</th>
            <th>Numéro de telephone</th>
            <th>Email</th>
            <th>Créneau</th>
            <th>Action</th>
        </tr>
    </thead>
  <tbody>

  {% for client in clients %}
    {% for commande in client.commandes %}
      {% if (commande.statut == \"EN COURS\") or (commande.statut == \"EN LIVRAISON\")%}
      <tr>
        <td>{{commande.id}}</td>
        <td>{{client.nom}}</td>
        <td>{{commande.adresseRdv}}</td>
        <td>{{client.numeroTelephone }}</td>
        <td>{{client.email }}</td>
        <td>{{commande.creneau|date('l j F à H:i')}}</td>

      <td>
        {% if (commande.statut == \"EN COURS\")%}
          A faire
        {% elseif (commande.statut == \"EN LIVRAISON\")%}
         A livrer
        {% endif %}
      <tr>
    {% endif %}
  {% endfor %}
{% endfor %}
</tbody>

</table>



<h3 style='font-weight: 500; font-size: 16px; margin-bottom: 4px'>Notes</h3>

<table class=\"dashBoard-table\">
    <thead>
        <tr class=\"tr-dashBoard\">
            <th>Note</th>
            <th>Commentaire</th>
            <th>Commande ID</th>
        </tr>
    </thead>
  <tbody>


{% for commande in commandes %}
  {% if commande.note is not null %}
    <tr>
      <td>{{commande.note.note}} / 5</td>
      <td>{{commande.note.commentaire}}</td>
      <td>{{commande.id}}</td>
    </tr>

  {% endif %}
{% endfor %}

</tbody>

</table>


<script>


function confirmSubmit(event) {
  var submitButton = event.submitter;
  var confirmationMessage = \"Êtes-vous sûr de vouloir soumettre '\" + submitButton.value + \" ?\";
  return confirm(confirmationMessage);
}


/*
  const input = document.getElementById('id-filter-input');
  input.addEventListener('input', function() {
    const inputValue = this.value;
    fetch(`/api/commandes?filter[id]=\${inputValue}`)
      .then(response => response.json())
      .then(data => {
        const tbody = document.getElementById('commandes-table-body');
        tbody.innerHTML = '';
        data.forEach(commande => {
          const tr = document.createElement('tr');
          tr.innerHTML = `
            <td>\${commande.id}</td>
            <td>\${commande.formule_id}</td>
            <td>\${commande.statut}</td>
          `;
          tbody.appendChild(tr);
        });
      })
      .catch(error => console.error(error));
  });*/
</script>


{% endblock %}", "dashboardadmin.html.twig", "C:\\Users\\utils\\Documents\\lookaround\\Website\\lookaround\\templates\\dashboardadmin.html.twig");
    }
}
