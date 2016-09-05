<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5509d9ae3d0eb545830dc204774fbf5ae43bdfdc3c5ebe0f76e76fff19e6fc1b extends Twig_Template
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
        $__internal_cef17ccae8cbce315f2aa9251bc2cab1746ecf806ef3835b1ddc872c1b59794d = $this->env->getExtension("native_profiler");
        $__internal_cef17ccae8cbce315f2aa9251bc2cab1746ecf806ef3835b1ddc872c1b59794d->enter($__internal_cef17ccae8cbce315f2aa9251bc2cab1746ecf806ef3835b1ddc872c1b59794d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cef17ccae8cbce315f2aa9251bc2cab1746ecf806ef3835b1ddc872c1b59794d->leave($__internal_cef17ccae8cbce315f2aa9251bc2cab1746ecf806ef3835b1ddc872c1b59794d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
