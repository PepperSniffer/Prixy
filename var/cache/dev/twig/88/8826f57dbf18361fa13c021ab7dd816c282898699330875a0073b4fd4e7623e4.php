<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_16f96c7c3631d363b35adba46b81626bd5c6827be6e486a1b75577b3d461637b extends Twig_Template
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
        $__internal_6b00f53d231f97233006d7d43a45fbb36c596f8ce660c9f52f3649f00cdf272a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b00f53d231f97233006d7d43a45fbb36c596f8ce660c9f52f3649f00cdf272a->enter($__internal_6b00f53d231f97233006d7d43a45fbb36c596f8ce660c9f52f3649f00cdf272a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_dec0441b89a14c72f3735634b42125d53c1a908116284a6957bbfd2c738be268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec0441b89a14c72f3735634b42125d53c1a908116284a6957bbfd2c738be268->enter($__internal_dec0441b89a14c72f3735634b42125d53c1a908116284a6957bbfd2c738be268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6b00f53d231f97233006d7d43a45fbb36c596f8ce660c9f52f3649f00cdf272a->leave($__internal_6b00f53d231f97233006d7d43a45fbb36c596f8ce660c9f52f3649f00cdf272a_prof);

        
        $__internal_dec0441b89a14c72f3735634b42125d53c1a908116284a6957bbfd2c738be268->leave($__internal_dec0441b89a14c72f3735634b42125d53c1a908116284a6957bbfd2c738be268_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
