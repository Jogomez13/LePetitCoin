<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6854f59ad067e45ec2f7e325bd6d409f639da53d47903a400898f8a3f0999fea extends Twig_Template
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
        $__internal_326e28934e3b27adadad62bbb78c75c183eb4811e93f30db0167fe1c9cd7b765 = $this->env->getExtension("native_profiler");
        $__internal_326e28934e3b27adadad62bbb78c75c183eb4811e93f30db0167fe1c9cd7b765->enter($__internal_326e28934e3b27adadad62bbb78c75c183eb4811e93f30db0167fe1c9cd7b765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_326e28934e3b27adadad62bbb78c75c183eb4811e93f30db0167fe1c9cd7b765->leave($__internal_326e28934e3b27adadad62bbb78c75c183eb4811e93f30db0167fe1c9cd7b765_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
