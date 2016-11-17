<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_edc857b7be4c3fb7c3aa06f3c0d51ca6eea20bfa78c92b453f4a60b07a3af76f extends Twig_Template
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
        $__internal_6a63fbd61f7a5dee8bc2ff574d92da3efd2cc3ae5917f7c6f39aee4c355ca603 = $this->env->getExtension("native_profiler");
        $__internal_6a63fbd61f7a5dee8bc2ff574d92da3efd2cc3ae5917f7c6f39aee4c355ca603->enter($__internal_6a63fbd61f7a5dee8bc2ff574d92da3efd2cc3ae5917f7c6f39aee4c355ca603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6a63fbd61f7a5dee8bc2ff574d92da3efd2cc3ae5917f7c6f39aee4c355ca603->leave($__internal_6a63fbd61f7a5dee8bc2ff574d92da3efd2cc3ae5917f7c6f39aee4c355ca603_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
