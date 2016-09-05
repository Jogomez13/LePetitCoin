<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9b8b7cfb661aed1fbf3bb15899aa75f2740f21604e86a09c53f62a7de2f0f436 extends Twig_Template
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
        $__internal_1db1bb37fa61d042d0d6f61bd8a1d0fd34883c410f50ef7ab110a21f05bf2120 = $this->env->getExtension("native_profiler");
        $__internal_1db1bb37fa61d042d0d6f61bd8a1d0fd34883c410f50ef7ab110a21f05bf2120->enter($__internal_1db1bb37fa61d042d0d6f61bd8a1d0fd34883c410f50ef7ab110a21f05bf2120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1db1bb37fa61d042d0d6f61bd8a1d0fd34883c410f50ef7ab110a21f05bf2120->leave($__internal_1db1bb37fa61d042d0d6f61bd8a1d0fd34883c410f50ef7ab110a21f05bf2120_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
