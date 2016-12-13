<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6242aee5452201491ce0f9367a3e3d6a4cf7900f5ad8977c1fcf7a13cb277ff9 extends Twig_Template
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
        $__internal_f3feee34a6465f7b3ab3d63f49241a7d380b6a45bf496679667bf06821105ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3feee34a6465f7b3ab3d63f49241a7d380b6a45bf496679667bf06821105ef1->enter($__internal_f3feee34a6465f7b3ab3d63f49241a7d380b6a45bf496679667bf06821105ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_3fd2792cf8584b18ada71d3a004e03bc631479df3c63a43de4eba2e20fa41fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd2792cf8584b18ada71d3a004e03bc631479df3c63a43de4eba2e20fa41fbf->enter($__internal_3fd2792cf8584b18ada71d3a004e03bc631479df3c63a43de4eba2e20fa41fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f3feee34a6465f7b3ab3d63f49241a7d380b6a45bf496679667bf06821105ef1->leave($__internal_f3feee34a6465f7b3ab3d63f49241a7d380b6a45bf496679667bf06821105ef1_prof);

        
        $__internal_3fd2792cf8584b18ada71d3a004e03bc631479df3c63a43de4eba2e20fa41fbf->leave($__internal_3fd2792cf8584b18ada71d3a004e03bc631479df3c63a43de4eba2e20fa41fbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
