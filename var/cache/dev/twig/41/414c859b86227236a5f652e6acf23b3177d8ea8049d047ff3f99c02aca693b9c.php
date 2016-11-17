<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7b9ed01beaf094b2a0afcb4b72e27c2367ac89484f8b52c35434b7c97277b1f1 extends Twig_Template
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
        $__internal_592989ffe3656e1b52098aafc941786d9cb9ff8592832c72c9a03a640ce0e1c3 = $this->env->getExtension("native_profiler");
        $__internal_592989ffe3656e1b52098aafc941786d9cb9ff8592832c72c9a03a640ce0e1c3->enter($__internal_592989ffe3656e1b52098aafc941786d9cb9ff8592832c72c9a03a640ce0e1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_592989ffe3656e1b52098aafc941786d9cb9ff8592832c72c9a03a640ce0e1c3->leave($__internal_592989ffe3656e1b52098aafc941786d9cb9ff8592832c72c9a03a640ce0e1c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
