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
        $__internal_ea39930c5788a3d11749f7bb725c2e441bba0f5d7a445bca10a56a28b30edf19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea39930c5788a3d11749f7bb725c2e441bba0f5d7a445bca10a56a28b30edf19->enter($__internal_ea39930c5788a3d11749f7bb725c2e441bba0f5d7a445bca10a56a28b30edf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ebed4fe1ef25831d28e311be5a7e1bb709d5da9bd6ef4b5e1605684d4148d166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebed4fe1ef25831d28e311be5a7e1bb709d5da9bd6ef4b5e1605684d4148d166->enter($__internal_ebed4fe1ef25831d28e311be5a7e1bb709d5da9bd6ef4b5e1605684d4148d166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea39930c5788a3d11749f7bb725c2e441bba0f5d7a445bca10a56a28b30edf19->leave($__internal_ea39930c5788a3d11749f7bb725c2e441bba0f5d7a445bca10a56a28b30edf19_prof);

        
        $__internal_ebed4fe1ef25831d28e311be5a7e1bb709d5da9bd6ef4b5e1605684d4148d166->leave($__internal_ebed4fe1ef25831d28e311be5a7e1bb709d5da9bd6ef4b5e1605684d4148d166_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14000371c146d90079ff1226faff912a4be463287f7648ca78c6a5d40454681e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14000371c146d90079ff1226faff912a4be463287f7648ca78c6a5d40454681e->enter($__internal_14000371c146d90079ff1226faff912a4be463287f7648ca78c6a5d40454681e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c2d1428fa083d698b2b1411b09671cdb5c2a0b31adafdfd23dd47191027e480b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d1428fa083d698b2b1411b09671cdb5c2a0b31adafdfd23dd47191027e480b->enter($__internal_c2d1428fa083d698b2b1411b09671cdb5c2a0b31adafdfd23dd47191027e480b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c2d1428fa083d698b2b1411b09671cdb5c2a0b31adafdfd23dd47191027e480b->leave($__internal_c2d1428fa083d698b2b1411b09671cdb5c2a0b31adafdfd23dd47191027e480b_prof);

        
        $__internal_14000371c146d90079ff1226faff912a4be463287f7648ca78c6a5d40454681e->leave($__internal_14000371c146d90079ff1226faff912a4be463287f7648ca78c6a5d40454681e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_925bf8a5020836d9fafee302dccb44849ef847507c2161c3772c27ffedef85be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925bf8a5020836d9fafee302dccb44849ef847507c2161c3772c27ffedef85be->enter($__internal_925bf8a5020836d9fafee302dccb44849ef847507c2161c3772c27ffedef85be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ac79d3d22f1daaf3657da71dd4b73921ee6950595244b562a6eb6b623915d952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac79d3d22f1daaf3657da71dd4b73921ee6950595244b562a6eb6b623915d952->enter($__internal_ac79d3d22f1daaf3657da71dd4b73921ee6950595244b562a6eb6b623915d952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ac79d3d22f1daaf3657da71dd4b73921ee6950595244b562a6eb6b623915d952->leave($__internal_ac79d3d22f1daaf3657da71dd4b73921ee6950595244b562a6eb6b623915d952_prof);

        
        $__internal_925bf8a5020836d9fafee302dccb44849ef847507c2161c3772c27ffedef85be->leave($__internal_925bf8a5020836d9fafee302dccb44849ef847507c2161c3772c27ffedef85be_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a26030ca645705707e0a0fe5007a565338171ab06526a24d868bc6e9c1e460a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26030ca645705707e0a0fe5007a565338171ab06526a24d868bc6e9c1e460a2->enter($__internal_a26030ca645705707e0a0fe5007a565338171ab06526a24d868bc6e9c1e460a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_20253bcb6eb0fbe44178a9f6f65c90f2649d60bed152d7043b4263375c2ff06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20253bcb6eb0fbe44178a9f6f65c90f2649d60bed152d7043b4263375c2ff06e->enter($__internal_20253bcb6eb0fbe44178a9f6f65c90f2649d60bed152d7043b4263375c2ff06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_20253bcb6eb0fbe44178a9f6f65c90f2649d60bed152d7043b4263375c2ff06e->leave($__internal_20253bcb6eb0fbe44178a9f6f65c90f2649d60bed152d7043b4263375c2ff06e_prof);

        
        $__internal_a26030ca645705707e0a0fe5007a565338171ab06526a24d868bc6e9c1e460a2->leave($__internal_a26030ca645705707e0a0fe5007a565338171ab06526a24d868bc6e9c1e460a2_prof);

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
