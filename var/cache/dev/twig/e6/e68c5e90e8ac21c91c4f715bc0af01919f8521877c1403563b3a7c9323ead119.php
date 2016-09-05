<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ab2d350fb2a71544cb31dadfe7d0169265d24cc1375d2c5df0c99a2191f95caf extends Twig_Template
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
        $__internal_84ce9b9f4302386870402de613408d2c47fca6cb061b1874e3e9a4ca8787df4e = $this->env->getExtension("native_profiler");
        $__internal_84ce9b9f4302386870402de613408d2c47fca6cb061b1874e3e9a4ca8787df4e->enter($__internal_84ce9b9f4302386870402de613408d2c47fca6cb061b1874e3e9a4ca8787df4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_84ce9b9f4302386870402de613408d2c47fca6cb061b1874e3e9a4ca8787df4e->leave($__internal_84ce9b9f4302386870402de613408d2c47fca6cb061b1874e3e9a4ca8787df4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
