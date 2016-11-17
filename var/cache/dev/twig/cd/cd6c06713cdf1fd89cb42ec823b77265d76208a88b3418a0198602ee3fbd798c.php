<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_78bfd699c36777a3e7f201dd504ef8b2e514cb976913d71ecb9b21527a4d4863 extends Twig_Template
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
        $__internal_c562fa862c47461647f2325687ca4e4f506edc8700c88f9f2cbd45a6f62f0cf8 = $this->env->getExtension("native_profiler");
        $__internal_c562fa862c47461647f2325687ca4e4f506edc8700c88f9f2cbd45a6f62f0cf8->enter($__internal_c562fa862c47461647f2325687ca4e4f506edc8700c88f9f2cbd45a6f62f0cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c562fa862c47461647f2325687ca4e4f506edc8700c88f9f2cbd45a6f62f0cf8->leave($__internal_c562fa862c47461647f2325687ca4e4f506edc8700c88f9f2cbd45a6f62f0cf8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f059c56d50905208bf01f0c3cf8a93ea3f075dae82efa72423ed3b69dfeb88cb = $this->env->getExtension("native_profiler");
        $__internal_f059c56d50905208bf01f0c3cf8a93ea3f075dae82efa72423ed3b69dfeb88cb->enter($__internal_f059c56d50905208bf01f0c3cf8a93ea3f075dae82efa72423ed3b69dfeb88cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f059c56d50905208bf01f0c3cf8a93ea3f075dae82efa72423ed3b69dfeb88cb->leave($__internal_f059c56d50905208bf01f0c3cf8a93ea3f075dae82efa72423ed3b69dfeb88cb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0ea3c98e97a512397621aad282f98e1a8fbfe57a145ff1ed82ec41ec33dfada9 = $this->env->getExtension("native_profiler");
        $__internal_0ea3c98e97a512397621aad282f98e1a8fbfe57a145ff1ed82ec41ec33dfada9->enter($__internal_0ea3c98e97a512397621aad282f98e1a8fbfe57a145ff1ed82ec41ec33dfada9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0ea3c98e97a512397621aad282f98e1a8fbfe57a145ff1ed82ec41ec33dfada9->leave($__internal_0ea3c98e97a512397621aad282f98e1a8fbfe57a145ff1ed82ec41ec33dfada9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_adc816ca812112e2ddd9b3fe97ac05f2671f4f6a547555fcac33af4c607a7629 = $this->env->getExtension("native_profiler");
        $__internal_adc816ca812112e2ddd9b3fe97ac05f2671f4f6a547555fcac33af4c607a7629->enter($__internal_adc816ca812112e2ddd9b3fe97ac05f2671f4f6a547555fcac33af4c607a7629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_adc816ca812112e2ddd9b3fe97ac05f2671f4f6a547555fcac33af4c607a7629->leave($__internal_adc816ca812112e2ddd9b3fe97ac05f2671f4f6a547555fcac33af4c607a7629_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
