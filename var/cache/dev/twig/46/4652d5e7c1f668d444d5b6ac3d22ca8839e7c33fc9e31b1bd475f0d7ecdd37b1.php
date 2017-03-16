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
        $__internal_2e27a5c3d31c59c42cd495e728abb91150264c670d6ffe3abb3003338c5a3530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e27a5c3d31c59c42cd495e728abb91150264c670d6ffe3abb3003338c5a3530->enter($__internal_2e27a5c3d31c59c42cd495e728abb91150264c670d6ffe3abb3003338c5a3530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_59686d7672ee329223e8beee6c8f380794ad38b5a24a23729f25cb1ab8bc8636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59686d7672ee329223e8beee6c8f380794ad38b5a24a23729f25cb1ab8bc8636->enter($__internal_59686d7672ee329223e8beee6c8f380794ad38b5a24a23729f25cb1ab8bc8636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e27a5c3d31c59c42cd495e728abb91150264c670d6ffe3abb3003338c5a3530->leave($__internal_2e27a5c3d31c59c42cd495e728abb91150264c670d6ffe3abb3003338c5a3530_prof);

        
        $__internal_59686d7672ee329223e8beee6c8f380794ad38b5a24a23729f25cb1ab8bc8636->leave($__internal_59686d7672ee329223e8beee6c8f380794ad38b5a24a23729f25cb1ab8bc8636_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_38c4153e0b1a684b20298b30fcd8024715717741fb13c5a4e939491cfe1ca3b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c4153e0b1a684b20298b30fcd8024715717741fb13c5a4e939491cfe1ca3b9->enter($__internal_38c4153e0b1a684b20298b30fcd8024715717741fb13c5a4e939491cfe1ca3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_61e57f9206b21c5e75727238153485bbfc10e364d5966018cc6316d100884e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e57f9206b21c5e75727238153485bbfc10e364d5966018cc6316d100884e76->enter($__internal_61e57f9206b21c5e75727238153485bbfc10e364d5966018cc6316d100884e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_61e57f9206b21c5e75727238153485bbfc10e364d5966018cc6316d100884e76->leave($__internal_61e57f9206b21c5e75727238153485bbfc10e364d5966018cc6316d100884e76_prof);

        
        $__internal_38c4153e0b1a684b20298b30fcd8024715717741fb13c5a4e939491cfe1ca3b9->leave($__internal_38c4153e0b1a684b20298b30fcd8024715717741fb13c5a4e939491cfe1ca3b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5cec666b0535af66dc7a49ec6270462748bc2e39c0678db69bd432bab6b0af86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cec666b0535af66dc7a49ec6270462748bc2e39c0678db69bd432bab6b0af86->enter($__internal_5cec666b0535af66dc7a49ec6270462748bc2e39c0678db69bd432bab6b0af86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a45a96893ab99beb8ac3f76c0ff2a862db325b6b930d880691e236361260b823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45a96893ab99beb8ac3f76c0ff2a862db325b6b930d880691e236361260b823->enter($__internal_a45a96893ab99beb8ac3f76c0ff2a862db325b6b930d880691e236361260b823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a45a96893ab99beb8ac3f76c0ff2a862db325b6b930d880691e236361260b823->leave($__internal_a45a96893ab99beb8ac3f76c0ff2a862db325b6b930d880691e236361260b823_prof);

        
        $__internal_5cec666b0535af66dc7a49ec6270462748bc2e39c0678db69bd432bab6b0af86->leave($__internal_5cec666b0535af66dc7a49ec6270462748bc2e39c0678db69bd432bab6b0af86_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd258d7bbfab297d61a57c47e9fff199d2972825e47eb89ad9d752b34c409e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd258d7bbfab297d61a57c47e9fff199d2972825e47eb89ad9d752b34c409e05->enter($__internal_cd258d7bbfab297d61a57c47e9fff199d2972825e47eb89ad9d752b34c409e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a6a3abdf11f878aab1086c6070764eec14013ca7df77fcee8e63925f6b145f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a3abdf11f878aab1086c6070764eec14013ca7df77fcee8e63925f6b145f8a->enter($__internal_a6a3abdf11f878aab1086c6070764eec14013ca7df77fcee8e63925f6b145f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a6a3abdf11f878aab1086c6070764eec14013ca7df77fcee8e63925f6b145f8a->leave($__internal_a6a3abdf11f878aab1086c6070764eec14013ca7df77fcee8e63925f6b145f8a_prof);

        
        $__internal_cd258d7bbfab297d61a57c47e9fff199d2972825e47eb89ad9d752b34c409e05->leave($__internal_cd258d7bbfab297d61a57c47e9fff199d2972825e47eb89ad9d752b34c409e05_prof);

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
