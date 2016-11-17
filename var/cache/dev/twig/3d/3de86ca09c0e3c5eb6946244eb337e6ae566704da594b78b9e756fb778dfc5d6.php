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
        $__internal_15a2ab666b7bf092d5018104cd84c2a3c1f610e8d8e22f3e121582afee3c1497 = $this->env->getExtension("native_profiler");
        $__internal_15a2ab666b7bf092d5018104cd84c2a3c1f610e8d8e22f3e121582afee3c1497->enter($__internal_15a2ab666b7bf092d5018104cd84c2a3c1f610e8d8e22f3e121582afee3c1497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_15a2ab666b7bf092d5018104cd84c2a3c1f610e8d8e22f3e121582afee3c1497->leave($__internal_15a2ab666b7bf092d5018104cd84c2a3c1f610e8d8e22f3e121582afee3c1497_prof);

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
