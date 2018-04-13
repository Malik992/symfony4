<?php

/* Front/reservation.html.twig */
class __TwigTemplate_53b4f9d44d629283930c23cec1f47779786753d0d92f4a6c6df8fbebc6071d43 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Front/reservation.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front/reservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front/reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
.rower{
    display:flex;
    flex-direction:row;
} 

</style>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 14
            echo "     
           <div class=\"col-lg-4 col-md-4 col-sm-6 rower\">
\t\t\t\t\t";
            // line 17
            echo "                    <a href=\"#\" class=\"fh5co-card-item image-popup\">

\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<div class=\"overlay\"><i class=\"ti-plus\"></i></div>
\t\t\t\t\t\t\t";
            // line 22
            echo "\t\t\t\t\t\t</figure>
                        </div>
\t\t\t\t\t\t<div class=\"fh5co-text rower\">
\t\t\t\t\t\t\t<h2>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bien"], "typebien", array()), "libelletype", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<p>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "prix_loc", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bien"], "localite", array()), "libelleloca", array()), "html", null, true);
            echo "..</p>
                            <p>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p><a  href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserverBien", array("id" => twig_get_attribute($this->env, $this->source, $context["bien"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Détail</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 32,  113 => 28,  109 => 27,  103 => 26,  99 => 25,  94 => 22,  88 => 17,  84 => 14,  80 => 13,  71 => 6,  62 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block nav %}{% endblock %}

{% block body %}
<style>
.rower{
    display:flex;
    flex-direction:row;
} 

</style>
        {% for bien in biens %}
     
           <div class=\"col-lg-4 col-md-4 col-sm-6 rower\">
\t\t\t\t\t{# <a href=\"{{ asset('image/')}}{{ bien.images[0].image }}\" class=\"fh5co-card-item image-popup\"> #}
                    <a href=\"#\" class=\"fh5co-card-item image-popup\">

\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<div class=\"overlay\"><i class=\"ti-plus\"></i></div>
\t\t\t\t\t\t\t{# <img src=\"data:image/png;base64,{{bien.images[0].image}}\" alt=\"Image\" class=\"img-responsive\"> #}
\t\t\t\t\t\t</figure>
                        </div>
\t\t\t\t\t\t<div class=\"fh5co-text rower\">
\t\t\t\t\t\t\t<h2>{{ bien.typebien.libelletype}}</h2>
\t\t\t\t\t\t\t<p>{{ bien.prix_loc }}, {{ bien.localite.libelleloca }}..</p>
                            <p>{{bien.description}}</p>
\t\t\t\t\t\t\t<p><a  href=\"{{path('reserverBien', {'id':bien.id})}}\" class=\"btn btn-primary\">Détail</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t  {% endfor %}
 {% endblock %}
", "Front/reservation.html.twig", "/var/www/html/loc/templates/Front/reservation.html.twig");
    }
}
