<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a1be158ab5f4818f8499c0d85c17569d0fcd679bc479233bea3e96b77748fe00 extends Twig_Template
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
        $__internal_80bc0f29d6ed7ac53cd86cedbfefe35b49d0a4a69d064a2d4e4537f72a08f524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bc0f29d6ed7ac53cd86cedbfefe35b49d0a4a69d064a2d4e4537f72a08f524->enter($__internal_80bc0f29d6ed7ac53cd86cedbfefe35b49d0a4a69d064a2d4e4537f72a08f524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_eb36c54f19e5845de8cd22fc1052a3bc4b6dd5b4efece9646dc1d4f5c2bbd5aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb36c54f19e5845de8cd22fc1052a3bc4b6dd5b4efece9646dc1d4f5c2bbd5aa->enter($__internal_eb36c54f19e5845de8cd22fc1052a3bc4b6dd5b4efece9646dc1d4f5c2bbd5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_80bc0f29d6ed7ac53cd86cedbfefe35b49d0a4a69d064a2d4e4537f72a08f524->leave($__internal_80bc0f29d6ed7ac53cd86cedbfefe35b49d0a4a69d064a2d4e4537f72a08f524_prof);

        
        $__internal_eb36c54f19e5845de8cd22fc1052a3bc4b6dd5b4efece9646dc1d4f5c2bbd5aa->leave($__internal_eb36c54f19e5845de8cd22fc1052a3bc4b6dd5b4efece9646dc1d4f5c2bbd5aa_prof);

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
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
