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
        $__internal_9f441f697f983e0eea24ba27a80bd4449df5cace179056f2cda3b0b4b293b8a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f441f697f983e0eea24ba27a80bd4449df5cace179056f2cda3b0b4b293b8a8->enter($__internal_9f441f697f983e0eea24ba27a80bd4449df5cace179056f2cda3b0b4b293b8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1d1cd4f772500b461d27adc1f42f834eb5aa9d092de0e85217845409a14c51a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1cd4f772500b461d27adc1f42f834eb5aa9d092de0e85217845409a14c51a3->enter($__internal_1d1cd4f772500b461d27adc1f42f834eb5aa9d092de0e85217845409a14c51a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9f441f697f983e0eea24ba27a80bd4449df5cace179056f2cda3b0b4b293b8a8->leave($__internal_9f441f697f983e0eea24ba27a80bd4449df5cace179056f2cda3b0b4b293b8a8_prof);

        
        $__internal_1d1cd4f772500b461d27adc1f42f834eb5aa9d092de0e85217845409a14c51a3->leave($__internal_1d1cd4f772500b461d27adc1f42f834eb5aa9d092de0e85217845409a14c51a3_prof);

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
