<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_2c53c4d1e4b4a0f8174bf1999e0c84912d1e1a8a2a107b723c09bfcd52d6ec75 extends Twig_Template
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
        $__internal_0993e8f64473be106b272b0fdaf0041cfcb46daa89682bda100ac9b6a0b96586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0993e8f64473be106b272b0fdaf0041cfcb46daa89682bda100ac9b6a0b96586->enter($__internal_0993e8f64473be106b272b0fdaf0041cfcb46daa89682bda100ac9b6a0b96586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_7b91af655e6bc59bf97d5c2ce2097ec162663592a8cc861a27fa8673c7c86096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b91af655e6bc59bf97d5c2ce2097ec162663592a8cc861a27fa8673c7c86096->enter($__internal_7b91af655e6bc59bf97d5c2ce2097ec162663592a8cc861a27fa8673c7c86096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_0993e8f64473be106b272b0fdaf0041cfcb46daa89682bda100ac9b6a0b96586->leave($__internal_0993e8f64473be106b272b0fdaf0041cfcb46daa89682bda100ac9b6a0b96586_prof);

        
        $__internal_7b91af655e6bc59bf97d5c2ce2097ec162663592a8cc861a27fa8673c7c86096->leave($__internal_7b91af655e6bc59bf97d5c2ce2097ec162663592a8cc861a27fa8673c7c86096_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
