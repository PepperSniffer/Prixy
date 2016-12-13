<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9d5f8ef3adc34df4cba36d95d1a4903e7f11733471c6fdc26310da6e62bcf6ab extends Twig_Template
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
        $__internal_80e7b570a87c14db0c26b94e4735c61c3ee7ac5dba75558e405075e4a38cff44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e7b570a87c14db0c26b94e4735c61c3ee7ac5dba75558e405075e4a38cff44->enter($__internal_80e7b570a87c14db0c26b94e4735c61c3ee7ac5dba75558e405075e4a38cff44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_2b5dcd84d8c4a3ba8a79f2c1cb358dbb0f80642b9b3a3bcf22f1c141ca6efd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5dcd84d8c4a3ba8a79f2c1cb358dbb0f80642b9b3a3bcf22f1c141ca6efd6e->enter($__internal_2b5dcd84d8c4a3ba8a79f2c1cb358dbb0f80642b9b3a3bcf22f1c141ca6efd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_80e7b570a87c14db0c26b94e4735c61c3ee7ac5dba75558e405075e4a38cff44->leave($__internal_80e7b570a87c14db0c26b94e4735c61c3ee7ac5dba75558e405075e4a38cff44_prof);

        
        $__internal_2b5dcd84d8c4a3ba8a79f2c1cb358dbb0f80642b9b3a3bcf22f1c141ca6efd6e->leave($__internal_2b5dcd84d8c4a3ba8a79f2c1cb358dbb0f80642b9b3a3bcf22f1c141ca6efd6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
