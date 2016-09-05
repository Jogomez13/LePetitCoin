<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e4268251679d23dd542f6ce52476ce0755fa2a46da512bb34d331abc388c7339 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c5ff72397dccc03fed52e97df8989a518c0edecee410a8b6a2300e94e20f4d2 = $this->env->getExtension("native_profiler");
        $__internal_7c5ff72397dccc03fed52e97df8989a518c0edecee410a8b6a2300e94e20f4d2->enter($__internal_7c5ff72397dccc03fed52e97df8989a518c0edecee410a8b6a2300e94e20f4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c5ff72397dccc03fed52e97df8989a518c0edecee410a8b6a2300e94e20f4d2->leave($__internal_7c5ff72397dccc03fed52e97df8989a518c0edecee410a8b6a2300e94e20f4d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d96beb0cd470da78bc8c7417aec3a45272da505f012092bb49215cc15329e9c = $this->env->getExtension("native_profiler");
        $__internal_8d96beb0cd470da78bc8c7417aec3a45272da505f012092bb49215cc15329e9c->enter($__internal_8d96beb0cd470da78bc8c7417aec3a45272da505f012092bb49215cc15329e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8d96beb0cd470da78bc8c7417aec3a45272da505f012092bb49215cc15329e9c->leave($__internal_8d96beb0cd470da78bc8c7417aec3a45272da505f012092bb49215cc15329e9c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_59521cc0985705873a064329c23dd1d80a327ae6bc0cd07363c9788ce8113836 = $this->env->getExtension("native_profiler");
        $__internal_59521cc0985705873a064329c23dd1d80a327ae6bc0cd07363c9788ce8113836->enter($__internal_59521cc0985705873a064329c23dd1d80a327ae6bc0cd07363c9788ce8113836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_59521cc0985705873a064329c23dd1d80a327ae6bc0cd07363c9788ce8113836->leave($__internal_59521cc0985705873a064329c23dd1d80a327ae6bc0cd07363c9788ce8113836_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a5cc2a951cdffc119af9d54ba7db970b8967c3ac28eeef3ff66f51624bb4868 = $this->env->getExtension("native_profiler");
        $__internal_4a5cc2a951cdffc119af9d54ba7db970b8967c3ac28eeef3ff66f51624bb4868->enter($__internal_4a5cc2a951cdffc119af9d54ba7db970b8967c3ac28eeef3ff66f51624bb4868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4a5cc2a951cdffc119af9d54ba7db970b8967c3ac28eeef3ff66f51624bb4868->leave($__internal_4a5cc2a951cdffc119af9d54ba7db970b8967c3ac28eeef3ff66f51624bb4868_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
