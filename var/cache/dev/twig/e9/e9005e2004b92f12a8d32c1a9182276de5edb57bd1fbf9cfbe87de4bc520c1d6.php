<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_36760261e07f3afc4c2297141fc46898f1049b34829696045a30eb16298a7f9c extends Twig_Template
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
        $__internal_54431879ec3449cae428136b5a4622003e09071223369555a685118d3fe54d9d = $this->env->getExtension("native_profiler");
        $__internal_54431879ec3449cae428136b5a4622003e09071223369555a685118d3fe54d9d->enter($__internal_54431879ec3449cae428136b5a4622003e09071223369555a685118d3fe54d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_54431879ec3449cae428136b5a4622003e09071223369555a685118d3fe54d9d->leave($__internal_54431879ec3449cae428136b5a4622003e09071223369555a685118d3fe54d9d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
