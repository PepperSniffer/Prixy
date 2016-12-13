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
        $__internal_199bf2d70292a208531dd194ca229c89b0b6df3ef7f85c830604c11dadc00d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199bf2d70292a208531dd194ca229c89b0b6df3ef7f85c830604c11dadc00d7f->enter($__internal_199bf2d70292a208531dd194ca229c89b0b6df3ef7f85c830604c11dadc00d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_b6978e2a7ce5fcb0fb732e96f239f000544dc6cfa39f0620782092a4e2392184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6978e2a7ce5fcb0fb732e96f239f000544dc6cfa39f0620782092a4e2392184->enter($__internal_b6978e2a7ce5fcb0fb732e96f239f000544dc6cfa39f0620782092a4e2392184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_199bf2d70292a208531dd194ca229c89b0b6df3ef7f85c830604c11dadc00d7f->leave($__internal_199bf2d70292a208531dd194ca229c89b0b6df3ef7f85c830604c11dadc00d7f_prof);

        
        $__internal_b6978e2a7ce5fcb0fb732e96f239f000544dc6cfa39f0620782092a4e2392184->leave($__internal_b6978e2a7ce5fcb0fb732e96f239f000544dc6cfa39f0620782092a4e2392184_prof);

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
