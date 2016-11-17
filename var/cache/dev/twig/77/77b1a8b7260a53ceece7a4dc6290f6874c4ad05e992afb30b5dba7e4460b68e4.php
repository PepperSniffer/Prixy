<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_664c1bb91ab9717c3780367d993c978be1502a500ed945762032f01f4c879a14 extends Twig_Template
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
        $__internal_2664b4ebdde16224721d3713348abd16b4c815f771b1caac89919d3070adde2d = $this->env->getExtension("native_profiler");
        $__internal_2664b4ebdde16224721d3713348abd16b4c815f771b1caac89919d3070adde2d->enter($__internal_2664b4ebdde16224721d3713348abd16b4c815f771b1caac89919d3070adde2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2664b4ebdde16224721d3713348abd16b4c815f771b1caac89919d3070adde2d->leave($__internal_2664b4ebdde16224721d3713348abd16b4c815f771b1caac89919d3070adde2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
