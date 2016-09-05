<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b153c84a93c0950a182be9b1112f505a09fc812e9a6bc83de0be08a4463fe433 extends Twig_Template
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
        $__internal_306f8f42b4efb0ba2050fd1db84ceefbb0e59e2c0adb1df9f35a840d1746d740 = $this->env->getExtension("native_profiler");
        $__internal_306f8f42b4efb0ba2050fd1db84ceefbb0e59e2c0adb1df9f35a840d1746d740->enter($__internal_306f8f42b4efb0ba2050fd1db84ceefbb0e59e2c0adb1df9f35a840d1746d740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_306f8f42b4efb0ba2050fd1db84ceefbb0e59e2c0adb1df9f35a840d1746d740->leave($__internal_306f8f42b4efb0ba2050fd1db84ceefbb0e59e2c0adb1df9f35a840d1746d740_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
