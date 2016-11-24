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
        $__internal_38bc494fdcf66df7ab99bbc44ad3fd8a5af005b6d79aac0667f2b46c4a746551 = $this->env->getExtension("native_profiler");
        $__internal_38bc494fdcf66df7ab99bbc44ad3fd8a5af005b6d79aac0667f2b46c4a746551->enter($__internal_38bc494fdcf66df7ab99bbc44ad3fd8a5af005b6d79aac0667f2b46c4a746551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_38bc494fdcf66df7ab99bbc44ad3fd8a5af005b6d79aac0667f2b46c4a746551->leave($__internal_38bc494fdcf66df7ab99bbc44ad3fd8a5af005b6d79aac0667f2b46c4a746551_prof);

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
