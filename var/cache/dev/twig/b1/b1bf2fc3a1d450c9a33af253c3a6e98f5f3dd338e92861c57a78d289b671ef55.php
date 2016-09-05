<?php

/* AdminBundle::addAnnonce.html.twig */
class __TwigTemplate_016bf15ed0354e2d08a68830c59be72d27d474a59fd0e55b0868cac27a16d90a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ef5077a59241b10695b91e2569cb6f2bd2763cacdd742913f4a3197dc1e4dd5 = $this->env->getExtension("native_profiler");
        $__internal_0ef5077a59241b10695b91e2569cb6f2bd2763cacdd742913f4a3197dc1e4dd5->enter($__internal_0ef5077a59241b10695b91e2569cb6f2bd2763cacdd742913f4a3197dc1e4dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::addAnnonce.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Nouvelle annonce</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/vendors/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/annonce.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    </head>
    <body>
        
        <div class=\"container\">
";
        // line 12
        if (array_key_exists("id", $context)) {
            // line 13
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formNews"]) ? $context["formNews"] : $this->getContext($context, "formNews")), 'form_start', array("attr" => array("action" => $this->env->getExtension('routing')->getPath("update", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))))));
            echo "
";
        } else {
            // line 15
            echo "    ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formNews"]) ? $context["formNews"] : $this->getContext($context, "formNews")), 'form_start', array("attr" => array("action" => $this->env->getExtension('routing')->getPath("valid"))));
            echo "
  ";
        }
        // line 17
        echo "        
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNews"]) ? $context["formNews"] : $this->getContext($context, "formNews")), 'rest');
        echo "
        
        ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formNews"]) ? $context["formNews"] : $this->getContext($context, "formNews")), 'form_end');
        echo "
    </div>
    </body>

</html>";
        
        $__internal_0ef5077a59241b10695b91e2569cb6f2bd2763cacdd742913f4a3197dc1e4dd5->leave($__internal_0ef5077a59241b10695b91e2569cb6f2bd2763cacdd742913f4a3197dc1e4dd5_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::addAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  57 => 18,  54 => 17,  48 => 15,  43 => 13,  41 => 12,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>Nouvelle annonce</title>*/
/*         <link rel="stylesheet" href="{{ asset('bundles/vendors/bootstrap/css/bootstrap.css') }}" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/framework/css/annonce.css') }}" type="text/css" media="all" />*/
/*     </head>*/
/*     <body>*/
/*         */
/*         <div class="container">*/
/* {% if id is defined%}*/
/* {{form_start(formNews,{'attr':{'action':path('update',{'id':id})}})}}*/
/* {% else%}*/
/*     {{form_start(formNews,{'attr':{'action':path('valid')}})}}*/
/*   {% endif%}*/
/*         */
/*         {{form_rest(formNews)}}*/
/*         */
/*         {{form_end(formNews)}}*/
/*     </div>*/
/*     </body>*/
/* */
/* </html>*/
