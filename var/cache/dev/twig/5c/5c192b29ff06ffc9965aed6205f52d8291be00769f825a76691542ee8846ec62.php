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
        $__internal_c822db2cea93f03755bfc0c7e4825756392bc51796e5577026f25f23fac4c715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c822db2cea93f03755bfc0c7e4825756392bc51796e5577026f25f23fac4c715->enter($__internal_c822db2cea93f03755bfc0c7e4825756392bc51796e5577026f25f23fac4c715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_d6676de36e126956b3cd53b1c506291cb782217ebaf22397614a6bd6394a7a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6676de36e126956b3cd53b1c506291cb782217ebaf22397614a6bd6394a7a49->enter($__internal_d6676de36e126956b3cd53b1c506291cb782217ebaf22397614a6bd6394a7a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c822db2cea93f03755bfc0c7e4825756392bc51796e5577026f25f23fac4c715->leave($__internal_c822db2cea93f03755bfc0c7e4825756392bc51796e5577026f25f23fac4c715_prof);

        
        $__internal_d6676de36e126956b3cd53b1c506291cb782217ebaf22397614a6bd6394a7a49->leave($__internal_d6676de36e126956b3cd53b1c506291cb782217ebaf22397614a6bd6394a7a49_prof);

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
