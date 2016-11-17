<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_941346253c463ee97e540cc1431736022f3d0a1cd494e8002aab8775e859f2c1 extends Twig_Template
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
        $__internal_9b576a7e8f8aff7a2fbf40b1d8388dc82b0a6c626223d528f521b966e76a9a65 = $this->env->getExtension("native_profiler");
        $__internal_9b576a7e8f8aff7a2fbf40b1d8388dc82b0a6c626223d528f521b966e76a9a65->enter($__internal_9b576a7e8f8aff7a2fbf40b1d8388dc82b0a6c626223d528f521b966e76a9a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9b576a7e8f8aff7a2fbf40b1d8388dc82b0a6c626223d528f521b966e76a9a65->leave($__internal_9b576a7e8f8aff7a2fbf40b1d8388dc82b0a6c626223d528f521b966e76a9a65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
