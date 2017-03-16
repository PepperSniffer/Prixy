<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_6541f816d0dfffaacc87329fd4fc4f2db0df6e65364dca2e3b711e7a969d4ff4 extends Twig_Template
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
        $__internal_339094256729d220e86e8ff199d5c78142b60273aa78372fb5978f6b0f3f8e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_339094256729d220e86e8ff199d5c78142b60273aa78372fb5978f6b0f3f8e73->enter($__internal_339094256729d220e86e8ff199d5c78142b60273aa78372fb5978f6b0f3f8e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_edc48111df0bb36e327cfefc3e6ea6d46c713e3474d0d3e05dc51bc4c851c142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc48111df0bb36e327cfefc3e6ea6d46c713e3474d0d3e05dc51bc4c851c142->enter($__internal_edc48111df0bb36e327cfefc3e6ea6d46c713e3474d0d3e05dc51bc4c851c142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_339094256729d220e86e8ff199d5c78142b60273aa78372fb5978f6b0f3f8e73->leave($__internal_339094256729d220e86e8ff199d5c78142b60273aa78372fb5978f6b0f3f8e73_prof);

        
        $__internal_edc48111df0bb36e327cfefc3e6ea6d46c713e3474d0d3e05dc51bc4c851c142->leave($__internal_edc48111df0bb36e327cfefc3e6ea6d46c713e3474d0d3e05dc51bc4c851c142_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
