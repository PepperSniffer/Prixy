<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_fef02557823822b77875345106b8c3723bd683831d31b50a1c74764b8a2ba3e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fcff465e1024741a6fc6ef178c28ee406611f2ed5480211c6d490e064e2ab46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fcff465e1024741a6fc6ef178c28ee406611f2ed5480211c6d490e064e2ab46->enter($__internal_4fcff465e1024741a6fc6ef178c28ee406611f2ed5480211c6d490e064e2ab46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_0ececd71cf92fbbca3412ac6d8a1996cfad87f309d9beba28bf5f7f72f004d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ececd71cf92fbbca3412ac6d8a1996cfad87f309d9beba28bf5f7f72f004d96->enter($__internal_0ececd71cf92fbbca3412ac6d8a1996cfad87f309d9beba28bf5f7f72f004d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fcff465e1024741a6fc6ef178c28ee406611f2ed5480211c6d490e064e2ab46->leave($__internal_4fcff465e1024741a6fc6ef178c28ee406611f2ed5480211c6d490e064e2ab46_prof);

        
        $__internal_0ececd71cf92fbbca3412ac6d8a1996cfad87f309d9beba28bf5f7f72f004d96->leave($__internal_0ececd71cf92fbbca3412ac6d8a1996cfad87f309d9beba28bf5f7f72f004d96_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_29cb57aafad27aaf117ceb8a4934b50efeec7e7f5dfc2e3ce971df57950141de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29cb57aafad27aaf117ceb8a4934b50efeec7e7f5dfc2e3ce971df57950141de->enter($__internal_29cb57aafad27aaf117ceb8a4934b50efeec7e7f5dfc2e3ce971df57950141de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6566af3ae70c4470b48ef78b0b482fb2faacea49ec6c4e25edd8718410e1acd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6566af3ae70c4470b48ef78b0b482fb2faacea49ec6c4e25edd8718410e1acd4->enter($__internal_6566af3ae70c4470b48ef78b0b482fb2faacea49ec6c4e25edd8718410e1acd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_6566af3ae70c4470b48ef78b0b482fb2faacea49ec6c4e25edd8718410e1acd4->leave($__internal_6566af3ae70c4470b48ef78b0b482fb2faacea49ec6c4e25edd8718410e1acd4_prof);

        
        $__internal_29cb57aafad27aaf117ceb8a4934b50efeec7e7f5dfc2e3ce971df57950141de->leave($__internal_29cb57aafad27aaf117ceb8a4934b50efeec7e7f5dfc2e3ce971df57950141de_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
