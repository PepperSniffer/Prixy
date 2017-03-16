<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_03e308b38c70ef4fa843d25be69ad83370873a005c207772dfa412e03cd79b7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dce0a431978081c44a24f606d5fa5fb173f234e2fcf470c2f21dba60ebd54821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce0a431978081c44a24f606d5fa5fb173f234e2fcf470c2f21dba60ebd54821->enter($__internal_dce0a431978081c44a24f606d5fa5fb173f234e2fcf470c2f21dba60ebd54821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6c88029cb60c225a456de015ae1202a34c45e9fb9a56cf70e8aeb3ff4dd5af4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c88029cb60c225a456de015ae1202a34c45e9fb9a56cf70e8aeb3ff4dd5af4e->enter($__internal_6c88029cb60c225a456de015ae1202a34c45e9fb9a56cf70e8aeb3ff4dd5af4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dce0a431978081c44a24f606d5fa5fb173f234e2fcf470c2f21dba60ebd54821->leave($__internal_dce0a431978081c44a24f606d5fa5fb173f234e2fcf470c2f21dba60ebd54821_prof);

        
        $__internal_6c88029cb60c225a456de015ae1202a34c45e9fb9a56cf70e8aeb3ff4dd5af4e->leave($__internal_6c88029cb60c225a456de015ae1202a34c45e9fb9a56cf70e8aeb3ff4dd5af4e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a9d2e978272f0003d968d5d06b560b6a1cc6dd9508b51dfd1df6dce77de3fa7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d2e978272f0003d968d5d06b560b6a1cc6dd9508b51dfd1df6dce77de3fa7b->enter($__internal_a9d2e978272f0003d968d5d06b560b6a1cc6dd9508b51dfd1df6dce77de3fa7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a6a005e8ab7c7ff756489349c6e3ce0dc9c9bd96b6c91551e533497851efda4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a005e8ab7c7ff756489349c6e3ce0dc9c9bd96b6c91551e533497851efda4d->enter($__internal_a6a005e8ab7c7ff756489349c6e3ce0dc9c9bd96b6c91551e533497851efda4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6a005e8ab7c7ff756489349c6e3ce0dc9c9bd96b6c91551e533497851efda4d->leave($__internal_a6a005e8ab7c7ff756489349c6e3ce0dc9c9bd96b6c91551e533497851efda4d_prof);

        
        $__internal_a9d2e978272f0003d968d5d06b560b6a1cc6dd9508b51dfd1df6dce77de3fa7b->leave($__internal_a9d2e978272f0003d968d5d06b560b6a1cc6dd9508b51dfd1df6dce77de3fa7b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79dac47093174d7c373a3dc39d48a3d540af0a57844670aa0ef6373b00d98278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79dac47093174d7c373a3dc39d48a3d540af0a57844670aa0ef6373b00d98278->enter($__internal_79dac47093174d7c373a3dc39d48a3d540af0a57844670aa0ef6373b00d98278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0b8fa647dbb71f59f34c5ec09e9035b18f191b299db953985972a2460f5cb8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8fa647dbb71f59f34c5ec09e9035b18f191b299db953985972a2460f5cb8cd->enter($__internal_0b8fa647dbb71f59f34c5ec09e9035b18f191b299db953985972a2460f5cb8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0b8fa647dbb71f59f34c5ec09e9035b18f191b299db953985972a2460f5cb8cd->leave($__internal_0b8fa647dbb71f59f34c5ec09e9035b18f191b299db953985972a2460f5cb8cd_prof);

        
        $__internal_79dac47093174d7c373a3dc39d48a3d540af0a57844670aa0ef6373b00d98278->leave($__internal_79dac47093174d7c373a3dc39d48a3d540af0a57844670aa0ef6373b00d98278_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_25278b6b3d95d3b7435769e844a788b2e7ae20c5ffdca77240e919d7466cce42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25278b6b3d95d3b7435769e844a788b2e7ae20c5ffdca77240e919d7466cce42->enter($__internal_25278b6b3d95d3b7435769e844a788b2e7ae20c5ffdca77240e919d7466cce42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b9414b0979c461ff9c268d1200a38fda53e840340116ba5f874e0eb281da8e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9414b0979c461ff9c268d1200a38fda53e840340116ba5f874e0eb281da8e79->enter($__internal_b9414b0979c461ff9c268d1200a38fda53e840340116ba5f874e0eb281da8e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b9414b0979c461ff9c268d1200a38fda53e840340116ba5f874e0eb281da8e79->leave($__internal_b9414b0979c461ff9c268d1200a38fda53e840340116ba5f874e0eb281da8e79_prof);

        
        $__internal_25278b6b3d95d3b7435769e844a788b2e7ae20c5ffdca77240e919d7466cce42->leave($__internal_25278b6b3d95d3b7435769e844a788b2e7ae20c5ffdca77240e919d7466cce42_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
