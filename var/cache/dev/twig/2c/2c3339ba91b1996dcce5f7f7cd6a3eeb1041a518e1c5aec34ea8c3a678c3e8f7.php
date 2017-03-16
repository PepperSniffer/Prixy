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
        $__internal_a2b6f311ced2164eec91d2ddd70df407cb340f23bfb7c9cebb7a990d36f491cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b6f311ced2164eec91d2ddd70df407cb340f23bfb7c9cebb7a990d36f491cc->enter($__internal_a2b6f311ced2164eec91d2ddd70df407cb340f23bfb7c9cebb7a990d36f491cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_5cd1b96515ecedc8f6e6f0be3587b4b354c4d7950d02f7cd88f280d115b96af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd1b96515ecedc8f6e6f0be3587b4b354c4d7950d02f7cd88f280d115b96af5->enter($__internal_5cd1b96515ecedc8f6e6f0be3587b4b354c4d7950d02f7cd88f280d115b96af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a2b6f311ced2164eec91d2ddd70df407cb340f23bfb7c9cebb7a990d36f491cc->leave($__internal_a2b6f311ced2164eec91d2ddd70df407cb340f23bfb7c9cebb7a990d36f491cc_prof);

        
        $__internal_5cd1b96515ecedc8f6e6f0be3587b4b354c4d7950d02f7cd88f280d115b96af5->leave($__internal_5cd1b96515ecedc8f6e6f0be3587b4b354c4d7950d02f7cd88f280d115b96af5_prof);

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
