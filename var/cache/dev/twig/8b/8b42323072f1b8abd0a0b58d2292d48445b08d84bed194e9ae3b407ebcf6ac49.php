<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_38ae47e524781d8a308a0f93cdd67217a19b807a20ed19b9bf4b3766120a981c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6eaeecff8b84b2f03f8ec0ef92cd996e70dd3bbd0998cbc9f808df0a707b694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6eaeecff8b84b2f03f8ec0ef92cd996e70dd3bbd0998cbc9f808df0a707b694->enter($__internal_a6eaeecff8b84b2f03f8ec0ef92cd996e70dd3bbd0998cbc9f808df0a707b694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ad4a38be70f91919bab715d2522cb2dc1d6bd6f451cdd9583df03ed85d725c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4a38be70f91919bab715d2522cb2dc1d6bd6f451cdd9583df03ed85d725c0f->enter($__internal_ad4a38be70f91919bab715d2522cb2dc1d6bd6f451cdd9583df03ed85d725c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6eaeecff8b84b2f03f8ec0ef92cd996e70dd3bbd0998cbc9f808df0a707b694->leave($__internal_a6eaeecff8b84b2f03f8ec0ef92cd996e70dd3bbd0998cbc9f808df0a707b694_prof);

        
        $__internal_ad4a38be70f91919bab715d2522cb2dc1d6bd6f451cdd9583df03ed85d725c0f->leave($__internal_ad4a38be70f91919bab715d2522cb2dc1d6bd6f451cdd9583df03ed85d725c0f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b33ec9904529e9297313b56563067ee9635fbf757122148bd52b0c44f6d893ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33ec9904529e9297313b56563067ee9635fbf757122148bd52b0c44f6d893ab->enter($__internal_b33ec9904529e9297313b56563067ee9635fbf757122148bd52b0c44f6d893ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cb619fa462e2b5ecabd68402f80c8592023d2efe413a37ac0003e66a50fb58e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb619fa462e2b5ecabd68402f80c8592023d2efe413a37ac0003e66a50fb58e4->enter($__internal_cb619fa462e2b5ecabd68402f80c8592023d2efe413a37ac0003e66a50fb58e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cb619fa462e2b5ecabd68402f80c8592023d2efe413a37ac0003e66a50fb58e4->leave($__internal_cb619fa462e2b5ecabd68402f80c8592023d2efe413a37ac0003e66a50fb58e4_prof);

        
        $__internal_b33ec9904529e9297313b56563067ee9635fbf757122148bd52b0c44f6d893ab->leave($__internal_b33ec9904529e9297313b56563067ee9635fbf757122148bd52b0c44f6d893ab_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f20a7f94e6ff1e2d82979070e4bef3b4961f497959bb68cc6f49f75f7dbc9bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20a7f94e6ff1e2d82979070e4bef3b4961f497959bb68cc6f49f75f7dbc9bf8->enter($__internal_f20a7f94e6ff1e2d82979070e4bef3b4961f497959bb68cc6f49f75f7dbc9bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_120a32da1de5fc2d7f8e71ef0296d8ef69fa5b5ceb343de6bff83408763f64dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120a32da1de5fc2d7f8e71ef0296d8ef69fa5b5ceb343de6bff83408763f64dd->enter($__internal_120a32da1de5fc2d7f8e71ef0296d8ef69fa5b5ceb343de6bff83408763f64dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_120a32da1de5fc2d7f8e71ef0296d8ef69fa5b5ceb343de6bff83408763f64dd->leave($__internal_120a32da1de5fc2d7f8e71ef0296d8ef69fa5b5ceb343de6bff83408763f64dd_prof);

        
        $__internal_f20a7f94e6ff1e2d82979070e4bef3b4961f497959bb68cc6f49f75f7dbc9bf8->leave($__internal_f20a7f94e6ff1e2d82979070e4bef3b4961f497959bb68cc6f49f75f7dbc9bf8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  82 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>{{ file }} <small>line {{ line }}</small></h1>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
