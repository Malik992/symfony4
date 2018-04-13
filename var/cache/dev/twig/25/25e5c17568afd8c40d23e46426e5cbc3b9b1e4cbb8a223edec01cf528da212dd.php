<?php

/* Front/almadie.html.twig */
class __TwigTemplate_0a57883a9af7c2b9bb136532d7309a9e1cff5ab22aa50752ca5ce0f1bcd8f935 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Front/almadie.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front/almadie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front/almadie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 4
            echo "     
           <div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t<a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" class=\"fh5co-card-item image-popup\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<div class=\"overlay\"><i class=\"ti-plus\"></i></div>
\t\t\t\t\t\t\t<img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"Image\" class=\"img-responsive\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"fh5co-text\">
\t\t\t\t\t\t\t<h2>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bien"], "typebien", array()), "libelletype", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<p>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "prix_loc", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bien"], "localite", array()), "libelleloca", array()), "html", null, true);
            echo "..</p>
\t\t\t\t\t\t\t<p><a  href=\"";
            // line 14
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
        // line 21
        echo "      


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/almadie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  86 => 14,  80 => 13,  76 => 12,  69 => 9,  62 => 6,  58 => 4,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
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
      


{% endblock %}", "Front/almadie.html.twig", "/var/www/html/loc/templates/Front/almadie.html.twig");
    }
}
