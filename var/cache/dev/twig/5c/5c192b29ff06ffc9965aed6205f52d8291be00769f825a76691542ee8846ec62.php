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
        $__internal_071a8b554b62354900378358c6ed72077160f26a0c99c4cb9fabe90dba8c78aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071a8b554b62354900378358c6ed72077160f26a0c99c4cb9fabe90dba8c78aa->enter($__internal_071a8b554b62354900378358c6ed72077160f26a0c99c4cb9fabe90dba8c78aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_174d673669ced6973e9e9b5f4f82d908560ed35a972fc41c39bf6ab4425a8ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174d673669ced6973e9e9b5f4f82d908560ed35a972fc41c39bf6ab4425a8ad8->enter($__internal_174d673669ced6973e9e9b5f4f82d908560ed35a972fc41c39bf6ab4425a8ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_071a8b554b62354900378358c6ed72077160f26a0c99c4cb9fabe90dba8c78aa->leave($__internal_071a8b554b62354900378358c6ed72077160f26a0c99c4cb9fabe90dba8c78aa_prof);

        
        $__internal_174d673669ced6973e9e9b5f4f82d908560ed35a972fc41c39bf6ab4425a8ad8->leave($__internal_174d673669ced6973e9e9b5f4f82d908560ed35a972fc41c39bf6ab4425a8ad8_prof);

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
