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
        $__internal_07c372130dfd62acd23d2e69ee655ce65c2da8257c3aa002d7157815f39f18ae = $this->env->getExtension("native_profiler");
        $__internal_07c372130dfd62acd23d2e69ee655ce65c2da8257c3aa002d7157815f39f18ae->enter($__internal_07c372130dfd62acd23d2e69ee655ce65c2da8257c3aa002d7157815f39f18ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_07c372130dfd62acd23d2e69ee655ce65c2da8257c3aa002d7157815f39f18ae->leave($__internal_07c372130dfd62acd23d2e69ee655ce65c2da8257c3aa002d7157815f39f18ae_prof);

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
