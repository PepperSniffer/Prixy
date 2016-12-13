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
        $__internal_bdc6ca25a0f5ef23d2327045323de05c81b45af3b262b5684ef49043e8714fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc6ca25a0f5ef23d2327045323de05c81b45af3b262b5684ef49043e8714fa2->enter($__internal_bdc6ca25a0f5ef23d2327045323de05c81b45af3b262b5684ef49043e8714fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_ea5f93112d31b95a73c04827d8ee5393b3e3021f5173b690e60126b43f058343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5f93112d31b95a73c04827d8ee5393b3e3021f5173b690e60126b43f058343->enter($__internal_ea5f93112d31b95a73c04827d8ee5393b3e3021f5173b690e60126b43f058343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_bdc6ca25a0f5ef23d2327045323de05c81b45af3b262b5684ef49043e8714fa2->leave($__internal_bdc6ca25a0f5ef23d2327045323de05c81b45af3b262b5684ef49043e8714fa2_prof);

        
        $__internal_ea5f93112d31b95a73c04827d8ee5393b3e3021f5173b690e60126b43f058343->leave($__internal_ea5f93112d31b95a73c04827d8ee5393b3e3021f5173b690e60126b43f058343_prof);

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
