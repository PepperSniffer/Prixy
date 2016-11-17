<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_67657b295e89a59c01b923efe7fec4a3dbc6e1ed1a456ef70bdc1f41aa85329c extends Twig_Template
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
        $__internal_8d4a536d0cc6158a9b8a2fc37fbc0263739098f95b0248dc7af26b118f008e3a = $this->env->getExtension("native_profiler");
        $__internal_8d4a536d0cc6158a9b8a2fc37fbc0263739098f95b0248dc7af26b118f008e3a->enter($__internal_8d4a536d0cc6158a9b8a2fc37fbc0263739098f95b0248dc7af26b118f008e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8d4a536d0cc6158a9b8a2fc37fbc0263739098f95b0248dc7af26b118f008e3a->leave($__internal_8d4a536d0cc6158a9b8a2fc37fbc0263739098f95b0248dc7af26b118f008e3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
