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
        $__internal_4e8f45bad6ac0dc682c2d054d240012ba09c95b61e021415c50f81df24986773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e8f45bad6ac0dc682c2d054d240012ba09c95b61e021415c50f81df24986773->enter($__internal_4e8f45bad6ac0dc682c2d054d240012ba09c95b61e021415c50f81df24986773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_1fdf4fc191a247438c5c980ef0c346fdabd1cbfca0083aa9693ed612df9de98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdf4fc191a247438c5c980ef0c346fdabd1cbfca0083aa9693ed612df9de98e->enter($__internal_1fdf4fc191a247438c5c980ef0c346fdabd1cbfca0083aa9693ed612df9de98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e8f45bad6ac0dc682c2d054d240012ba09c95b61e021415c50f81df24986773->leave($__internal_4e8f45bad6ac0dc682c2d054d240012ba09c95b61e021415c50f81df24986773_prof);

        
        $__internal_1fdf4fc191a247438c5c980ef0c346fdabd1cbfca0083aa9693ed612df9de98e->leave($__internal_1fdf4fc191a247438c5c980ef0c346fdabd1cbfca0083aa9693ed612df9de98e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_857c17b8dd6510cd308cf8e29200df1857de99ee665b15e40331a25e2b9914c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857c17b8dd6510cd308cf8e29200df1857de99ee665b15e40331a25e2b9914c7->enter($__internal_857c17b8dd6510cd308cf8e29200df1857de99ee665b15e40331a25e2b9914c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2eec6a36abe717f4b9ca1e95e20fd27c1cc81311e6e3b53e3ac2143a94727040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eec6a36abe717f4b9ca1e95e20fd27c1cc81311e6e3b53e3ac2143a94727040->enter($__internal_2eec6a36abe717f4b9ca1e95e20fd27c1cc81311e6e3b53e3ac2143a94727040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2eec6a36abe717f4b9ca1e95e20fd27c1cc81311e6e3b53e3ac2143a94727040->leave($__internal_2eec6a36abe717f4b9ca1e95e20fd27c1cc81311e6e3b53e3ac2143a94727040_prof);

        
        $__internal_857c17b8dd6510cd308cf8e29200df1857de99ee665b15e40331a25e2b9914c7->leave($__internal_857c17b8dd6510cd308cf8e29200df1857de99ee665b15e40331a25e2b9914c7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdb1004bee4647b0f54b4203bf0db45b16ff6f0ca70aff2e391fb99d3dbfd292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb1004bee4647b0f54b4203bf0db45b16ff6f0ca70aff2e391fb99d3dbfd292->enter($__internal_cdb1004bee4647b0f54b4203bf0db45b16ff6f0ca70aff2e391fb99d3dbfd292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d27564ad095efec80ff0ad1584aefccb4d72783adcf4be9595508d2816a27ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d27564ad095efec80ff0ad1584aefccb4d72783adcf4be9595508d2816a27ba->enter($__internal_5d27564ad095efec80ff0ad1584aefccb4d72783adcf4be9595508d2816a27ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5d27564ad095efec80ff0ad1584aefccb4d72783adcf4be9595508d2816a27ba->leave($__internal_5d27564ad095efec80ff0ad1584aefccb4d72783adcf4be9595508d2816a27ba_prof);

        
        $__internal_cdb1004bee4647b0f54b4203bf0db45b16ff6f0ca70aff2e391fb99d3dbfd292->leave($__internal_cdb1004bee4647b0f54b4203bf0db45b16ff6f0ca70aff2e391fb99d3dbfd292_prof);

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
