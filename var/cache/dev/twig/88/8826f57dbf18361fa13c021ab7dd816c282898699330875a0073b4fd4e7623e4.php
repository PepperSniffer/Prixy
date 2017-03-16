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
        $__internal_a6eea13303962828cea89055da5307e14e894bd973c5426943b5253a0e0237c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6eea13303962828cea89055da5307e14e894bd973c5426943b5253a0e0237c3->enter($__internal_a6eea13303962828cea89055da5307e14e894bd973c5426943b5253a0e0237c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6511e9ea5b9389b2284f8d4cff93edff94a88d454a9f69c847d1f03920b282fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6511e9ea5b9389b2284f8d4cff93edff94a88d454a9f69c847d1f03920b282fc->enter($__internal_6511e9ea5b9389b2284f8d4cff93edff94a88d454a9f69c847d1f03920b282fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a6eea13303962828cea89055da5307e14e894bd973c5426943b5253a0e0237c3->leave($__internal_a6eea13303962828cea89055da5307e14e894bd973c5426943b5253a0e0237c3_prof);

        
        $__internal_6511e9ea5b9389b2284f8d4cff93edff94a88d454a9f69c847d1f03920b282fc->leave($__internal_6511e9ea5b9389b2284f8d4cff93edff94a88d454a9f69c847d1f03920b282fc_prof);

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
