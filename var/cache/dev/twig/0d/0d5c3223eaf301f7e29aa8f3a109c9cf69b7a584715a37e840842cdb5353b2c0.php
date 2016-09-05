<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_742344ca6c49b7ccbb143393bb6a433c70202bf0ba26684ff9ffa59d77213d1f extends Twig_Template
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
        $__internal_3ab04414510e722ff3f373af9c5cfebc7b495409d557f8e6785acd0117ce9a90 = $this->env->getExtension("native_profiler");
        $__internal_3ab04414510e722ff3f373af9c5cfebc7b495409d557f8e6785acd0117ce9a90->enter($__internal_3ab04414510e722ff3f373af9c5cfebc7b495409d557f8e6785acd0117ce9a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3ab04414510e722ff3f373af9c5cfebc7b495409d557f8e6785acd0117ce9a90->leave($__internal_3ab04414510e722ff3f373af9c5cfebc7b495409d557f8e6785acd0117ce9a90_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
