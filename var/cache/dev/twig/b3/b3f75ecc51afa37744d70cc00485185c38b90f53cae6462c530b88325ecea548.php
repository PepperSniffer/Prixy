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
        $__internal_a88fd52db4d7bd79aea1402eada92268d40f3b486f6efc74d2e5ca50e78b27ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88fd52db4d7bd79aea1402eada92268d40f3b486f6efc74d2e5ca50e78b27ff->enter($__internal_a88fd52db4d7bd79aea1402eada92268d40f3b486f6efc74d2e5ca50e78b27ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_4db5ed6a0fbc5513bd6ec800ea8670d1d58d930b80a37fcc61a912b7c6028050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db5ed6a0fbc5513bd6ec800ea8670d1d58d930b80a37fcc61a912b7c6028050->enter($__internal_4db5ed6a0fbc5513bd6ec800ea8670d1d58d930b80a37fcc61a912b7c6028050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a88fd52db4d7bd79aea1402eada92268d40f3b486f6efc74d2e5ca50e78b27ff->leave($__internal_a88fd52db4d7bd79aea1402eada92268d40f3b486f6efc74d2e5ca50e78b27ff_prof);

        
        $__internal_4db5ed6a0fbc5513bd6ec800ea8670d1d58d930b80a37fcc61a912b7c6028050->leave($__internal_4db5ed6a0fbc5513bd6ec800ea8670d1d58d930b80a37fcc61a912b7c6028050_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de6561cbcbc5e82a16c97901ff39c2618058b16e2059b14558f61918538f8cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de6561cbcbc5e82a16c97901ff39c2618058b16e2059b14558f61918538f8cb9->enter($__internal_de6561cbcbc5e82a16c97901ff39c2618058b16e2059b14558f61918538f8cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_267a2e055fba39bfb3ac65377aa7b0926efb79ab7e4e3839b1e1abce9c815390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267a2e055fba39bfb3ac65377aa7b0926efb79ab7e4e3839b1e1abce9c815390->enter($__internal_267a2e055fba39bfb3ac65377aa7b0926efb79ab7e4e3839b1e1abce9c815390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_267a2e055fba39bfb3ac65377aa7b0926efb79ab7e4e3839b1e1abce9c815390->leave($__internal_267a2e055fba39bfb3ac65377aa7b0926efb79ab7e4e3839b1e1abce9c815390_prof);

        
        $__internal_de6561cbcbc5e82a16c97901ff39c2618058b16e2059b14558f61918538f8cb9->leave($__internal_de6561cbcbc5e82a16c97901ff39c2618058b16e2059b14558f61918538f8cb9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_12f4a85bb86da623dd3cea4dd164f92147c15dac827f50e4ae25537b5326dd09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f4a85bb86da623dd3cea4dd164f92147c15dac827f50e4ae25537b5326dd09->enter($__internal_12f4a85bb86da623dd3cea4dd164f92147c15dac827f50e4ae25537b5326dd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad1a79f38e505d07cf666d8980e9a7399d45e740a31589f9f0dc0bc5f099e2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1a79f38e505d07cf666d8980e9a7399d45e740a31589f9f0dc0bc5f099e2d3->enter($__internal_ad1a79f38e505d07cf666d8980e9a7399d45e740a31589f9f0dc0bc5f099e2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ad1a79f38e505d07cf666d8980e9a7399d45e740a31589f9f0dc0bc5f099e2d3->leave($__internal_ad1a79f38e505d07cf666d8980e9a7399d45e740a31589f9f0dc0bc5f099e2d3_prof);

        
        $__internal_12f4a85bb86da623dd3cea4dd164f92147c15dac827f50e4ae25537b5326dd09->leave($__internal_12f4a85bb86da623dd3cea4dd164f92147c15dac827f50e4ae25537b5326dd09_prof);

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
