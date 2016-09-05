<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_03e78ba83980936cc3bf6a6858fa659b1b95f50d0eda15770483459b859884b9 extends Twig_Template
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
        $__internal_8293cc13eb3502167a24f472def5b53799fc3170718f044fd7a239bba3602e4c = $this->env->getExtension("native_profiler");
        $__internal_8293cc13eb3502167a24f472def5b53799fc3170718f044fd7a239bba3602e4c->enter($__internal_8293cc13eb3502167a24f472def5b53799fc3170718f044fd7a239bba3602e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8293cc13eb3502167a24f472def5b53799fc3170718f044fd7a239bba3602e4c->leave($__internal_8293cc13eb3502167a24f472def5b53799fc3170718f044fd7a239bba3602e4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
