<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_66c5e4bdf99a03bf7d0c2b383c8aa9ce92aabc688cb25f841608e99335b124e6 extends Twig_Template
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
        $__internal_67461f0af94ab0b14107e6d5ca22d76b692a19505ffd5f40d8d1aff2f8665658 = $this->env->getExtension("native_profiler");
        $__internal_67461f0af94ab0b14107e6d5ca22d76b692a19505ffd5f40d8d1aff2f8665658->enter($__internal_67461f0af94ab0b14107e6d5ca22d76b692a19505ffd5f40d8d1aff2f8665658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_67461f0af94ab0b14107e6d5ca22d76b692a19505ffd5f40d8d1aff2f8665658->leave($__internal_67461f0af94ab0b14107e6d5ca22d76b692a19505ffd5f40d8d1aff2f8665658_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
