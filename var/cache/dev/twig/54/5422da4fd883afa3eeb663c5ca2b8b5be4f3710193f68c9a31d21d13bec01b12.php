<?php

/* Front/proprietaire.html.twig */
class __TwigTemplate_e22313922424cf4b9b1fbdbd77de05ddeed51f8aa7626576f465df2864ef596d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Front/proprietaire.html.twig", 1);
        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front/proprietaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front/proprietaire.html.twig"));

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
        echo " 
 <style>
.rower{
   margin-top:200px;
}
</style>
<nav class=\"gtco-nav \" role=\"navigation\" style=\"background:black\">
\t\t<div class=\"gtco-container\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-xs-12 \">
\t\t\t\t\t<div id=\"gtco-logo\"><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchBien");
        echo "\"><em>Immobilier De LUXE </em></a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-8 text-right menu-1\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"destination.html\">Destination</a></li>
\t\t\t\t\t\t<li class=\"has-dropdown\">
\t\t\t\t\t\t\t<a href=\"#\">Nos Agences</a>
\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Almadie");
        echo "\">Almadie</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Golf</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Mariste");
        echo "\">Mariste</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dakar</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resultat");
        echo "\">Nos Biens</a></li>
\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t</ul>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</nav>
    <div class=\"row rower\">
  <form name=\"bien\" method=\"post\" id=\"new-bien-form\" class=\"form-horizontal  new-form\" data-view=\"new\" data-entity=\"Bien\" data-entity-id=\"\">
    <input type=\"hidden\" name=\"referer\" value=\"\"/>    
        <div class=\"row\">
                        <div class=\"col-xs-12 \">
                      
                <div class=\"form-group  field-text\">
                <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Nom du Bien</label>
                <div class=\"col-sm-10\">
                <input type=\"text\" id=\"bien_nombien\" name=\"nom\" required=\"required\" class=\"form-control\" />
                </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-textarea\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_description\">Description</label>
                        <div class=\"col-sm-10\">
                            <textarea id=\"bien_description\" name=\"description\" required=\"required\" class=\"form-control\"></textarea>
                         </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-integer\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_prix_loc\">Montant_Location</label>
                        <div class=\"col-sm-10\">
                        <input type=\"number\" id=\"bien_prix_loc\" name=\"montantvoulu\" required=\"required\" class=\"form-control\" />
                     </div>
                </div>
            </div>
              
               
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-integer\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_idparentbien\">Parent_Bien</label>
                        <div class=\"col-sm-10\">
                        <input type=\"number\" id=\"bien_idparentbien\" name=\"idparent\" required=\"required\" class=\"form-control\" />
                    </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <form action=\"#\"method=\"post\">
                <div class=\"form-group  \">
                <label class=\"col-sm-2 control-label\" for=\"bien_localite\">Localite</label>
                <div class=\"col-sm-10\">
                <select id=\"bien_localite\" name=\"localite\"  class=\"form-control\">
                     
                     ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localites"]) || array_key_exists("localites", $context) ? $context["localites"] : (function () { throw new Twig_Error_Runtime('Variable "localites" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 83
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localite"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localite"], "libelleloca", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                  </select>
                  </div>
                  </div>
                  </form>
            </div>
                    <div class=\"col-xs-12 \">
                   
                <div class=\"form-group  field-entity\">
                <label class=\"col-sm-2 control-label\" for=\"bien_typebien\">Type de Bien</label>
                <div class=\"col-sm-10\">
                <select id=\"bien_typebien\" name=\"typebien\" data-widget=\"select2\" class=\"form-control\">
               
                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo "              
                 <option value=\"";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "libelletype", array()), "html", null, true);
            echo " </option>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "             
               </div>
               </div>
              
            </div>
                   
    <input type=\"hidden\" id=\"bien\" name=\"bien\" value=\"\" />
    
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                <div class=\"m-b-30\">
                                    <form action=\"#\"method=\"post\" class=\"dropzone\" id=\"dropzone\">
                                      <div class=\"fallback\">
                                        <input name=\"file\" type=\"file\" multiple=\"multiple\" >
                                      </div>
                                    </form>
                                </div>
                            </div> 
                            ";
        // line 119
        echo "                         <div class=\"col-xs-12 \">                      
                            <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">NIN</label>
                            <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"numpiece\" required=\"required\" class=\"form-control\" />
                            </div>
                            </div>
                    </div>   
            <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Nom & Prénom</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"nomcomplet\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Adresse</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"adressepro\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Tel</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"telpro\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Code_Banque</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"codebanque\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Adresse_Email</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"emailpro\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 

                       
      <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">        
                    <button type=\"submit\" name=\"submit\"class=\"btn btn-primary action-save\" style=\"margin-left:90%;\">
                    <i class=\"fa fa-save\"></i> Enregistrer
                    </button>
                 </div>
            </div>
    </div>
    </div>
   </div> 
   
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/proprietaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 119,  191 => 100,  181 => 98,  175 => 97,  161 => 85,  150 => 83,  146 => 82,  89 => 28,  82 => 24,  77 => 22,  66 => 14,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block nav %}
 
 <style>
.rower{
   margin-top:200px;
}
</style>
<nav class=\"gtco-nav \" role=\"navigation\" style=\"background:black\">
\t\t<div class=\"gtco-container\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-xs-12 \">
\t\t\t\t\t<div id=\"gtco-logo\"><a href=\"{{path('searchBien')}}\"><em>Immobilier De LUXE </em></a></div>
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
\t\t\t\t\t</ul>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</nav>
    <div class=\"row rower\">
  <form name=\"bien\" method=\"post\" id=\"new-bien-form\" class=\"form-horizontal  new-form\" data-view=\"new\" data-entity=\"Bien\" data-entity-id=\"\">
    <input type=\"hidden\" name=\"referer\" value=\"\"/>    
        <div class=\"row\">
                        <div class=\"col-xs-12 \">
                      
                <div class=\"form-group  field-text\">
                <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Nom du Bien</label>
                <div class=\"col-sm-10\">
                <input type=\"text\" id=\"bien_nombien\" name=\"nom\" required=\"required\" class=\"form-control\" />
                </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-textarea\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_description\">Description</label>
                        <div class=\"col-sm-10\">
                            <textarea id=\"bien_description\" name=\"description\" required=\"required\" class=\"form-control\"></textarea>
                         </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-integer\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_prix_loc\">Montant_Location</label>
                        <div class=\"col-sm-10\">
                        <input type=\"number\" id=\"bien_prix_loc\" name=\"montantvoulu\" required=\"required\" class=\"form-control\" />
                     </div>
                </div>
            </div>
              
               
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-integer\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_idparentbien\">Parent_Bien</label>
                        <div class=\"col-sm-10\">
                        <input type=\"number\" id=\"bien_idparentbien\" name=\"idparent\" required=\"required\" class=\"form-control\" />
                    </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <form action=\"#\"method=\"post\">
                <div class=\"form-group  \">
                <label class=\"col-sm-2 control-label\" for=\"bien_localite\">Localite</label>
                <div class=\"col-sm-10\">
                <select id=\"bien_localite\" name=\"localite\"  class=\"form-control\">
                     
                     {% for localite in localites %}
                    <option value=\"{{ localite.id }}\">{{ localite.libelleloca }}</option>
                    {% endfor %}
                  </select>
                  </div>
                  </div>
                  </form>
            </div>
                    <div class=\"col-xs-12 \">
                   
                <div class=\"form-group  field-entity\">
                <label class=\"col-sm-2 control-label\" for=\"bien_typebien\">Type de Bien</label>
                <div class=\"col-sm-10\">
                <select id=\"bien_typebien\" name=\"typebien\" data-widget=\"select2\" class=\"form-control\">
               
                    {% for type in types %}              
                 <option value=\"{{ type.id }}\"> {{type.libelletype}} </option>
                     {% endfor %}
             
               </div>
               </div>
              
            </div>
                   
    <input type=\"hidden\" id=\"bien\" name=\"bien\" value=\"\" />
    
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                <div class=\"m-b-30\">
                                    <form action=\"#\"method=\"post\" class=\"dropzone\" id=\"dropzone\">
                                      <div class=\"fallback\">
                                        <input name=\"file\" type=\"file\" multiple=\"multiple\" >
                                      </div>
                                    </form>
                                </div>
                            </div> 
                            {# formulaire proprietaire   #}
                         <div class=\"col-xs-12 \">                      
                            <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">NIN</label>
                            <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"numpiece\" required=\"required\" class=\"form-control\" />
                            </div>
                            </div>
                    </div>   
            <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Nom & Prénom</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"nomcomplet\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Adresse</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"adressepro\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Tel</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"telpro\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Code_Banque</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"codebanque\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Adresse_Email</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"emailpro\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 

                       
      <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">        
                    <button type=\"submit\" name=\"submit\"class=\"btn btn-primary action-save\" style=\"margin-left:90%;\">
                    <i class=\"fa fa-save\"></i> Enregistrer
                    </button>
                 </div>
            </div>
    </div>
    </div>
   </div> 
   
        {% endblock %}
", "Front/proprietaire.html.twig", "/var/www/html/loc/templates/Front/proprietaire.html.twig");
    }
}
