<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d225206cf24b52e36e816578660289ae91eec95cc1dc138ae3b95382bdf80b47 extends Twig_Template
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
        $__internal_2f96044d392e529f4cb79dcdfee375748f6232fd4ba6197e9d97014990b6dada = $this->env->getExtension("native_profiler");
        $__internal_2f96044d392e529f4cb79dcdfee375748f6232fd4ba6197e9d97014990b6dada->enter($__internal_2f96044d392e529f4cb79dcdfee375748f6232fd4ba6197e9d97014990b6dada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2f96044d392e529f4cb79dcdfee375748f6232fd4ba6197e9d97014990b6dada->leave($__internal_2f96044d392e529f4cb79dcdfee375748f6232fd4ba6197e9d97014990b6dada_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
