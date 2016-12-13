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
        $__internal_6ce4fcbd7ca3756f84c8a97735792f72e50fd860fe7a5265dda42bbeae8f0385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce4fcbd7ca3756f84c8a97735792f72e50fd860fe7a5265dda42bbeae8f0385->enter($__internal_6ce4fcbd7ca3756f84c8a97735792f72e50fd860fe7a5265dda42bbeae8f0385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_14cf41eafae887649de7260fecbf4861dccb28156027da5ba8ca0fd4ced5f75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14cf41eafae887649de7260fecbf4861dccb28156027da5ba8ca0fd4ced5f75e->enter($__internal_14cf41eafae887649de7260fecbf4861dccb28156027da5ba8ca0fd4ced5f75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6ce4fcbd7ca3756f84c8a97735792f72e50fd860fe7a5265dda42bbeae8f0385->leave($__internal_6ce4fcbd7ca3756f84c8a97735792f72e50fd860fe7a5265dda42bbeae8f0385_prof);

        
        $__internal_14cf41eafae887649de7260fecbf4861dccb28156027da5ba8ca0fd4ced5f75e->leave($__internal_14cf41eafae887649de7260fecbf4861dccb28156027da5ba8ca0fd4ced5f75e_prof);

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
