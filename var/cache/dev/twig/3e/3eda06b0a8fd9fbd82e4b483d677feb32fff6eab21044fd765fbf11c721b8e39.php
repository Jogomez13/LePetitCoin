<?php

/* AdminBundle::annonce.html.twig */
class __TwigTemplate_11ef696b431adeb22f7699e171e61fd1c963963a74c851083bd2d5f9b24e3039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::home.html.twig", "AdminBundle::annonce.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'annonces' => array($this, 'block_annonces'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a72eb9e2485689c2f4b3000b1ee71b10028bb0dd8cc78316490915e6d0be0ca = $this->env->getExtension("native_profiler");
        $__internal_6a72eb9e2485689c2f4b3000b1ee71b10028bb0dd8cc78316490915e6d0be0ca->enter($__internal_6a72eb9e2485689c2f4b3000b1ee71b10028bb0dd8cc78316490915e6d0be0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::annonce.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a72eb9e2485689c2f4b3000b1ee71b10028bb0dd8cc78316490915e6d0be0ca->leave($__internal_6a72eb9e2485689c2f4b3000b1ee71b10028bb0dd8cc78316490915e6d0be0ca_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_3e5f9de0c73ba32aa931f164a9c364550dcb75e1d2936eed3a2721fa3c0323e1 = $this->env->getExtension("native_profiler");
        $__internal_3e5f9de0c73ba32aa931f164a9c364550dcb75e1d2936eed3a2721fa3c0323e1->enter($__internal_3e5f9de0c73ba32aa931f164a9c364550dcb75e1d2936eed3a2721fa3c0323e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/annonce.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />";
        
        $__internal_3e5f9de0c73ba32aa931f164a9c364550dcb75e1d2936eed3a2721fa3c0323e1->leave($__internal_3e5f9de0c73ba32aa931f164a9c364550dcb75e1d2936eed3a2721fa3c0323e1_prof);

    }

    // line 4
    public function block_annonces($context, array $blocks = array())
    {
        $__internal_754685cd8ef86e9fcfd790862fe27cef96cad0f46502545851dcd05f946f3745 = $this->env->getExtension("native_profiler");
        $__internal_754685cd8ef86e9fcfd790862fe27cef96cad0f46502545851dcd05f946f3745->enter($__internal_754685cd8ef86e9fcfd790862fe27cef96cad0f46502545851dcd05f946f3745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "annonces"));

        // line 5
        echo "    
     
    <body>
        
        <h1 class=\"page-header\">Annonces</h1>
       <div class=\"container\">
            <a class=\"add-work\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("form");
        echo "\"><h3>Ajouter une annonce</h3> </a>
            </div>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 14
            echo "            <div class=\"form-web\">
     <div class=\"container\">
            <div class=\"row\">
  <div class=\"col-sm-6 col-md-6 col-md-offset-4\">
    <div class=\"thumbnail\">
         
            <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "Titre", array()), "html", null, true);
            echo "</p>
            <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "Image", array()), "html", null, true);
            echo "</p>
            <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "Description", array()), "html", null, true);
            echo "</p>
            <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "Prix", array()), "html", null, true);
            echo "</p>
            <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "Vendeur", array()), "html", null, true);
            echo "</p>
            <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "DateParution", array()), "html", null, true);
            echo "</p>
            <p>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "Telephone", array()), "html", null, true);
            echo "</p>
            <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "Categorie", array()), "html", null, true);
            echo "</p>
            <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "Localite", array()), "html", null, true);
            echo "</p>
            </div>
            </div>
            </div>
            <div class=\"btn-projet\">
            <a class=\"edit\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">Editer une annonce</a>
             <a class=\"delate\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delate", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">Supprimer une annonce</a>
             </div>
             </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "             
    </body>
    ";
        
        $__internal_754685cd8ef86e9fcfd790862fe27cef96cad0f46502545851dcd05f946f3745->leave($__internal_754685cd8ef86e9fcfd790862fe27cef96cad0f46502545851dcd05f946f3745_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::annonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 38,  124 => 34,  120 => 33,  112 => 28,  108 => 27,  104 => 26,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  72 => 14,  68 => 13,  63 => 11,  55 => 5,  49 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends "AdminBundle::home.html.twig"%}*/
/* {%block style %}<link rel="stylesheet" href="{{ asset('bundles/framework/css/annonce.css') }}" type="text/css" media="all" />{%endblock%}*/
/*          */
/* {% block annonces %}*/
/*     */
/*      */
/*     <body>*/
/*         */
/*         <h1 class="page-header">Annonces</h1>*/
/*        <div class="container">*/
/*             <a class="add-work" href="{{path("form")}}"><h3>Ajouter une annonce</h3> </a>*/
/*             </div>*/
/*         {% for annonce in annonces%}*/
/*             <div class="form-web">*/
/*      <div class="container">*/
/*             <div class="row">*/
/*   <div class="col-sm-6 col-md-6 col-md-offset-4">*/
/*     <div class="thumbnail">*/
/*          */
/*             <p>{{annonce.Titre}}</p>*/
/*             <p>{{annonce.Image}}</p>*/
/*             <p>{{annonce.Description}}</p>*/
/*             <p>{{annonce.Prix}}</p>*/
/*             <p>{{annonce.Vendeur}}</p>*/
/*             <p>{{annonce.DateParution}}</p>*/
/*             <p>{{annonce.Telephone}}</p>*/
/*             <p>{{annonce.Categorie}}</p>*/
/*             <p>{{annonce.Localite}}</p>*/
/*             </div>*/
/*             </div>*/
/*             </div>*/
/*             <div class="btn-projet">*/
/*             <a class="edit" href="{{path("edit",{"id":annonce.id})}}">Editer une annonce</a>*/
/*              <a class="delate" href="{{path("delate",{"id":annonce.id})}}">Supprimer une annonce</a>*/
/*              </div>*/
/*              </div>*/
/*             {% endfor %}*/
/*              */
/*     </body>*/
/*     {% endblock %}*/
/*     */
/* */
