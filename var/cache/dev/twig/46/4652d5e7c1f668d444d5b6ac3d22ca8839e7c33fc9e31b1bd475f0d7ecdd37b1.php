<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a20ee0b79030f7401af43c27ec1da3af057ea5f8a7def5675c1de0b4cdb42bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_a7fb57a15882d401e2ee0ff675c664dc5e51d32f047c8477a5e19cb142775efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fb57a15882d401e2ee0ff675c664dc5e51d32f047c8477a5e19cb142775efa->enter($__internal_a7fb57a15882d401e2ee0ff675c664dc5e51d32f047c8477a5e19cb142775efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7ee380a92ba0e736c2de5573eedf86e88dbc53755d38402eadb42c31ec9261fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee380a92ba0e736c2de5573eedf86e88dbc53755d38402eadb42c31ec9261fe->enter($__internal_7ee380a92ba0e736c2de5573eedf86e88dbc53755d38402eadb42c31ec9261fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7fb57a15882d401e2ee0ff675c664dc5e51d32f047c8477a5e19cb142775efa->leave($__internal_a7fb57a15882d401e2ee0ff675c664dc5e51d32f047c8477a5e19cb142775efa_prof);

        
        $__internal_7ee380a92ba0e736c2de5573eedf86e88dbc53755d38402eadb42c31ec9261fe->leave($__internal_7ee380a92ba0e736c2de5573eedf86e88dbc53755d38402eadb42c31ec9261fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d5201f6a258513448356006344a5c504c0a0e77e437d1c757aa5725bc281b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5201f6a258513448356006344a5c504c0a0e77e437d1c757aa5725bc281b47->enter($__internal_0d5201f6a258513448356006344a5c504c0a0e77e437d1c757aa5725bc281b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_27f0ce661f0d6258b54e4eaf55abe2f52a2066dfbd1c24509e7a4e944a8635b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f0ce661f0d6258b54e4eaf55abe2f52a2066dfbd1c24509e7a4e944a8635b3->enter($__internal_27f0ce661f0d6258b54e4eaf55abe2f52a2066dfbd1c24509e7a4e944a8635b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_27f0ce661f0d6258b54e4eaf55abe2f52a2066dfbd1c24509e7a4e944a8635b3->leave($__internal_27f0ce661f0d6258b54e4eaf55abe2f52a2066dfbd1c24509e7a4e944a8635b3_prof);

        
        $__internal_0d5201f6a258513448356006344a5c504c0a0e77e437d1c757aa5725bc281b47->leave($__internal_0d5201f6a258513448356006344a5c504c0a0e77e437d1c757aa5725bc281b47_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0d019a14386c2632ca26978c95efbf69943b06b3eab00e11747ca7fe6bc190e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d019a14386c2632ca26978c95efbf69943b06b3eab00e11747ca7fe6bc190e->enter($__internal_f0d019a14386c2632ca26978c95efbf69943b06b3eab00e11747ca7fe6bc190e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5ce980755bfb0f4d1597f2832ff6fac8e00e74050375f90f6f1bcb735d4ed697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce980755bfb0f4d1597f2832ff6fac8e00e74050375f90f6f1bcb735d4ed697->enter($__internal_5ce980755bfb0f4d1597f2832ff6fac8e00e74050375f90f6f1bcb735d4ed697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ce980755bfb0f4d1597f2832ff6fac8e00e74050375f90f6f1bcb735d4ed697->leave($__internal_5ce980755bfb0f4d1597f2832ff6fac8e00e74050375f90f6f1bcb735d4ed697_prof);

        
        $__internal_f0d019a14386c2632ca26978c95efbf69943b06b3eab00e11747ca7fe6bc190e->leave($__internal_f0d019a14386c2632ca26978c95efbf69943b06b3eab00e11747ca7fe6bc190e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66b27a441e5d59b320d2381daaaf70303417686f4e9eafa6ac88a7f35d487951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b27a441e5d59b320d2381daaaf70303417686f4e9eafa6ac88a7f35d487951->enter($__internal_66b27a441e5d59b320d2381daaaf70303417686f4e9eafa6ac88a7f35d487951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7793ae7eb34249a7d276c2da333b60be1674fd564618f4b338633777f5a497b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7793ae7eb34249a7d276c2da333b60be1674fd564618f4b338633777f5a497b7->enter($__internal_7793ae7eb34249a7d276c2da333b60be1674fd564618f4b338633777f5a497b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7793ae7eb34249a7d276c2da333b60be1674fd564618f4b338633777f5a497b7->leave($__internal_7793ae7eb34249a7d276c2da333b60be1674fd564618f4b338633777f5a497b7_prof);

        
        $__internal_66b27a441e5d59b320d2381daaaf70303417686f4e9eafa6ac88a7f35d487951->leave($__internal_66b27a441e5d59b320d2381daaaf70303417686f4e9eafa6ac88a7f35d487951_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
