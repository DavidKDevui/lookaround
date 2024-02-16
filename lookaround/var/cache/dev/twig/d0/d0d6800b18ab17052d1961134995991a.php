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

/* tools/footer.html.twig */
class __TwigTemplate_cace2b299de476ab6bebc00b3e2d0f74 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tools/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tools/footer.html.twig"));

        // line 1
        echo " <div class='Footer'>
    <div class='Footer-container'>




        <h1 onclick=\"goWelcome.submit()\" class=\"logo-LA\" style=\"margin-bottom: 20px;\">look<span class=\"span-around\">around®</span></h1>
        <div class=\"Partie-Exemples-End\" style=\"background: transparent\">
            <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conditionsgenerales");
        echo "\">Conditions générales</a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_politiqueconfidentialite");
        echo "\">Politique de confidentialité</a>
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_politiquecookies");
        echo "\">Politique en matière de cookies </a>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "tools/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <div class='Footer'>
    <div class='Footer-container'>




        <h1 onclick=\"goWelcome.submit()\" class=\"logo-LA\" style=\"margin-bottom: 20px;\">look<span class=\"span-around\">around®</span></h1>
        <div class=\"Partie-Exemples-End\" style=\"background: transparent\">
            <a href=\"{{ path('app_conditionsgenerales')}}\">Conditions générales</a>
            <a href=\"{{ path('app_politiqueconfidentialite')}}\">Politique de confidentialité</a>
            <a href=\"{{ path('app_politiquecookies')}}\">Politique en matière de cookies </a>
        </div>
    </div>
</div>", "tools/footer.html.twig", "C:\\Users\\utils\\Documents\\lookaround\\Website\\lookaround\\templates\\tools\\footer.html.twig");
    }
}
