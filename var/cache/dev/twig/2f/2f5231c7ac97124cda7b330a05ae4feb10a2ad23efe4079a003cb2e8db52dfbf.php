<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_08730deaab5ca6f6b0d00fcece284ad0729b981e6738579ca1e9cc09a711cfae extends Twig_Template
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
        $__internal_3d1775f3b1dc24a8d33e954252a820d795af4d1c91712e0017f2d50d60e0efa5 = $this->env->getExtension("native_profiler");
        $__internal_3d1775f3b1dc24a8d33e954252a820d795af4d1c91712e0017f2d50d60e0efa5->enter($__internal_3d1775f3b1dc24a8d33e954252a820d795af4d1c91712e0017f2d50d60e0efa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3d1775f3b1dc24a8d33e954252a820d795af4d1c91712e0017f2d50d60e0efa5->leave($__internal_3d1775f3b1dc24a8d33e954252a820d795af4d1c91712e0017f2d50d60e0efa5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
