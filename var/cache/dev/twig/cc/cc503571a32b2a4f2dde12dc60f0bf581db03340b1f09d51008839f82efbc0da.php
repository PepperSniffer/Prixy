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
        $__internal_3272af80c6bc8af7e8905bc65d63de5afd497a88580c35d104aa0ba5af464b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3272af80c6bc8af7e8905bc65d63de5afd497a88580c35d104aa0ba5af464b33->enter($__internal_3272af80c6bc8af7e8905bc65d63de5afd497a88580c35d104aa0ba5af464b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_f4438cd33251f926bc45e5160a1bb3be1655a8d9de2b1187e3bf9cf773a21cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4438cd33251f926bc45e5160a1bb3be1655a8d9de2b1187e3bf9cf773a21cee->enter($__internal_f4438cd33251f926bc45e5160a1bb3be1655a8d9de2b1187e3bf9cf773a21cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3272af80c6bc8af7e8905bc65d63de5afd497a88580c35d104aa0ba5af464b33->leave($__internal_3272af80c6bc8af7e8905bc65d63de5afd497a88580c35d104aa0ba5af464b33_prof);

        
        $__internal_f4438cd33251f926bc45e5160a1bb3be1655a8d9de2b1187e3bf9cf773a21cee->leave($__internal_f4438cd33251f926bc45e5160a1bb3be1655a8d9de2b1187e3bf9cf773a21cee_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd38a38a33299579617ec1ff4eb8375e3a365cf72d669968ca0ddd00f2a3ab80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd38a38a33299579617ec1ff4eb8375e3a365cf72d669968ca0ddd00f2a3ab80->enter($__internal_fd38a38a33299579617ec1ff4eb8375e3a365cf72d669968ca0ddd00f2a3ab80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bd406896df3e7116d21fc04dde879bd5884acc47343667056a8b0cb05c23d737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd406896df3e7116d21fc04dde879bd5884acc47343667056a8b0cb05c23d737->enter($__internal_bd406896df3e7116d21fc04dde879bd5884acc47343667056a8b0cb05c23d737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bd406896df3e7116d21fc04dde879bd5884acc47343667056a8b0cb05c23d737->leave($__internal_bd406896df3e7116d21fc04dde879bd5884acc47343667056a8b0cb05c23d737_prof);

        
        $__internal_fd38a38a33299579617ec1ff4eb8375e3a365cf72d669968ca0ddd00f2a3ab80->leave($__internal_fd38a38a33299579617ec1ff4eb8375e3a365cf72d669968ca0ddd00f2a3ab80_prof);

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
