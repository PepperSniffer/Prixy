<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7d789300cb82b922dc1ff6d868a045f8e4eaac1c1d372ffe70c1ee0163f6a2ec extends Twig_Template
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
        $__internal_5d49b51af82db3ec241312aa978419631be7a2f289e97ef13ebf484ade000866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d49b51af82db3ec241312aa978419631be7a2f289e97ef13ebf484ade000866->enter($__internal_5d49b51af82db3ec241312aa978419631be7a2f289e97ef13ebf484ade000866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_e1dee1c190273f2d1d3ed13af399b821f15691c5304e0391da7e23c131b9fe83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1dee1c190273f2d1d3ed13af399b821f15691c5304e0391da7e23c131b9fe83->enter($__internal_e1dee1c190273f2d1d3ed13af399b821f15691c5304e0391da7e23c131b9fe83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5d49b51af82db3ec241312aa978419631be7a2f289e97ef13ebf484ade000866->leave($__internal_5d49b51af82db3ec241312aa978419631be7a2f289e97ef13ebf484ade000866_prof);

        
        $__internal_e1dee1c190273f2d1d3ed13af399b821f15691c5304e0391da7e23c131b9fe83->leave($__internal_e1dee1c190273f2d1d3ed13af399b821f15691c5304e0391da7e23c131b9fe83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
