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
        $__internal_dcda6336e3787b5d52f82b64b137bc7385e9863bdd9d11b4ce2eb431027a879c = $this->env->getExtension("native_profiler");
        $__internal_dcda6336e3787b5d52f82b64b137bc7385e9863bdd9d11b4ce2eb431027a879c->enter($__internal_dcda6336e3787b5d52f82b64b137bc7385e9863bdd9d11b4ce2eb431027a879c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_dcda6336e3787b5d52f82b64b137bc7385e9863bdd9d11b4ce2eb431027a879c->leave($__internal_dcda6336e3787b5d52f82b64b137bc7385e9863bdd9d11b4ce2eb431027a879c_prof);

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
