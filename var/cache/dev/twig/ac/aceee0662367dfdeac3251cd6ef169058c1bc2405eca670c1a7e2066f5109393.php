<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_1822e4c9bb7893d51791ba305c18e35e6a63b9cb494d190debb30ef6692b1281 extends Twig_Template
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
        $__internal_8b4f8f1fbabe061ecbb7037c8ed3fec9c61c5c41b7476abdef51163fb1b65f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b4f8f1fbabe061ecbb7037c8ed3fec9c61c5c41b7476abdef51163fb1b65f68->enter($__internal_8b4f8f1fbabe061ecbb7037c8ed3fec9c61c5c41b7476abdef51163fb1b65f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4a1eb7f53d907eac25eabc7fc8a3fa24af3a2fb895cf16d2f53bcfebd1d544b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1eb7f53d907eac25eabc7fc8a3fa24af3a2fb895cf16d2f53bcfebd1d544b7->enter($__internal_4a1eb7f53d907eac25eabc7fc8a3fa24af3a2fb895cf16d2f53bcfebd1d544b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8b4f8f1fbabe061ecbb7037c8ed3fec9c61c5c41b7476abdef51163fb1b65f68->leave($__internal_8b4f8f1fbabe061ecbb7037c8ed3fec9c61c5c41b7476abdef51163fb1b65f68_prof);

        
        $__internal_4a1eb7f53d907eac25eabc7fc8a3fa24af3a2fb895cf16d2f53bcfebd1d544b7->leave($__internal_4a1eb7f53d907eac25eabc7fc8a3fa24af3a2fb895cf16d2f53bcfebd1d544b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
