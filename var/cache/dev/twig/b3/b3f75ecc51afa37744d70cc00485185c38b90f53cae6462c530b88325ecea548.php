<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_62b9022b2fc51e71be154018e241c26355495024717358a50d24492b8c9e23fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42b33140d4166311eebc14717927524f3429372cc4ba9640d8aae2e9ef4a13b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b33140d4166311eebc14717927524f3429372cc4ba9640d8aae2e9ef4a13b5->enter($__internal_42b33140d4166311eebc14717927524f3429372cc4ba9640d8aae2e9ef4a13b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_e424eea012fdb3f47caf126f02d83642f95ba369fb5490e35b2222a07a3cc6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e424eea012fdb3f47caf126f02d83642f95ba369fb5490e35b2222a07a3cc6da->enter($__internal_e424eea012fdb3f47caf126f02d83642f95ba369fb5490e35b2222a07a3cc6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42b33140d4166311eebc14717927524f3429372cc4ba9640d8aae2e9ef4a13b5->leave($__internal_42b33140d4166311eebc14717927524f3429372cc4ba9640d8aae2e9ef4a13b5_prof);

        
        $__internal_e424eea012fdb3f47caf126f02d83642f95ba369fb5490e35b2222a07a3cc6da->leave($__internal_e424eea012fdb3f47caf126f02d83642f95ba369fb5490e35b2222a07a3cc6da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1509c36bd1f96ff89b516bf40db59188c10d22d5a511511ba12ecf2f556d2324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1509c36bd1f96ff89b516bf40db59188c10d22d5a511511ba12ecf2f556d2324->enter($__internal_1509c36bd1f96ff89b516bf40db59188c10d22d5a511511ba12ecf2f556d2324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5564ad50ebb868c40eb4c9116d9eddf9ba4e53b181964249f20f0ef6f40d075c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5564ad50ebb868c40eb4c9116d9eddf9ba4e53b181964249f20f0ef6f40d075c->enter($__internal_5564ad50ebb868c40eb4c9116d9eddf9ba4e53b181964249f20f0ef6f40d075c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5564ad50ebb868c40eb4c9116d9eddf9ba4e53b181964249f20f0ef6f40d075c->leave($__internal_5564ad50ebb868c40eb4c9116d9eddf9ba4e53b181964249f20f0ef6f40d075c_prof);

        
        $__internal_1509c36bd1f96ff89b516bf40db59188c10d22d5a511511ba12ecf2f556d2324->leave($__internal_1509c36bd1f96ff89b516bf40db59188c10d22d5a511511ba12ecf2f556d2324_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc719e4e1dd2c36ee5a5a1d9355a09612275f5dfab37b70911c608cc7db68cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc719e4e1dd2c36ee5a5a1d9355a09612275f5dfab37b70911c608cc7db68cc3->enter($__internal_bc719e4e1dd2c36ee5a5a1d9355a09612275f5dfab37b70911c608cc7db68cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d68f2d0f6af41ebf0d3ee34678bdb2e0f07e9b74fc6c8b2bc4f740d54d46824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d68f2d0f6af41ebf0d3ee34678bdb2e0f07e9b74fc6c8b2bc4f740d54d46824->enter($__internal_1d68f2d0f6af41ebf0d3ee34678bdb2e0f07e9b74fc6c8b2bc4f740d54d46824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_1d68f2d0f6af41ebf0d3ee34678bdb2e0f07e9b74fc6c8b2bc4f740d54d46824->leave($__internal_1d68f2d0f6af41ebf0d3ee34678bdb2e0f07e9b74fc6c8b2bc4f740d54d46824_prof);

        
        $__internal_bc719e4e1dd2c36ee5a5a1d9355a09612275f5dfab37b70911c608cc7db68cc3->leave($__internal_bc719e4e1dd2c36ee5a5a1d9355a09612275f5dfab37b70911c608cc7db68cc3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  82 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>{{ file }} <small>line {{ line }}</small></h1>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
