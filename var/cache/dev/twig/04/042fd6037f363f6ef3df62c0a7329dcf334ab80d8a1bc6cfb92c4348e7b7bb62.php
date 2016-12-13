<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_924a71cf64e7fe98e5a2bd4e8fdf4299f88c8a51224b596b70bebfd1fed8340a extends Twig_Template
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
        $__internal_38bb3ab78b7989486ba332b575643838f03d9b76b39e96250f9c273c1b1ee7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38bb3ab78b7989486ba332b575643838f03d9b76b39e96250f9c273c1b1ee7d3->enter($__internal_38bb3ab78b7989486ba332b575643838f03d9b76b39e96250f9c273c1b1ee7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_22b59d66bb9c2ea1c3dfcf7db7a0704dd1d2fb3baf5089c6d20ab079e84a8b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b59d66bb9c2ea1c3dfcf7db7a0704dd1d2fb3baf5089c6d20ab079e84a8b24->enter($__internal_22b59d66bb9c2ea1c3dfcf7db7a0704dd1d2fb3baf5089c6d20ab079e84a8b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_38bb3ab78b7989486ba332b575643838f03d9b76b39e96250f9c273c1b1ee7d3->leave($__internal_38bb3ab78b7989486ba332b575643838f03d9b76b39e96250f9c273c1b1ee7d3_prof);

        
        $__internal_22b59d66bb9c2ea1c3dfcf7db7a0704dd1d2fb3baf5089c6d20ab079e84a8b24->leave($__internal_22b59d66bb9c2ea1c3dfcf7db7a0704dd1d2fb3baf5089c6d20ab079e84a8b24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
