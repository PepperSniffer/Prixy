<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_bf875bf324b0b587500970702ec04a9836bc8700f448530153ca80fc0f54d180 extends Twig_Template
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
        $__internal_f77169be81a7de6dc875569c4b2d61844559f667722ed39913d4b5fb6eaefe0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77169be81a7de6dc875569c4b2d61844559f667722ed39913d4b5fb6eaefe0f->enter($__internal_f77169be81a7de6dc875569c4b2d61844559f667722ed39913d4b5fb6eaefe0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d3ab6e504974288cac370fa9271f863ab6a562c39057931ffdac0b66688894a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ab6e504974288cac370fa9271f863ab6a562c39057931ffdac0b66688894a0->enter($__internal_d3ab6e504974288cac370fa9271f863ab6a562c39057931ffdac0b66688894a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f77169be81a7de6dc875569c4b2d61844559f667722ed39913d4b5fb6eaefe0f->leave($__internal_f77169be81a7de6dc875569c4b2d61844559f667722ed39913d4b5fb6eaefe0f_prof);

        
        $__internal_d3ab6e504974288cac370fa9271f863ab6a562c39057931ffdac0b66688894a0->leave($__internal_d3ab6e504974288cac370fa9271f863ab6a562c39057931ffdac0b66688894a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
