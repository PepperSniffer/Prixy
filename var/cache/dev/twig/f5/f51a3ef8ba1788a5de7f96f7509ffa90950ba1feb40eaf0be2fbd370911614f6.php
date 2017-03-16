<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_09ab532b4296b106078bd61de87f03d55a943b1ecf37a508110249fad474bb32 extends Twig_Template
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
        $__internal_2ba9e8a2f19cffe2be4cd7d88aa17c56b7c8d54fc7471d1b5a270c9c6d9fe379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba9e8a2f19cffe2be4cd7d88aa17c56b7c8d54fc7471d1b5a270c9c6d9fe379->enter($__internal_2ba9e8a2f19cffe2be4cd7d88aa17c56b7c8d54fc7471d1b5a270c9c6d9fe379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_532732dd0d375484ef26c8d73518870d075e1a4f3b2d430001c0e8514e61b4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532732dd0d375484ef26c8d73518870d075e1a4f3b2d430001c0e8514e61b4e7->enter($__internal_532732dd0d375484ef26c8d73518870d075e1a4f3b2d430001c0e8514e61b4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2ba9e8a2f19cffe2be4cd7d88aa17c56b7c8d54fc7471d1b5a270c9c6d9fe379->leave($__internal_2ba9e8a2f19cffe2be4cd7d88aa17c56b7c8d54fc7471d1b5a270c9c6d9fe379_prof);

        
        $__internal_532732dd0d375484ef26c8d73518870d075e1a4f3b2d430001c0e8514e61b4e7->leave($__internal_532732dd0d375484ef26c8d73518870d075e1a4f3b2d430001c0e8514e61b4e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
