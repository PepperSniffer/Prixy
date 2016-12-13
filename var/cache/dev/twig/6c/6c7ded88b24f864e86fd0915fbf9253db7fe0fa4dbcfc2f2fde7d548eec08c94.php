<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_55b2c81a7e60a024b9df3a9091c1095d6f40119e973aee39a6afdac505d68a14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_e585121812c2f92a39af6187d6b1b523bb3e0261ca5c163015355bc28f56833a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e585121812c2f92a39af6187d6b1b523bb3e0261ca5c163015355bc28f56833a->enter($__internal_e585121812c2f92a39af6187d6b1b523bb3e0261ca5c163015355bc28f56833a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_1764d2571d63a738d935fd25b1ab5c99fb1cda5628160a6708b32f4016ea4f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1764d2571d63a738d935fd25b1ab5c99fb1cda5628160a6708b32f4016ea4f04->enter($__internal_1764d2571d63a738d935fd25b1ab5c99fb1cda5628160a6708b32f4016ea4f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e585121812c2f92a39af6187d6b1b523bb3e0261ca5c163015355bc28f56833a->leave($__internal_e585121812c2f92a39af6187d6b1b523bb3e0261ca5c163015355bc28f56833a_prof);

        
        $__internal_1764d2571d63a738d935fd25b1ab5c99fb1cda5628160a6708b32f4016ea4f04->leave($__internal_1764d2571d63a738d935fd25b1ab5c99fb1cda5628160a6708b32f4016ea4f04_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3e8555e92a09f72f76411b997329d2098d54bf21bda7f32995aace6528c10c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8555e92a09f72f76411b997329d2098d54bf21bda7f32995aace6528c10c74->enter($__internal_3e8555e92a09f72f76411b997329d2098d54bf21bda7f32995aace6528c10c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e71243c2b4f5aa6fcd9b2d0199a5acb052eb47cd214a4f706da1d03c535e4c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71243c2b4f5aa6fcd9b2d0199a5acb052eb47cd214a4f706da1d03c535e4c2b->enter($__internal_e71243c2b4f5aa6fcd9b2d0199a5acb052eb47cd214a4f706da1d03c535e4c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e71243c2b4f5aa6fcd9b2d0199a5acb052eb47cd214a4f706da1d03c535e4c2b->leave($__internal_e71243c2b4f5aa6fcd9b2d0199a5acb052eb47cd214a4f706da1d03c535e4c2b_prof);

        
        $__internal_3e8555e92a09f72f76411b997329d2098d54bf21bda7f32995aace6528c10c74->leave($__internal_3e8555e92a09f72f76411b997329d2098d54bf21bda7f32995aace6528c10c74_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ee2812a201bf80a4efaa16859991de086ad2d284c3a0afda4bce0ea4d4995a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee2812a201bf80a4efaa16859991de086ad2d284c3a0afda4bce0ea4d4995a8->enter($__internal_1ee2812a201bf80a4efaa16859991de086ad2d284c3a0afda4bce0ea4d4995a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ab48e38dfda3ca9fe25c777640460b50fc1810144a40b04b638b1d29cbddcd77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab48e38dfda3ca9fe25c777640460b50fc1810144a40b04b638b1d29cbddcd77->enter($__internal_ab48e38dfda3ca9fe25c777640460b50fc1810144a40b04b638b1d29cbddcd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ab48e38dfda3ca9fe25c777640460b50fc1810144a40b04b638b1d29cbddcd77->leave($__internal_ab48e38dfda3ca9fe25c777640460b50fc1810144a40b04b638b1d29cbddcd77_prof);

        
        $__internal_1ee2812a201bf80a4efaa16859991de086ad2d284c3a0afda4bce0ea4d4995a8->leave($__internal_1ee2812a201bf80a4efaa16859991de086ad2d284c3a0afda4bce0ea4d4995a8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
