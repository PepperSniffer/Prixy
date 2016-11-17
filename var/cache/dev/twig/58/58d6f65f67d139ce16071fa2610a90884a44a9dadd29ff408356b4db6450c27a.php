<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2c1e70760080bbed3e8cbedc072b575bce3c885101ecd84d41d98d042963b6ff extends Twig_Template
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
        $__internal_9eedef0baecafbfc4530cf1f01286c5edccb784a507519a7441df05dee5c453f = $this->env->getExtension("native_profiler");
        $__internal_9eedef0baecafbfc4530cf1f01286c5edccb784a507519a7441df05dee5c453f->enter($__internal_9eedef0baecafbfc4530cf1f01286c5edccb784a507519a7441df05dee5c453f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9eedef0baecafbfc4530cf1f01286c5edccb784a507519a7441df05dee5c453f->leave($__internal_9eedef0baecafbfc4530cf1f01286c5edccb784a507519a7441df05dee5c453f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
