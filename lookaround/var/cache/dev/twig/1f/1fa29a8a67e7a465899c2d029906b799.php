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
        // line 43
        $context["commandes"] = twig_sort_filter($this->env, (isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 43, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 43, $this->source); })()), "datecommande", [], "any", false, false, false, 43) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 43, $this->source); })()), "datecommande", [], "any", false, false, false, 43)); });
        // line 44
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 45
            echo "  
    <tr>
    <form method=\"post\"  onsubmit=\"return confirmSubmit(event);\">
      <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getId", [], "method", false, false, false, 48), "html", null, true);
            echo " <input type=\"text\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getId", [], "method", false, false, false, 48), "html", null, true);
            echo "\" class=\"setInvisible\"/></td>


    ";
            // line 51
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getFormuleId", [], "method", false, false, false, 51))) {
                // line 52
                echo "      <td><input type=\"text\" name=\"formule_id\" value=\"\" style='width: 40px; background-color: yellow' required/></td>
    ";
            } else {
                // line 54
                echo "      ";
                if (((((twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 54) == "EN COURS") || (twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 54) == "ANNULÉ - REMBOURSEMENT")) || (twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 54) == "EN LIVRAISON")) || (twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 54) == "TERMINÉ"))) {
                    // line 55
                    echo "        <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getFormuleId", [], "method", false, false, false, 55), "html", null, true);
                    echo "</td>
      ";
                } else {
                    // line 57
                    echo "        <td><input type=\"text\" name='formule_id'  value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getFormuleId", [], "method", false, false, false, 57), "html", null, true);
                    echo "\" style='width: 40px;' required></td>
      ";
                }
                // line 59
                echo "    ";
            }
            // line 60
            echo "
      ";
            // line 61
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getPrix", [], "method", false, false, false, 61))) {
                echo " 
        <td><input type=\"text\" name=\"prix\" value=\"\" style='width: 40px; background-color: yellow;' required/></td>
      ";
            } else {
                // line 64
                echo "        <td><input type=\"text\" name=\"prix\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getPrix", [], "method", false, false, false, 64), "html", null, true);
                echo "\" style='width: 45px; font-size : 12px' required/></td>
      ";
            }
            // line 66
            echo "
      <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 67), "html", null, true);
            echo " <input type=\"text\" name=\"statut\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 67), "html", null, true);
            echo "\" style='width: 40px; font-size : 12px' class=\"setInvisible\"/></td>

      <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getDateCommande", [], "method", false, false, false, 69), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>

        ";
            // line 71
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getCreneau", [], "method", false, false, false, 71))) {
                // line 72
                echo "            <td><input type=\"text\" name='creneau' value=\"\" style='background-color: yellow;width: 130px; font-size : 12px'  pattern=\"[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}\" required></td>
        ";
            } else {
                // line 74
                echo "            <td><input type=\"text\" name='creneau'  style='width: 130px; font-size : 12px'   value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getCreneau", [], "method", false, false, false, 74), "Y-m-d H:i:s"), "html", null, true);
                echo "\" pattern=\"[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}\" required></td>
        ";
            }
            // line 76
            echo "
      <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getPreferenceCreneau", [], "method", false, false, false, 77), "html", null, true);
            echo "</td>

      ";
            // line 79
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getAdresseRdv", [], "method", false, false, false, 79))) {
                // line 80
                echo "        <td><input type='text' name=\"adresse_rdv\"  value=\"\"  style='background-color: yellow; width: 100px;'  required/></td>
      ";
            } else {
                // line 82
                echo "        <td><input type='text' name=\"adresse_rdv\"  style='width: 150px; font-size : 12px; width: 100px;' value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getAdresseRdv", [], "method", false, false, false, 82), "html", null, true);
                echo "\"  required/></td>
      ";
            }
            // line 84
            echo "

      ";
            // line 86
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getLocalisationCommande", [], "method", false, false, false, 86))) {
                // line 87
                echo "        <td><input type='text' name=\"localisation_commande\"  value=\"\"  style='background-color: yellow;  font-size : 12px; width: 70px'  required/></td>
      ";
            } else {
                // line 89
                echo "        <td><input type='text' name=\"localisation_commande\"  value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getLocalisationCommande", [], "method", false, false, false, 89), "html", null, true);
                echo "\"  style='font-size : 12px; width: 70px'  required/></td>
      ";
            }
            // line 91
            echo "
      ";
            // line 92
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getNbPhotosCommande", [], "method", false, false, false, 92))) {
                // line 93
                echo "        <td><input type='text' name=\"nb_photos_commande\"  value=\"\"  style='background-color: yellow;  font-size : 12px; width: 70px'  required/></td>
      ";
            } else {
                // line 95
                echo "        <td><input type='text' name=\"nb_photos_commande\"  style='font-size : 12px; width: 70px' value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getNbPhotosCommande", [], "method", false, false, false, 95), "html", null, true);
                echo "\"  required/></td>
      ";
            }
            // line 97
            echo "
      ";
            // line 98
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getAideIntegrationCommande", [], "method", false, false, false, 98))) {
                // line 99
                echo "        <td><input type='text' name=\"aide_integration_commande\"  value=\"\"  style='background-color: yellow; width: 40px'  required/></td>
      ";
            } else {
                // line 101
                echo "        <td><input type='text' name=\"aide_integration_commande\"  style='width: 40px' value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getAideIntegrationCommande", [], "method", false, false, false, 101), "html", null, true);
                echo "\"  required/></td>
      ";
            }
            // line 103
            echo "


      ";
            // line 106
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getDatePaiement", [], "method", false, false, false, 106))) {
                // line 107
                echo "            <td></td>
        ";
            } else {
                // line 109
                echo "            <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getDatePaiement", [], "method", false, false, false, 109), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
        ";
            }
            // line 111
            echo "

      ";
            // line 113
            if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getDateOuverturePaiement", [], "method", false, false, false, 113))) {
                // line 114
                echo "            <td></td>
        ";
            } else {
                // line 116
                echo "            <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getDateOuverturePaiement", [], "method", false, false, false, 116), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
        ";
            }
            // line 118
            echo "

      <td>
        ";
            // line 121
            if ((twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 121) == "EN ATTENTE D'UN CRÉNEAU")) {
                // line 122
                echo "            <p>- Contacter client par ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getPreferenceContact", [], "method", false, false, false, 122), "html", null, true);
                echo " <br>- Renseigner un créneau, un lieu de rdv et une formule</p>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 123
$context["commande"], "getStatut", [], "method", false, false, false, 123) == "EN ATTENTE DU PAIEMENT")) {
                // line 124
                echo "            <p>- Attente du paiement du client</p>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 125
$context["commande"], "getStatut", [], "method", false, false, false, 125) == "EN COURS")) {
                // line 126
                echo "            <p>- Réaliser la prestation</p>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 127
$context["commande"], "getStatut", [], "method", false, false, false, 127) == "EN LIVRAISON")) {
                // line 128
                echo "            <p>- Livrer le produit</p>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 129
$context["commande"], "getStatut", [], "method", false, false, false, 129) == "TERMINÉ")) {
                // line 130
                echo "            <p>- Fin de la commande</p>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 131
$context["commande"], "getStatut", [], "method", false, false, false, 131) == "EXPIRÉ")) {
                // line 132
                echo "            <p>- Le client n'a pas payé à temps</p>
        ";
            }
            // line 134
            echo "      </td>

        ";
            // line 136
            if ((twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 136) == "EN ATTENTE D'UN CRÉNEAU")) {
                // line 137
                echo "          <td><input type=\"submit\" style=\"font-size: 12px;\" value=\"Valider le creneau\" formaction=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminChoixCreneau");
                echo "\"/></td>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 138
$context["commande"], "getStatut", [], "method", false, false, false, 138) == "EN ATTENTE DU PAIEMENT")) {
                // line 139
                echo "          <td><input type=\"submit\" style=\"font-size: 12px;\" value=\"Modifier la commande\"  formaction=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminModifierCommande");
                echo "\" /></td>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 140
$context["commande"], "getStatut", [], "method", false, false, false, 140) == "EN COURS")) {
                // line 141
                echo "          <td><input type=\"submit\" style=\"font-size: 12px;\" style=\"font-size: 12px;\" value=\"J'ai réalisé la prestation\"  formaction=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminPrestationRealise");
                echo "\"/>
          <input type=\"submit\" style=\"font-size: 12px;\" value=\"Notifier que le rdv est soon\"  formaction=\"";
                // line 142
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rendezVousSoonMail");
                echo "\" />
          <input type=\"submit\" style=\"font-size: 12px;\" value=\"Modifier la commande\"  formaction=\"";
                // line 143
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminModifierCommande");
                echo "\" />
        <!-- <input type=\"submit\" value=\"Déclancher remboursement\"  formaction=\"";
                // line 144
                echo "\" /></td>-->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 145
$context["commande"], "getStatut", [], "method", false, false, false, 145) == "EN LIVRAISON")) {
                // line 146
                echo "          <input type='hidden' name=\"idCommande\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 146), "html", null, true);
                echo "\" />
          <input type='hidden' name=\"email\" value=\"";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "getClientId", [], "method", false, false, false, 147), "email", [], "any", false, false, false, 147), "html", null, true);
                echo "\" />

      
          <td><input type=\"submit\" style=\"font-size: 12px;\" value=\"J'ai livré la prestation\"  formaction=\"";
                // line 150
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminProduitLivre");
                echo "\" /></td>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 151
$context["commande"], "getStatut", [], "method", false, false, false, 151) == "TERMINÉ")) {
                // line 152
                echo "          <input type='hidden' name=\"idCommande\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 152), "html", null, true);
                echo "\" />
          <input type='hidden' name=\"email\" value=\"";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "getClientId", [], "method", false, false, false, 153), "email", [], "any", false, false, false, 153), "html", null, true);
                echo "\" />
          ";
                // line 154
                if ((null === twig_get_attribute($this->env, $this->source, $context["commande"], "getNote", [], "method", false, false, false, 154))) {
                    // line 155
                    echo "            <td><input type=\"submit\" style=\"font-size: 12px;\" value=\"Demander un avis\"  formaction=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandeDeNoteeMail");
                    echo "\" /></td>
          ";
                }
                // line 157
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["commande"], "getStatut", [], "method", false, false, false, 157) == "EXPIRÉ")) {
                // line 158
                echo "        ";
            }
            // line 159
            echo "    </form>
      <tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
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
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 183, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 184
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["client"], "commandes", [], "any", false, false, false, 184));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 185
                echo "      ";
                if (((twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 185) == "EN COURS") || (twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 185) == "EN LIVRAISON"))) {
                    // line 186
                    echo "      <tr>
        <td>";
                    // line 187
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 187), "html", null, true);
                    echo "</td>
        <td>";
                    // line 188
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 188), "html", null, true);
                    echo "</td>
        <td>";
                    // line 189
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "adresseRdv", [], "any", false, false, false, 189), "html", null, true);
                    echo "</td>
        <td>";
                    // line 190
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "numeroTelephone", [], "any", false, false, false, 190), "html", null, true);
                    echo "</td>
        <td>";
                    // line 191
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 191), "html", null, true);
                    echo "</td>
        <td>";
                    // line 192
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "creneau", [], "any", false, false, false, 192), "l j F à H:i"), "html", null, true);
                    echo "</td>

      <td>
        ";
                    // line 195
                    if ((twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 195) == "EN COURS")) {
                        // line 196
                        echo "          A faire
        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 197
$context["commande"], "statut", [], "any", false, false, false, 197) == "EN LIVRAISON")) {
                        // line 198
                        echo "         A livrer
        ";
                    }
                    // line 200
                    echo "      <tr>
    ";
                }
                // line 202
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
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
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 223, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 224
            echo "  ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["commande"], "note", [], "any", false, false, false, 224))) {
                // line 225
                echo "    <tr>
      <td>";
                // line 226
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "note", [], "any", false, false, false, 226), "note", [], "any", false, false, false, 226), "html", null, true);
                echo " / 5</td>
      <td>";
                // line 227
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "note", [], "any", false, false, false, 227), "commentaire", [], "any", false, false, false, 227), "html", null, true);
                echo "</td>
      <td>";
                // line 228
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 228), "html", null, true);
                echo "</td>
    </tr>

  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
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
        return array (  602 => 233,  591 => 228,  587 => 227,  583 => 226,  580 => 225,  577 => 224,  573 => 223,  552 => 204,  542 => 202,  538 => 200,  534 => 198,  532 => 197,  529 => 196,  527 => 195,  521 => 192,  517 => 191,  513 => 190,  509 => 189,  505 => 188,  501 => 187,  498 => 186,  495 => 185,  490 => 184,  486 => 183,  463 => 162,  455 => 159,  452 => 158,  449 => 157,  443 => 155,  441 => 154,  437 => 153,  432 => 152,  430 => 151,  426 => 150,  420 => 147,  415 => 146,  413 => 145,  410 => 144,  406 => 143,  402 => 142,  397 => 141,  395 => 140,  390 => 139,  388 => 138,  383 => 137,  381 => 136,  377 => 134,  373 => 132,  371 => 131,  368 => 130,  366 => 129,  363 => 128,  361 => 127,  358 => 126,  356 => 125,  353 => 124,  351 => 123,  346 => 122,  344 => 121,  339 => 118,  333 => 116,  329 => 114,  327 => 113,  323 => 111,  317 => 109,  313 => 107,  311 => 106,  306 => 103,  300 => 101,  296 => 99,  294 => 98,  291 => 97,  285 => 95,  281 => 93,  279 => 92,  276 => 91,  270 => 89,  266 => 87,  264 => 86,  260 => 84,  254 => 82,  250 => 80,  248 => 79,  243 => 77,  240 => 76,  234 => 74,  230 => 72,  228 => 71,  223 => 69,  216 => 67,  213 => 66,  207 => 64,  201 => 61,  198 => 60,  195 => 59,  189 => 57,  183 => 55,  180 => 54,  176 => 52,  174 => 51,  166 => 48,  161 => 45,  156 => 44,  154 => 43,  124 => 15,  122 => 14,  119 => 13,  109 => 12,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
