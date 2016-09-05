<?php

/* AdminBundle::connexion.html.twig */
class __TwigTemplate_49c809bd7f6b11a083924220abb48eeb478f2f61ca877a22bc6296ba796ac281 extends Twig_Template
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
        $__internal_02027d96a6d8e28f40dedb3256f9ea188eb5c4bad462eaf0f825cc221510c5d3 = $this->env->getExtension("native_profiler");
        $__internal_02027d96a6d8e28f40dedb3256f9ea188eb5c4bad462eaf0f825cc221510c5d3->enter($__internal_02027d96a6d8e28f40dedb3256f9ea188eb5c4bad462eaf0f825cc221510c5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::connexion.html.twig"));

        // line 1
        echo "<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Connexion</title>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/connexion.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <script   src=\"https://code.jquery.com/jquery-1.12.4.min.js\"></script>
           <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800\" rel=\"stylesheet\">
    </head>
    <body>
        

<div class=\"container\">
  
    <div class=\"title\">
        <h1>Connexion</h1>
    </div>
   
    <div class=\"conect\">
   <form class=\"form-horizontal\">
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\"></label>
    <div class=\"col-sm-10\">
        <div class=\"input-group\">
\t<span class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></span>
\t<input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
\t</div>
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\"></label>
    <div class=\"col-sm-10\">
        <div class=\"input-group\">
\t<span class=\"input-group-addon\"><i class=\"fa fa-key\"></i></span>
      <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Mot de passe\">
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-sm-offset-2 col-sm-10\">
      <div class=\"checkbox\">
        <label>
          <input type=\"checkbox\"> Se souvenir de moi
        </label>
      </div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-sm-offset-2 col-sm-10\">
      <button type=\"submit\" class=\"btn btn-default\"><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Connexion</a></button>
    </div>
  </div>
</form>
            </div>
    
</div>
    
    <footer>
            <div class=\"copy\">
                <p>&copy hl & jg -2016- Tous droits réservés</p>
            </div>
            
        </div>
    </footer>
    </body>
</html>
";
        
        $__internal_02027d96a6d8e28f40dedb3256f9ea188eb5c4bad462eaf0f825cc221510c5d3->leave($__internal_02027d96a6d8e28f40dedb3256f9ea188eb5c4bad462eaf0f825cc221510c5d3_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 51,  30 => 7,  22 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>Connexion</title>*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="all" />*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css" media="all" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/framework/css/connexion.css') }}" type="text/css" media="all" />*/
/*             <script   src="https://code.jquery.com/jquery-1.12.4.min.js"></script>*/
/*            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>*/
/*             <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">*/
/*     </head>*/
/*     <body>*/
/*         */
/* */
/* <div class="container">*/
/*   */
/*     <div class="title">*/
/*         <h1>Connexion</h1>*/
/*     </div>*/
/*    */
/*     <div class="conect">*/
/*    <form class="form-horizontal">*/
/*   <div class="form-group">*/
/*     <label for="inputEmail3" class="col-sm-2 control-label"></label>*/
/*     <div class="col-sm-10">*/
/*         <div class="input-group">*/
/* 	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>*/
/* 	<input type="email" class="form-control" id="inputEmail3" placeholder="Email">*/
/* 	</div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label for="inputPassword3" class="col-sm-2 control-label"></label>*/
/*     <div class="col-sm-10">*/
/*         <div class="input-group">*/
/* 	<span class="input-group-addon"><i class="fa fa-key"></i></span>*/
/*       <input type="password" class="form-control" id="inputPassword3" placeholder="Mot de passe">*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <div class="col-sm-offset-2 col-sm-10">*/
/*       <div class="checkbox">*/
/*         <label>*/
/*           <input type="checkbox"> Se souvenir de moi*/
/*         </label>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <div class="col-sm-offset-2 col-sm-10">*/
/*       <button type="submit" class="btn btn-default"><a href="{{path("home")}}">Connexion</a></button>*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/*             </div>*/
/*     */
/* </div>*/
/*     */
/*     <footer>*/
/*             <div class="copy">*/
/*                 <p>&copy hl & jg -2016- Tous droits réservés</p>*/
/*             </div>*/
/*             */
/*         </div>*/
/*     </footer>*/
/*     </body>*/
/* </html>*/
/* */
