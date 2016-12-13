<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6634685ffb0aa1f1edc5c12348b81b6f206d448d580893099233eb83f9db0da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61348975f61c5d256af6b600cafa12e3dd46f4b163ca02d7a16b8e0cda138348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61348975f61c5d256af6b600cafa12e3dd46f4b163ca02d7a16b8e0cda138348->enter($__internal_61348975f61c5d256af6b600cafa12e3dd46f4b163ca02d7a16b8e0cda138348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_d8fdd1a35162ecfa8d8774d5dee8371731e569c819e34e73fbd61fce64c10ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8fdd1a35162ecfa8d8774d5dee8371731e569c819e34e73fbd61fce64c10ce2->enter($__internal_d8fdd1a35162ecfa8d8774d5dee8371731e569c819e34e73fbd61fce64c10ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61348975f61c5d256af6b600cafa12e3dd46f4b163ca02d7a16b8e0cda138348->leave($__internal_61348975f61c5d256af6b600cafa12e3dd46f4b163ca02d7a16b8e0cda138348_prof);

        
        $__internal_d8fdd1a35162ecfa8d8774d5dee8371731e569c819e34e73fbd61fce64c10ce2->leave($__internal_d8fdd1a35162ecfa8d8774d5dee8371731e569c819e34e73fbd61fce64c10ce2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c2beb0c190d98f6546cf1cc8e84e97ca61ba7ea69b08650778e327d5352992c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2beb0c190d98f6546cf1cc8e84e97ca61ba7ea69b08650778e327d5352992c->enter($__internal_9c2beb0c190d98f6546cf1cc8e84e97ca61ba7ea69b08650778e327d5352992c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da5f4b3ec00e8cc0de71edebc3d14aaef63a9e9d5a567493f40095b56249d563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5f4b3ec00e8cc0de71edebc3d14aaef63a9e9d5a567493f40095b56249d563->enter($__internal_da5f4b3ec00e8cc0de71edebc3d14aaef63a9e9d5a567493f40095b56249d563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_da5f4b3ec00e8cc0de71edebc3d14aaef63a9e9d5a567493f40095b56249d563->leave($__internal_da5f4b3ec00e8cc0de71edebc3d14aaef63a9e9d5a567493f40095b56249d563_prof);

        
        $__internal_9c2beb0c190d98f6546cf1cc8e84e97ca61ba7ea69b08650778e327d5352992c->leave($__internal_9c2beb0c190d98f6546cf1cc8e84e97ca61ba7ea69b08650778e327d5352992c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_73c57da90bab765d0dc5974d02abdbe7133a6ed026f7fbfc7866c9bc9a17c5c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c57da90bab765d0dc5974d02abdbe7133a6ed026f7fbfc7866c9bc9a17c5c7->enter($__internal_73c57da90bab765d0dc5974d02abdbe7133a6ed026f7fbfc7866c9bc9a17c5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ea8ac14e13846f0b480ce4c3fed2d0c8f2767063c6722dccd7e1e37b66bee7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea8ac14e13846f0b480ce4c3fed2d0c8f2767063c6722dccd7e1e37b66bee7a->enter($__internal_8ea8ac14e13846f0b480ce4c3fed2d0c8f2767063c6722dccd7e1e37b66bee7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8ea8ac14e13846f0b480ce4c3fed2d0c8f2767063c6722dccd7e1e37b66bee7a->leave($__internal_8ea8ac14e13846f0b480ce4c3fed2d0c8f2767063c6722dccd7e1e37b66bee7a_prof);

        
        $__internal_73c57da90bab765d0dc5974d02abdbe7133a6ed026f7fbfc7866c9bc9a17c5c7->leave($__internal_73c57da90bab765d0dc5974d02abdbe7133a6ed026f7fbfc7866c9bc9a17c5c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
