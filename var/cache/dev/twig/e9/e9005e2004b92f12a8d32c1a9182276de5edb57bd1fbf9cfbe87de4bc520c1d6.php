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
        $__internal_788a3c4a3156b381d28c9ed26b5472e524dbb824dae620636eb554c98308bbc7 = $this->env->getExtension("native_profiler");
        $__internal_788a3c4a3156b381d28c9ed26b5472e524dbb824dae620636eb554c98308bbc7->enter($__internal_788a3c4a3156b381d28c9ed26b5472e524dbb824dae620636eb554c98308bbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_788a3c4a3156b381d28c9ed26b5472e524dbb824dae620636eb554c98308bbc7->leave($__internal_788a3c4a3156b381d28c9ed26b5472e524dbb824dae620636eb554c98308bbc7_prof);

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
