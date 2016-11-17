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
        $__internal_c3f7da662cf50af64c38212a0ecaec5d95ebe6cd9c7f45f29b8757ab7eb422cd = $this->env->getExtension("native_profiler");
        $__internal_c3f7da662cf50af64c38212a0ecaec5d95ebe6cd9c7f45f29b8757ab7eb422cd->enter($__internal_c3f7da662cf50af64c38212a0ecaec5d95ebe6cd9c7f45f29b8757ab7eb422cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c3f7da662cf50af64c38212a0ecaec5d95ebe6cd9c7f45f29b8757ab7eb422cd->leave($__internal_c3f7da662cf50af64c38212a0ecaec5d95ebe6cd9c7f45f29b8757ab7eb422cd_prof);

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
