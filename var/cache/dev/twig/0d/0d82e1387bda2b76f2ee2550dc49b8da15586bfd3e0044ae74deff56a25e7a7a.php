<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_57254767d47c3d5663ee3efa9a2ba4e664391c50c1c63aead38cefa2879269f0 extends Twig_Template
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
        $__internal_e7e934678a82cf61370181856add1d7296238b76157418ff6223791c5647cd0a = $this->env->getExtension("native_profiler");
        $__internal_e7e934678a82cf61370181856add1d7296238b76157418ff6223791c5647cd0a->enter($__internal_e7e934678a82cf61370181856add1d7296238b76157418ff6223791c5647cd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e7e934678a82cf61370181856add1d7296238b76157418ff6223791c5647cd0a->leave($__internal_e7e934678a82cf61370181856add1d7296238b76157418ff6223791c5647cd0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
