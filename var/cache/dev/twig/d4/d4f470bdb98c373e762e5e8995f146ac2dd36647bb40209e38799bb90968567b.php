<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d2bfa4d36afe7ac9125de1ff7c93712d7832d2ae5288c042df7c6982110e7d7d extends Twig_Template
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
        $__internal_143e2dc1087d082380b823e5439f337c02f6038c5067c6fd3d9390d7d902475c = $this->env->getExtension("native_profiler");
        $__internal_143e2dc1087d082380b823e5439f337c02f6038c5067c6fd3d9390d7d902475c->enter($__internal_143e2dc1087d082380b823e5439f337c02f6038c5067c6fd3d9390d7d902475c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_143e2dc1087d082380b823e5439f337c02f6038c5067c6fd3d9390d7d902475c->leave($__internal_143e2dc1087d082380b823e5439f337c02f6038c5067c6fd3d9390d7d902475c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
