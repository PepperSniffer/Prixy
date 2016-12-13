<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_ed77a405a04d5f81ba8f168ba797c44172281f40c431e9c25ca081464978e7a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_e03d601d4633ce4b6f8b5eb0545b64f055301df7b906aa16eadf96b2d9dc54a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03d601d4633ce4b6f8b5eb0545b64f055301df7b906aa16eadf96b2d9dc54a0->enter($__internal_e03d601d4633ce4b6f8b5eb0545b64f055301df7b906aa16eadf96b2d9dc54a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_31079cb331c71fd463bb6ad23bf0cbd894bba72dd75b02d02d3f73377976a396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31079cb331c71fd463bb6ad23bf0cbd894bba72dd75b02d02d3f73377976a396->enter($__internal_31079cb331c71fd463bb6ad23bf0cbd894bba72dd75b02d02d3f73377976a396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e03d601d4633ce4b6f8b5eb0545b64f055301df7b906aa16eadf96b2d9dc54a0->leave($__internal_e03d601d4633ce4b6f8b5eb0545b64f055301df7b906aa16eadf96b2d9dc54a0_prof);

        
        $__internal_31079cb331c71fd463bb6ad23bf0cbd894bba72dd75b02d02d3f73377976a396->leave($__internal_31079cb331c71fd463bb6ad23bf0cbd894bba72dd75b02d02d3f73377976a396_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7799f1885ac779eea75e9198f84caf6adb89794ffb248c046af6b6cefcb57ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7799f1885ac779eea75e9198f84caf6adb89794ffb248c046af6b6cefcb57ee->enter($__internal_c7799f1885ac779eea75e9198f84caf6adb89794ffb248c046af6b6cefcb57ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_92b34d36218232a9551c858e9a3777c949ca6282a55e88881c45c80fcd8d8555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b34d36218232a9551c858e9a3777c949ca6282a55e88881c45c80fcd8d8555->enter($__internal_92b34d36218232a9551c858e9a3777c949ca6282a55e88881c45c80fcd8d8555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_92b34d36218232a9551c858e9a3777c949ca6282a55e88881c45c80fcd8d8555->leave($__internal_92b34d36218232a9551c858e9a3777c949ca6282a55e88881c45c80fcd8d8555_prof);

        
        $__internal_c7799f1885ac779eea75e9198f84caf6adb89794ffb248c046af6b6cefcb57ee->leave($__internal_c7799f1885ac779eea75e9198f84caf6adb89794ffb248c046af6b6cefcb57ee_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5891f68f66c5a5b70bb4744dce434637d5f532221fd4cea43fa558b19bc18078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5891f68f66c5a5b70bb4744dce434637d5f532221fd4cea43fa558b19bc18078->enter($__internal_5891f68f66c5a5b70bb4744dce434637d5f532221fd4cea43fa558b19bc18078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8008c1fa8ca9795a4c5b3bddfab9c42c6f1950c0d145044bc0d4216668f11a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8008c1fa8ca9795a4c5b3bddfab9c42c6f1950c0d145044bc0d4216668f11a9e->enter($__internal_8008c1fa8ca9795a4c5b3bddfab9c42c6f1950c0d145044bc0d4216668f11a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8008c1fa8ca9795a4c5b3bddfab9c42c6f1950c0d145044bc0d4216668f11a9e->leave($__internal_8008c1fa8ca9795a4c5b3bddfab9c42c6f1950c0d145044bc0d4216668f11a9e_prof);

        
        $__internal_5891f68f66c5a5b70bb4744dce434637d5f532221fd4cea43fa558b19bc18078->leave($__internal_5891f68f66c5a5b70bb4744dce434637d5f532221fd4cea43fa558b19bc18078_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d2f0db2f74a92e61cddb3d3213fbecd2fcf3d77dac378712867097bef29eade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2f0db2f74a92e61cddb3d3213fbecd2fcf3d77dac378712867097bef29eade->enter($__internal_5d2f0db2f74a92e61cddb3d3213fbecd2fcf3d77dac378712867097bef29eade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1dcdd6a4b778ca2d4cf8d6a75bf9e2d415f8014d90e03f7149a2a08c71d4739c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dcdd6a4b778ca2d4cf8d6a75bf9e2d415f8014d90e03f7149a2a08c71d4739c->enter($__internal_1dcdd6a4b778ca2d4cf8d6a75bf9e2d415f8014d90e03f7149a2a08c71d4739c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1dcdd6a4b778ca2d4cf8d6a75bf9e2d415f8014d90e03f7149a2a08c71d4739c->leave($__internal_1dcdd6a4b778ca2d4cf8d6a75bf9e2d415f8014d90e03f7149a2a08c71d4739c_prof);

        
        $__internal_5d2f0db2f74a92e61cddb3d3213fbecd2fcf3d77dac378712867097bef29eade->leave($__internal_5d2f0db2f74a92e61cddb3d3213fbecd2fcf3d77dac378712867097bef29eade_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
