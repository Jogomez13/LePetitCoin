<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e2439a9d833f94e53eeede7f405c102760980146fe2d485dcaa9c0baf341a60f extends Twig_Template
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
        $__internal_eb43e7534c7f8a9faaf94336e7fd4e3522cafd4af530ae8ee3edb7f59fa02cfc = $this->env->getExtension("native_profiler");
        $__internal_eb43e7534c7f8a9faaf94336e7fd4e3522cafd4af530ae8ee3edb7f59fa02cfc->enter($__internal_eb43e7534c7f8a9faaf94336e7fd4e3522cafd4af530ae8ee3edb7f59fa02cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_eb43e7534c7f8a9faaf94336e7fd4e3522cafd4af530ae8ee3edb7f59fa02cfc->leave($__internal_eb43e7534c7f8a9faaf94336e7fd4e3522cafd4af530ae8ee3edb7f59fa02cfc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
