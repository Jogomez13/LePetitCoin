<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_64d27ff7cc71d416e9461c152dfa6cbea8a83a6264ee5017654cc6b504ba3444 extends Twig_Template
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
        $__internal_36c6a2bd6fac7ec06e945db6d2de7ec92296fce457833a81539ccf889a2e7343 = $this->env->getExtension("native_profiler");
        $__internal_36c6a2bd6fac7ec06e945db6d2de7ec92296fce457833a81539ccf889a2e7343->enter($__internal_36c6a2bd6fac7ec06e945db6d2de7ec92296fce457833a81539ccf889a2e7343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_36c6a2bd6fac7ec06e945db6d2de7ec92296fce457833a81539ccf889a2e7343->leave($__internal_36c6a2bd6fac7ec06e945db6d2de7ec92296fce457833a81539ccf889a2e7343_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
