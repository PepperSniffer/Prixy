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
        $__internal_7b7a6e7d0895499c0e5d0c7ac1dff071fd14d6e9acea6379489984b04e5cb520 = $this->env->getExtension("native_profiler");
        $__internal_7b7a6e7d0895499c0e5d0c7ac1dff071fd14d6e9acea6379489984b04e5cb520->enter($__internal_7b7a6e7d0895499c0e5d0c7ac1dff071fd14d6e9acea6379489984b04e5cb520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_7b7a6e7d0895499c0e5d0c7ac1dff071fd14d6e9acea6379489984b04e5cb520->leave($__internal_7b7a6e7d0895499c0e5d0c7ac1dff071fd14d6e9acea6379489984b04e5cb520_prof);

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
