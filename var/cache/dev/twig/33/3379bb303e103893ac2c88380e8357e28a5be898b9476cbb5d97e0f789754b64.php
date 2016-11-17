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
        $__internal_f9e8fcfd67c534486cf04f5f6fa10ca79c67c74b9148d170fadd423f5c365d13 = $this->env->getExtension("native_profiler");
        $__internal_f9e8fcfd67c534486cf04f5f6fa10ca79c67c74b9148d170fadd423f5c365d13->enter($__internal_f9e8fcfd67c534486cf04f5f6fa10ca79c67c74b9148d170fadd423f5c365d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f9e8fcfd67c534486cf04f5f6fa10ca79c67c74b9148d170fadd423f5c365d13->leave($__internal_f9e8fcfd67c534486cf04f5f6fa10ca79c67c74b9148d170fadd423f5c365d13_prof);

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
