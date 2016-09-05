<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_f9d6e509528df8d259f59b4f2a7e0980759d843ffe7f8f417081b244e2b1e9af extends Twig_Template
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
        $__internal_44b622101efe0f9acb81cf6b503bf918c4aecd35b82c4a42d0ee13548fef7a2e = $this->env->getExtension("native_profiler");
        $__internal_44b622101efe0f9acb81cf6b503bf918c4aecd35b82c4a42d0ee13548fef7a2e->enter($__internal_44b622101efe0f9acb81cf6b503bf918c4aecd35b82c4a42d0ee13548fef7a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_44b622101efe0f9acb81cf6b503bf918c4aecd35b82c4a42d0ee13548fef7a2e->leave($__internal_44b622101efe0f9acb81cf6b503bf918c4aecd35b82c4a42d0ee13548fef7a2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
