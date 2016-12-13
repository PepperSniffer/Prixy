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
        $__internal_ba6c46f4db782ba14b0b50ac6fbffd63b01d37e47a48bc53f98aff9112080d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6c46f4db782ba14b0b50ac6fbffd63b01d37e47a48bc53f98aff9112080d5d->enter($__internal_ba6c46f4db782ba14b0b50ac6fbffd63b01d37e47a48bc53f98aff9112080d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_2603dd888756ce6c88116edc5eb67d7a8e33f35649f5c37cab2ba94942d95a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2603dd888756ce6c88116edc5eb67d7a8e33f35649f5c37cab2ba94942d95a64->enter($__internal_2603dd888756ce6c88116edc5eb67d7a8e33f35649f5c37cab2ba94942d95a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ba6c46f4db782ba14b0b50ac6fbffd63b01d37e47a48bc53f98aff9112080d5d->leave($__internal_ba6c46f4db782ba14b0b50ac6fbffd63b01d37e47a48bc53f98aff9112080d5d_prof);

        
        $__internal_2603dd888756ce6c88116edc5eb67d7a8e33f35649f5c37cab2ba94942d95a64->leave($__internal_2603dd888756ce6c88116edc5eb67d7a8e33f35649f5c37cab2ba94942d95a64_prof);

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
