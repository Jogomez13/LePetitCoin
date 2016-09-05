<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f9503c85ebb1d217231672732a6b2c4ae7a5131c8e5620639c431926c2b8d28c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02c56646611140e80386db06acd05c315072469994ff7d7ab556e9d1d9518a44 = $this->env->getExtension("native_profiler");
        $__internal_02c56646611140e80386db06acd05c315072469994ff7d7ab556e9d1d9518a44->enter($__internal_02c56646611140e80386db06acd05c315072469994ff7d7ab556e9d1d9518a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02c56646611140e80386db06acd05c315072469994ff7d7ab556e9d1d9518a44->leave($__internal_02c56646611140e80386db06acd05c315072469994ff7d7ab556e9d1d9518a44_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_53f04e7f543a4af80b1d604b1aec77723f07254a3f92072e9e69b173131f8de8 = $this->env->getExtension("native_profiler");
        $__internal_53f04e7f543a4af80b1d604b1aec77723f07254a3f92072e9e69b173131f8de8->enter($__internal_53f04e7f543a4af80b1d604b1aec77723f07254a3f92072e9e69b173131f8de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_53f04e7f543a4af80b1d604b1aec77723f07254a3f92072e9e69b173131f8de8->leave($__internal_53f04e7f543a4af80b1d604b1aec77723f07254a3f92072e9e69b173131f8de8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eec80e17e51c0d47d44b836a9dd486e9a4dd256892e4758db463f5cf5a3d537a = $this->env->getExtension("native_profiler");
        $__internal_eec80e17e51c0d47d44b836a9dd486e9a4dd256892e4758db463f5cf5a3d537a->enter($__internal_eec80e17e51c0d47d44b836a9dd486e9a4dd256892e4758db463f5cf5a3d537a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eec80e17e51c0d47d44b836a9dd486e9a4dd256892e4758db463f5cf5a3d537a->leave($__internal_eec80e17e51c0d47d44b836a9dd486e9a4dd256892e4758db463f5cf5a3d537a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6af8ece52cc523cd3c9361d19c1581c8dd97040dc648590d61303ba4c4452c7 = $this->env->getExtension("native_profiler");
        $__internal_d6af8ece52cc523cd3c9361d19c1581c8dd97040dc648590d61303ba4c4452c7->enter($__internal_d6af8ece52cc523cd3c9361d19c1581c8dd97040dc648590d61303ba4c4452c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d6af8ece52cc523cd3c9361d19c1581c8dd97040dc648590d61303ba4c4452c7->leave($__internal_d6af8ece52cc523cd3c9361d19c1581c8dd97040dc648590d61303ba4c4452c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
