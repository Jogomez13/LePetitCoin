<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7099ae4ecd9a60d0a28600f0eefe3b68ddc2c6ca82caddf0df7aa074c8d8fd31 extends Twig_Template
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
        $__internal_f6f13704ec2f86d9c1631d90b7f17d4e397c891bf3dbe4b9ba588f4b61b959f2 = $this->env->getExtension("native_profiler");
        $__internal_f6f13704ec2f86d9c1631d90b7f17d4e397c891bf3dbe4b9ba588f4b61b959f2->enter($__internal_f6f13704ec2f86d9c1631d90b7f17d4e397c891bf3dbe4b9ba588f4b61b959f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f6f13704ec2f86d9c1631d90b7f17d4e397c891bf3dbe4b9ba588f4b61b959f2->leave($__internal_f6f13704ec2f86d9c1631d90b7f17d4e397c891bf3dbe4b9ba588f4b61b959f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
