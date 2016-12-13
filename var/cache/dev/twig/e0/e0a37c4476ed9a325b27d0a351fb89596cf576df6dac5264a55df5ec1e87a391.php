<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4bd401c1009762132a0608f951e276207e09266c218b6861c186302ef1527617 extends Twig_Template
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
        $__internal_b3a4e706fda4ddb40f429dc72fead2fba8cea52f557657ae63dcddb68f4389c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a4e706fda4ddb40f429dc72fead2fba8cea52f557657ae63dcddb68f4389c8->enter($__internal_b3a4e706fda4ddb40f429dc72fead2fba8cea52f557657ae63dcddb68f4389c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_7940a7f6105a6a6ca7795a6650a7a9ebfaba5d03b6de02dbb01ddc231ec16f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7940a7f6105a6a6ca7795a6650a7a9ebfaba5d03b6de02dbb01ddc231ec16f09->enter($__internal_7940a7f6105a6a6ca7795a6650a7a9ebfaba5d03b6de02dbb01ddc231ec16f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b3a4e706fda4ddb40f429dc72fead2fba8cea52f557657ae63dcddb68f4389c8->leave($__internal_b3a4e706fda4ddb40f429dc72fead2fba8cea52f557657ae63dcddb68f4389c8_prof);

        
        $__internal_7940a7f6105a6a6ca7795a6650a7a9ebfaba5d03b6de02dbb01ddc231ec16f09->leave($__internal_7940a7f6105a6a6ca7795a6650a7a9ebfaba5d03b6de02dbb01ddc231ec16f09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
