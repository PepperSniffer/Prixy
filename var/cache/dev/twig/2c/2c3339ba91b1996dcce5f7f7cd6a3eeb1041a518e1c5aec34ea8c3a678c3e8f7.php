<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_4b923f8df77a3485ce1469afb7fa5869d9fa7b05514e72dcc63cdc54dba1177b extends Twig_Template
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
        $__internal_77761a56fd4c03107dee9c86ac7ea2700ca14bd11e1606358b4848a4873fc636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77761a56fd4c03107dee9c86ac7ea2700ca14bd11e1606358b4848a4873fc636->enter($__internal_77761a56fd4c03107dee9c86ac7ea2700ca14bd11e1606358b4848a4873fc636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2f5e00c597512e4526356247c5ca31fdea22c2ac7fdf670eb9ca2c3ace921197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5e00c597512e4526356247c5ca31fdea22c2ac7fdf670eb9ca2c3ace921197->enter($__internal_2f5e00c597512e4526356247c5ca31fdea22c2ac7fdf670eb9ca2c3ace921197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_77761a56fd4c03107dee9c86ac7ea2700ca14bd11e1606358b4848a4873fc636->leave($__internal_77761a56fd4c03107dee9c86ac7ea2700ca14bd11e1606358b4848a4873fc636_prof);

        
        $__internal_2f5e00c597512e4526356247c5ca31fdea22c2ac7fdf670eb9ca2c3ace921197->leave($__internal_2f5e00c597512e4526356247c5ca31fdea22c2ac7fdf670eb9ca2c3ace921197_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
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
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
