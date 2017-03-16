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
        $__internal_bae91a7bd414ae4ea03a5e76e19ffb3139dad8e5823b8731268f08e464091f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae91a7bd414ae4ea03a5e76e19ffb3139dad8e5823b8731268f08e464091f40->enter($__internal_bae91a7bd414ae4ea03a5e76e19ffb3139dad8e5823b8731268f08e464091f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_39c711db8390bb479a46d36d1c49f8e40a698b8ff1ea76d3701c69b998b24d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c711db8390bb479a46d36d1c49f8e40a698b8ff1ea76d3701c69b998b24d50->enter($__internal_39c711db8390bb479a46d36d1c49f8e40a698b8ff1ea76d3701c69b998b24d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bae91a7bd414ae4ea03a5e76e19ffb3139dad8e5823b8731268f08e464091f40->leave($__internal_bae91a7bd414ae4ea03a5e76e19ffb3139dad8e5823b8731268f08e464091f40_prof);

        
        $__internal_39c711db8390bb479a46d36d1c49f8e40a698b8ff1ea76d3701c69b998b24d50->leave($__internal_39c711db8390bb479a46d36d1c49f8e40a698b8ff1ea76d3701c69b998b24d50_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8bbb099ccbcddabd9b2baa03477a5e37f5e089794f689719ee4b44ce6b83d35c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bbb099ccbcddabd9b2baa03477a5e37f5e089794f689719ee4b44ce6b83d35c->enter($__internal_8bbb099ccbcddabd9b2baa03477a5e37f5e089794f689719ee4b44ce6b83d35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_48278eaf7dbc081fdf94f232909d8c9f8c56c773b9ed810e6056549a3a8e8a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48278eaf7dbc081fdf94f232909d8c9f8c56c773b9ed810e6056549a3a8e8a60->enter($__internal_48278eaf7dbc081fdf94f232909d8c9f8c56c773b9ed810e6056549a3a8e8a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_48278eaf7dbc081fdf94f232909d8c9f8c56c773b9ed810e6056549a3a8e8a60->leave($__internal_48278eaf7dbc081fdf94f232909d8c9f8c56c773b9ed810e6056549a3a8e8a60_prof);

        
        $__internal_8bbb099ccbcddabd9b2baa03477a5e37f5e089794f689719ee4b44ce6b83d35c->leave($__internal_8bbb099ccbcddabd9b2baa03477a5e37f5e089794f689719ee4b44ce6b83d35c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c901addc68f7fee62fe0dae652d142559df0035456dd42fea0380bc79106a15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c901addc68f7fee62fe0dae652d142559df0035456dd42fea0380bc79106a15b->enter($__internal_c901addc68f7fee62fe0dae652d142559df0035456dd42fea0380bc79106a15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e78d80d514111f0f7fde1a77ff8c34b69759dfdc1feb1d10974725fffa741507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78d80d514111f0f7fde1a77ff8c34b69759dfdc1feb1d10974725fffa741507->enter($__internal_e78d80d514111f0f7fde1a77ff8c34b69759dfdc1feb1d10974725fffa741507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e78d80d514111f0f7fde1a77ff8c34b69759dfdc1feb1d10974725fffa741507->leave($__internal_e78d80d514111f0f7fde1a77ff8c34b69759dfdc1feb1d10974725fffa741507_prof);

        
        $__internal_c901addc68f7fee62fe0dae652d142559df0035456dd42fea0380bc79106a15b->leave($__internal_c901addc68f7fee62fe0dae652d142559df0035456dd42fea0380bc79106a15b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee8dab7dabb768cd8119623930ce79c1cb199aaa7ae70acb85129fc2484ca3ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8dab7dabb768cd8119623930ce79c1cb199aaa7ae70acb85129fc2484ca3ad->enter($__internal_ee8dab7dabb768cd8119623930ce79c1cb199aaa7ae70acb85129fc2484ca3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0b21b45380298bd85407ba16671178761707d0a8ea2e0fada670ef888579a409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b21b45380298bd85407ba16671178761707d0a8ea2e0fada670ef888579a409->enter($__internal_0b21b45380298bd85407ba16671178761707d0a8ea2e0fada670ef888579a409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0b21b45380298bd85407ba16671178761707d0a8ea2e0fada670ef888579a409->leave($__internal_0b21b45380298bd85407ba16671178761707d0a8ea2e0fada670ef888579a409_prof);

        
        $__internal_ee8dab7dabb768cd8119623930ce79c1cb199aaa7ae70acb85129fc2484ca3ad->leave($__internal_ee8dab7dabb768cd8119623930ce79c1cb199aaa7ae70acb85129fc2484ca3ad_prof);

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
