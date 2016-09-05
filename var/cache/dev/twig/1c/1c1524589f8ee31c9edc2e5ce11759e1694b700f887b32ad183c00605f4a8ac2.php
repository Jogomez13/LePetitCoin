<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_12a8598ae62cbc0a1f1d91e7159f0c489051e8934e5674afad8ee214a82bd9da extends Twig_Template
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
        $__internal_f6c089143fa86d7bc1d8bde2fd798d1de82dce42ba3f694bb85d041f86c12b14 = $this->env->getExtension("native_profiler");
        $__internal_f6c089143fa86d7bc1d8bde2fd798d1de82dce42ba3f694bb85d041f86c12b14->enter($__internal_f6c089143fa86d7bc1d8bde2fd798d1de82dce42ba3f694bb85d041f86c12b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f6c089143fa86d7bc1d8bde2fd798d1de82dce42ba3f694bb85d041f86c12b14->leave($__internal_f6c089143fa86d7bc1d8bde2fd798d1de82dce42ba3f694bb85d041f86c12b14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
