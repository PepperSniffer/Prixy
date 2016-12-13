<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_38ae47e524781d8a308a0f93cdd67217a19b807a20ed19b9bf4b3766120a981c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_0f92cd627d207135b3357314ebe71372366b1af73ecf7091787aa6581dcd5731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f92cd627d207135b3357314ebe71372366b1af73ecf7091787aa6581dcd5731->enter($__internal_0f92cd627d207135b3357314ebe71372366b1af73ecf7091787aa6581dcd5731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_626d67a64f31d38fd56d2026e3b991dd86118be5d72291683bcdfe8639703d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626d67a64f31d38fd56d2026e3b991dd86118be5d72291683bcdfe8639703d56->enter($__internal_626d67a64f31d38fd56d2026e3b991dd86118be5d72291683bcdfe8639703d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f92cd627d207135b3357314ebe71372366b1af73ecf7091787aa6581dcd5731->leave($__internal_0f92cd627d207135b3357314ebe71372366b1af73ecf7091787aa6581dcd5731_prof);

        
        $__internal_626d67a64f31d38fd56d2026e3b991dd86118be5d72291683bcdfe8639703d56->leave($__internal_626d67a64f31d38fd56d2026e3b991dd86118be5d72291683bcdfe8639703d56_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2b115511a9b2d284890cee94cdaeb1f9eef903c243a1eeb6229e5c7a0dc48f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b115511a9b2d284890cee94cdaeb1f9eef903c243a1eeb6229e5c7a0dc48f1->enter($__internal_c2b115511a9b2d284890cee94cdaeb1f9eef903c243a1eeb6229e5c7a0dc48f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_265ee751245e6bd8950f2bc23b51db3f4bef31dd6b70c4bca25da5a8f16db251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265ee751245e6bd8950f2bc23b51db3f4bef31dd6b70c4bca25da5a8f16db251->enter($__internal_265ee751245e6bd8950f2bc23b51db3f4bef31dd6b70c4bca25da5a8f16db251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_265ee751245e6bd8950f2bc23b51db3f4bef31dd6b70c4bca25da5a8f16db251->leave($__internal_265ee751245e6bd8950f2bc23b51db3f4bef31dd6b70c4bca25da5a8f16db251_prof);

        
        $__internal_c2b115511a9b2d284890cee94cdaeb1f9eef903c243a1eeb6229e5c7a0dc48f1->leave($__internal_c2b115511a9b2d284890cee94cdaeb1f9eef903c243a1eeb6229e5c7a0dc48f1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c67f8a3152d80fc48eef2ab21b7e00f65823069c1d400338b9856f891be304b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c67f8a3152d80fc48eef2ab21b7e00f65823069c1d400338b9856f891be304b->enter($__internal_7c67f8a3152d80fc48eef2ab21b7e00f65823069c1d400338b9856f891be304b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f981affde5910f92dee29202e26b5f4afefa7afb3a47feb31032ad1c6c6f3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f981affde5910f92dee29202e26b5f4afefa7afb3a47feb31032ad1c6c6f3b0->enter($__internal_1f981affde5910f92dee29202e26b5f4afefa7afb3a47feb31032ad1c6c6f3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1f981affde5910f92dee29202e26b5f4afefa7afb3a47feb31032ad1c6c6f3b0->leave($__internal_1f981affde5910f92dee29202e26b5f4afefa7afb3a47feb31032ad1c6c6f3b0_prof);

        
        $__internal_7c67f8a3152d80fc48eef2ab21b7e00f65823069c1d400338b9856f891be304b->leave($__internal_7c67f8a3152d80fc48eef2ab21b7e00f65823069c1d400338b9856f891be304b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
