<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7004d5cbd4fe4132e529f4bfc0100f49e9af80f232f2e2e258dfc006b5857144 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_8db40d6d85915eaedf7eb5da86b07f3487e9cb26e9729f8267bf349a0fe76f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db40d6d85915eaedf7eb5da86b07f3487e9cb26e9729f8267bf349a0fe76f1f->enter($__internal_8db40d6d85915eaedf7eb5da86b07f3487e9cb26e9729f8267bf349a0fe76f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4308bb976375b6730d7caaac0aff5a5b8113e4e14ecdc9b0c6f08470ad21872d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4308bb976375b6730d7caaac0aff5a5b8113e4e14ecdc9b0c6f08470ad21872d->enter($__internal_4308bb976375b6730d7caaac0aff5a5b8113e4e14ecdc9b0c6f08470ad21872d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8db40d6d85915eaedf7eb5da86b07f3487e9cb26e9729f8267bf349a0fe76f1f->leave($__internal_8db40d6d85915eaedf7eb5da86b07f3487e9cb26e9729f8267bf349a0fe76f1f_prof);

        
        $__internal_4308bb976375b6730d7caaac0aff5a5b8113e4e14ecdc9b0c6f08470ad21872d->leave($__internal_4308bb976375b6730d7caaac0aff5a5b8113e4e14ecdc9b0c6f08470ad21872d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0f7ecfb26c11dc49ffed432f5b02d1d0d0f12ad3e8f89decf03e1b29ccd2923a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f7ecfb26c11dc49ffed432f5b02d1d0d0f12ad3e8f89decf03e1b29ccd2923a->enter($__internal_0f7ecfb26c11dc49ffed432f5b02d1d0d0f12ad3e8f89decf03e1b29ccd2923a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fd2adbfb3f8a0ea3efa310367b3a67870925f21d52e61af2f3c1c23b6947e367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2adbfb3f8a0ea3efa310367b3a67870925f21d52e61af2f3c1c23b6947e367->enter($__internal_fd2adbfb3f8a0ea3efa310367b3a67870925f21d52e61af2f3c1c23b6947e367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_fd2adbfb3f8a0ea3efa310367b3a67870925f21d52e61af2f3c1c23b6947e367->leave($__internal_fd2adbfb3f8a0ea3efa310367b3a67870925f21d52e61af2f3c1c23b6947e367_prof);

        
        $__internal_0f7ecfb26c11dc49ffed432f5b02d1d0d0f12ad3e8f89decf03e1b29ccd2923a->leave($__internal_0f7ecfb26c11dc49ffed432f5b02d1d0d0f12ad3e8f89decf03e1b29ccd2923a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
