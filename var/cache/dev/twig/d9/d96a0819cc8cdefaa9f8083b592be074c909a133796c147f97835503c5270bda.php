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
        $__internal_d805816e77ba08b1698cca7d751112262e623cc1c7a18f36cff43f4f719519b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d805816e77ba08b1698cca7d751112262e623cc1c7a18f36cff43f4f719519b9->enter($__internal_d805816e77ba08b1698cca7d751112262e623cc1c7a18f36cff43f4f719519b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_f258d12296c5913edb9aa30061b96f5c25b7ab1812117e2a369df3ae2244e4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f258d12296c5913edb9aa30061b96f5c25b7ab1812117e2a369df3ae2244e4f1->enter($__internal_f258d12296c5913edb9aa30061b96f5c25b7ab1812117e2a369df3ae2244e4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d805816e77ba08b1698cca7d751112262e623cc1c7a18f36cff43f4f719519b9->leave($__internal_d805816e77ba08b1698cca7d751112262e623cc1c7a18f36cff43f4f719519b9_prof);

        
        $__internal_f258d12296c5913edb9aa30061b96f5c25b7ab1812117e2a369df3ae2244e4f1->leave($__internal_f258d12296c5913edb9aa30061b96f5c25b7ab1812117e2a369df3ae2244e4f1_prof);

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
