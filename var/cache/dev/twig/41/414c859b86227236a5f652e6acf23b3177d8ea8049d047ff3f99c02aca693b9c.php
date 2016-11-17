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
        $__internal_f03c4c2781250e258804d07dbbc348918527d1842a79c70ab9c8e68a9fc6729b = $this->env->getExtension("native_profiler");
        $__internal_f03c4c2781250e258804d07dbbc348918527d1842a79c70ab9c8e68a9fc6729b->enter($__internal_f03c4c2781250e258804d07dbbc348918527d1842a79c70ab9c8e68a9fc6729b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f03c4c2781250e258804d07dbbc348918527d1842a79c70ab9c8e68a9fc6729b->leave($__internal_f03c4c2781250e258804d07dbbc348918527d1842a79c70ab9c8e68a9fc6729b_prof);

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
