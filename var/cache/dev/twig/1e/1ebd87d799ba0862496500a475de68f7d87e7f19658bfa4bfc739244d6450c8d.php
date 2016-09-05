<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2ba7e5857f3551c349d45895c9a5bb21f4a2aef6857501f029fe2e7f7231fdba extends Twig_Template
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
        $__internal_a585334a228064dd0fe5fb443f9ed1b86373138216b734b5fec3165c4ec70271 = $this->env->getExtension("native_profiler");
        $__internal_a585334a228064dd0fe5fb443f9ed1b86373138216b734b5fec3165c4ec70271->enter($__internal_a585334a228064dd0fe5fb443f9ed1b86373138216b734b5fec3165c4ec70271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a585334a228064dd0fe5fb443f9ed1b86373138216b734b5fec3165c4ec70271->leave($__internal_a585334a228064dd0fe5fb443f9ed1b86373138216b734b5fec3165c4ec70271_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
