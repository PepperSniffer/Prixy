<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_4a661714c3761eab81e9c0f388b1371da670035fb180d4285cc9b4224afea132 extends Twig_Template
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
        $__internal_010f8aa87c47c960c8d324e155a2ca19c9849d3b2cbf9d0e5478bf5eb409863e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010f8aa87c47c960c8d324e155a2ca19c9849d3b2cbf9d0e5478bf5eb409863e->enter($__internal_010f8aa87c47c960c8d324e155a2ca19c9849d3b2cbf9d0e5478bf5eb409863e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_f7cdf23d9c69ded5b726c9e5bf0a3ade7299027e2be25a0b761174098ea96717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7cdf23d9c69ded5b726c9e5bf0a3ade7299027e2be25a0b761174098ea96717->enter($__internal_f7cdf23d9c69ded5b726c9e5bf0a3ade7299027e2be25a0b761174098ea96717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_010f8aa87c47c960c8d324e155a2ca19c9849d3b2cbf9d0e5478bf5eb409863e->leave($__internal_010f8aa87c47c960c8d324e155a2ca19c9849d3b2cbf9d0e5478bf5eb409863e_prof);

        
        $__internal_f7cdf23d9c69ded5b726c9e5bf0a3ade7299027e2be25a0b761174098ea96717->leave($__internal_f7cdf23d9c69ded5b726c9e5bf0a3ade7299027e2be25a0b761174098ea96717_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
