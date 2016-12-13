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
        $__internal_8fe0489a4e8291110bcc693601218ae7bf40d6ce2557a48df5143cef1ab68670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe0489a4e8291110bcc693601218ae7bf40d6ce2557a48df5143cef1ab68670->enter($__internal_8fe0489a4e8291110bcc693601218ae7bf40d6ce2557a48df5143cef1ab68670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5fefd53da27a78b7ea6fdd9c440c8327b942d9368240d20719304f5cae048a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fefd53da27a78b7ea6fdd9c440c8327b942d9368240d20719304f5cae048a25->enter($__internal_5fefd53da27a78b7ea6fdd9c440c8327b942d9368240d20719304f5cae048a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fe0489a4e8291110bcc693601218ae7bf40d6ce2557a48df5143cef1ab68670->leave($__internal_8fe0489a4e8291110bcc693601218ae7bf40d6ce2557a48df5143cef1ab68670_prof);

        
        $__internal_5fefd53da27a78b7ea6fdd9c440c8327b942d9368240d20719304f5cae048a25->leave($__internal_5fefd53da27a78b7ea6fdd9c440c8327b942d9368240d20719304f5cae048a25_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37006d576f8b7c86654b8c349f55343fa880ef2cdc9efd6b220e8c5961c429f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37006d576f8b7c86654b8c349f55343fa880ef2cdc9efd6b220e8c5961c429f0->enter($__internal_37006d576f8b7c86654b8c349f55343fa880ef2cdc9efd6b220e8c5961c429f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d4ed5adcd05ff465bdf66256b85794304824e85e2995b2b85f8f0fe84d71c0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ed5adcd05ff465bdf66256b85794304824e85e2995b2b85f8f0fe84d71c0c6->enter($__internal_d4ed5adcd05ff465bdf66256b85794304824e85e2995b2b85f8f0fe84d71c0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d4ed5adcd05ff465bdf66256b85794304824e85e2995b2b85f8f0fe84d71c0c6->leave($__internal_d4ed5adcd05ff465bdf66256b85794304824e85e2995b2b85f8f0fe84d71c0c6_prof);

        
        $__internal_37006d576f8b7c86654b8c349f55343fa880ef2cdc9efd6b220e8c5961c429f0->leave($__internal_37006d576f8b7c86654b8c349f55343fa880ef2cdc9efd6b220e8c5961c429f0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd6db0c57507256be0477de3568fd0443c4db901d34a340b4b69a3b49809d0e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6db0c57507256be0477de3568fd0443c4db901d34a340b4b69a3b49809d0e7->enter($__internal_bd6db0c57507256be0477de3568fd0443c4db901d34a340b4b69a3b49809d0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b0071ab4996490ddb67a7b30078d53ed6ba38925f165de6ea8ac83ce5c2fbb4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0071ab4996490ddb67a7b30078d53ed6ba38925f165de6ea8ac83ce5c2fbb4a->enter($__internal_b0071ab4996490ddb67a7b30078d53ed6ba38925f165de6ea8ac83ce5c2fbb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b0071ab4996490ddb67a7b30078d53ed6ba38925f165de6ea8ac83ce5c2fbb4a->leave($__internal_b0071ab4996490ddb67a7b30078d53ed6ba38925f165de6ea8ac83ce5c2fbb4a_prof);

        
        $__internal_bd6db0c57507256be0477de3568fd0443c4db901d34a340b4b69a3b49809d0e7->leave($__internal_bd6db0c57507256be0477de3568fd0443c4db901d34a340b4b69a3b49809d0e7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b408ccc09f50584d2e80f8f1ada574c3d1c4cd82b45257ac7c00df386102da1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b408ccc09f50584d2e80f8f1ada574c3d1c4cd82b45257ac7c00df386102da1c->enter($__internal_b408ccc09f50584d2e80f8f1ada574c3d1c4cd82b45257ac7c00df386102da1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ec55b42c5fb4f4e5782a5f8fe5c09c99bff00eb6ae52cd038e0b3b91305c390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec55b42c5fb4f4e5782a5f8fe5c09c99bff00eb6ae52cd038e0b3b91305c390->enter($__internal_3ec55b42c5fb4f4e5782a5f8fe5c09c99bff00eb6ae52cd038e0b3b91305c390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3ec55b42c5fb4f4e5782a5f8fe5c09c99bff00eb6ae52cd038e0b3b91305c390->leave($__internal_3ec55b42c5fb4f4e5782a5f8fe5c09c99bff00eb6ae52cd038e0b3b91305c390_prof);

        
        $__internal_b408ccc09f50584d2e80f8f1ada574c3d1c4cd82b45257ac7c00df386102da1c->leave($__internal_b408ccc09f50584d2e80f8f1ada574c3d1c4cd82b45257ac7c00df386102da1c_prof);

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
