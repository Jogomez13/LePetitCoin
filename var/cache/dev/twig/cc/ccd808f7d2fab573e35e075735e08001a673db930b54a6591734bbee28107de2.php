<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ba9d3ae8d56cf93b5cd358c006f6727cc61c4011387a22999e1b670b613e6089 extends Twig_Template
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
        $__internal_64c8cade79b80c45b8eab02e6f5616947e04f801861006b4f85ef84325f5fafe = $this->env->getExtension("native_profiler");
        $__internal_64c8cade79b80c45b8eab02e6f5616947e04f801861006b4f85ef84325f5fafe->enter($__internal_64c8cade79b80c45b8eab02e6f5616947e04f801861006b4f85ef84325f5fafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_64c8cade79b80c45b8eab02e6f5616947e04f801861006b4f85ef84325f5fafe->leave($__internal_64c8cade79b80c45b8eab02e6f5616947e04f801861006b4f85ef84325f5fafe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
