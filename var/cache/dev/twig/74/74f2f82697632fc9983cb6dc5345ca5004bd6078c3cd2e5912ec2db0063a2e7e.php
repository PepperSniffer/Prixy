<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7cea1e189d0fb1a33bcd010f7e2cbeed4c6eaee655e913b70a90522774c6966f extends Twig_Template
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
        $__internal_92fcd36be7c40b191fe6a549bac4de509232a87cd3989af43c77371b9696214e = $this->env->getExtension("native_profiler");
        $__internal_92fcd36be7c40b191fe6a549bac4de509232a87cd3989af43c77371b9696214e->enter($__internal_92fcd36be7c40b191fe6a549bac4de509232a87cd3989af43c77371b9696214e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_92fcd36be7c40b191fe6a549bac4de509232a87cd3989af43c77371b9696214e->leave($__internal_92fcd36be7c40b191fe6a549bac4de509232a87cd3989af43c77371b9696214e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
