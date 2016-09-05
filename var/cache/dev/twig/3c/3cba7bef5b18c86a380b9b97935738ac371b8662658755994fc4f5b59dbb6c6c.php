<?php

/* base.html.twig */
class __TwigTemplate_6c32ddea72556ddae9e84d8efcef62be98470495665f5a5f81426c727307a20e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef27b5b36ea3a75bf448d5985fddc2f99e6e4f386c794c17818b2466e7aa79d7 = $this->env->getExtension("native_profiler");
        $__internal_ef27b5b36ea3a75bf448d5985fddc2f99e6e4f386c794c17818b2466e7aa79d7->enter($__internal_ef27b5b36ea3a75bf448d5985fddc2f99e6e4f386c794c17818b2466e7aa79d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ef27b5b36ea3a75bf448d5985fddc2f99e6e4f386c794c17818b2466e7aa79d7->leave($__internal_ef27b5b36ea3a75bf448d5985fddc2f99e6e4f386c794c17818b2466e7aa79d7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_471c0f0f51a6bffc15de4de491cbba3f2b3c91e705dc00228cfe08ce0e22184b = $this->env->getExtension("native_profiler");
        $__internal_471c0f0f51a6bffc15de4de491cbba3f2b3c91e705dc00228cfe08ce0e22184b->enter($__internal_471c0f0f51a6bffc15de4de491cbba3f2b3c91e705dc00228cfe08ce0e22184b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_471c0f0f51a6bffc15de4de491cbba3f2b3c91e705dc00228cfe08ce0e22184b->leave($__internal_471c0f0f51a6bffc15de4de491cbba3f2b3c91e705dc00228cfe08ce0e22184b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4193d550ac38366a32fed614524bb819f7893cb1d81746de40372cd9f8bf7e76 = $this->env->getExtension("native_profiler");
        $__internal_4193d550ac38366a32fed614524bb819f7893cb1d81746de40372cd9f8bf7e76->enter($__internal_4193d550ac38366a32fed614524bb819f7893cb1d81746de40372cd9f8bf7e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4193d550ac38366a32fed614524bb819f7893cb1d81746de40372cd9f8bf7e76->leave($__internal_4193d550ac38366a32fed614524bb819f7893cb1d81746de40372cd9f8bf7e76_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4ea9d19c9fa195c50eb4edb332de150e0c26cd5d182837caa62807ecb491889 = $this->env->getExtension("native_profiler");
        $__internal_f4ea9d19c9fa195c50eb4edb332de150e0c26cd5d182837caa62807ecb491889->enter($__internal_f4ea9d19c9fa195c50eb4edb332de150e0c26cd5d182837caa62807ecb491889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f4ea9d19c9fa195c50eb4edb332de150e0c26cd5d182837caa62807ecb491889->leave($__internal_f4ea9d19c9fa195c50eb4edb332de150e0c26cd5d182837caa62807ecb491889_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce614b10e4b28877cdcf2f683302056efafba2f7db22cb0954d82662b405e018 = $this->env->getExtension("native_profiler");
        $__internal_ce614b10e4b28877cdcf2f683302056efafba2f7db22cb0954d82662b405e018->enter($__internal_ce614b10e4b28877cdcf2f683302056efafba2f7db22cb0954d82662b405e018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ce614b10e4b28877cdcf2f683302056efafba2f7db22cb0954d82662b405e018->leave($__internal_ce614b10e4b28877cdcf2f683302056efafba2f7db22cb0954d82662b405e018_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
