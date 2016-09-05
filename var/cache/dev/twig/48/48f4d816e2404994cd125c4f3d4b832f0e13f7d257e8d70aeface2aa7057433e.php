<?php

/* SiteWebBundle::home.html.twig */
class __TwigTemplate_6b647498a03e68b8360306a868b123d223cf58beba9f73f6a6173ab80232df08 extends Twig_Template
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
        $__internal_107de5ca28c102c14636d59c7a2503e0e6d83fc4d5dc654dafc6b1e6e9448753 = $this->env->getExtension("native_profiler");
        $__internal_107de5ca28c102c14636d59c7a2503e0e6d83fc4d5dc654dafc6b1e6e9448753->enter($__internal_107de5ca28c102c14636d59c7a2503e0e6d83fc4d5dc654dafc6b1e6e9448753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteWebBundle::home.html.twig"));

        // line 1
        echo "<html>
   <head>
       <meta charset=\"utf-8\">
       <title>Admin</title>
           <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" type=\"text/css\" media=\"all\" />
           <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/SiteWeb.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
           <script   src=\"https://code.jquery.com/jquery-1.12.4.min.js\"></script>
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
       <li><a href=\"#\">Accueil</a></li>
      <li><a href=\"#\">Déposer une annonce</a></li>
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
           <div class=\"jumbotron\">
  <h1>Bienvenue sur le Petit Coin</h1>
  <p>Qui fait coin-coin</p>
  
</div>
       </div>
   </div>
   </body>
</html>";
        
        $__internal_107de5ca28c102c14636d59c7a2503e0e6d83fc4d5dc654dafc6b1e6e9448753->leave($__internal_107de5ca28c102c14636d59c7a2503e0e6d83fc4d5dc654dafc6b1e6e9448753_prof);

    }

    public function getTemplateName()
    {
        return "SiteWebBundle::home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 1,);
    }
}
/* <html>*/
/*    <head>*/
/*        <meta charset="utf-8">*/
/*        <title>Admin</title>*/
/*            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="all" />*/
/*            <link rel="stylesheet" href="{{ asset('bundles/framework/css/SiteWeb.css') }}" type="text/css" media="all" />*/
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
/*        <li><a href="#">Accueil</a></li>*/
/*       <li><a href="#">Déposer une annonce</a></li>*/
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
/*            <div class="jumbotron">*/
/*   <h1>Bienvenue sur le Petit Coin</h1>*/
/*   <p>Qui fait coin-coin</p>*/
/*   */
/* </div>*/
/*        </div>*/
/*    </div>*/
/*    </body>*/
/* </html>*/
