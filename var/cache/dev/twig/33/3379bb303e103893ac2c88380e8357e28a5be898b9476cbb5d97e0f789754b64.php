<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_d004f5f50fe2de9c0cfc1ca0b6a9db264ad532300d90bb363734f5572727e7b3 extends Twig_Template
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
        $__internal_7a80e7e3e091917e04f259bdeb080b6258482d9d86a7bb97ec3ab40cca1e84bc = $this->env->getExtension("native_profiler");
        $__internal_7a80e7e3e091917e04f259bdeb080b6258482d9d86a7bb97ec3ab40cca1e84bc->enter($__internal_7a80e7e3e091917e04f259bdeb080b6258482d9d86a7bb97ec3ab40cca1e84bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7a80e7e3e091917e04f259bdeb080b6258482d9d86a7bb97ec3ab40cca1e84bc->leave($__internal_7a80e7e3e091917e04f259bdeb080b6258482d9d86a7bb97ec3ab40cca1e84bc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
