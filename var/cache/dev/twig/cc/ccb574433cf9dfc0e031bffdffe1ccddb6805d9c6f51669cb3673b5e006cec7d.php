<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d92ded057f0c78f61e1d35cf9e7dcb693a77c64c62b06b84915ef7a2e51e2520 extends Twig_Template
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
        $__internal_209cc4910ac296b69a5853a656be5ad1f70c8909959fd3b44a0b4e8eec098aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209cc4910ac296b69a5853a656be5ad1f70c8909959fd3b44a0b4e8eec098aec->enter($__internal_209cc4910ac296b69a5853a656be5ad1f70c8909959fd3b44a0b4e8eec098aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_ac88d517ff93955d26614afb9b747ed7c1207ddd75e7d1a92ebb82d1cb13fc7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac88d517ff93955d26614afb9b747ed7c1207ddd75e7d1a92ebb82d1cb13fc7c->enter($__internal_ac88d517ff93955d26614afb9b747ed7c1207ddd75e7d1a92ebb82d1cb13fc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_209cc4910ac296b69a5853a656be5ad1f70c8909959fd3b44a0b4e8eec098aec->leave($__internal_209cc4910ac296b69a5853a656be5ad1f70c8909959fd3b44a0b4e8eec098aec_prof);

        
        $__internal_ac88d517ff93955d26614afb9b747ed7c1207ddd75e7d1a92ebb82d1cb13fc7c->leave($__internal_ac88d517ff93955d26614afb9b747ed7c1207ddd75e7d1a92ebb82d1cb13fc7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
