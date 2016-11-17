<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_86c3ff93ee4a85fb05b213f5de706318ea954513bdd2c590fc3d7bc0ce5ab98b extends Twig_Template
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
        $__internal_4680bed671169bc1d2978e18ebf6b3f56747d5d7d368530cb1975e0f12f4b597 = $this->env->getExtension("native_profiler");
        $__internal_4680bed671169bc1d2978e18ebf6b3f56747d5d7d368530cb1975e0f12f4b597->enter($__internal_4680bed671169bc1d2978e18ebf6b3f56747d5d7d368530cb1975e0f12f4b597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4680bed671169bc1d2978e18ebf6b3f56747d5d7d368530cb1975e0f12f4b597->leave($__internal_4680bed671169bc1d2978e18ebf6b3f56747d5d7d368530cb1975e0f12f4b597_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
