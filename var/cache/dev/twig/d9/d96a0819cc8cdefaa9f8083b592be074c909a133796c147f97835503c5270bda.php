<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a1be158ab5f4818f8499c0d85c17569d0fcd679bc479233bea3e96b77748fe00 extends Twig_Template
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
        $__internal_dc23b68b7340dae910bb9e77d64e9a444e98d017394fdfaeb3cb740f081ddbcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc23b68b7340dae910bb9e77d64e9a444e98d017394fdfaeb3cb740f081ddbcf->enter($__internal_dc23b68b7340dae910bb9e77d64e9a444e98d017394fdfaeb3cb740f081ddbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_6047e37f6da2cd129822e6f084139cebd638cd9bcdcf2c3c95a5418aa6c87232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6047e37f6da2cd129822e6f084139cebd638cd9bcdcf2c3c95a5418aa6c87232->enter($__internal_6047e37f6da2cd129822e6f084139cebd638cd9bcdcf2c3c95a5418aa6c87232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_dc23b68b7340dae910bb9e77d64e9a444e98d017394fdfaeb3cb740f081ddbcf->leave($__internal_dc23b68b7340dae910bb9e77d64e9a444e98d017394fdfaeb3cb740f081ddbcf_prof);

        
        $__internal_6047e37f6da2cd129822e6f084139cebd638cd9bcdcf2c3c95a5418aa6c87232->leave($__internal_6047e37f6da2cd129822e6f084139cebd638cd9bcdcf2c3c95a5418aa6c87232_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
