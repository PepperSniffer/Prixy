<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7d789300cb82b922dc1ff6d868a045f8e4eaac1c1d372ffe70c1ee0163f6a2ec extends Twig_Template
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
        $__internal_49994bae7e19ca01d1df827f38e737d79454af3aaac44aed29b462def37d3c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49994bae7e19ca01d1df827f38e737d79454af3aaac44aed29b462def37d3c6d->enter($__internal_49994bae7e19ca01d1df827f38e737d79454af3aaac44aed29b462def37d3c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_7c1c719868345250a452cbe72e0ae06106ff4b87e844183a66526df603e27e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1c719868345250a452cbe72e0ae06106ff4b87e844183a66526df603e27e51->enter($__internal_7c1c719868345250a452cbe72e0ae06106ff4b87e844183a66526df603e27e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_49994bae7e19ca01d1df827f38e737d79454af3aaac44aed29b462def37d3c6d->leave($__internal_49994bae7e19ca01d1df827f38e737d79454af3aaac44aed29b462def37d3c6d_prof);

        
        $__internal_7c1c719868345250a452cbe72e0ae06106ff4b87e844183a66526df603e27e51->leave($__internal_7c1c719868345250a452cbe72e0ae06106ff4b87e844183a66526df603e27e51_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
