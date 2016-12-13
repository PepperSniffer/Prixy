<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_a752aee79793d0667531555e7dc634b9fd4f846665a34940cc930ee5df712224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_620e3e7ed26b0ce6a39d57c8164117d4d6ab43ded5d2105469680a605c188226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620e3e7ed26b0ce6a39d57c8164117d4d6ab43ded5d2105469680a605c188226->enter($__internal_620e3e7ed26b0ce6a39d57c8164117d4d6ab43ded5d2105469680a605c188226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_7bdb70644ea58b33a187d3788c2c6300009c0e2650b9f779705776f1f1d26f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bdb70644ea58b33a187d3788c2c6300009c0e2650b9f779705776f1f1d26f2d->enter($__internal_7bdb70644ea58b33a187d3788c2c6300009c0e2650b9f779705776f1f1d26f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_620e3e7ed26b0ce6a39d57c8164117d4d6ab43ded5d2105469680a605c188226->leave($__internal_620e3e7ed26b0ce6a39d57c8164117d4d6ab43ded5d2105469680a605c188226_prof);

        
        $__internal_7bdb70644ea58b33a187d3788c2c6300009c0e2650b9f779705776f1f1d26f2d->leave($__internal_7bdb70644ea58b33a187d3788c2c6300009c0e2650b9f779705776f1f1d26f2d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_562124ff6d52ae6073a76b8d58e7020e4330daa3de0d0ffc64309135cda0611e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562124ff6d52ae6073a76b8d58e7020e4330daa3de0d0ffc64309135cda0611e->enter($__internal_562124ff6d52ae6073a76b8d58e7020e4330daa3de0d0ffc64309135cda0611e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3bf0eaa7935e5f16a9384bec301855148293f158fa995aa5b0873b09e67b296a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf0eaa7935e5f16a9384bec301855148293f158fa995aa5b0873b09e67b296a->enter($__internal_3bf0eaa7935e5f16a9384bec301855148293f158fa995aa5b0873b09e67b296a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_3bf0eaa7935e5f16a9384bec301855148293f158fa995aa5b0873b09e67b296a->leave($__internal_3bf0eaa7935e5f16a9384bec301855148293f158fa995aa5b0873b09e67b296a_prof);

        
        $__internal_562124ff6d52ae6073a76b8d58e7020e4330daa3de0d0ffc64309135cda0611e->leave($__internal_562124ff6d52ae6073a76b8d58e7020e4330daa3de0d0ffc64309135cda0611e_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_21efcc52144a5f5a34280e8ab68734ad61f6db0dce2c4e2dfdbbae57760371fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21efcc52144a5f5a34280e8ab68734ad61f6db0dce2c4e2dfdbbae57760371fc->enter($__internal_21efcc52144a5f5a34280e8ab68734ad61f6db0dce2c4e2dfdbbae57760371fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a22c018f7039fd84f48843f3d9b7581a18862f0f9f0ec9f85f2136f57604978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a22c018f7039fd84f48843f3d9b7581a18862f0f9f0ec9f85f2136f57604978->enter($__internal_0a22c018f7039fd84f48843f3d9b7581a18862f0f9f0ec9f85f2136f57604978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0a22c018f7039fd84f48843f3d9b7581a18862f0f9f0ec9f85f2136f57604978->leave($__internal_0a22c018f7039fd84f48843f3d9b7581a18862f0f9f0ec9f85f2136f57604978_prof);

        
        $__internal_21efcc52144a5f5a34280e8ab68734ad61f6db0dce2c4e2dfdbbae57760371fc->leave($__internal_21efcc52144a5f5a34280e8ab68734ad61f6db0dce2c4e2dfdbbae57760371fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
