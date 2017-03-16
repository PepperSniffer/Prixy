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
        $__internal_1ec4f30cc4d1d9cd5c392c362dace4bb89bb7540bb0facfd847e36f0366861c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec4f30cc4d1d9cd5c392c362dace4bb89bb7540bb0facfd847e36f0366861c9->enter($__internal_1ec4f30cc4d1d9cd5c392c362dace4bb89bb7540bb0facfd847e36f0366861c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2220660acc2d1a66184bf11f5c54eb71e2b5fddfbf7a3039f50a8b1be9c333d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2220660acc2d1a66184bf11f5c54eb71e2b5fddfbf7a3039f50a8b1be9c333d7->enter($__internal_2220660acc2d1a66184bf11f5c54eb71e2b5fddfbf7a3039f50a8b1be9c333d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1ec4f30cc4d1d9cd5c392c362dace4bb89bb7540bb0facfd847e36f0366861c9->leave($__internal_1ec4f30cc4d1d9cd5c392c362dace4bb89bb7540bb0facfd847e36f0366861c9_prof);

        
        $__internal_2220660acc2d1a66184bf11f5c54eb71e2b5fddfbf7a3039f50a8b1be9c333d7->leave($__internal_2220660acc2d1a66184bf11f5c54eb71e2b5fddfbf7a3039f50a8b1be9c333d7_prof);

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
