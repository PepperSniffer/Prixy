<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_59e033a3da49a149b1c14b2d444e953684f1c8d3380441283b082efa16825fd7 extends Twig_Template
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
        $__internal_17fdde0e0ca24467d49240796c1123ada6e7ad51ad09084b0dc2497fc829cc41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fdde0e0ca24467d49240796c1123ada6e7ad51ad09084b0dc2497fc829cc41->enter($__internal_17fdde0e0ca24467d49240796c1123ada6e7ad51ad09084b0dc2497fc829cc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_59faacfcfdba771ad8d4208ca7144052cd5fe538b39aad973ca9d68ea373f6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59faacfcfdba771ad8d4208ca7144052cd5fe538b39aad973ca9d68ea373f6d3->enter($__internal_59faacfcfdba771ad8d4208ca7144052cd5fe538b39aad973ca9d68ea373f6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_17fdde0e0ca24467d49240796c1123ada6e7ad51ad09084b0dc2497fc829cc41->leave($__internal_17fdde0e0ca24467d49240796c1123ada6e7ad51ad09084b0dc2497fc829cc41_prof);

        
        $__internal_59faacfcfdba771ad8d4208ca7144052cd5fe538b39aad973ca9d68ea373f6d3->leave($__internal_59faacfcfdba771ad8d4208ca7144052cd5fe538b39aad973ca9d68ea373f6d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
