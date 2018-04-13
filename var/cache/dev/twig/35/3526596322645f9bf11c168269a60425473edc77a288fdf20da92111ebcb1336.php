<?php

/* Front/reserver.html.twig */
class __TwigTemplate_1b158b3a6987d9360037500fd0c0b190f502a42bec5decec6347268b23b5c322 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Front/reserver.html.twig", 1);
        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front/reserver.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front/reserver.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "<nav class=\"gtco-nav \" role=\"navigation\" style=\"background:black\">
\t\t<div class=\"gtco-container\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-xs-12 \">
\t\t\t\t\t<div id=\"gtco-logo\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchBien");
        echo "\">Immobilier De LUXE <em>.</em></a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-8 text-right menu-1\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"destination.html\">Destination</a></li>
\t\t\t\t\t\t<li class=\"has-dropdown\">
\t\t\t\t\t\t\t<a href=\"#\">Nos Agences</a>
\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Almadie");
        echo "\">Almadie</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Golf</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Mariste");
        echo "\">Mariste</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dakar</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resultat");
        echo "\">Nos Biens</a></li>
\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</nav>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "\t\t\t<div class=\"container\">
    <h1 style=\"font-family:; color:grey\"> Votre réservation a été prise en charge</h1>

    
</div>
\t        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/reserver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  103 => 32,  84 => 22,  77 => 18,  72 => 16,  61 => 8,  54 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block nav %}
<nav class=\"gtco-nav \" role=\"navigation\" style=\"background:black\">
\t\t<div class=\"gtco-container\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-xs-12 \">
\t\t\t\t\t<div id=\"gtco-logo\"><a href=\"{{path('searchBien')}}\">Immobilier De LUXE <em>.</em></a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-8 text-right menu-1\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"destination.html\">Destination</a></li>
\t\t\t\t\t\t<li class=\"has-dropdown\">
\t\t\t\t\t\t\t<a href=\"#\">Nos Agences</a>
\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t<li><a href=\"{{path('Almadie')}}\">Almadie</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Golf</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('Mariste')}}\">Mariste</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dakar</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"{{path('resultat')}}\">Nos Biens</a></li>
\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</nav>
  {% endblock %}

{% block body %}
\t\t\t<div class=\"container\">
    <h1 style=\"font-family:; color:grey\"> Votre réservation a été prise en charge</h1>

    
</div>
\t        {% endblock %}
\t
", "Front/reserver.html.twig", "/var/www/html/loc/templates/Front/reserver.html.twig");
    }
}
