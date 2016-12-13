<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ab41c2ca90ace46065d45551069c0e280e717ec75a5ac00fe77c559a0bb4dcf2 extends Twig_Template
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
        $__internal_77548f8d55d79d472b8b0a95400d0ca515a77ed0ebfb8b5bd1ab60575e5fa248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77548f8d55d79d472b8b0a95400d0ca515a77ed0ebfb8b5bd1ab60575e5fa248->enter($__internal_77548f8d55d79d472b8b0a95400d0ca515a77ed0ebfb8b5bd1ab60575e5fa248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c982c5d64090510fa2abfca1914be4cc08b5807551050fdc644191cb1aca5904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c982c5d64090510fa2abfca1914be4cc08b5807551050fdc644191cb1aca5904->enter($__internal_c982c5d64090510fa2abfca1914be4cc08b5807551050fdc644191cb1aca5904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77548f8d55d79d472b8b0a95400d0ca515a77ed0ebfb8b5bd1ab60575e5fa248->leave($__internal_77548f8d55d79d472b8b0a95400d0ca515a77ed0ebfb8b5bd1ab60575e5fa248_prof);

        
        $__internal_c982c5d64090510fa2abfca1914be4cc08b5807551050fdc644191cb1aca5904->leave($__internal_c982c5d64090510fa2abfca1914be4cc08b5807551050fdc644191cb1aca5904_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_776009b9f2d5bcad2e9e28a5ecfa9fe2978ce4cb9d3ae301d949e20e4710f874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776009b9f2d5bcad2e9e28a5ecfa9fe2978ce4cb9d3ae301d949e20e4710f874->enter($__internal_776009b9f2d5bcad2e9e28a5ecfa9fe2978ce4cb9d3ae301d949e20e4710f874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cd76f9ee9ef34097559200ba457bdd41426fe023238a515215ce5ef9a54ea17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd76f9ee9ef34097559200ba457bdd41426fe023238a515215ce5ef9a54ea17e->enter($__internal_cd76f9ee9ef34097559200ba457bdd41426fe023238a515215ce5ef9a54ea17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_cd76f9ee9ef34097559200ba457bdd41426fe023238a515215ce5ef9a54ea17e->leave($__internal_cd76f9ee9ef34097559200ba457bdd41426fe023238a515215ce5ef9a54ea17e_prof);

        
        $__internal_776009b9f2d5bcad2e9e28a5ecfa9fe2978ce4cb9d3ae301d949e20e4710f874->leave($__internal_776009b9f2d5bcad2e9e28a5ecfa9fe2978ce4cb9d3ae301d949e20e4710f874_prof);

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
