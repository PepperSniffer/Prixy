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
        $__internal_b7b3f455227e6f9baae52f0b43ae622a71d890d67d12043a868ca4916479fa9e = $this->env->getExtension("native_profiler");
        $__internal_b7b3f455227e6f9baae52f0b43ae622a71d890d67d12043a868ca4916479fa9e->enter($__internal_b7b3f455227e6f9baae52f0b43ae622a71d890d67d12043a868ca4916479fa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b7b3f455227e6f9baae52f0b43ae622a71d890d67d12043a868ca4916479fa9e->leave($__internal_b7b3f455227e6f9baae52f0b43ae622a71d890d67d12043a868ca4916479fa9e_prof);

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
