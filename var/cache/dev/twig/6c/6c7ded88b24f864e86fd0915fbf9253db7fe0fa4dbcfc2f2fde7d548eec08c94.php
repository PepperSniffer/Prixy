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
        $__internal_4bcf85a17de1b5b1bd9020e0438046e40a3a5f40fe422216af9145eaff973a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bcf85a17de1b5b1bd9020e0438046e40a3a5f40fe422216af9145eaff973a04->enter($__internal_4bcf85a17de1b5b1bd9020e0438046e40a3a5f40fe422216af9145eaff973a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_2d96c1696cfb36d4ccd663ca5aadbfe78306c1f45303d41af840e2862a9a108e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d96c1696cfb36d4ccd663ca5aadbfe78306c1f45303d41af840e2862a9a108e->enter($__internal_2d96c1696cfb36d4ccd663ca5aadbfe78306c1f45303d41af840e2862a9a108e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bcf85a17de1b5b1bd9020e0438046e40a3a5f40fe422216af9145eaff973a04->leave($__internal_4bcf85a17de1b5b1bd9020e0438046e40a3a5f40fe422216af9145eaff973a04_prof);

        
        $__internal_2d96c1696cfb36d4ccd663ca5aadbfe78306c1f45303d41af840e2862a9a108e->leave($__internal_2d96c1696cfb36d4ccd663ca5aadbfe78306c1f45303d41af840e2862a9a108e_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_cf954e85886e41ea2440bd28e3d0b2cd63b65f05cc34f1dc57179ec46e9e4de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf954e85886e41ea2440bd28e3d0b2cd63b65f05cc34f1dc57179ec46e9e4de7->enter($__internal_cf954e85886e41ea2440bd28e3d0b2cd63b65f05cc34f1dc57179ec46e9e4de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0f17415d08d5bcc147005897eca7cda4ac46d202c398a7ef1618ec06ea26be73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f17415d08d5bcc147005897eca7cda4ac46d202c398a7ef1618ec06ea26be73->enter($__internal_0f17415d08d5bcc147005897eca7cda4ac46d202c398a7ef1618ec06ea26be73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_0f17415d08d5bcc147005897eca7cda4ac46d202c398a7ef1618ec06ea26be73->leave($__internal_0f17415d08d5bcc147005897eca7cda4ac46d202c398a7ef1618ec06ea26be73_prof);

        
        $__internal_cf954e85886e41ea2440bd28e3d0b2cd63b65f05cc34f1dc57179ec46e9e4de7->leave($__internal_cf954e85886e41ea2440bd28e3d0b2cd63b65f05cc34f1dc57179ec46e9e4de7_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc163837fae0686c60c55af4d6ef4a93a65f54a138128376546385d4559ab362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc163837fae0686c60c55af4d6ef4a93a65f54a138128376546385d4559ab362->enter($__internal_fc163837fae0686c60c55af4d6ef4a93a65f54a138128376546385d4559ab362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d7cd54ecc2790c8a75c11c6d88896bb08acb070cbab19a0458a48db07f5a5e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7cd54ecc2790c8a75c11c6d88896bb08acb070cbab19a0458a48db07f5a5e83->enter($__internal_d7cd54ecc2790c8a75c11c6d88896bb08acb070cbab19a0458a48db07f5a5e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d7cd54ecc2790c8a75c11c6d88896bb08acb070cbab19a0458a48db07f5a5e83->leave($__internal_d7cd54ecc2790c8a75c11c6d88896bb08acb070cbab19a0458a48db07f5a5e83_prof);

        
        $__internal_fc163837fae0686c60c55af4d6ef4a93a65f54a138128376546385d4559ab362->leave($__internal_fc163837fae0686c60c55af4d6ef4a93a65f54a138128376546385d4559ab362_prof);

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
