<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a14ee5e858eee3f1213a0d5406e7f5be48d6c10bcdcb982f3317fdd8cd3197bb extends Twig_Template
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
        $__internal_1590b9a3bcafe5814247284b7e4eacc2c8d3abd8e5a8796c88c2db0f6649a647 = $this->env->getExtension("native_profiler");
        $__internal_1590b9a3bcafe5814247284b7e4eacc2c8d3abd8e5a8796c88c2db0f6649a647->enter($__internal_1590b9a3bcafe5814247284b7e4eacc2c8d3abd8e5a8796c88c2db0f6649a647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1590b9a3bcafe5814247284b7e4eacc2c8d3abd8e5a8796c88c2db0f6649a647->leave($__internal_1590b9a3bcafe5814247284b7e4eacc2c8d3abd8e5a8796c88c2db0f6649a647_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
