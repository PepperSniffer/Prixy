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
        $__internal_900ed94582726eddb2fa246bd5dc183ba219456d7a621af9f3178f800ec338a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900ed94582726eddb2fa246bd5dc183ba219456d7a621af9f3178f800ec338a3->enter($__internal_900ed94582726eddb2fa246bd5dc183ba219456d7a621af9f3178f800ec338a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d9db6cf11f67e21bcf4ad6df593e017b1e2071613998d17c971c893762911d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9db6cf11f67e21bcf4ad6df593e017b1e2071613998d17c971c893762911d59->enter($__internal_d9db6cf11f67e21bcf4ad6df593e017b1e2071613998d17c971c893762911d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_900ed94582726eddb2fa246bd5dc183ba219456d7a621af9f3178f800ec338a3->leave($__internal_900ed94582726eddb2fa246bd5dc183ba219456d7a621af9f3178f800ec338a3_prof);

        
        $__internal_d9db6cf11f67e21bcf4ad6df593e017b1e2071613998d17c971c893762911d59->leave($__internal_d9db6cf11f67e21bcf4ad6df593e017b1e2071613998d17c971c893762911d59_prof);

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
