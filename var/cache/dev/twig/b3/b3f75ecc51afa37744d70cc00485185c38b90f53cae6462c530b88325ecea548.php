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
        $__internal_624bcb8d2fc07051dadf71f35ff44b44c74dc1c410a908f6bd15596e9f1bf7cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624bcb8d2fc07051dadf71f35ff44b44c74dc1c410a908f6bd15596e9f1bf7cf->enter($__internal_624bcb8d2fc07051dadf71f35ff44b44c74dc1c410a908f6bd15596e9f1bf7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_b5ff2eafa21bfc49be4ee29eb385fee551f8309fa2d498f6b9589c6a77a34d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ff2eafa21bfc49be4ee29eb385fee551f8309fa2d498f6b9589c6a77a34d2c->enter($__internal_b5ff2eafa21bfc49be4ee29eb385fee551f8309fa2d498f6b9589c6a77a34d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_624bcb8d2fc07051dadf71f35ff44b44c74dc1c410a908f6bd15596e9f1bf7cf->leave($__internal_624bcb8d2fc07051dadf71f35ff44b44c74dc1c410a908f6bd15596e9f1bf7cf_prof);

        
        $__internal_b5ff2eafa21bfc49be4ee29eb385fee551f8309fa2d498f6b9589c6a77a34d2c->leave($__internal_b5ff2eafa21bfc49be4ee29eb385fee551f8309fa2d498f6b9589c6a77a34d2c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8d43a08abd5f54cadd9b91f28d06a5691b9f10af37a559ce425572496fe847d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d43a08abd5f54cadd9b91f28d06a5691b9f10af37a559ce425572496fe847d->enter($__internal_d8d43a08abd5f54cadd9b91f28d06a5691b9f10af37a559ce425572496fe847d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4902edcaa6b438bd1ca11404c93f844d5fc62419caebded2b8585ced1c714823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4902edcaa6b438bd1ca11404c93f844d5fc62419caebded2b8585ced1c714823->enter($__internal_4902edcaa6b438bd1ca11404c93f844d5fc62419caebded2b8585ced1c714823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4902edcaa6b438bd1ca11404c93f844d5fc62419caebded2b8585ced1c714823->leave($__internal_4902edcaa6b438bd1ca11404c93f844d5fc62419caebded2b8585ced1c714823_prof);

        
        $__internal_d8d43a08abd5f54cadd9b91f28d06a5691b9f10af37a559ce425572496fe847d->leave($__internal_d8d43a08abd5f54cadd9b91f28d06a5691b9f10af37a559ce425572496fe847d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_11701b6ff37368fa9f81b9f6735f5e57e28b05b6d8a03ec553e73a9ac8fbbf6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11701b6ff37368fa9f81b9f6735f5e57e28b05b6d8a03ec553e73a9ac8fbbf6c->enter($__internal_11701b6ff37368fa9f81b9f6735f5e57e28b05b6d8a03ec553e73a9ac8fbbf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6ad042cfed388fa0a284a59cbb54cd234c40400f775ac4f866016ffb770978b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ad042cfed388fa0a284a59cbb54cd234c40400f775ac4f866016ffb770978b->enter($__internal_c6ad042cfed388fa0a284a59cbb54cd234c40400f775ac4f866016ffb770978b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c6ad042cfed388fa0a284a59cbb54cd234c40400f775ac4f866016ffb770978b->leave($__internal_c6ad042cfed388fa0a284a59cbb54cd234c40400f775ac4f866016ffb770978b_prof);

        
        $__internal_11701b6ff37368fa9f81b9f6735f5e57e28b05b6d8a03ec553e73a9ac8fbbf6c->leave($__internal_11701b6ff37368fa9f81b9f6735f5e57e28b05b6d8a03ec553e73a9ac8fbbf6c_prof);

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
