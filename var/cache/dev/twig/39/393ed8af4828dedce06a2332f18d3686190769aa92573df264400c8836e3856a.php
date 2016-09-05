<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_6bb179189f92cd0c9de78292cd4faff7c34cc965c9e98d3f7a4feffd9c2ff8a5 extends Twig_Template
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
        $__internal_2c0e7f5e90a18f0f056c15a3b53da85d51be51756ef8159ea860731bd82e72ba = $this->env->getExtension("native_profiler");
        $__internal_2c0e7f5e90a18f0f056c15a3b53da85d51be51756ef8159ea860731bd82e72ba->enter($__internal_2c0e7f5e90a18f0f056c15a3b53da85d51be51756ef8159ea860731bd82e72ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2c0e7f5e90a18f0f056c15a3b53da85d51be51756ef8159ea860731bd82e72ba->leave($__internal_2c0e7f5e90a18f0f056c15a3b53da85d51be51756ef8159ea860731bd82e72ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
