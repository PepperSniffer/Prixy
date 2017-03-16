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
        $__internal_ba58f459d6aebf1a40a39e41ee0d17d55a65b50970549817d8e44d1e87b86d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba58f459d6aebf1a40a39e41ee0d17d55a65b50970549817d8e44d1e87b86d00->enter($__internal_ba58f459d6aebf1a40a39e41ee0d17d55a65b50970549817d8e44d1e87b86d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_e54b2d032e90bfe6b6ff5fe58c1878cab0bab4ae472014eaa416550b3fd5db52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54b2d032e90bfe6b6ff5fe58c1878cab0bab4ae472014eaa416550b3fd5db52->enter($__internal_e54b2d032e90bfe6b6ff5fe58c1878cab0bab4ae472014eaa416550b3fd5db52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba58f459d6aebf1a40a39e41ee0d17d55a65b50970549817d8e44d1e87b86d00->leave($__internal_ba58f459d6aebf1a40a39e41ee0d17d55a65b50970549817d8e44d1e87b86d00_prof);

        
        $__internal_e54b2d032e90bfe6b6ff5fe58c1878cab0bab4ae472014eaa416550b3fd5db52->leave($__internal_e54b2d032e90bfe6b6ff5fe58c1878cab0bab4ae472014eaa416550b3fd5db52_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c57438d64fd0b6a4a2196705369a8c31986e4631939778c9c3da70bd0c71b3f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c57438d64fd0b6a4a2196705369a8c31986e4631939778c9c3da70bd0c71b3f4->enter($__internal_c57438d64fd0b6a4a2196705369a8c31986e4631939778c9c3da70bd0c71b3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_60910ce278faa29e06b3c55d1e57b8d5b599b106eecf908ba16856a6cd2f6401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60910ce278faa29e06b3c55d1e57b8d5b599b106eecf908ba16856a6cd2f6401->enter($__internal_60910ce278faa29e06b3c55d1e57b8d5b599b106eecf908ba16856a6cd2f6401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_60910ce278faa29e06b3c55d1e57b8d5b599b106eecf908ba16856a6cd2f6401->leave($__internal_60910ce278faa29e06b3c55d1e57b8d5b599b106eecf908ba16856a6cd2f6401_prof);

        
        $__internal_c57438d64fd0b6a4a2196705369a8c31986e4631939778c9c3da70bd0c71b3f4->leave($__internal_c57438d64fd0b6a4a2196705369a8c31986e4631939778c9c3da70bd0c71b3f4_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_99d2d652fcb1912a856380798cab66b9a9c00770bd04d6d07ba1561e9fcdd84e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d2d652fcb1912a856380798cab66b9a9c00770bd04d6d07ba1561e9fcdd84e->enter($__internal_99d2d652fcb1912a856380798cab66b9a9c00770bd04d6d07ba1561e9fcdd84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ac93f824c30b97d1d0a52b3db29b6f26408dcf204d96ae1b6e10c5007abc20c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac93f824c30b97d1d0a52b3db29b6f26408dcf204d96ae1b6e10c5007abc20c0->enter($__internal_ac93f824c30b97d1d0a52b3db29b6f26408dcf204d96ae1b6e10c5007abc20c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ac93f824c30b97d1d0a52b3db29b6f26408dcf204d96ae1b6e10c5007abc20c0->leave($__internal_ac93f824c30b97d1d0a52b3db29b6f26408dcf204d96ae1b6e10c5007abc20c0_prof);

        
        $__internal_99d2d652fcb1912a856380798cab66b9a9c00770bd04d6d07ba1561e9fcdd84e->leave($__internal_99d2d652fcb1912a856380798cab66b9a9c00770bd04d6d07ba1561e9fcdd84e_prof);

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
