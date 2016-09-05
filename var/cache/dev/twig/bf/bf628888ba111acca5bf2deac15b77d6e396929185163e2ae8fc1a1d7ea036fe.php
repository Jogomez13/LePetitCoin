<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_cf97478a984e7dca2fe2fe232f3d6f10cea30632d34780dc283124b7ed8c4d28 extends Twig_Template
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
        $__internal_771b27d8abbefec887762f835c5dd9935826127f9e41c468058d3e369f603d42 = $this->env->getExtension("native_profiler");
        $__internal_771b27d8abbefec887762f835c5dd9935826127f9e41c468058d3e369f603d42->enter($__internal_771b27d8abbefec887762f835c5dd9935826127f9e41c468058d3e369f603d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_771b27d8abbefec887762f835c5dd9935826127f9e41c468058d3e369f603d42->leave($__internal_771b27d8abbefec887762f835c5dd9935826127f9e41c468058d3e369f603d42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
