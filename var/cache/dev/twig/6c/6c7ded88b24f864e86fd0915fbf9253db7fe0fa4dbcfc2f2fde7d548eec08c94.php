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
        $__internal_26e40f4859457569d67e07a63adab0ebbe5d6c8f7484e517776620f4813a4705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e40f4859457569d67e07a63adab0ebbe5d6c8f7484e517776620f4813a4705->enter($__internal_26e40f4859457569d67e07a63adab0ebbe5d6c8f7484e517776620f4813a4705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f85c87fe6d9278ed7b8fb41a3dfed8c64f60c7cf008d8c18ca3d2e14a2edb6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85c87fe6d9278ed7b8fb41a3dfed8c64f60c7cf008d8c18ca3d2e14a2edb6a3->enter($__internal_f85c87fe6d9278ed7b8fb41a3dfed8c64f60c7cf008d8c18ca3d2e14a2edb6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26e40f4859457569d67e07a63adab0ebbe5d6c8f7484e517776620f4813a4705->leave($__internal_26e40f4859457569d67e07a63adab0ebbe5d6c8f7484e517776620f4813a4705_prof);

        
        $__internal_f85c87fe6d9278ed7b8fb41a3dfed8c64f60c7cf008d8c18ca3d2e14a2edb6a3->leave($__internal_f85c87fe6d9278ed7b8fb41a3dfed8c64f60c7cf008d8c18ca3d2e14a2edb6a3_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_782fabdcb1c38d779a3056d7934fd272c1ea3628bbaed12dac53eabc6dd20492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782fabdcb1c38d779a3056d7934fd272c1ea3628bbaed12dac53eabc6dd20492->enter($__internal_782fabdcb1c38d779a3056d7934fd272c1ea3628bbaed12dac53eabc6dd20492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9aad3f4836b35d9c3f52cc9115019de616c863fd58c29c3c4b5ff93b96461358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aad3f4836b35d9c3f52cc9115019de616c863fd58c29c3c4b5ff93b96461358->enter($__internal_9aad3f4836b35d9c3f52cc9115019de616c863fd58c29c3c4b5ff93b96461358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_9aad3f4836b35d9c3f52cc9115019de616c863fd58c29c3c4b5ff93b96461358->leave($__internal_9aad3f4836b35d9c3f52cc9115019de616c863fd58c29c3c4b5ff93b96461358_prof);

        
        $__internal_782fabdcb1c38d779a3056d7934fd272c1ea3628bbaed12dac53eabc6dd20492->leave($__internal_782fabdcb1c38d779a3056d7934fd272c1ea3628bbaed12dac53eabc6dd20492_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ecf75b633dc3b49408b5aee5321b6f9b5fc89c006d0f8ea1cbb1381014f238d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf75b633dc3b49408b5aee5321b6f9b5fc89c006d0f8ea1cbb1381014f238d8->enter($__internal_ecf75b633dc3b49408b5aee5321b6f9b5fc89c006d0f8ea1cbb1381014f238d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ca9b80cc13dc39cff2c619c460e93f83a53ed93d6b5ed3d9d3bf2b636abe60d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca9b80cc13dc39cff2c619c460e93f83a53ed93d6b5ed3d9d3bf2b636abe60d->enter($__internal_4ca9b80cc13dc39cff2c619c460e93f83a53ed93d6b5ed3d9d3bf2b636abe60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4ca9b80cc13dc39cff2c619c460e93f83a53ed93d6b5ed3d9d3bf2b636abe60d->leave($__internal_4ca9b80cc13dc39cff2c619c460e93f83a53ed93d6b5ed3d9d3bf2b636abe60d_prof);

        
        $__internal_ecf75b633dc3b49408b5aee5321b6f9b5fc89c006d0f8ea1cbb1381014f238d8->leave($__internal_ecf75b633dc3b49408b5aee5321b6f9b5fc89c006d0f8ea1cbb1381014f238d8_prof);

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
