<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_08d3c50a5f78bc508eac40ea42615bdf0b9071b161be939c4ddeb12519692dfa extends Twig_Template
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
        $__internal_42f6b166fdd99b0fc5b53a437f45295be4b58da21296e15f394be5fd184ab374 = $this->env->getExtension("native_profiler");
        $__internal_42f6b166fdd99b0fc5b53a437f45295be4b58da21296e15f394be5fd184ab374->enter($__internal_42f6b166fdd99b0fc5b53a437f45295be4b58da21296e15f394be5fd184ab374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_42f6b166fdd99b0fc5b53a437f45295be4b58da21296e15f394be5fd184ab374->leave($__internal_42f6b166fdd99b0fc5b53a437f45295be4b58da21296e15f394be5fd184ab374_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
