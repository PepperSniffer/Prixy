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
        $__internal_ca7019d8ad3be38f1732af06adf6293ebe4538f3099c4b2a2df2d51485f5c959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7019d8ad3be38f1732af06adf6293ebe4538f3099c4b2a2df2d51485f5c959->enter($__internal_ca7019d8ad3be38f1732af06adf6293ebe4538f3099c4b2a2df2d51485f5c959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ad1e99fbc731e1878bfe207552fc9822fc573956388d905b1a802784a4bad81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1e99fbc731e1878bfe207552fc9822fc573956388d905b1a802784a4bad81c->enter($__internal_ad1e99fbc731e1878bfe207552fc9822fc573956388d905b1a802784a4bad81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ca7019d8ad3be38f1732af06adf6293ebe4538f3099c4b2a2df2d51485f5c959->leave($__internal_ca7019d8ad3be38f1732af06adf6293ebe4538f3099c4b2a2df2d51485f5c959_prof);

        
        $__internal_ad1e99fbc731e1878bfe207552fc9822fc573956388d905b1a802784a4bad81c->leave($__internal_ad1e99fbc731e1878bfe207552fc9822fc573956388d905b1a802784a4bad81c_prof);

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
