<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_9c1fff72ae53a3500491b47b3dbe03404610c09836b98694f9ad45752a7f23dd extends Twig_Template
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
        $__internal_3de8adae27814d5c69f9bb92448d49e84feb3fa6d1fdfd1889a9f2818fcbb239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3de8adae27814d5c69f9bb92448d49e84feb3fa6d1fdfd1889a9f2818fcbb239->enter($__internal_3de8adae27814d5c69f9bb92448d49e84feb3fa6d1fdfd1889a9f2818fcbb239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_416340043fd77ae88b08ebd5640556bba0d80e18c231adbea009b66948757015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416340043fd77ae88b08ebd5640556bba0d80e18c231adbea009b66948757015->enter($__internal_416340043fd77ae88b08ebd5640556bba0d80e18c231adbea009b66948757015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3de8adae27814d5c69f9bb92448d49e84feb3fa6d1fdfd1889a9f2818fcbb239->leave($__internal_3de8adae27814d5c69f9bb92448d49e84feb3fa6d1fdfd1889a9f2818fcbb239_prof);

        
        $__internal_416340043fd77ae88b08ebd5640556bba0d80e18c231adbea009b66948757015->leave($__internal_416340043fd77ae88b08ebd5640556bba0d80e18c231adbea009b66948757015_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
