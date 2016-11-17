<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b36bd7387349c316aeb73a1f243dee638961c4da58ec5f479459fb8c1c7590de extends Twig_Template
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
        $__internal_6e3bec157a9f2f1441a3fb68f115b8fa8182701f24bb8cc681e4f475e0a3ce1d = $this->env->getExtension("native_profiler");
        $__internal_6e3bec157a9f2f1441a3fb68f115b8fa8182701f24bb8cc681e4f475e0a3ce1d->enter($__internal_6e3bec157a9f2f1441a3fb68f115b8fa8182701f24bb8cc681e4f475e0a3ce1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6e3bec157a9f2f1441a3fb68f115b8fa8182701f24bb8cc681e4f475e0a3ce1d->leave($__internal_6e3bec157a9f2f1441a3fb68f115b8fa8182701f24bb8cc681e4f475e0a3ce1d_prof);

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
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
