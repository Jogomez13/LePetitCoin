<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e08959cc7055a94b0370441a6a935c5297ff587c2f1ae717f60a1ceda935f659 extends Twig_Template
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
        $__internal_4ae59973b6b8c39124c71cce36a57de3acaf70a5bf164d702d9fb2265fc99f5c = $this->env->getExtension("native_profiler");
        $__internal_4ae59973b6b8c39124c71cce36a57de3acaf70a5bf164d702d9fb2265fc99f5c->enter($__internal_4ae59973b6b8c39124c71cce36a57de3acaf70a5bf164d702d9fb2265fc99f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4ae59973b6b8c39124c71cce36a57de3acaf70a5bf164d702d9fb2265fc99f5c->leave($__internal_4ae59973b6b8c39124c71cce36a57de3acaf70a5bf164d702d9fb2265fc99f5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
