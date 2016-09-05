<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fe755dfaf7e7f3ba756166346c147d261815ac87a3e03a316bab49f64f1a9291 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7074fed7cdf4069f22210bb763eb85d33aa3ec02c9cdbc7cffe020e748ac883c = $this->env->getExtension("native_profiler");
        $__internal_7074fed7cdf4069f22210bb763eb85d33aa3ec02c9cdbc7cffe020e748ac883c->enter($__internal_7074fed7cdf4069f22210bb763eb85d33aa3ec02c9cdbc7cffe020e748ac883c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7074fed7cdf4069f22210bb763eb85d33aa3ec02c9cdbc7cffe020e748ac883c->leave($__internal_7074fed7cdf4069f22210bb763eb85d33aa3ec02c9cdbc7cffe020e748ac883c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_966038d779e28ece60bebee4859108b5897429ad8e5d4a1b5f35f550125b6f3c = $this->env->getExtension("native_profiler");
        $__internal_966038d779e28ece60bebee4859108b5897429ad8e5d4a1b5f35f550125b6f3c->enter($__internal_966038d779e28ece60bebee4859108b5897429ad8e5d4a1b5f35f550125b6f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_966038d779e28ece60bebee4859108b5897429ad8e5d4a1b5f35f550125b6f3c->leave($__internal_966038d779e28ece60bebee4859108b5897429ad8e5d4a1b5f35f550125b6f3c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
