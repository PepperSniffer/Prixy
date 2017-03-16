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
        $__internal_a14406f97a7017e53e61c67cf1b7ced0069442fa21931a13957bb95315caacee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14406f97a7017e53e61c67cf1b7ced0069442fa21931a13957bb95315caacee->enter($__internal_a14406f97a7017e53e61c67cf1b7ced0069442fa21931a13957bb95315caacee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_3c614ef5ca3d87e89d26d63e5628ae803f2c0dc42f2d1d40f762ce15b322a400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c614ef5ca3d87e89d26d63e5628ae803f2c0dc42f2d1d40f762ce15b322a400->enter($__internal_3c614ef5ca3d87e89d26d63e5628ae803f2c0dc42f2d1d40f762ce15b322a400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a14406f97a7017e53e61c67cf1b7ced0069442fa21931a13957bb95315caacee->leave($__internal_a14406f97a7017e53e61c67cf1b7ced0069442fa21931a13957bb95315caacee_prof);

        
        $__internal_3c614ef5ca3d87e89d26d63e5628ae803f2c0dc42f2d1d40f762ce15b322a400->leave($__internal_3c614ef5ca3d87e89d26d63e5628ae803f2c0dc42f2d1d40f762ce15b322a400_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2249f1435b093fd0dd98dade783307bb41143702c2b138c201b8f0c24623f2b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2249f1435b093fd0dd98dade783307bb41143702c2b138c201b8f0c24623f2b6->enter($__internal_2249f1435b093fd0dd98dade783307bb41143702c2b138c201b8f0c24623f2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5aae30b55724ddd3d4e4652fb5ca2686799ba9438dc81f06c5bce372bfdd3c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aae30b55724ddd3d4e4652fb5ca2686799ba9438dc81f06c5bce372bfdd3c7e->enter($__internal_5aae30b55724ddd3d4e4652fb5ca2686799ba9438dc81f06c5bce372bfdd3c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5aae30b55724ddd3d4e4652fb5ca2686799ba9438dc81f06c5bce372bfdd3c7e->leave($__internal_5aae30b55724ddd3d4e4652fb5ca2686799ba9438dc81f06c5bce372bfdd3c7e_prof);

        
        $__internal_2249f1435b093fd0dd98dade783307bb41143702c2b138c201b8f0c24623f2b6->leave($__internal_2249f1435b093fd0dd98dade783307bb41143702c2b138c201b8f0c24623f2b6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e3dcb8225111f811afe4c975ebc0fbebba463f89362160c371b5d315a8daac6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3dcb8225111f811afe4c975ebc0fbebba463f89362160c371b5d315a8daac6e->enter($__internal_e3dcb8225111f811afe4c975ebc0fbebba463f89362160c371b5d315a8daac6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f56e1821498294d980d90450826b3fc5c99ab35781defc195b4d774c2974b1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56e1821498294d980d90450826b3fc5c99ab35781defc195b4d774c2974b1fa->enter($__internal_f56e1821498294d980d90450826b3fc5c99ab35781defc195b4d774c2974b1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f56e1821498294d980d90450826b3fc5c99ab35781defc195b4d774c2974b1fa->leave($__internal_f56e1821498294d980d90450826b3fc5c99ab35781defc195b4d774c2974b1fa_prof);

        
        $__internal_e3dcb8225111f811afe4c975ebc0fbebba463f89362160c371b5d315a8daac6e->leave($__internal_e3dcb8225111f811afe4c975ebc0fbebba463f89362160c371b5d315a8daac6e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70ddaef4804775e74638cb27aca12502c8deb26005c33bbe40ea062f23935f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ddaef4804775e74638cb27aca12502c8deb26005c33bbe40ea062f23935f7d->enter($__internal_70ddaef4804775e74638cb27aca12502c8deb26005c33bbe40ea062f23935f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aaeb2c85f7c6c6f15138210408ad0cbedd9182a1b7b03185ddbcddb41455e1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaeb2c85f7c6c6f15138210408ad0cbedd9182a1b7b03185ddbcddb41455e1bb->enter($__internal_aaeb2c85f7c6c6f15138210408ad0cbedd9182a1b7b03185ddbcddb41455e1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_aaeb2c85f7c6c6f15138210408ad0cbedd9182a1b7b03185ddbcddb41455e1bb->leave($__internal_aaeb2c85f7c6c6f15138210408ad0cbedd9182a1b7b03185ddbcddb41455e1bb_prof);

        
        $__internal_70ddaef4804775e74638cb27aca12502c8deb26005c33bbe40ea062f23935f7d->leave($__internal_70ddaef4804775e74638cb27aca12502c8deb26005c33bbe40ea062f23935f7d_prof);

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
