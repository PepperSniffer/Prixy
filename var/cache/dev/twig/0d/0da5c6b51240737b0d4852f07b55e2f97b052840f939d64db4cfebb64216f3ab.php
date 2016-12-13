<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8a6130832a620e1835cca12a6267eccddb87d4bd7ffedd4452a7336860f72dcb extends Twig_Template
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
        $__internal_ae920571562cd6b52506f7ca2c152c04eaf48a2ae4ebeec30a4a4b3d5e172176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae920571562cd6b52506f7ca2c152c04eaf48a2ae4ebeec30a4a4b3d5e172176->enter($__internal_ae920571562cd6b52506f7ca2c152c04eaf48a2ae4ebeec30a4a4b3d5e172176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b337ec9aa3af5581a0f817f5bda555962190f549e6cea014b9d461ec3b1d68d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b337ec9aa3af5581a0f817f5bda555962190f549e6cea014b9d461ec3b1d68d1->enter($__internal_b337ec9aa3af5581a0f817f5bda555962190f549e6cea014b9d461ec3b1d68d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae920571562cd6b52506f7ca2c152c04eaf48a2ae4ebeec30a4a4b3d5e172176->leave($__internal_ae920571562cd6b52506f7ca2c152c04eaf48a2ae4ebeec30a4a4b3d5e172176_prof);

        
        $__internal_b337ec9aa3af5581a0f817f5bda555962190f549e6cea014b9d461ec3b1d68d1->leave($__internal_b337ec9aa3af5581a0f817f5bda555962190f549e6cea014b9d461ec3b1d68d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cb41a6df2591c43c8d752d4cfd5e29f97094f456b355ca9d14c73d861be09526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb41a6df2591c43c8d752d4cfd5e29f97094f456b355ca9d14c73d861be09526->enter($__internal_cb41a6df2591c43c8d752d4cfd5e29f97094f456b355ca9d14c73d861be09526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_638e2c4c5e81617ea50c5b36cf2e4b6397f427defac4f785f909bb5e12789b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638e2c4c5e81617ea50c5b36cf2e4b6397f427defac4f785f909bb5e12789b5f->enter($__internal_638e2c4c5e81617ea50c5b36cf2e4b6397f427defac4f785f909bb5e12789b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_638e2c4c5e81617ea50c5b36cf2e4b6397f427defac4f785f909bb5e12789b5f->leave($__internal_638e2c4c5e81617ea50c5b36cf2e4b6397f427defac4f785f909bb5e12789b5f_prof);

        
        $__internal_cb41a6df2591c43c8d752d4cfd5e29f97094f456b355ca9d14c73d861be09526->leave($__internal_cb41a6df2591c43c8d752d4cfd5e29f97094f456b355ca9d14c73d861be09526_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ca09ff04d23119bf2ed9fdacab3ed8ef437928f9be1c35676ec3f8bc5eb77db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ca09ff04d23119bf2ed9fdacab3ed8ef437928f9be1c35676ec3f8bc5eb77db->enter($__internal_4ca09ff04d23119bf2ed9fdacab3ed8ef437928f9be1c35676ec3f8bc5eb77db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_80825eb0b7d3526d0db09c5d7544d3e60e8ea77219d542e4b905d47e9249f0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80825eb0b7d3526d0db09c5d7544d3e60e8ea77219d542e4b905d47e9249f0e2->enter($__internal_80825eb0b7d3526d0db09c5d7544d3e60e8ea77219d542e4b905d47e9249f0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80825eb0b7d3526d0db09c5d7544d3e60e8ea77219d542e4b905d47e9249f0e2->leave($__internal_80825eb0b7d3526d0db09c5d7544d3e60e8ea77219d542e4b905d47e9249f0e2_prof);

        
        $__internal_4ca09ff04d23119bf2ed9fdacab3ed8ef437928f9be1c35676ec3f8bc5eb77db->leave($__internal_4ca09ff04d23119bf2ed9fdacab3ed8ef437928f9be1c35676ec3f8bc5eb77db_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db0b2077ec8e97717029fe5db8262e8ea3d203912ced697c5c21fc6b749d324d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0b2077ec8e97717029fe5db8262e8ea3d203912ced697c5c21fc6b749d324d->enter($__internal_db0b2077ec8e97717029fe5db8262e8ea3d203912ced697c5c21fc6b749d324d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_34009ea2509d5bffb8e48921363a4e60217c3b3c67e6c1ea2fe46b94f0860816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34009ea2509d5bffb8e48921363a4e60217c3b3c67e6c1ea2fe46b94f0860816->enter($__internal_34009ea2509d5bffb8e48921363a4e60217c3b3c67e6c1ea2fe46b94f0860816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_34009ea2509d5bffb8e48921363a4e60217c3b3c67e6c1ea2fe46b94f0860816->leave($__internal_34009ea2509d5bffb8e48921363a4e60217c3b3c67e6c1ea2fe46b94f0860816_prof);

        
        $__internal_db0b2077ec8e97717029fe5db8262e8ea3d203912ced697c5c21fc6b749d324d->leave($__internal_db0b2077ec8e97717029fe5db8262e8ea3d203912ced697c5c21fc6b749d324d_prof);

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
