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
        $__internal_84a4c6276432c791d2b9240f37e052a36d323336b2ffa0a05af19f226be27744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a4c6276432c791d2b9240f37e052a36d323336b2ffa0a05af19f226be27744->enter($__internal_84a4c6276432c791d2b9240f37e052a36d323336b2ffa0a05af19f226be27744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6266210ff481f25b036ae493a96789db5370cf897ffac70828c44f80c991fb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6266210ff481f25b036ae493a96789db5370cf897ffac70828c44f80c991fb52->enter($__internal_6266210ff481f25b036ae493a96789db5370cf897ffac70828c44f80c991fb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84a4c6276432c791d2b9240f37e052a36d323336b2ffa0a05af19f226be27744->leave($__internal_84a4c6276432c791d2b9240f37e052a36d323336b2ffa0a05af19f226be27744_prof);

        
        $__internal_6266210ff481f25b036ae493a96789db5370cf897ffac70828c44f80c991fb52->leave($__internal_6266210ff481f25b036ae493a96789db5370cf897ffac70828c44f80c991fb52_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c75c123b7d0a73659dd07fe5002fb9d48fc9f1e7e3bf52b69d4caf8e2e6da408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c75c123b7d0a73659dd07fe5002fb9d48fc9f1e7e3bf52b69d4caf8e2e6da408->enter($__internal_c75c123b7d0a73659dd07fe5002fb9d48fc9f1e7e3bf52b69d4caf8e2e6da408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2858cda9b4a7ac60bcfd85b4e31eb12c47200f708a5e8847de92eaaefb8d0b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2858cda9b4a7ac60bcfd85b4e31eb12c47200f708a5e8847de92eaaefb8d0b8f->enter($__internal_2858cda9b4a7ac60bcfd85b4e31eb12c47200f708a5e8847de92eaaefb8d0b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2858cda9b4a7ac60bcfd85b4e31eb12c47200f708a5e8847de92eaaefb8d0b8f->leave($__internal_2858cda9b4a7ac60bcfd85b4e31eb12c47200f708a5e8847de92eaaefb8d0b8f_prof);

        
        $__internal_c75c123b7d0a73659dd07fe5002fb9d48fc9f1e7e3bf52b69d4caf8e2e6da408->leave($__internal_c75c123b7d0a73659dd07fe5002fb9d48fc9f1e7e3bf52b69d4caf8e2e6da408_prof);

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
