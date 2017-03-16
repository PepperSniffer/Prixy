<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_43a752ae60acf739dd494d849fc9f217f5f155c83c4366177995bcb1a2bfadb4 extends Twig_Template
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
        $__internal_792ab77cf1c698c32a42d66cb70f6f86f178028d6ef44d9348d288fd42c56397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792ab77cf1c698c32a42d66cb70f6f86f178028d6ef44d9348d288fd42c56397->enter($__internal_792ab77cf1c698c32a42d66cb70f6f86f178028d6ef44d9348d288fd42c56397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_c61e81460c01649dfd9859df505308e34d72699edc8e20dfed6326a2424010ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61e81460c01649dfd9859df505308e34d72699edc8e20dfed6326a2424010ad->enter($__internal_c61e81460c01649dfd9859df505308e34d72699edc8e20dfed6326a2424010ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_792ab77cf1c698c32a42d66cb70f6f86f178028d6ef44d9348d288fd42c56397->leave($__internal_792ab77cf1c698c32a42d66cb70f6f86f178028d6ef44d9348d288fd42c56397_prof);

        
        $__internal_c61e81460c01649dfd9859df505308e34d72699edc8e20dfed6326a2424010ad->leave($__internal_c61e81460c01649dfd9859df505308e34d72699edc8e20dfed6326a2424010ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
