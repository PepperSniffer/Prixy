<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_e1649579995fbbe97c17ab71c2e2e769ddecf6bf8422b81eb3b06590bd080061 extends Twig_Template
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
        $__internal_5408ae76838e4e52c71feb680d3284615c1fffe37e36ac5578ef01021443675a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5408ae76838e4e52c71feb680d3284615c1fffe37e36ac5578ef01021443675a->enter($__internal_5408ae76838e4e52c71feb680d3284615c1fffe37e36ac5578ef01021443675a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_18ac8f466a79af3a605fbaa9f97808e7d071a4b1731fc739ee28f0dbe3a377d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ac8f466a79af3a605fbaa9f97808e7d071a4b1731fc739ee28f0dbe3a377d4->enter($__internal_18ac8f466a79af3a605fbaa9f97808e7d071a4b1731fc739ee28f0dbe3a377d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5408ae76838e4e52c71feb680d3284615c1fffe37e36ac5578ef01021443675a->leave($__internal_5408ae76838e4e52c71feb680d3284615c1fffe37e36ac5578ef01021443675a_prof);

        
        $__internal_18ac8f466a79af3a605fbaa9f97808e7d071a4b1731fc739ee28f0dbe3a377d4->leave($__internal_18ac8f466a79af3a605fbaa9f97808e7d071a4b1731fc739ee28f0dbe3a377d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}