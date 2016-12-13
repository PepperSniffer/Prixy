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
        $__internal_678bd20bc87d3e752142ed7421c62143ee5da76cd7b8a463bca4c94e2af7c92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678bd20bc87d3e752142ed7421c62143ee5da76cd7b8a463bca4c94e2af7c92d->enter($__internal_678bd20bc87d3e752142ed7421c62143ee5da76cd7b8a463bca4c94e2af7c92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_7f9dda6645ef6fc56bc7bc71d623ad14acdc3795027b405f5032a627010a5c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9dda6645ef6fc56bc7bc71d623ad14acdc3795027b405f5032a627010a5c3a->enter($__internal_7f9dda6645ef6fc56bc7bc71d623ad14acdc3795027b405f5032a627010a5c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_678bd20bc87d3e752142ed7421c62143ee5da76cd7b8a463bca4c94e2af7c92d->leave($__internal_678bd20bc87d3e752142ed7421c62143ee5da76cd7b8a463bca4c94e2af7c92d_prof);

        
        $__internal_7f9dda6645ef6fc56bc7bc71d623ad14acdc3795027b405f5032a627010a5c3a->leave($__internal_7f9dda6645ef6fc56bc7bc71d623ad14acdc3795027b405f5032a627010a5c3a_prof);

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
