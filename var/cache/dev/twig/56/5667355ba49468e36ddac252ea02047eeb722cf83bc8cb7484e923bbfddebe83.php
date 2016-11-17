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
        $__internal_09aaa4faa51c73f23597f81fef4bbb2cffd3be2520ca91d5c4e16bdd17f7836c = $this->env->getExtension("native_profiler");
        $__internal_09aaa4faa51c73f23597f81fef4bbb2cffd3be2520ca91d5c4e16bdd17f7836c->enter($__internal_09aaa4faa51c73f23597f81fef4bbb2cffd3be2520ca91d5c4e16bdd17f7836c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_09aaa4faa51c73f23597f81fef4bbb2cffd3be2520ca91d5c4e16bdd17f7836c->leave($__internal_09aaa4faa51c73f23597f81fef4bbb2cffd3be2520ca91d5c4e16bdd17f7836c_prof);

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
