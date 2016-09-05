<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_51747cdf549a404f32ce982549866fdfbbd6cd822f2f49c43177c85d66597083 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_251f98ac0207123e9c5489e3de8a83d6fde0d0f2cdaf6b54ad972977b971f83c = $this->env->getExtension("native_profiler");
        $__internal_251f98ac0207123e9c5489e3de8a83d6fde0d0f2cdaf6b54ad972977b971f83c->enter($__internal_251f98ac0207123e9c5489e3de8a83d6fde0d0f2cdaf6b54ad972977b971f83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_251f98ac0207123e9c5489e3de8a83d6fde0d0f2cdaf6b54ad972977b971f83c->leave($__internal_251f98ac0207123e9c5489e3de8a83d6fde0d0f2cdaf6b54ad972977b971f83c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a1a9ee523ee59c4757cfb8e8bc74949f4a96eae5c531fcdcd45b17677d238bf = $this->env->getExtension("native_profiler");
        $__internal_6a1a9ee523ee59c4757cfb8e8bc74949f4a96eae5c531fcdcd45b17677d238bf->enter($__internal_6a1a9ee523ee59c4757cfb8e8bc74949f4a96eae5c531fcdcd45b17677d238bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6a1a9ee523ee59c4757cfb8e8bc74949f4a96eae5c531fcdcd45b17677d238bf->leave($__internal_6a1a9ee523ee59c4757cfb8e8bc74949f4a96eae5c531fcdcd45b17677d238bf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1211dac7958cf2f65549d3ca3847400f5f4272f0a1185fec5815c3a023b635fb = $this->env->getExtension("native_profiler");
        $__internal_1211dac7958cf2f65549d3ca3847400f5f4272f0a1185fec5815c3a023b635fb->enter($__internal_1211dac7958cf2f65549d3ca3847400f5f4272f0a1185fec5815c3a023b635fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1211dac7958cf2f65549d3ca3847400f5f4272f0a1185fec5815c3a023b635fb->leave($__internal_1211dac7958cf2f65549d3ca3847400f5f4272f0a1185fec5815c3a023b635fb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
