<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b7a2356d5c741c5deaf725b50c7ba399d1f268b24bc4b44cc260815d3b567326 extends Twig_Template
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
        $__internal_7d1635ae21971b1b253c29f221a93d10141f32ee92ebf55b1df3e2ac7d1023ae = $this->env->getExtension("native_profiler");
        $__internal_7d1635ae21971b1b253c29f221a93d10141f32ee92ebf55b1df3e2ac7d1023ae->enter($__internal_7d1635ae21971b1b253c29f221a93d10141f32ee92ebf55b1df3e2ac7d1023ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7d1635ae21971b1b253c29f221a93d10141f32ee92ebf55b1df3e2ac7d1023ae->leave($__internal_7d1635ae21971b1b253c29f221a93d10141f32ee92ebf55b1df3e2ac7d1023ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
