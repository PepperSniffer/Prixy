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
        $__internal_7a64f8e315cc86a71f5040a20fdfe662fb54454eaea8fc0dff5ae3db271efb76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a64f8e315cc86a71f5040a20fdfe662fb54454eaea8fc0dff5ae3db271efb76->enter($__internal_7a64f8e315cc86a71f5040a20fdfe662fb54454eaea8fc0dff5ae3db271efb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8dee26e56e1fcc8f1bf2076950a29109fe085ff99ca11cf99316d0caf1d33801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dee26e56e1fcc8f1bf2076950a29109fe085ff99ca11cf99316d0caf1d33801->enter($__internal_8dee26e56e1fcc8f1bf2076950a29109fe085ff99ca11cf99316d0caf1d33801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a64f8e315cc86a71f5040a20fdfe662fb54454eaea8fc0dff5ae3db271efb76->leave($__internal_7a64f8e315cc86a71f5040a20fdfe662fb54454eaea8fc0dff5ae3db271efb76_prof);

        
        $__internal_8dee26e56e1fcc8f1bf2076950a29109fe085ff99ca11cf99316d0caf1d33801->leave($__internal_8dee26e56e1fcc8f1bf2076950a29109fe085ff99ca11cf99316d0caf1d33801_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0e41ad48063b83aeacdb3a42c1c07e91af9ce7c88f50f97fbf126585e9e240b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e41ad48063b83aeacdb3a42c1c07e91af9ce7c88f50f97fbf126585e9e240b0->enter($__internal_0e41ad48063b83aeacdb3a42c1c07e91af9ce7c88f50f97fbf126585e9e240b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2b996c0ef5fe5a77d7e7c37ebc058867aa09e83012e016c5e30c74a9b9fe1e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b996c0ef5fe5a77d7e7c37ebc058867aa09e83012e016c5e30c74a9b9fe1e95->enter($__internal_2b996c0ef5fe5a77d7e7c37ebc058867aa09e83012e016c5e30c74a9b9fe1e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_2b996c0ef5fe5a77d7e7c37ebc058867aa09e83012e016c5e30c74a9b9fe1e95->leave($__internal_2b996c0ef5fe5a77d7e7c37ebc058867aa09e83012e016c5e30c74a9b9fe1e95_prof);

        
        $__internal_0e41ad48063b83aeacdb3a42c1c07e91af9ce7c88f50f97fbf126585e9e240b0->leave($__internal_0e41ad48063b83aeacdb3a42c1c07e91af9ce7c88f50f97fbf126585e9e240b0_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e5670a3c69d7168a43763e24ea1034fcc808256041189b10ddb3a07b9ddcf05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e5670a3c69d7168a43763e24ea1034fcc808256041189b10ddb3a07b9ddcf05->enter($__internal_6e5670a3c69d7168a43763e24ea1034fcc808256041189b10ddb3a07b9ddcf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83096cf392d62f6729f6415e6707856d06c58e841de5f9ac0d6848663bfaa2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83096cf392d62f6729f6415e6707856d06c58e841de5f9ac0d6848663bfaa2ee->enter($__internal_83096cf392d62f6729f6415e6707856d06c58e841de5f9ac0d6848663bfaa2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_83096cf392d62f6729f6415e6707856d06c58e841de5f9ac0d6848663bfaa2ee->leave($__internal_83096cf392d62f6729f6415e6707856d06c58e841de5f9ac0d6848663bfaa2ee_prof);

        
        $__internal_6e5670a3c69d7168a43763e24ea1034fcc808256041189b10ddb3a07b9ddcf05->leave($__internal_6e5670a3c69d7168a43763e24ea1034fcc808256041189b10ddb3a07b9ddcf05_prof);

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