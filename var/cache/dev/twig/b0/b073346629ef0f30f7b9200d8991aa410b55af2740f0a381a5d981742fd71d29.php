<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_660788bd2d3b64d83b5e0cf7d7b66b41b0cdf87e1e436cba0b7ff160c6421889 extends Twig_Template
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
        $__internal_3e7332826ced6d845fd850ec2cb071475951a634115bfb0f015fdbe068d6287d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7332826ced6d845fd850ec2cb071475951a634115bfb0f015fdbe068d6287d->enter($__internal_3e7332826ced6d845fd850ec2cb071475951a634115bfb0f015fdbe068d6287d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_5b4d551d04c2cb6b2a71eec2a9d805abb86fb9640572d18b60d101bd4eeea56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4d551d04c2cb6b2a71eec2a9d805abb86fb9640572d18b60d101bd4eeea56f->enter($__internal_5b4d551d04c2cb6b2a71eec2a9d805abb86fb9640572d18b60d101bd4eeea56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3e7332826ced6d845fd850ec2cb071475951a634115bfb0f015fdbe068d6287d->leave($__internal_3e7332826ced6d845fd850ec2cb071475951a634115bfb0f015fdbe068d6287d_prof);

        
        $__internal_5b4d551d04c2cb6b2a71eec2a9d805abb86fb9640572d18b60d101bd4eeea56f->leave($__internal_5b4d551d04c2cb6b2a71eec2a9d805abb86fb9640572d18b60d101bd4eeea56f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
