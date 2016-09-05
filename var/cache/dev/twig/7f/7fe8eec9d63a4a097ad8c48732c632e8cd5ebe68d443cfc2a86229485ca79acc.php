<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8342beedb461037e8051b4cb564c866545a2c82d3cddbcaa5de47d05c84b631c extends Twig_Template
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
        $__internal_06d7a895f0cf2799eb11f66c2d817413387af4e8d3a20e0b3bea932aaab69884 = $this->env->getExtension("native_profiler");
        $__internal_06d7a895f0cf2799eb11f66c2d817413387af4e8d3a20e0b3bea932aaab69884->enter($__internal_06d7a895f0cf2799eb11f66c2d817413387af4e8d3a20e0b3bea932aaab69884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_06d7a895f0cf2799eb11f66c2d817413387af4e8d3a20e0b3bea932aaab69884->leave($__internal_06d7a895f0cf2799eb11f66c2d817413387af4e8d3a20e0b3bea932aaab69884_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
