<?php

/* Front/index.html.twig */
class __TwigTemplate_d2653a51ae26d17a5d9ecee42f17ff5eddd545e39b64bd46536101c4518628c6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Front/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FrontController:index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_nav($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 8
        echo "    <div class=\"gtco-loader\"></div>

\t<div id=\"page\">
\t<!-- <div class=\"page-inner\"> -->
\t<nav class=\"gtco-nav\" role=\"navigation\">
\t\t<div class=\"gtco-container\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t<div id=\"gtco-logo\"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><em>Immobilier De LUXE </em></a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-8 text-right menu-1\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SavePro");
        echo "\">Placer vos Annonces</a></li>
\t\t\t\t\t\t<li class=\"has-dropdown\">
\t\t\t\t\t\t\t<a href=\"#\">Autres</a>
\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Almadie");
        echo "\">Almadie</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Mariste");
        echo "\">Mariste</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation");
        echo "\">Nos Biens</a></li>
\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t</ul>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</nav>
\t<header id=\"gtco-header\" class=\"gtco-cover gtco-cover-md\" role=\"banner\" style=\"background-image: url(";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/img1.jpg"), "html", null, true);
        echo ")\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-md-offset-0 text-left\">
\t\t\t\t\t

\t\t\t\t\t<div class=\"row row-mt-15em\">
\t\t\t\t\t\t<div class=\"col-md-7 mt-text animate-box\" data-animate-effect=\"fadeInUp\">
\t\t\t\t\t\t\t<h1>Nos meilleurs Villa pour un logement de Luxe?</h1>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-md-push-1 animate-box\" data-animate-effect=\"fadeInRight\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-wrap\">
\t\t\t\t\t\t\t\t<div class=\"tab\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content-inner active\" data-content=\"signup\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Recherche</h3>
\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\"method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"fullname\">Prix Location</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" id=\"fullname\" class=\"form-control\" name=\"prix_loc\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"activities\">Localite</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"localite\" id=\"activities\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localites"]) || array_key_exists("localites", $context) ? $context["localites"] : (function () { throw new Twig_Error_Runtime('Variable "localites" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 69
            echo "                                                                 <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localite"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localite"], "libelleloca", array()), "html", null, true);
            echo "</option>
                                                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"destination\">Type de Bien</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"typebien\" id=\"destination\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo "              
                                                                 <option value=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "libelletype", array()), "html", null, true);
            echo " </option>
                                                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\"class=\"btn btn-primary btn-block\" value=\"Rechercher\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>\t
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 110
        echo "\t\t\t

        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 113
            echo "     
           <div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t<a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" class=\"fh5co-card-item image-popup\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<div class=\"overlay\"><i class=\"ti-plus\"></i></div>
\t\t\t\t\t\t\t<img src=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"Image\" class=\"img-responsive\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"fh5co-text\">
\t\t\t\t\t\t\t<h2>";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bien"], "typebien", array()), "libelletype", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<p>";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "prix_loc", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bien"], "localite", array()), "libelleloca", array()), "html", null, true);
            echo "..</p>
\t\t\t\t\t\t\t<p><a  href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserverBien", array("id" => twig_get_attribute($this->env, $this->source, $context["bien"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Détail</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>     

             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "      
\t        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 133
        echo "\t<footer id=\"gtco-footer\" role=\"contentinfo\">
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row row-p\tb-md\">

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>A propos de Nous</h3>
\t\t\t\t\t\t<p>\tImmobilier de Luxe est une agence immobilier siégée à Amitier 3 ,mais pratiquement on a beaucoup d'agence .Rien que pour vous faciliter la vie </p></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-2 col-md-push-1\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>Destination</h3>
\t\t\t\t\t\t<ul class=\"gtco-footer-links\">
\t\t\t\t\t\t\t<li><a href=\"#\">Almadie</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Golf</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Mariste</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dakar</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-2 col-md-push-1\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>Hotels</h3>
\t\t\t\t\t\t<ul class=\"gtco-footer-links\">
\t\t\t\t\t\t\t<li><a href=\"#\">Luxe Hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Italy 5 Star hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Dubai Hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Deluxe Hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">BoraBora Hotel</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 col-md-push-1\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>Get In Touch</h3>
\t\t\t\t\t\t<ul class=\"gtco-quick-contact\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-phone\"></i> +221 33 825 23 23</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-mail2\"></i> immobilierluxio@gmail.com</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-chat\"></i> Live Chat</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"row copyright\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p class=\"pull-left\">
\t\t\t\t\t\t<small class=\"block\">&copy; Immobilier de Luxe for ever.</small> 
\t\t\t\t\t\t";
        // line 186
        echo "\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"pull-right\">
\t\t\t\t\t\t<ul class=\"gtco-social-icons pull-right\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-dribbble\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 186,  307 => 133,  298 => 132,  287 => 129,  275 => 123,  269 => 122,  265 => 121,  258 => 118,  251 => 115,  247 => 113,  243 => 112,  239 => 110,  230 => 109,  194 => 81,  184 => 79,  178 => 78,  169 => 71,  158 => 69,  154 => 68,  120 => 37,  109 => 29,  103 => 26,  99 => 25,  92 => 21,  85 => 17,  74 => 8,  65 => 7,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}FrontController:index{% endblock %}



\t{% block nav %}
    <div class=\"gtco-loader\"></div>

\t<div id=\"page\">
\t<!-- <div class=\"page-inner\"> -->
\t<nav class=\"gtco-nav\" role=\"navigation\">
\t\t<div class=\"gtco-container\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t<div id=\"gtco-logo\"><a href=\"{{path('index')}}\"><em>Immobilier De LUXE </em></a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-8 text-right menu-1\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"{{path('SavePro')}}\">Placer vos Annonces</a></li>
\t\t\t\t\t\t<li class=\"has-dropdown\">
\t\t\t\t\t\t\t<a href=\"#\">Autres</a>
\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t<li><a href=\"{{path('Almadie')}}\">Almadie</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('Mariste')}}\">Mariste</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"{{path('reservation')}}\">Nos Biens</a></li>
\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t</ul>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</nav>
\t<header id=\"gtco-header\" class=\"gtco-cover gtco-cover-md\" role=\"banner\" style=\"background-image: url({{asset('image/img1.jpg')}})\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-md-offset-0 text-left\">
\t\t\t\t\t

\t\t\t\t\t<div class=\"row row-mt-15em\">
\t\t\t\t\t\t<div class=\"col-md-7 mt-text animate-box\" data-animate-effect=\"fadeInUp\">
\t\t\t\t\t\t\t<h1>Nos meilleurs Villa pour un logement de Luxe?</h1>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-md-push-1 animate-box\" data-animate-effect=\"fadeInRight\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-wrap\">
\t\t\t\t\t\t\t\t<div class=\"tab\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content-inner active\" data-content=\"signup\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Recherche</h3>
\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\"method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"fullname\">Prix Location</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" id=\"fullname\" class=\"form-control\" name=\"prix_loc\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"activities\">Localite</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"localite\" id=\"activities\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% for localite in localites %}
                                                                 <option value=\"{{ localite.id }}\">{{ localite.libelleloca }}</option>
                                                             {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"destination\">Type de Bien</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"typebien\" id=\"destination\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% for type in types %}              
                                                                 <option value=\"{{ type.id }}\"> {{type.libelletype}} </option>
                                                             {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\"class=\"btn btn-primary btn-block\" value=\"Rechercher\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>\t
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
{% endblock %}

            {% block body %}
\t\t\t

        {% for bien in biens %}
     
           <div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t<a href=\"{{ asset('image/')}}{{ bien.images[0].image }}\" class=\"fh5co-card-item image-popup\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<div class=\"overlay\"><i class=\"ti-plus\"></i></div>
\t\t\t\t\t\t\t<img src=\"{{ asset('image/')}}{{ bien.images[0].image }}\" alt=\"Image\" class=\"img-responsive\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"fh5co-text\">
\t\t\t\t\t\t\t<h2>{{ bien.typebien.libelletype}}</h2>
\t\t\t\t\t\t\t<p>{{ bien.prix_loc }}, {{ bien.localite.libelleloca }}..</p>
\t\t\t\t\t\t\t<p><a  href=\"{{path('reserverBien', {'id':bien.id})}}\" class=\"btn btn-primary\">Détail</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>     

             {% endfor %}
      
\t        {% endblock %}
\t
{% block footer %}
\t<footer id=\"gtco-footer\" role=\"contentinfo\">
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row row-p\tb-md\">

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>A propos de Nous</h3>
\t\t\t\t\t\t<p>\tImmobilier de Luxe est une agence immobilier siégée à Amitier 3 ,mais pratiquement on a beaucoup d'agence .Rien que pour vous faciliter la vie </p></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-2 col-md-push-1\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>Destination</h3>
\t\t\t\t\t\t<ul class=\"gtco-footer-links\">
\t\t\t\t\t\t\t<li><a href=\"#\">Almadie</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Golf</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Mariste</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dakar</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-2 col-md-push-1\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>Hotels</h3>
\t\t\t\t\t\t<ul class=\"gtco-footer-links\">
\t\t\t\t\t\t\t<li><a href=\"#\">Luxe Hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Italy 5 Star hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Dubai Hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Deluxe Hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">BoraBora Hotel</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 col-md-push-1\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>Get In Touch</h3>
\t\t\t\t\t\t<ul class=\"gtco-quick-contact\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-phone\"></i> +221 33 825 23 23</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-mail2\"></i> immobilierluxio@gmail.com</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-chat\"></i> Live Chat</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"row copyright\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p class=\"pull-left\">
\t\t\t\t\t\t<small class=\"block\">&copy; Immobilier de Luxe for ever.</small> 
\t\t\t\t\t\t{# <small class=\"block\">Designed by <a href=\"http://GetTemplates.co/\" target=\"_blank\">GetTemplates.co</a> Demo Images: <a href=\"http://unsplash.com/\" target=\"_blank\">Unsplash</a></small> #}
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"pull-right\">
\t\t\t\t\t\t<ul class=\"gtco-social-icons pull-right\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-dribbble\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</footer>
{% endblock %}
", "Front/index.html.twig", "/var/www/html/loc/templates/Front/index.html.twig");
    }
}
