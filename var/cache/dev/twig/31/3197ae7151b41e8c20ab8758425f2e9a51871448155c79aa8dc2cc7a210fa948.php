<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a2b19579f4f6208bb8965c4e069db723d408376d0b9d02f97be98d7f8dabd90e extends Twig_Template
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
        $__internal_563e835470cabb09d3562f2c3c7b6d8acffe14391c69d77a7dd51f083b95e80a = $this->env->getExtension("native_profiler");
        $__internal_563e835470cabb09d3562f2c3c7b6d8acffe14391c69d77a7dd51f083b95e80a->enter($__internal_563e835470cabb09d3562f2c3c7b6d8acffe14391c69d77a7dd51f083b95e80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_563e835470cabb09d3562f2c3c7b6d8acffe14391c69d77a7dd51f083b95e80a->leave($__internal_563e835470cabb09d3562f2c3c7b6d8acffe14391c69d77a7dd51f083b95e80a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
