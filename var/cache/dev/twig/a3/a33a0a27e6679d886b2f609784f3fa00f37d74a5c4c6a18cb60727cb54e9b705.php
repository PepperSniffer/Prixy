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
        $__internal_9a047759ac22c6ba0e49815e4ee76012d566a135dd5f33f6d490cf61f3bda0d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a047759ac22c6ba0e49815e4ee76012d566a135dd5f33f6d490cf61f3bda0d5->enter($__internal_9a047759ac22c6ba0e49815e4ee76012d566a135dd5f33f6d490cf61f3bda0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f82132560b57645c5afdd8cc8f6517023a0e456f79111c743e8b7987ed6576e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82132560b57645c5afdd8cc8f6517023a0e456f79111c743e8b7987ed6576e8->enter($__internal_f82132560b57645c5afdd8cc8f6517023a0e456f79111c743e8b7987ed6576e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a047759ac22c6ba0e49815e4ee76012d566a135dd5f33f6d490cf61f3bda0d5->leave($__internal_9a047759ac22c6ba0e49815e4ee76012d566a135dd5f33f6d490cf61f3bda0d5_prof);

        
        $__internal_f82132560b57645c5afdd8cc8f6517023a0e456f79111c743e8b7987ed6576e8->leave($__internal_f82132560b57645c5afdd8cc8f6517023a0e456f79111c743e8b7987ed6576e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae5dfc9205cd6f145de2c99ddcd1a45e848c0bdd648ab892b5f0c5444a4d7b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae5dfc9205cd6f145de2c99ddcd1a45e848c0bdd648ab892b5f0c5444a4d7b5f->enter($__internal_ae5dfc9205cd6f145de2c99ddcd1a45e848c0bdd648ab892b5f0c5444a4d7b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f58e95abfef82f9322621f301fc82bc676de683b5db057427ab25d8b7cfbf83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58e95abfef82f9322621f301fc82bc676de683b5db057427ab25d8b7cfbf83a->enter($__internal_f58e95abfef82f9322621f301fc82bc676de683b5db057427ab25d8b7cfbf83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f58e95abfef82f9322621f301fc82bc676de683b5db057427ab25d8b7cfbf83a->leave($__internal_f58e95abfef82f9322621f301fc82bc676de683b5db057427ab25d8b7cfbf83a_prof);

        
        $__internal_ae5dfc9205cd6f145de2c99ddcd1a45e848c0bdd648ab892b5f0c5444a4d7b5f->leave($__internal_ae5dfc9205cd6f145de2c99ddcd1a45e848c0bdd648ab892b5f0c5444a4d7b5f_prof);

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
