<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7a8278cf40c6f89b89dfe9d495ccff4804f02ef3157bd3d6aff397a9e7341d98 extends Twig_Template
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
        $__internal_96ecd49fde3ec770ee7dfd05a1ebbb0b6330e18b13f58a93473beecb417b8a80 = $this->env->getExtension("native_profiler");
        $__internal_96ecd49fde3ec770ee7dfd05a1ebbb0b6330e18b13f58a93473beecb417b8a80->enter($__internal_96ecd49fde3ec770ee7dfd05a1ebbb0b6330e18b13f58a93473beecb417b8a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_96ecd49fde3ec770ee7dfd05a1ebbb0b6330e18b13f58a93473beecb417b8a80->leave($__internal_96ecd49fde3ec770ee7dfd05a1ebbb0b6330e18b13f58a93473beecb417b8a80_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
