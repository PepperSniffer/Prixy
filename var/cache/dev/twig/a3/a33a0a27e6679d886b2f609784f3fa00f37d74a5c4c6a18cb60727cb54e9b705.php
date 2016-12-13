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
        $__internal_7681788a020d48296bea132fea780c98ba2a4d9b452f4ccce4d944b55a9fec8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7681788a020d48296bea132fea780c98ba2a4d9b452f4ccce4d944b55a9fec8a->enter($__internal_7681788a020d48296bea132fea780c98ba2a4d9b452f4ccce4d944b55a9fec8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8ecabc1d6bce2d4e793f88a3045b892961b5667f276e3439833bf333cbfc5160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ecabc1d6bce2d4e793f88a3045b892961b5667f276e3439833bf333cbfc5160->enter($__internal_8ecabc1d6bce2d4e793f88a3045b892961b5667f276e3439833bf333cbfc5160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7681788a020d48296bea132fea780c98ba2a4d9b452f4ccce4d944b55a9fec8a->leave($__internal_7681788a020d48296bea132fea780c98ba2a4d9b452f4ccce4d944b55a9fec8a_prof);

        
        $__internal_8ecabc1d6bce2d4e793f88a3045b892961b5667f276e3439833bf333cbfc5160->leave($__internal_8ecabc1d6bce2d4e793f88a3045b892961b5667f276e3439833bf333cbfc5160_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_657952e81c3ccc6e0bb4a9c1c091343c1e65f363b4c88ad89a832d312dd8480c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657952e81c3ccc6e0bb4a9c1c091343c1e65f363b4c88ad89a832d312dd8480c->enter($__internal_657952e81c3ccc6e0bb4a9c1c091343c1e65f363b4c88ad89a832d312dd8480c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cee0556fc242546ef4fc72fa86826baf213f6cafb7b56080b31a717280752a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee0556fc242546ef4fc72fa86826baf213f6cafb7b56080b31a717280752a73->enter($__internal_cee0556fc242546ef4fc72fa86826baf213f6cafb7b56080b31a717280752a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_cee0556fc242546ef4fc72fa86826baf213f6cafb7b56080b31a717280752a73->leave($__internal_cee0556fc242546ef4fc72fa86826baf213f6cafb7b56080b31a717280752a73_prof);

        
        $__internal_657952e81c3ccc6e0bb4a9c1c091343c1e65f363b4c88ad89a832d312dd8480c->leave($__internal_657952e81c3ccc6e0bb4a9c1c091343c1e65f363b4c88ad89a832d312dd8480c_prof);

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
