<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_9eb7f04d64646da8eabd82bb2f756e0f0caaf3b62a992cc59a28543825ea599f extends Twig_Template
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
        $__internal_78dc7a83fe2ef97ba0a03a63fe29ff39f1b25f88534feb26e93e97875c3b876e = $this->env->getExtension("native_profiler");
        $__internal_78dc7a83fe2ef97ba0a03a63fe29ff39f1b25f88534feb26e93e97875c3b876e->enter($__internal_78dc7a83fe2ef97ba0a03a63fe29ff39f1b25f88534feb26e93e97875c3b876e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_78dc7a83fe2ef97ba0a03a63fe29ff39f1b25f88534feb26e93e97875c3b876e->leave($__internal_78dc7a83fe2ef97ba0a03a63fe29ff39f1b25f88534feb26e93e97875c3b876e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
