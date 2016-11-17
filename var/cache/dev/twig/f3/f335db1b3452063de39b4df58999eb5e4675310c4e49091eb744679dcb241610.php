<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6a78f1f0d585b91f3b441effbeb6bed5abee23a9dfdf94b4058d818d6f6b803d extends Twig_Template
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
        $__internal_671d021a6d8a21b7ce2a8194879018316e5cd5a9090f7ec96424f47b90ee7212 = $this->env->getExtension("native_profiler");
        $__internal_671d021a6d8a21b7ce2a8194879018316e5cd5a9090f7ec96424f47b90ee7212->enter($__internal_671d021a6d8a21b7ce2a8194879018316e5cd5a9090f7ec96424f47b90ee7212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_671d021a6d8a21b7ce2a8194879018316e5cd5a9090f7ec96424f47b90ee7212->leave($__internal_671d021a6d8a21b7ce2a8194879018316e5cd5a9090f7ec96424f47b90ee7212_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
