<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_61fce8a0e0df6b061ab861f84443306adb7d326947095aeec05d06cbd94f9acc extends Twig_Template
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
        $__internal_03688a07b8366009c9e9cd9d86cc188687ee613892b5fd0a8a28c887991574a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03688a07b8366009c9e9cd9d86cc188687ee613892b5fd0a8a28c887991574a7->enter($__internal_03688a07b8366009c9e9cd9d86cc188687ee613892b5fd0a8a28c887991574a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cc1704ff8a0d167ffa4bbfe1bc04fe95d4d04b9bb8e6082ed6dfb091e253d047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1704ff8a0d167ffa4bbfe1bc04fe95d4d04b9bb8e6082ed6dfb091e253d047->enter($__internal_cc1704ff8a0d167ffa4bbfe1bc04fe95d4d04b9bb8e6082ed6dfb091e253d047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03688a07b8366009c9e9cd9d86cc188687ee613892b5fd0a8a28c887991574a7->leave($__internal_03688a07b8366009c9e9cd9d86cc188687ee613892b5fd0a8a28c887991574a7_prof);

        
        $__internal_cc1704ff8a0d167ffa4bbfe1bc04fe95d4d04b9bb8e6082ed6dfb091e253d047->leave($__internal_cc1704ff8a0d167ffa4bbfe1bc04fe95d4d04b9bb8e6082ed6dfb091e253d047_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8b191233409b36fdf88020e1fdecdd9d41047f5bb726bf609058ae10cd27e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b191233409b36fdf88020e1fdecdd9d41047f5bb726bf609058ae10cd27e2a->enter($__internal_e8b191233409b36fdf88020e1fdecdd9d41047f5bb726bf609058ae10cd27e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9a11174115101158bec3b49d9c8e94c385861d9eb517f6f9f39c6c13ac8db20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a11174115101158bec3b49d9c8e94c385861d9eb517f6f9f39c6c13ac8db20->enter($__internal_e9a11174115101158bec3b49d9c8e94c385861d9eb517f6f9f39c6c13ac8db20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e9a11174115101158bec3b49d9c8e94c385861d9eb517f6f9f39c6c13ac8db20->leave($__internal_e9a11174115101158bec3b49d9c8e94c385861d9eb517f6f9f39c6c13ac8db20_prof);

        
        $__internal_e8b191233409b36fdf88020e1fdecdd9d41047f5bb726bf609058ae10cd27e2a->leave($__internal_e8b191233409b36fdf88020e1fdecdd9d41047f5bb726bf609058ae10cd27e2a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49fbf48e874e6a5b988c89b631109f3a7e4b418d976fce5ce4c36d271b417860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49fbf48e874e6a5b988c89b631109f3a7e4b418d976fce5ce4c36d271b417860->enter($__internal_49fbf48e874e6a5b988c89b631109f3a7e4b418d976fce5ce4c36d271b417860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_734ab0ffa0088e310905d9c1c1e7b364a86981cc6d0dcad1645177a74f1c0e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734ab0ffa0088e310905d9c1c1e7b364a86981cc6d0dcad1645177a74f1c0e66->enter($__internal_734ab0ffa0088e310905d9c1c1e7b364a86981cc6d0dcad1645177a74f1c0e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_734ab0ffa0088e310905d9c1c1e7b364a86981cc6d0dcad1645177a74f1c0e66->leave($__internal_734ab0ffa0088e310905d9c1c1e7b364a86981cc6d0dcad1645177a74f1c0e66_prof);

        
        $__internal_49fbf48e874e6a5b988c89b631109f3a7e4b418d976fce5ce4c36d271b417860->leave($__internal_49fbf48e874e6a5b988c89b631109f3a7e4b418d976fce5ce4c36d271b417860_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_92aa999b9bed01257ab0e3edf40a895f33929d89b0b9a2358e5b3d665338cb8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92aa999b9bed01257ab0e3edf40a895f33929d89b0b9a2358e5b3d665338cb8c->enter($__internal_92aa999b9bed01257ab0e3edf40a895f33929d89b0b9a2358e5b3d665338cb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_21b6cd37cbca05c176421175b742242d86cb664339fa27d1ea8f080098d57347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b6cd37cbca05c176421175b742242d86cb664339fa27d1ea8f080098d57347->enter($__internal_21b6cd37cbca05c176421175b742242d86cb664339fa27d1ea8f080098d57347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_21b6cd37cbca05c176421175b742242d86cb664339fa27d1ea8f080098d57347->leave($__internal_21b6cd37cbca05c176421175b742242d86cb664339fa27d1ea8f080098d57347_prof);

        
        $__internal_92aa999b9bed01257ab0e3edf40a895f33929d89b0b9a2358e5b3d665338cb8c->leave($__internal_92aa999b9bed01257ab0e3edf40a895f33929d89b0b9a2358e5b3d665338cb8c_prof);

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
