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
        $__internal_8bf7168dd73a3731981bd47440f81276bcdd628a1873b43458fcde55cea80efe = $this->env->getExtension("native_profiler");
        $__internal_8bf7168dd73a3731981bd47440f81276bcdd628a1873b43458fcde55cea80efe->enter($__internal_8bf7168dd73a3731981bd47440f81276bcdd628a1873b43458fcde55cea80efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8bf7168dd73a3731981bd47440f81276bcdd628a1873b43458fcde55cea80efe->leave($__internal_8bf7168dd73a3731981bd47440f81276bcdd628a1873b43458fcde55cea80efe_prof);

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
