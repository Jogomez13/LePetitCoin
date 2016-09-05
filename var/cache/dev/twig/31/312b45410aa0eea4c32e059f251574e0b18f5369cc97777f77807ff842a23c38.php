<?php

/* AdminBundle::home.html.twig */
class __TwigTemplate_33ee3caac483f6fea4d29e106bc55cdf557fc175194f3425b9406947e22c8455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'annonces' => array($this, 'block_annonces'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54cf22acea237868d78738bb3e70aa94fd91662c8facfcab33687e60250ec722 = $this->env->getExtension("native_profiler");
        $__internal_54cf22acea237868d78738bb3e70aa94fd91662c8facfcab33687e60250ec722->enter($__internal_54cf22acea237868d78738bb3e70aa94fd91662c8facfcab33687e60250ec722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::home.html.twig"));

        // line 1
        echo "<html>
   <head>
       <meta charset=\"utf-8\">
       <title>Admin</title>
           <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" type=\"text/css\" media=\"all\" />
           ";
        // line 6
        $this->displayBlock('style', $context, $blocks);
        // line 7
        echo "           <script   src=\"https://code.jquery.com/jquery-1.12.4.min.js\"></script>
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
           <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800\" rel=\"stylesheet\">
   </head>
   <body>
       

<div id=\"container\">
   
   <!--nav-horizontal-->
           
   <nav class=\"navbar-hor navbar-default\">
 <div class=\"container-fluid\">
   <!-- Brand and toggle get grouped for better mobile display -->
   <div class=\"navbar-header\">
     <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
       <span class=\"sr-only\">Toggle navigation</span>
       <span class=\"icon-bar\"></span>
       <span class=\"icon-bar\"></span>
       <span class=\"icon-bar\"></span>
     </button>
      <a class=\"navbar-brand\" href=\"#\"></a>
   </div>

   <!-- Collect the nav links, forms, and other content for toggling -->
   <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
     <ul class=\"nav navbar-nav navbar-right\">
       <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Accueil</a></li>
      <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("annonces");
        echo "\">Déposer une annonce</a></li>
      <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Offres<span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Voitures</a></li>
            <li><a href=\"#\">Téléphones</a></li>
            <li><a href=\"#\">Télévisions</a></li>
            <li><a href=\"#\">Motos</a></li>
          </ul>
        </li>
      <li><a href=\"#\">Connexion</a></li>
     </ul>
   </div><!-- /.navbar-collapse -->
 </div><!-- /.container-fluid -->
</nav>  
   
   <!--fin-nav-horizontal-->
   
 
   

       
       <div>
           ";
        // line 58
        $this->displayBlock('annonces', $context, $blocks);
        // line 68
        echo "   </body>
   
</html>
";
        
        $__internal_54cf22acea237868d78738bb3e70aa94fd91662c8facfcab33687e60250ec722->leave($__internal_54cf22acea237868d78738bb3e70aa94fd91662c8facfcab33687e60250ec722_prof);

    }

    // line 6
    public function block_style($context, array $blocks = array())
    {
        $__internal_eacb807bfd118345be664fc9deadf538bc05f25fa16a992e51e0d683c09792cd = $this->env->getExtension("native_profiler");
        $__internal_eacb807bfd118345be664fc9deadf538bc05f25fa16a992e51e0d683c09792cd->enter($__internal_eacb807bfd118345be664fc9deadf538bc05f25fa16a992e51e0d683c09792cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/admin.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />";
        
        $__internal_eacb807bfd118345be664fc9deadf538bc05f25fa16a992e51e0d683c09792cd->leave($__internal_eacb807bfd118345be664fc9deadf538bc05f25fa16a992e51e0d683c09792cd_prof);

    }

    // line 58
    public function block_annonces($context, array $blocks = array())
    {
        $__internal_a1e40e21d4350198e48232fc6de9dbb035b75be83294ce30a38f2a625d3255f8 = $this->env->getExtension("native_profiler");
        $__internal_a1e40e21d4350198e48232fc6de9dbb035b75be83294ce30a38f2a625d3255f8->enter($__internal_a1e40e21d4350198e48232fc6de9dbb035b75be83294ce30a38f2a625d3255f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "annonces"));

        // line 59
        echo "           <div class=\"jumbotron\">
  <h1>Bienvenue sur le Petit Coin</h1>
  <p>Qui fait coin-coin</p>
  
</div>
       </div>
   </div>

    ";
        
        $__internal_a1e40e21d4350198e48232fc6de9dbb035b75be83294ce30a38f2a625d3255f8->leave($__internal_a1e40e21d4350198e48232fc6de9dbb035b75be83294ce30a38f2a625d3255f8_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 59,  118 => 58,  104 => 6,  94 => 68,  92 => 58,  66 => 35,  62 => 34,  33 => 7,  31 => 6,  24 => 1,);
    }
}
/* <html>*/
/*    <head>*/
/*        <meta charset="utf-8">*/
/*        <title>Admin</title>*/
/*            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="all" />*/
/*            {%block style %}<link rel="stylesheet" href="{{ asset('bundles/framework/css/admin.css') }}" type="text/css" media="all" />{%endblock%}*/
/*            <script   src="https://code.jquery.com/jquery-1.12.4.min.js"></script>*/
/*           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>*/
/*            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">*/
/*    </head>*/
/*    <body>*/
/*        */
/* */
/* <div id="container">*/
/*    */
/*    <!--nav-horizontal-->*/
/*            */
/*    <nav class="navbar-hor navbar-default">*/
/*  <div class="container-fluid">*/
/*    <!-- Brand and toggle get grouped for better mobile display -->*/
/*    <div class="navbar-header">*/
/*      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*        <span class="sr-only">Toggle navigation</span>*/
/*        <span class="icon-bar"></span>*/
/*        <span class="icon-bar"></span>*/
/*        <span class="icon-bar"></span>*/
/*      </button>*/
/*       <a class="navbar-brand" href="#"></a>*/
/*    </div>*/
/* */
/*    <!-- Collect the nav links, forms, and other content for toggling -->*/
/*    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*      <ul class="nav navbar-nav navbar-right">*/
/*        <li><a href="{{path("home")}}">Accueil</a></li>*/
/*       <li><a href="{{path("annonces")}}">Déposer une annonce</a></li>*/
/*       <li class="dropdown">*/
/*           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Offres<span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             <li><a href="#">Voitures</a></li>*/
/*             <li><a href="#">Téléphones</a></li>*/
/*             <li><a href="#">Télévisions</a></li>*/
/*             <li><a href="#">Motos</a></li>*/
/*           </ul>*/
/*         </li>*/
/*       <li><a href="#">Connexion</a></li>*/
/*      </ul>*/
/*    </div><!-- /.navbar-collapse -->*/
/*  </div><!-- /.container-fluid -->*/
/* </nav>  */
/*    */
/*    <!--fin-nav-horizontal-->*/
/*    */
/*  */
/*    */
/* */
/*        */
/*        <div>*/
/*            {% block annonces %}*/
/*            <div class="jumbotron">*/
/*   <h1>Bienvenue sur le Petit Coin</h1>*/
/*   <p>Qui fait coin-coin</p>*/
/*   */
/* </div>*/
/*        </div>*/
/*    </div>*/
/* */
/*     {% endblock %}*/
/*    </body>*/
/*    */
/* </html>*/
/* */
