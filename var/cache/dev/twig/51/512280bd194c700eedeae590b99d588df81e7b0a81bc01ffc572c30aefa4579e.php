<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_0d07997bb6f29e54564b583ec33d9106db08fd017640b54ad7b0445226176f79 extends Twig_Template
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
        $__internal_f7568cd259ddb744e95f05471bce7cdd5e0ed5f9363cec8918e4074b0c9e4953 = $this->env->getExtension("native_profiler");
        $__internal_f7568cd259ddb744e95f05471bce7cdd5e0ed5f9363cec8918e4074b0c9e4953->enter($__internal_f7568cd259ddb744e95f05471bce7cdd5e0ed5f9363cec8918e4074b0c9e4953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f7568cd259ddb744e95f05471bce7cdd5e0ed5f9363cec8918e4074b0c9e4953->leave($__internal_f7568cd259ddb744e95f05471bce7cdd5e0ed5f9363cec8918e4074b0c9e4953_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
