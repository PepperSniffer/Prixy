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
        $__internal_dbe0a67638bfbea74d6bb4f2ac672b050371b4e026c02302cf89429d36a44814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe0a67638bfbea74d6bb4f2ac672b050371b4e026c02302cf89429d36a44814->enter($__internal_dbe0a67638bfbea74d6bb4f2ac672b050371b4e026c02302cf89429d36a44814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_af8abd0f5e755b43b380f3d5aaebf5af646f841eff692fc2b3dc1531ecae2c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8abd0f5e755b43b380f3d5aaebf5af646f841eff692fc2b3dc1531ecae2c00->enter($__internal_af8abd0f5e755b43b380f3d5aaebf5af646f841eff692fc2b3dc1531ecae2c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbe0a67638bfbea74d6bb4f2ac672b050371b4e026c02302cf89429d36a44814->leave($__internal_dbe0a67638bfbea74d6bb4f2ac672b050371b4e026c02302cf89429d36a44814_prof);

        
        $__internal_af8abd0f5e755b43b380f3d5aaebf5af646f841eff692fc2b3dc1531ecae2c00->leave($__internal_af8abd0f5e755b43b380f3d5aaebf5af646f841eff692fc2b3dc1531ecae2c00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd037195e3ff85a449e582dcbfa7b5e429562696c1fe51f285e608c0346d1664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd037195e3ff85a449e582dcbfa7b5e429562696c1fe51f285e608c0346d1664->enter($__internal_fd037195e3ff85a449e582dcbfa7b5e429562696c1fe51f285e608c0346d1664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91251e7e61372ee188513012c9344ecb0f29c8364074d4841ca3448ea12f87b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91251e7e61372ee188513012c9344ecb0f29c8364074d4841ca3448ea12f87b3->enter($__internal_91251e7e61372ee188513012c9344ecb0f29c8364074d4841ca3448ea12f87b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_91251e7e61372ee188513012c9344ecb0f29c8364074d4841ca3448ea12f87b3->leave($__internal_91251e7e61372ee188513012c9344ecb0f29c8364074d4841ca3448ea12f87b3_prof);

        
        $__internal_fd037195e3ff85a449e582dcbfa7b5e429562696c1fe51f285e608c0346d1664->leave($__internal_fd037195e3ff85a449e582dcbfa7b5e429562696c1fe51f285e608c0346d1664_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46040e0be3894a374a9e87cbc079ad399cd6029f8a532786fb2d5a0d08b87098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46040e0be3894a374a9e87cbc079ad399cd6029f8a532786fb2d5a0d08b87098->enter($__internal_46040e0be3894a374a9e87cbc079ad399cd6029f8a532786fb2d5a0d08b87098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eecd5bc36fcba54930ea76b2d2e52019e0476012084fabe65d1f633c0d41f7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eecd5bc36fcba54930ea76b2d2e52019e0476012084fabe65d1f633c0d41f7a5->enter($__internal_eecd5bc36fcba54930ea76b2d2e52019e0476012084fabe65d1f633c0d41f7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_eecd5bc36fcba54930ea76b2d2e52019e0476012084fabe65d1f633c0d41f7a5->leave($__internal_eecd5bc36fcba54930ea76b2d2e52019e0476012084fabe65d1f633c0d41f7a5_prof);

        
        $__internal_46040e0be3894a374a9e87cbc079ad399cd6029f8a532786fb2d5a0d08b87098->leave($__internal_46040e0be3894a374a9e87cbc079ad399cd6029f8a532786fb2d5a0d08b87098_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45c6039e204b69e75fbef193655f39c3163662d34367a7ed711fe758f354f8db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c6039e204b69e75fbef193655f39c3163662d34367a7ed711fe758f354f8db->enter($__internal_45c6039e204b69e75fbef193655f39c3163662d34367a7ed711fe758f354f8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_986d0f3fb47c02e2d1920ea65710d73a4d96b41225c878eab54c2984701cb0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986d0f3fb47c02e2d1920ea65710d73a4d96b41225c878eab54c2984701cb0e4->enter($__internal_986d0f3fb47c02e2d1920ea65710d73a4d96b41225c878eab54c2984701cb0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_986d0f3fb47c02e2d1920ea65710d73a4d96b41225c878eab54c2984701cb0e4->leave($__internal_986d0f3fb47c02e2d1920ea65710d73a4d96b41225c878eab54c2984701cb0e4_prof);

        
        $__internal_45c6039e204b69e75fbef193655f39c3163662d34367a7ed711fe758f354f8db->leave($__internal_45c6039e204b69e75fbef193655f39c3163662d34367a7ed711fe758f354f8db_prof);

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
