<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_763fab8629c026bc543b673c82796593b8340e0d940c6a778b89f6d5df9239f3 extends Twig_Template
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
        $__internal_8da75313a40bae4a66e78a305c52befa36702e180fccd4582c326b7fec57c70a = $this->env->getExtension("native_profiler");
        $__internal_8da75313a40bae4a66e78a305c52befa36702e180fccd4582c326b7fec57c70a->enter($__internal_8da75313a40bae4a66e78a305c52befa36702e180fccd4582c326b7fec57c70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8da75313a40bae4a66e78a305c52befa36702e180fccd4582c326b7fec57c70a->leave($__internal_8da75313a40bae4a66e78a305c52befa36702e180fccd4582c326b7fec57c70a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
