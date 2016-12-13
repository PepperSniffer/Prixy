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
        $__internal_e896fe50b0377606738d096c60537e34a09d2f3fb47451a85e3618d745c4e09c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e896fe50b0377606738d096c60537e34a09d2f3fb47451a85e3618d745c4e09c->enter($__internal_e896fe50b0377606738d096c60537e34a09d2f3fb47451a85e3618d745c4e09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_75ca03b0499bdaab040053ec0263a505f6133d02585ef6bf6c4c132bfe4cf947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ca03b0499bdaab040053ec0263a505f6133d02585ef6bf6c4c132bfe4cf947->enter($__internal_75ca03b0499bdaab040053ec0263a505f6133d02585ef6bf6c4c132bfe4cf947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e896fe50b0377606738d096c60537e34a09d2f3fb47451a85e3618d745c4e09c->leave($__internal_e896fe50b0377606738d096c60537e34a09d2f3fb47451a85e3618d745c4e09c_prof);

        
        $__internal_75ca03b0499bdaab040053ec0263a505f6133d02585ef6bf6c4c132bfe4cf947->leave($__internal_75ca03b0499bdaab040053ec0263a505f6133d02585ef6bf6c4c132bfe4cf947_prof);

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
