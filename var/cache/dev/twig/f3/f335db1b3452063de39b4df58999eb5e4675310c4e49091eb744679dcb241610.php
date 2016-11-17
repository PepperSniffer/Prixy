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
        $__internal_efeadf4f56dcbd932a713899802a7bf9add702bd55d7e600fa696137c6153cd3 = $this->env->getExtension("native_profiler");
        $__internal_efeadf4f56dcbd932a713899802a7bf9add702bd55d7e600fa696137c6153cd3->enter($__internal_efeadf4f56dcbd932a713899802a7bf9add702bd55d7e600fa696137c6153cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_efeadf4f56dcbd932a713899802a7bf9add702bd55d7e600fa696137c6153cd3->leave($__internal_efeadf4f56dcbd932a713899802a7bf9add702bd55d7e600fa696137c6153cd3_prof);

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
