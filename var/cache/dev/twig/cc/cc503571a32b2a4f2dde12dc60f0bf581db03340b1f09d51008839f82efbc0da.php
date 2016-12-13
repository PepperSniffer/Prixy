<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_7bfe1dd392c2932848b09249beb236e9f32e31fa2e46de3e72a123fb13a68a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6410122f84fc539acb2f1504b4213e509f6d10fe14f6467db9d066ab0f8b6fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6410122f84fc539acb2f1504b4213e509f6d10fe14f6467db9d066ab0f8b6fde->enter($__internal_6410122f84fc539acb2f1504b4213e509f6d10fe14f6467db9d066ab0f8b6fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_9b465ec76e222d0d745154dbb93503df4562f0559a5061db6e39b7fa4720e373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b465ec76e222d0d745154dbb93503df4562f0559a5061db6e39b7fa4720e373->enter($__internal_9b465ec76e222d0d745154dbb93503df4562f0559a5061db6e39b7fa4720e373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6410122f84fc539acb2f1504b4213e509f6d10fe14f6467db9d066ab0f8b6fde->leave($__internal_6410122f84fc539acb2f1504b4213e509f6d10fe14f6467db9d066ab0f8b6fde_prof);

        
        $__internal_9b465ec76e222d0d745154dbb93503df4562f0559a5061db6e39b7fa4720e373->leave($__internal_9b465ec76e222d0d745154dbb93503df4562f0559a5061db6e39b7fa4720e373_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_15f4489edc3be58aa7ebd251dec74adcbb8316095a4fd4a110504c9533855c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f4489edc3be58aa7ebd251dec74adcbb8316095a4fd4a110504c9533855c33->enter($__internal_15f4489edc3be58aa7ebd251dec74adcbb8316095a4fd4a110504c9533855c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ca3a9a3db19d691074e28e5546fb22c58dacbec84ce68959092bfe202688de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca3a9a3db19d691074e28e5546fb22c58dacbec84ce68959092bfe202688de2->enter($__internal_0ca3a9a3db19d691074e28e5546fb22c58dacbec84ce68959092bfe202688de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0ca3a9a3db19d691074e28e5546fb22c58dacbec84ce68959092bfe202688de2->leave($__internal_0ca3a9a3db19d691074e28e5546fb22c58dacbec84ce68959092bfe202688de2_prof);

        
        $__internal_15f4489edc3be58aa7ebd251dec74adcbb8316095a4fd4a110504c9533855c33->leave($__internal_15f4489edc3be58aa7ebd251dec74adcbb8316095a4fd4a110504c9533855c33_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
