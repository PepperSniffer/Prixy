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
        $__internal_33c2d3795006c82bf4a6514d542422cd1edb598f93e51ba81ade13acbd055e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c2d3795006c82bf4a6514d542422cd1edb598f93e51ba81ade13acbd055e10->enter($__internal_33c2d3795006c82bf4a6514d542422cd1edb598f93e51ba81ade13acbd055e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_37dadb2af0e3c904065a272e5772d051250237c9b92143d0d431228533a96465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37dadb2af0e3c904065a272e5772d051250237c9b92143d0d431228533a96465->enter($__internal_37dadb2af0e3c904065a272e5772d051250237c9b92143d0d431228533a96465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33c2d3795006c82bf4a6514d542422cd1edb598f93e51ba81ade13acbd055e10->leave($__internal_33c2d3795006c82bf4a6514d542422cd1edb598f93e51ba81ade13acbd055e10_prof);

        
        $__internal_37dadb2af0e3c904065a272e5772d051250237c9b92143d0d431228533a96465->leave($__internal_37dadb2af0e3c904065a272e5772d051250237c9b92143d0d431228533a96465_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36e12bf8a58529dbd9f026cf5dc8e72f2331be128e0d51bcf88893a608580883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e12bf8a58529dbd9f026cf5dc8e72f2331be128e0d51bcf88893a608580883->enter($__internal_36e12bf8a58529dbd9f026cf5dc8e72f2331be128e0d51bcf88893a608580883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6e63194d586439e0a0ae25521bffa1e4c8c03fa82b57afc9216270f07e39934e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e63194d586439e0a0ae25521bffa1e4c8c03fa82b57afc9216270f07e39934e->enter($__internal_6e63194d586439e0a0ae25521bffa1e4c8c03fa82b57afc9216270f07e39934e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6e63194d586439e0a0ae25521bffa1e4c8c03fa82b57afc9216270f07e39934e->leave($__internal_6e63194d586439e0a0ae25521bffa1e4c8c03fa82b57afc9216270f07e39934e_prof);

        
        $__internal_36e12bf8a58529dbd9f026cf5dc8e72f2331be128e0d51bcf88893a608580883->leave($__internal_36e12bf8a58529dbd9f026cf5dc8e72f2331be128e0d51bcf88893a608580883_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_414a1dafeebd85a45f7981d9c78eee2006c62256119141e67b83e605d8eac5a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414a1dafeebd85a45f7981d9c78eee2006c62256119141e67b83e605d8eac5a1->enter($__internal_414a1dafeebd85a45f7981d9c78eee2006c62256119141e67b83e605d8eac5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_642994b17e9578584fef4aa1670ccc2ddcf6ee5056b4492b79ccb028b58a7e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642994b17e9578584fef4aa1670ccc2ddcf6ee5056b4492b79ccb028b58a7e6f->enter($__internal_642994b17e9578584fef4aa1670ccc2ddcf6ee5056b4492b79ccb028b58a7e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_642994b17e9578584fef4aa1670ccc2ddcf6ee5056b4492b79ccb028b58a7e6f->leave($__internal_642994b17e9578584fef4aa1670ccc2ddcf6ee5056b4492b79ccb028b58a7e6f_prof);

        
        $__internal_414a1dafeebd85a45f7981d9c78eee2006c62256119141e67b83e605d8eac5a1->leave($__internal_414a1dafeebd85a45f7981d9c78eee2006c62256119141e67b83e605d8eac5a1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3fd6ec7cb4733246114360fa83d2763401ca08c829dcdb4ac2ba6fc09b006c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd6ec7cb4733246114360fa83d2763401ca08c829dcdb4ac2ba6fc09b006c19->enter($__internal_3fd6ec7cb4733246114360fa83d2763401ca08c829dcdb4ac2ba6fc09b006c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4362946f2fe7e3a8371d789794e69f44b5473e3fe13be77ebd496a7f637bfffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4362946f2fe7e3a8371d789794e69f44b5473e3fe13be77ebd496a7f637bfffe->enter($__internal_4362946f2fe7e3a8371d789794e69f44b5473e3fe13be77ebd496a7f637bfffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4362946f2fe7e3a8371d789794e69f44b5473e3fe13be77ebd496a7f637bfffe->leave($__internal_4362946f2fe7e3a8371d789794e69f44b5473e3fe13be77ebd496a7f637bfffe_prof);

        
        $__internal_3fd6ec7cb4733246114360fa83d2763401ca08c829dcdb4ac2ba6fc09b006c19->leave($__internal_3fd6ec7cb4733246114360fa83d2763401ca08c829dcdb4ac2ba6fc09b006c19_prof);

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
