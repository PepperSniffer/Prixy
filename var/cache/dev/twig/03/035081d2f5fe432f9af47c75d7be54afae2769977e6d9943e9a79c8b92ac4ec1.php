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
        $__internal_1fc06cdcdb6b2a0c39d718e2268ef6afe415530aa2e59ee953730fe22bc607f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc06cdcdb6b2a0c39d718e2268ef6afe415530aa2e59ee953730fe22bc607f4->enter($__internal_1fc06cdcdb6b2a0c39d718e2268ef6afe415530aa2e59ee953730fe22bc607f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_3b14cde01929613bd006001a8799ab812d5fdc748eb1ad64b78c581113bc2b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b14cde01929613bd006001a8799ab812d5fdc748eb1ad64b78c581113bc2b61->enter($__internal_3b14cde01929613bd006001a8799ab812d5fdc748eb1ad64b78c581113bc2b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fc06cdcdb6b2a0c39d718e2268ef6afe415530aa2e59ee953730fe22bc607f4->leave($__internal_1fc06cdcdb6b2a0c39d718e2268ef6afe415530aa2e59ee953730fe22bc607f4_prof);

        
        $__internal_3b14cde01929613bd006001a8799ab812d5fdc748eb1ad64b78c581113bc2b61->leave($__internal_3b14cde01929613bd006001a8799ab812d5fdc748eb1ad64b78c581113bc2b61_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_984c93f8c24181b60002c1081a53d58622b6c307f1c35f5cb7847b61254237f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984c93f8c24181b60002c1081a53d58622b6c307f1c35f5cb7847b61254237f2->enter($__internal_984c93f8c24181b60002c1081a53d58622b6c307f1c35f5cb7847b61254237f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_89dd92f7af416897b76d82b62fba6755128005bf98a8cbce3dcc8041a2570808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89dd92f7af416897b76d82b62fba6755128005bf98a8cbce3dcc8041a2570808->enter($__internal_89dd92f7af416897b76d82b62fba6755128005bf98a8cbce3dcc8041a2570808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_89dd92f7af416897b76d82b62fba6755128005bf98a8cbce3dcc8041a2570808->leave($__internal_89dd92f7af416897b76d82b62fba6755128005bf98a8cbce3dcc8041a2570808_prof);

        
        $__internal_984c93f8c24181b60002c1081a53d58622b6c307f1c35f5cb7847b61254237f2->leave($__internal_984c93f8c24181b60002c1081a53d58622b6c307f1c35f5cb7847b61254237f2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_64238228e0b3db36f6695b763725bd6a99cb54ff532d27470e3380c7e2be11ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64238228e0b3db36f6695b763725bd6a99cb54ff532d27470e3380c7e2be11ca->enter($__internal_64238228e0b3db36f6695b763725bd6a99cb54ff532d27470e3380c7e2be11ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fcb2ec98f9e8c9dde45d79bd92dbe986b49046b05a6e99e67395fb3f6c9688ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb2ec98f9e8c9dde45d79bd92dbe986b49046b05a6e99e67395fb3f6c9688ae->enter($__internal_fcb2ec98f9e8c9dde45d79bd92dbe986b49046b05a6e99e67395fb3f6c9688ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fcb2ec98f9e8c9dde45d79bd92dbe986b49046b05a6e99e67395fb3f6c9688ae->leave($__internal_fcb2ec98f9e8c9dde45d79bd92dbe986b49046b05a6e99e67395fb3f6c9688ae_prof);

        
        $__internal_64238228e0b3db36f6695b763725bd6a99cb54ff532d27470e3380c7e2be11ca->leave($__internal_64238228e0b3db36f6695b763725bd6a99cb54ff532d27470e3380c7e2be11ca_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3ee88340903a02bcfcff9c055bdcca9632f466732c1415b2bd5cebb38a2cf4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ee88340903a02bcfcff9c055bdcca9632f466732c1415b2bd5cebb38a2cf4f->enter($__internal_b3ee88340903a02bcfcff9c055bdcca9632f466732c1415b2bd5cebb38a2cf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc76c484331af087a5d908868c4654d0697bae43eb19799b55a7469a9c001d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc76c484331af087a5d908868c4654d0697bae43eb19799b55a7469a9c001d50->enter($__internal_fc76c484331af087a5d908868c4654d0697bae43eb19799b55a7469a9c001d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fc76c484331af087a5d908868c4654d0697bae43eb19799b55a7469a9c001d50->leave($__internal_fc76c484331af087a5d908868c4654d0697bae43eb19799b55a7469a9c001d50_prof);

        
        $__internal_b3ee88340903a02bcfcff9c055bdcca9632f466732c1415b2bd5cebb38a2cf4f->leave($__internal_b3ee88340903a02bcfcff9c055bdcca9632f466732c1415b2bd5cebb38a2cf4f_prof);

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
