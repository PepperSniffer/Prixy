<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6634685ffb0aa1f1edc5c12348b81b6f206d448d580893099233eb83f9db0da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_d5a0214498741bfce931b70b0d3836ccd3aa99b99b878d12bdd9d2d8bf3e7c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a0214498741bfce931b70b0d3836ccd3aa99b99b878d12bdd9d2d8bf3e7c4e->enter($__internal_d5a0214498741bfce931b70b0d3836ccd3aa99b99b878d12bdd9d2d8bf3e7c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_5d29d3ed0f38143187b3ccc6f8b264b7998670601e174669152d9a930d5ad103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d29d3ed0f38143187b3ccc6f8b264b7998670601e174669152d9a930d5ad103->enter($__internal_5d29d3ed0f38143187b3ccc6f8b264b7998670601e174669152d9a930d5ad103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5a0214498741bfce931b70b0d3836ccd3aa99b99b878d12bdd9d2d8bf3e7c4e->leave($__internal_d5a0214498741bfce931b70b0d3836ccd3aa99b99b878d12bdd9d2d8bf3e7c4e_prof);

        
        $__internal_5d29d3ed0f38143187b3ccc6f8b264b7998670601e174669152d9a930d5ad103->leave($__internal_5d29d3ed0f38143187b3ccc6f8b264b7998670601e174669152d9a930d5ad103_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4e411b63aa891e2456e2c7e0da4639c5309b0f835bc4cbed9c0d8a3ed2b0b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e411b63aa891e2456e2c7e0da4639c5309b0f835bc4cbed9c0d8a3ed2b0b0b->enter($__internal_d4e411b63aa891e2456e2c7e0da4639c5309b0f835bc4cbed9c0d8a3ed2b0b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_507a0f362cd49b593ef6b11af7ba7d19940bd70a35338a0ed2f73dd5b418fdc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507a0f362cd49b593ef6b11af7ba7d19940bd70a35338a0ed2f73dd5b418fdc1->enter($__internal_507a0f362cd49b593ef6b11af7ba7d19940bd70a35338a0ed2f73dd5b418fdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_507a0f362cd49b593ef6b11af7ba7d19940bd70a35338a0ed2f73dd5b418fdc1->leave($__internal_507a0f362cd49b593ef6b11af7ba7d19940bd70a35338a0ed2f73dd5b418fdc1_prof);

        
        $__internal_d4e411b63aa891e2456e2c7e0da4639c5309b0f835bc4cbed9c0d8a3ed2b0b0b->leave($__internal_d4e411b63aa891e2456e2c7e0da4639c5309b0f835bc4cbed9c0d8a3ed2b0b0b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_46b31105ffd4baed4f60ae5e940ca133e8905735d8946939bc1c5387a397a0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b31105ffd4baed4f60ae5e940ca133e8905735d8946939bc1c5387a397a0f0->enter($__internal_46b31105ffd4baed4f60ae5e940ca133e8905735d8946939bc1c5387a397a0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_472a2cc2492c34a868e5c8ad233574131665a7ba8a73c0970b4c609a78d7cbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472a2cc2492c34a868e5c8ad233574131665a7ba8a73c0970b4c609a78d7cbdc->enter($__internal_472a2cc2492c34a868e5c8ad233574131665a7ba8a73c0970b4c609a78d7cbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_472a2cc2492c34a868e5c8ad233574131665a7ba8a73c0970b4c609a78d7cbdc->leave($__internal_472a2cc2492c34a868e5c8ad233574131665a7ba8a73c0970b4c609a78d7cbdc_prof);

        
        $__internal_46b31105ffd4baed4f60ae5e940ca133e8905735d8946939bc1c5387a397a0f0->leave($__internal_46b31105ffd4baed4f60ae5e940ca133e8905735d8946939bc1c5387a397a0f0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
