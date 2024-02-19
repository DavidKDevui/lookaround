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

/* tools/navbar.html.twig */
class __TwigTemplate_9c95aefb66408a3c81edcdd53b61728b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tools/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tools/navbar.html.twig"));

        // line 1
        echo "
 <div class=\"navbar0\">
   <div class=\"navbar0-container\"> 
        <a>FR</a>
        <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index_scroll");
        echo "\">Contact</a>
   </div>
</div>

 <div class=\"navbar\">
    <form method='post' id=\"form-goTo-welcome\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
        <h1 onclick=\"goWelcome.submit()\" class=\"logo-LA\">look<span style=\"font-weight : 500; color: #219988;\">around®</span></h1>
    <!--    <img class=\"biglogo\" src='";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/biglogo.png"), "html", null, true);
        echo "' /> -->
    </form>    
</div>


 <div class=\"navbar2\">
    <div class=\"navbar2-container\">

        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quisommesnous");
        echo "\">Qui sommes-nous ?</a>

        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_realisations");
        echo "\">Nos réalisations</a>

        <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tarifs");
        echo "\">Nos tarifs</a>

        <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageVues");
        echo "\"> Trouver une visite</a>


    </div>
</div>


 <div class=\"navbar3\">
    <div class=\"navbar3-container\">
        <div style=\"display: flex; margin: 0 auto;\">
            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/camera(1).png"), "html", null, true);
        echo "\" class=\"icon-trois-protein\"/>
            <a>Une qualité visuelle d'une grande finesse</a>
        </div>

        <div style=\"display: flex; margin: 0 auto;\">
            <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/marque-de-localisation.png"), "html", null, true);
        echo "\" class=\"icon-trois-protein\"/>
            <a>France métropolitaine, Belgique et Genève</a>
        </div> 

        <div style=\"display: flex; margin: 0 auto;\">
            <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../img/paquet.png"), "html", null, true);
        echo "\" class=\"icon-trois-protein\"/>
            <a>Livraison dans les 48h après les prises de vue</a>
        </div>
    </div>
</div>


<script>

    var modal = document.getElementById(\"myModal\");
    var modalCompte = document.getElementById(\"myModalCompte\");
    var goWelcome = document.getElementById(\"form-goTo-welcome\");
    

    var FormGoToRealisations = document.getElementById(\"form-goTo-app_realisations\");
    var FormGoToTarifs = document.getElementById(\"form-goTo-app_tarifs\");


    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = \"none\";
        }
        if (event.target == modalCompte) {
            modalCompte.style.display = \"none\";
        }
    } 



</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "tools/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  109 => 41,  101 => 36,  88 => 26,  83 => 24,  78 => 22,  73 => 20,  62 => 12,  57 => 10,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
 <div class=\"navbar0\">
   <div class=\"navbar0-container\"> 
        <a>FR</a>
        <a href=\"{{ path('app_index_scroll') }}\">Contact</a>
   </div>
</div>

 <div class=\"navbar\">
    <form method='post' id=\"form-goTo-welcome\" action=\"{{ path('index') }}\">
        <h1 onclick=\"goWelcome.submit()\" class=\"logo-LA\">look<span style=\"font-weight : 500; color: #219988;\">around®</span></h1>
    <!--    <img class=\"biglogo\" src='{{asset(\"img/biglogo.png\")}}' /> -->
    </form>    
</div>


 <div class=\"navbar2\">
    <div class=\"navbar2-container\">

        <a href=\"{{ path('app_quisommesnous') }}\">Qui sommes-nous ?</a>

        <a href=\"{{ path('app_realisations') }}\">Nos réalisations</a>

        <a href=\"{{ path('app_tarifs') }}\">Nos tarifs</a>

        <a href=\"{{ path('pageVues') }}\"> Trouver une visite</a>


    </div>
</div>


 <div class=\"navbar3\">
    <div class=\"navbar3-container\">
        <div style=\"display: flex; margin: 0 auto;\">
            <img src=\"{{asset('img/camera(1).png')}}\" class=\"icon-trois-protein\"/>
            <a>Une qualité visuelle d'une grande finesse</a>
        </div>

        <div style=\"display: flex; margin: 0 auto;\">
            <img src=\"{{asset('img/marque-de-localisation.png')}}\" class=\"icon-trois-protein\"/>
            <a>France métropolitaine, Belgique et Genève</a>
        </div> 

        <div style=\"display: flex; margin: 0 auto;\">
            <img src=\"{{asset('../img/paquet.png')}}\" class=\"icon-trois-protein\"/>
            <a>Livraison dans les 48h après les prises de vue</a>
        </div>
    </div>
</div>


<script>

    var modal = document.getElementById(\"myModal\");
    var modalCompte = document.getElementById(\"myModalCompte\");
    var goWelcome = document.getElementById(\"form-goTo-welcome\");
    

    var FormGoToRealisations = document.getElementById(\"form-goTo-app_realisations\");
    var FormGoToTarifs = document.getElementById(\"form-goTo-app_tarifs\");


    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = \"none\";
        }
        if (event.target == modalCompte) {
            modalCompte.style.display = \"none\";
        }
    } 



</script>", "tools/navbar.html.twig", "C:\\Users\\utils\\Documents\\lookaround\\Website\\lookaround\\templates\\tools\\navbar.html.twig");
    }
}
