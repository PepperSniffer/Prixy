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
        $__internal_d680a3978715747d3c381f6dcad7a669ffc97ac02265604c858c54be875c2fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d680a3978715747d3c381f6dcad7a669ffc97ac02265604c858c54be875c2fe6->enter($__internal_d680a3978715747d3c381f6dcad7a669ffc97ac02265604c858c54be875c2fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_9cbe2c8b891ee35780aad87f283b146b7c9499cd944c17f053986ab692ce6252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbe2c8b891ee35780aad87f283b146b7c9499cd944c17f053986ab692ce6252->enter($__internal_9cbe2c8b891ee35780aad87f283b146b7c9499cd944c17f053986ab692ce6252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d680a3978715747d3c381f6dcad7a669ffc97ac02265604c858c54be875c2fe6->leave($__internal_d680a3978715747d3c381f6dcad7a669ffc97ac02265604c858c54be875c2fe6_prof);

        
        $__internal_9cbe2c8b891ee35780aad87f283b146b7c9499cd944c17f053986ab692ce6252->leave($__internal_9cbe2c8b891ee35780aad87f283b146b7c9499cd944c17f053986ab692ce6252_prof);

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
