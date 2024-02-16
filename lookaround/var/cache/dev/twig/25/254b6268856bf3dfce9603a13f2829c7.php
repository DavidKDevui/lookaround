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

/* email.html.twig */
class __TwigTemplate_951c1d5c574b5db8224f64afe7ee95e6 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "email.html.twig", 1);
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

        echo " TEST ";
        
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/inoca.png"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "

<section class='Body-Section-Transparent' >
 <div style=\"width: 70%; height : 100%; margin: 0 auto; padding: 10px 30px 30px 30px; background: linear-gradient(rgba(255, 255, 255, 0.55), rgba(255, 255, 255, 0.3)), url('/img/circle-scatter-haikei(3).png');\">

    <h1 class=\"logo-LA\" style=\"font-size: 27px;\">look<span style=\"font-weight : 500; color: #219988;\">around®</span></h1>
        <br>
        <h3 style=\"font-weight: 500; font-size: 19px; margin-bottom: 10px\"> Votre commande est en route !</h3>
        <br>
        <p style=\"font-size: 15px; font-weight: 300;\">Votre commande nana  eezgjizrgrgog Ullamco magna ut cillum dolore cillum amet. Ex proident occaecat et veniam. </p>

        <p style=\"font-size: 18px;
font-weight: 500;
text-align: center;
padding: 20px;
width: fit-content;
margin: 0 auto;
background: #fdfdfd;\">Jeudi 18 Mars à 18h30</p>

         <p style=\"font-size: 15px; font-weight: 300;\">Votre commande nana  eezgjizrgrgog Ullamco magna ut cillum dolore cillum amet. Ex proident occaecat et veniam. </p>

        <br>
        <br>
        <input  onclick=\"window.location.href='https://lookaround.fr/mes-commandes'\" type='button' value='Suivre ma commande' class='reserver-creneau-btn1'/>


        <p style=\"font-size: 11px;
padding-top: 20px;
text-align: end;\">No de commande : 00000001</p>
    </div>
</section>

<style>

.Body-Section-Transparent {
  width: 100%;
  height: 100%;
  background-color: #f7f7f7;
}

.logo-LA {
  font-size: 31px;
  font-weight: 300;
  padding: 5px 5px;
  cursor: pointer;
  width: min-content;
  margin: 0 auto;
  color: #606060;
  display: flex;
  user-select: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}

.reserver-creneau-btn1 {
  z-index: 1;
  font-size: 14px;
  background-color: #219988;
  border: 0px solid;
    border-top-color: currentcolor;
    border-right-color: currentcolor;
    border-bottom-color: currentcolor;
    border-bottom-style: solid;
    border-bottom-width: 0px;
    border-left-color: currentcolor;
  color: rgb(255, 255, 255);
  border-radius: 3px;
  padding: 3px 15px;
  font-weight: 400;
  text-align: end;
  cursor: pointer;
  box-shadow: 0 2px 1px 0 #ccc;
  border-bottom: 2px solid;
    border-bottom-color: currentcolor;
  border-color: #032420;
}

</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 11,  106 => 10,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} TEST {% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/inoca.png') }}\">
{% endblock %}

{% block body %}


<section class='Body-Section-Transparent' >
 <div style=\"width: 70%; height : 100%; margin: 0 auto; padding: 10px 30px 30px 30px; background: linear-gradient(rgba(255, 255, 255, 0.55), rgba(255, 255, 255, 0.3)), url('/img/circle-scatter-haikei(3).png');\">

    <h1 class=\"logo-LA\" style=\"font-size: 27px;\">look<span style=\"font-weight : 500; color: #219988;\">around®</span></h1>
        <br>
        <h3 style=\"font-weight: 500; font-size: 19px; margin-bottom: 10px\"> Votre commande est en route !</h3>
        <br>
        <p style=\"font-size: 15px; font-weight: 300;\">Votre commande nana  eezgjizrgrgog Ullamco magna ut cillum dolore cillum amet. Ex proident occaecat et veniam. </p>

        <p style=\"font-size: 18px;
font-weight: 500;
text-align: center;
padding: 20px;
width: fit-content;
margin: 0 auto;
background: #fdfdfd;\">Jeudi 18 Mars à 18h30</p>

         <p style=\"font-size: 15px; font-weight: 300;\">Votre commande nana  eezgjizrgrgog Ullamco magna ut cillum dolore cillum amet. Ex proident occaecat et veniam. </p>

        <br>
        <br>
        <input  onclick=\"window.location.href='https://lookaround.fr/mes-commandes'\" type='button' value='Suivre ma commande' class='reserver-creneau-btn1'/>


        <p style=\"font-size: 11px;
padding-top: 20px;
text-align: end;\">No de commande : 00000001</p>
    </div>
</section>

<style>

.Body-Section-Transparent {
  width: 100%;
  height: 100%;
  background-color: #f7f7f7;
}

.logo-LA {
  font-size: 31px;
  font-weight: 300;
  padding: 5px 5px;
  cursor: pointer;
  width: min-content;
  margin: 0 auto;
  color: #606060;
  display: flex;
  user-select: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}

.reserver-creneau-btn1 {
  z-index: 1;
  font-size: 14px;
  background-color: #219988;
  border: 0px solid;
    border-top-color: currentcolor;
    border-right-color: currentcolor;
    border-bottom-color: currentcolor;
    border-bottom-style: solid;
    border-bottom-width: 0px;
    border-left-color: currentcolor;
  color: rgb(255, 255, 255);
  border-radius: 3px;
  padding: 3px 15px;
  font-weight: 400;
  text-align: end;
  cursor: pointer;
  box-shadow: 0 2px 1px 0 #ccc;
  border-bottom: 2px solid;
    border-bottom-color: currentcolor;
  border-color: #032420;
}

</style>

{% endblock %}", "email.html.twig", "C:\\Users\\utils\\Documents\\lookaround\\Website\\lookaround\\templates\\email.html.twig");
    }
}
