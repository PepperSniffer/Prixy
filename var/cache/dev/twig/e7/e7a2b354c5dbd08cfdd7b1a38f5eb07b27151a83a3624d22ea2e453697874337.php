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
        $__internal_3a63815438ca416fd6f8ccf181b5d6ac56097805306a48f5c9e855d5426a73db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a63815438ca416fd6f8ccf181b5d6ac56097805306a48f5c9e855d5426a73db->enter($__internal_3a63815438ca416fd6f8ccf181b5d6ac56097805306a48f5c9e855d5426a73db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_a03f37487bdb2f31398222803e82b39d0c67452601565fc5f3ca07214c033ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03f37487bdb2f31398222803e82b39d0c67452601565fc5f3ca07214c033ab5->enter($__internal_a03f37487bdb2f31398222803e82b39d0c67452601565fc5f3ca07214c033ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3a63815438ca416fd6f8ccf181b5d6ac56097805306a48f5c9e855d5426a73db->leave($__internal_3a63815438ca416fd6f8ccf181b5d6ac56097805306a48f5c9e855d5426a73db_prof);

        
        $__internal_a03f37487bdb2f31398222803e82b39d0c67452601565fc5f3ca07214c033ab5->leave($__internal_a03f37487bdb2f31398222803e82b39d0c67452601565fc5f3ca07214c033ab5_prof);

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
