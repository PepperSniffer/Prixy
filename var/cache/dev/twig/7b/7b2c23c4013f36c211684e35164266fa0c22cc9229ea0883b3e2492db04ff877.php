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
        $__internal_150213d9a1d37f8cc162194bae22b464b0bdf8e24382065ac22f51eaab351f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150213d9a1d37f8cc162194bae22b464b0bdf8e24382065ac22f51eaab351f69->enter($__internal_150213d9a1d37f8cc162194bae22b464b0bdf8e24382065ac22f51eaab351f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_cac119a00d063254f6aba0bc73e9f290b5a1af273f45dbc8a651e8d7d727b846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac119a00d063254f6aba0bc73e9f290b5a1af273f45dbc8a651e8d7d727b846->enter($__internal_cac119a00d063254f6aba0bc73e9f290b5a1af273f45dbc8a651e8d7d727b846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_150213d9a1d37f8cc162194bae22b464b0bdf8e24382065ac22f51eaab351f69->leave($__internal_150213d9a1d37f8cc162194bae22b464b0bdf8e24382065ac22f51eaab351f69_prof);

        
        $__internal_cac119a00d063254f6aba0bc73e9f290b5a1af273f45dbc8a651e8d7d727b846->leave($__internal_cac119a00d063254f6aba0bc73e9f290b5a1af273f45dbc8a651e8d7d727b846_prof);

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
