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
        $__internal_1145e981aeaa79d55485685fbe15a15e39dcf8897ffec90bc823e0e6fdbf1bb0 = $this->env->getExtension("native_profiler");
        $__internal_1145e981aeaa79d55485685fbe15a15e39dcf8897ffec90bc823e0e6fdbf1bb0->enter($__internal_1145e981aeaa79d55485685fbe15a15e39dcf8897ffec90bc823e0e6fdbf1bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1145e981aeaa79d55485685fbe15a15e39dcf8897ffec90bc823e0e6fdbf1bb0->leave($__internal_1145e981aeaa79d55485685fbe15a15e39dcf8897ffec90bc823e0e6fdbf1bb0_prof);

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
