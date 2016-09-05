<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1e06a9a57ff5d61bf62216e8d55410bd0e0207ae2933568f8aa61c398c73a728 extends Twig_Template
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
        $__internal_d3a6eae4d34d3d1889c57a3192b933ce9e3bcfb7709ce36f076e47db0fa00e09 = $this->env->getExtension("native_profiler");
        $__internal_d3a6eae4d34d3d1889c57a3192b933ce9e3bcfb7709ce36f076e47db0fa00e09->enter($__internal_d3a6eae4d34d3d1889c57a3192b933ce9e3bcfb7709ce36f076e47db0fa00e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d3a6eae4d34d3d1889c57a3192b933ce9e3bcfb7709ce36f076e47db0fa00e09->leave($__internal_d3a6eae4d34d3d1889c57a3192b933ce9e3bcfb7709ce36f076e47db0fa00e09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
