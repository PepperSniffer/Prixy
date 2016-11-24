<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_dba9769bd8b2e30aa99319424170fc339a74aaa7d75e2e14dec54d55ec66e8cf extends Twig_Template
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
        $__internal_3abe83f872b48780d37407a4d1727b9f85578ab1cf2594d69197417146977390 = $this->env->getExtension("native_profiler");
        $__internal_3abe83f872b48780d37407a4d1727b9f85578ab1cf2594d69197417146977390->enter($__internal_3abe83f872b48780d37407a4d1727b9f85578ab1cf2594d69197417146977390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_3abe83f872b48780d37407a4d1727b9f85578ab1cf2594d69197417146977390->leave($__internal_3abe83f872b48780d37407a4d1727b9f85578ab1cf2594d69197417146977390_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
