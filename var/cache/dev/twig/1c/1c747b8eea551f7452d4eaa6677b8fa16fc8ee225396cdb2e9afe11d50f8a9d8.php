<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_02e9ad679e73e334c88e6ba4056a00300e85179a1dec529d444e5186255e51a7 extends Twig_Template
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
        $__internal_e7c6b54624fe4dc5acf6303d41ba3be5e18dc296c548aed3115ac3ff55c597e3 = $this->env->getExtension("native_profiler");
        $__internal_e7c6b54624fe4dc5acf6303d41ba3be5e18dc296c548aed3115ac3ff55c597e3->enter($__internal_e7c6b54624fe4dc5acf6303d41ba3be5e18dc296c548aed3115ac3ff55c597e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e7c6b54624fe4dc5acf6303d41ba3be5e18dc296c548aed3115ac3ff55c597e3->leave($__internal_e7c6b54624fe4dc5acf6303d41ba3be5e18dc296c548aed3115ac3ff55c597e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
