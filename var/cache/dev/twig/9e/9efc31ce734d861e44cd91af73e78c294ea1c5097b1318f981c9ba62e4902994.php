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
        $__internal_da8472849317429e97d05815c5a48afcb432d8879102c0eb6971230d7fae0ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8472849317429e97d05815c5a48afcb432d8879102c0eb6971230d7fae0ba2->enter($__internal_da8472849317429e97d05815c5a48afcb432d8879102c0eb6971230d7fae0ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_92284fef45bbaa7d2e51ccf8cdeb04dbdf2f3318e8ac7de8a7aa569a5a75e363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92284fef45bbaa7d2e51ccf8cdeb04dbdf2f3318e8ac7de8a7aa569a5a75e363->enter($__internal_92284fef45bbaa7d2e51ccf8cdeb04dbdf2f3318e8ac7de8a7aa569a5a75e363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da8472849317429e97d05815c5a48afcb432d8879102c0eb6971230d7fae0ba2->leave($__internal_da8472849317429e97d05815c5a48afcb432d8879102c0eb6971230d7fae0ba2_prof);

        
        $__internal_92284fef45bbaa7d2e51ccf8cdeb04dbdf2f3318e8ac7de8a7aa569a5a75e363->leave($__internal_92284fef45bbaa7d2e51ccf8cdeb04dbdf2f3318e8ac7de8a7aa569a5a75e363_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_63edf302ef275a7365f31333409fee048c4643b990b4b88e03e467ddfed8cef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63edf302ef275a7365f31333409fee048c4643b990b4b88e03e467ddfed8cef5->enter($__internal_63edf302ef275a7365f31333409fee048c4643b990b4b88e03e467ddfed8cef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7ecd8813cff8b07b15c2853c672eaa94a67ceecda52ed7406cccbcbc4e45880a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ecd8813cff8b07b15c2853c672eaa94a67ceecda52ed7406cccbcbc4e45880a->enter($__internal_7ecd8813cff8b07b15c2853c672eaa94a67ceecda52ed7406cccbcbc4e45880a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7ecd8813cff8b07b15c2853c672eaa94a67ceecda52ed7406cccbcbc4e45880a->leave($__internal_7ecd8813cff8b07b15c2853c672eaa94a67ceecda52ed7406cccbcbc4e45880a_prof);

        
        $__internal_63edf302ef275a7365f31333409fee048c4643b990b4b88e03e467ddfed8cef5->leave($__internal_63edf302ef275a7365f31333409fee048c4643b990b4b88e03e467ddfed8cef5_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_584dbbf07df667df594c1bf5a4bf3c852f00e2bf6c2f5729fa32ca3b79f877f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584dbbf07df667df594c1bf5a4bf3c852f00e2bf6c2f5729fa32ca3b79f877f9->enter($__internal_584dbbf07df667df594c1bf5a4bf3c852f00e2bf6c2f5729fa32ca3b79f877f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_50a44d06966194cf7d350d70be23dd12dc957b83e824b12e144dac77c963c0c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a44d06966194cf7d350d70be23dd12dc957b83e824b12e144dac77c963c0c2->enter($__internal_50a44d06966194cf7d350d70be23dd12dc957b83e824b12e144dac77c963c0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_50a44d06966194cf7d350d70be23dd12dc957b83e824b12e144dac77c963c0c2->leave($__internal_50a44d06966194cf7d350d70be23dd12dc957b83e824b12e144dac77c963c0c2_prof);

        
        $__internal_584dbbf07df667df594c1bf5a4bf3c852f00e2bf6c2f5729fa32ca3b79f877f9->leave($__internal_584dbbf07df667df594c1bf5a4bf3c852f00e2bf6c2f5729fa32ca3b79f877f9_prof);

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
