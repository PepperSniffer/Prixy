<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_389eed840a90d0331324f49d9f48ae5d1dddc0d7fa3afd91b90700b9ed7ed4e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5853bd43222275f9027799b956b0dd7c7aa5f303046d441ee030f0078cbaa169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5853bd43222275f9027799b956b0dd7c7aa5f303046d441ee030f0078cbaa169->enter($__internal_5853bd43222275f9027799b956b0dd7c7aa5f303046d441ee030f0078cbaa169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0cb9b1b0be66b954e6d7cdbe438d6896223d93ac22028eb842173f68cf3d934b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb9b1b0be66b954e6d7cdbe438d6896223d93ac22028eb842173f68cf3d934b->enter($__internal_0cb9b1b0be66b954e6d7cdbe438d6896223d93ac22028eb842173f68cf3d934b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5853bd43222275f9027799b956b0dd7c7aa5f303046d441ee030f0078cbaa169->leave($__internal_5853bd43222275f9027799b956b0dd7c7aa5f303046d441ee030f0078cbaa169_prof);

        
        $__internal_0cb9b1b0be66b954e6d7cdbe438d6896223d93ac22028eb842173f68cf3d934b->leave($__internal_0cb9b1b0be66b954e6d7cdbe438d6896223d93ac22028eb842173f68cf3d934b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aec6900e7ab3786d724af14103544682f914e369d0458eea7f5eb9bef97bcc72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec6900e7ab3786d724af14103544682f914e369d0458eea7f5eb9bef97bcc72->enter($__internal_aec6900e7ab3786d724af14103544682f914e369d0458eea7f5eb9bef97bcc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5bf552cd822720e64b65f2dbc14e25febe6923d3f1c1df59e0814ddb67f7c25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf552cd822720e64b65f2dbc14e25febe6923d3f1c1df59e0814ddb67f7c25c->enter($__internal_5bf552cd822720e64b65f2dbc14e25febe6923d3f1c1df59e0814ddb67f7c25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5bf552cd822720e64b65f2dbc14e25febe6923d3f1c1df59e0814ddb67f7c25c->leave($__internal_5bf552cd822720e64b65f2dbc14e25febe6923d3f1c1df59e0814ddb67f7c25c_prof);

        
        $__internal_aec6900e7ab3786d724af14103544682f914e369d0458eea7f5eb9bef97bcc72->leave($__internal_aec6900e7ab3786d724af14103544682f914e369d0458eea7f5eb9bef97bcc72_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bd4d7f8e60073b64e9514409d38bb4b8bc4aba0d58a2c8fa515ed17b1e4aca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd4d7f8e60073b64e9514409d38bb4b8bc4aba0d58a2c8fa515ed17b1e4aca7->enter($__internal_8bd4d7f8e60073b64e9514409d38bb4b8bc4aba0d58a2c8fa515ed17b1e4aca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7db34be18dc39a8df432ee142232c675c2d8e6a711301b7d1f140a9ab4ffda6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db34be18dc39a8df432ee142232c675c2d8e6a711301b7d1f140a9ab4ffda6a->enter($__internal_7db34be18dc39a8df432ee142232c675c2d8e6a711301b7d1f140a9ab4ffda6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7db34be18dc39a8df432ee142232c675c2d8e6a711301b7d1f140a9ab4ffda6a->leave($__internal_7db34be18dc39a8df432ee142232c675c2d8e6a711301b7d1f140a9ab4ffda6a_prof);

        
        $__internal_8bd4d7f8e60073b64e9514409d38bb4b8bc4aba0d58a2c8fa515ed17b1e4aca7->leave($__internal_8bd4d7f8e60073b64e9514409d38bb4b8bc4aba0d58a2c8fa515ed17b1e4aca7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
