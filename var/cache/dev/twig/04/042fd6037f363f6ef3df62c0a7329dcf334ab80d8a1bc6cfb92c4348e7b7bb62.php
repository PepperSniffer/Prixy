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
        $__internal_034c418dcf33da9e275de1f3cd9422471fccddc4ff69a1d50ea3ff577e043a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034c418dcf33da9e275de1f3cd9422471fccddc4ff69a1d50ea3ff577e043a8a->enter($__internal_034c418dcf33da9e275de1f3cd9422471fccddc4ff69a1d50ea3ff577e043a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_6b2d5381d81d55025ae0a6b2216515cbf966e67719fe6c9093125089994e779a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2d5381d81d55025ae0a6b2216515cbf966e67719fe6c9093125089994e779a->enter($__internal_6b2d5381d81d55025ae0a6b2216515cbf966e67719fe6c9093125089994e779a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_034c418dcf33da9e275de1f3cd9422471fccddc4ff69a1d50ea3ff577e043a8a->leave($__internal_034c418dcf33da9e275de1f3cd9422471fccddc4ff69a1d50ea3ff577e043a8a_prof);

        
        $__internal_6b2d5381d81d55025ae0a6b2216515cbf966e67719fe6c9093125089994e779a->leave($__internal_6b2d5381d81d55025ae0a6b2216515cbf966e67719fe6c9093125089994e779a_prof);

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
