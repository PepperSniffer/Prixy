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
        $__internal_6a5f438dc79d3458042fef7b25c9dbf0c6bed1d6a87b6fbc46fca92f3bf0b513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5f438dc79d3458042fef7b25c9dbf0c6bed1d6a87b6fbc46fca92f3bf0b513->enter($__internal_6a5f438dc79d3458042fef7b25c9dbf0c6bed1d6a87b6fbc46fca92f3bf0b513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_64c4e34a051de48f28e24605ab94f080a107a6f816b9c0090af6899942472bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c4e34a051de48f28e24605ab94f080a107a6f816b9c0090af6899942472bf3->enter($__internal_64c4e34a051de48f28e24605ab94f080a107a6f816b9c0090af6899942472bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6a5f438dc79d3458042fef7b25c9dbf0c6bed1d6a87b6fbc46fca92f3bf0b513->leave($__internal_6a5f438dc79d3458042fef7b25c9dbf0c6bed1d6a87b6fbc46fca92f3bf0b513_prof);

        
        $__internal_64c4e34a051de48f28e24605ab94f080a107a6f816b9c0090af6899942472bf3->leave($__internal_64c4e34a051de48f28e24605ab94f080a107a6f816b9c0090af6899942472bf3_prof);

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
