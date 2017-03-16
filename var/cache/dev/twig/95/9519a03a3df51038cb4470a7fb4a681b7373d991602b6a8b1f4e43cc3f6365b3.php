<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_54dabfe64990f0dbb775f10eaa6b04bb9c8d1d2ae153ea5587fc77197000b2f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8bbd9c4b0040522ef419f671ec1554a859e7a5e31e9218369be4f28fe17031e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bbd9c4b0040522ef419f671ec1554a859e7a5e31e9218369be4f28fe17031e8->enter($__internal_8bbd9c4b0040522ef419f671ec1554a859e7a5e31e9218369be4f28fe17031e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_90b73efa3ac69477d32c07f457b6491752cf3cd1c600f4c83a31580cd0b59672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b73efa3ac69477d32c07f457b6491752cf3cd1c600f4c83a31580cd0b59672->enter($__internal_90b73efa3ac69477d32c07f457b6491752cf3cd1c600f4c83a31580cd0b59672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bbd9c4b0040522ef419f671ec1554a859e7a5e31e9218369be4f28fe17031e8->leave($__internal_8bbd9c4b0040522ef419f671ec1554a859e7a5e31e9218369be4f28fe17031e8_prof);

        
        $__internal_90b73efa3ac69477d32c07f457b6491752cf3cd1c600f4c83a31580cd0b59672->leave($__internal_90b73efa3ac69477d32c07f457b6491752cf3cd1c600f4c83a31580cd0b59672_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9afb487472adc1b9ac79f333fde0cb2d938ee8d9ebce0405fb41d20e091c3b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9afb487472adc1b9ac79f333fde0cb2d938ee8d9ebce0405fb41d20e091c3b22->enter($__internal_9afb487472adc1b9ac79f333fde0cb2d938ee8d9ebce0405fb41d20e091c3b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c519e55b762af2286d9789b437b8b5a40d0fb7feb92f1d6bd191a14d9598eae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c519e55b762af2286d9789b437b8b5a40d0fb7feb92f1d6bd191a14d9598eae0->enter($__internal_c519e55b762af2286d9789b437b8b5a40d0fb7feb92f1d6bd191a14d9598eae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c519e55b762af2286d9789b437b8b5a40d0fb7feb92f1d6bd191a14d9598eae0->leave($__internal_c519e55b762af2286d9789b437b8b5a40d0fb7feb92f1d6bd191a14d9598eae0_prof);

        
        $__internal_9afb487472adc1b9ac79f333fde0cb2d938ee8d9ebce0405fb41d20e091c3b22->leave($__internal_9afb487472adc1b9ac79f333fde0cb2d938ee8d9ebce0405fb41d20e091c3b22_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aafa8a3674d00a024259f832fc97bddc41046126846af18e7180d1a5ea203438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aafa8a3674d00a024259f832fc97bddc41046126846af18e7180d1a5ea203438->enter($__internal_aafa8a3674d00a024259f832fc97bddc41046126846af18e7180d1a5ea203438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_85b6a73777e245f6af39d30b2a92d3cb257fa124f0e31f7692462af6d6a7441d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b6a73777e245f6af39d30b2a92d3cb257fa124f0e31f7692462af6d6a7441d->enter($__internal_85b6a73777e245f6af39d30b2a92d3cb257fa124f0e31f7692462af6d6a7441d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_85b6a73777e245f6af39d30b2a92d3cb257fa124f0e31f7692462af6d6a7441d->leave($__internal_85b6a73777e245f6af39d30b2a92d3cb257fa124f0e31f7692462af6d6a7441d_prof);

        
        $__internal_aafa8a3674d00a024259f832fc97bddc41046126846af18e7180d1a5ea203438->leave($__internal_aafa8a3674d00a024259f832fc97bddc41046126846af18e7180d1a5ea203438_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb44c0d86b705a602d6f44b4177c61646d1ef870c3daff17a2befcde65faad23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb44c0d86b705a602d6f44b4177c61646d1ef870c3daff17a2befcde65faad23->enter($__internal_eb44c0d86b705a602d6f44b4177c61646d1ef870c3daff17a2befcde65faad23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b385ec137605b172035b7ef6ce388a42d78af1f403768015ad86718679d6022d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b385ec137605b172035b7ef6ce388a42d78af1f403768015ad86718679d6022d->enter($__internal_b385ec137605b172035b7ef6ce388a42d78af1f403768015ad86718679d6022d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b385ec137605b172035b7ef6ce388a42d78af1f403768015ad86718679d6022d->leave($__internal_b385ec137605b172035b7ef6ce388a42d78af1f403768015ad86718679d6022d_prof);

        
        $__internal_eb44c0d86b705a602d6f44b4177c61646d1ef870c3daff17a2befcde65faad23->leave($__internal_eb44c0d86b705a602d6f44b4177c61646d1ef870c3daff17a2befcde65faad23_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
