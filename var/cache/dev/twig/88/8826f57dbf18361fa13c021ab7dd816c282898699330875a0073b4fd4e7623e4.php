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
        $__internal_819b74b0d74ac8fee235ce20093d0c40dd476c38bd66b7de5c5eb9ef780e383b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_819b74b0d74ac8fee235ce20093d0c40dd476c38bd66b7de5c5eb9ef780e383b->enter($__internal_819b74b0d74ac8fee235ce20093d0c40dd476c38bd66b7de5c5eb9ef780e383b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b714370086a116880bb972d9e413a390b67d931ff3f7c26e79893ee777484ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b714370086a116880bb972d9e413a390b67d931ff3f7c26e79893ee777484ada->enter($__internal_b714370086a116880bb972d9e413a390b67d931ff3f7c26e79893ee777484ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_819b74b0d74ac8fee235ce20093d0c40dd476c38bd66b7de5c5eb9ef780e383b->leave($__internal_819b74b0d74ac8fee235ce20093d0c40dd476c38bd66b7de5c5eb9ef780e383b_prof);

        
        $__internal_b714370086a116880bb972d9e413a390b67d931ff3f7c26e79893ee777484ada->leave($__internal_b714370086a116880bb972d9e413a390b67d931ff3f7c26e79893ee777484ada_prof);

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
