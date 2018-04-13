<?php

/* Front/reservationn.html.twig */
class __TwigTemplate_5de84f1ff9e83dbfc6f4917b79db15e3ce09252bdc23a26a4390bddfdf92498a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Front/reservationn.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front/reservationn.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front/reservationn.html.twig"));

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

        echo "GSTImmobilierBundle:Front:reserver";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 5
        echo "<nav class=\"gtco-nav \" role=\"navigation\" style=\"background:black\">
\t\t<div class=\"gtco-container\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-xs-12 \">
\t\t\t\t\t<div id=\"gtco-logo\"><a href=\"";
        // line 10
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
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Almadie");
        echo "\">Almadie</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Golf</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Mariste");
        echo "\">Mariste</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dakar</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resultat");
        echo "\">Nos Biens</a></li>
\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</nav>

  <style>
.form{
    width:500px;
  }

  .rower{
    display:flex;
    flex-direction:row;
    margin-top:150px;
  }
  .rowere{
    display:flex;
    flex-direction:row;

  }
  </style>
     <div class=\"row rower\">
           <div class=\"col-lg-4 col-md-4 col-sm-6\"  style=\"width:400px; margin-left:100px;heigth:600px;\">
\t\t\t\t\t    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 51, $this->source); })()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
        echo "\" class=\"fh5co-card-item image-popup\">
\t\t\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t  <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
      <div class=\"item active\">
        <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 63, $this->source); })()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
        echo "\" alt=\"Image\" style=\"height:400px;width:1000px;\">

      </div>

          ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 67, $this->source); })()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 68
            echo "\t\t\t\t\t\t <div class=\"item\">
\t\t\t\t\t\t  \t<img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", array()), "html", null, true);
            echo "\" alt=\"Image\" class=\"img-responsive\"style=\"height:400px;width:1000px;\" >
            </div>

\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                  </div>
                  </div>
\t\t\t\t\t</figure>

            \t\t</a>
                </div>
                 <div class=\"col-lg-4 col-md-4 col-sm-6\" >
\t\t\t\t\t\t<div class=\"fh5co-text\">
\t\t\t\t\t\t\t<h2>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 81, $this->source); })()), "typebien", array()), "libelletype", array()), "html", null, true);
        echo "</h2>
              <p><b>Prix de la localtion:</b>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 82, $this->source); })()), "prix_loc", array()), "html", null, true);
        echo "Fcfa,</p>
               <p><b>Localite:</b> ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 83, $this->source); })()), "localite", array()), "libelleloca", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t<pre> ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 84, $this->source); })()), "description", array()), "html", null, true);
        echo "..</pre>

\t\t\t\t\t\t</div>
\t\t\t</div>

       </div>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 93
        echo "        <div class=\"row rowere\"style=\"margin-left:300px;\">
        <div class=\"card\"style=\"background:inherty;\">
          <div class=\"card-header\"style=\"background:\">

          </div>
          <div class=\"card-body\">
            <h4 class=\"card-title\"style=\"color:grey;margin-left:150px;font-size:16px;\"> SALUT! IMOLUXE est avec vous</h4>
            <p class=\"card-text form\"> ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->source); })()), 'form');
        echo "</p>
          </div>
        </div>
        </div>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/reservationn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 100,  223 => 93,  214 => 92,  197 => 84,  193 => 83,  189 => 82,  185 => 81,  175 => 73,  164 => 69,  161 => 68,  157 => 67,  149 => 63,  133 => 51,  103 => 24,  96 => 20,  91 => 18,  80 => 10,  73 => 5,  64 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}GSTImmobilierBundle:Front:reserver{% endblock %}
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

  <style>
.form{
    width:500px;
  }

  .rower{
    display:flex;
    flex-direction:row;
    margin-top:150px;
  }
  .rowere{
    display:flex;
    flex-direction:row;

  }
  </style>
     <div class=\"row rower\">
           <div class=\"col-lg-4 col-md-4 col-sm-6\"  style=\"width:400px; margin-left:100px;heigth:600px;\">
\t\t\t\t\t    <a href=\"{{ asset('image/')}}{{ bien.images[0].image }}\" class=\"fh5co-card-item image-popup\">
\t\t\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t  <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
      <div class=\"item active\">
        <img src=\"{{ asset('image/')}}{{ bien.images[0].image }}\" alt=\"Image\" style=\"height:400px;width:1000px;\">

      </div>

          {% for image  in bien.images %}
\t\t\t\t\t\t <div class=\"item\">
\t\t\t\t\t\t  \t<img src=\"{{ asset('image/')}}{{ image.image }}\" alt=\"Image\" class=\"img-responsive\"style=\"height:400px;width:1000px;\" >
            </div>

\t\t\t\t {% endfor %}
                  </div>
                  </div>
\t\t\t\t\t</figure>

            \t\t</a>
                </div>
                 <div class=\"col-lg-4 col-md-4 col-sm-6\" >
\t\t\t\t\t\t<div class=\"fh5co-text\">
\t\t\t\t\t\t\t<h2>{{ bien.typebien.libelletype}}</h2>
              <p><b>Prix de la localtion:</b>{{ bien.prix_loc }}Fcfa,</p>
               <p><b>Localite:</b> {{bien.localite.libelleloca}}</p>
\t\t\t\t\t\t\t<pre> {{ bien.description }}..</pre>

\t\t\t\t\t\t</div>
\t\t\t</div>

       </div>
      {% endblock %}

        {% block body %}
        <div class=\"row rowere\"style=\"margin-left:300px;\">
        <div class=\"card\"style=\"background:inherty;\">
          <div class=\"card-header\"style=\"background:\">

          </div>
          <div class=\"card-body\">
            <h4 class=\"card-title\"style=\"color:grey;margin-left:150px;font-size:16px;\"> SALUT! IMOLUXE est avec vous</h4>
            <p class=\"card-text form\"> {{ form (form)}}</p>
          </div>
        </div>
        </div>
   {% endblock %}
", "Front/reservationn.html.twig", "/var/www/html/loc/templates/Front/reservationn.html.twig");
    }
}
