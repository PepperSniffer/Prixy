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
        $__internal_5830b7240e1e29303cc8f8c2c7efc79c8d00c92fa2f8ba411b44d534c5f6f264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5830b7240e1e29303cc8f8c2c7efc79c8d00c92fa2f8ba411b44d534c5f6f264->enter($__internal_5830b7240e1e29303cc8f8c2c7efc79c8d00c92fa2f8ba411b44d534c5f6f264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_5c7c308aaa70d0b2ffe3d292322badff707f54cbb3ed0597d06854122fab8a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7c308aaa70d0b2ffe3d292322badff707f54cbb3ed0597d06854122fab8a46->enter($__internal_5c7c308aaa70d0b2ffe3d292322badff707f54cbb3ed0597d06854122fab8a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5830b7240e1e29303cc8f8c2c7efc79c8d00c92fa2f8ba411b44d534c5f6f264->leave($__internal_5830b7240e1e29303cc8f8c2c7efc79c8d00c92fa2f8ba411b44d534c5f6f264_prof);

        
        $__internal_5c7c308aaa70d0b2ffe3d292322badff707f54cbb3ed0597d06854122fab8a46->leave($__internal_5c7c308aaa70d0b2ffe3d292322badff707f54cbb3ed0597d06854122fab8a46_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f810ce0111f48c0cc65ee2660958af080dc898bfd0f1cc591ff0dfce5b8cfeae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f810ce0111f48c0cc65ee2660958af080dc898bfd0f1cc591ff0dfce5b8cfeae->enter($__internal_f810ce0111f48c0cc65ee2660958af080dc898bfd0f1cc591ff0dfce5b8cfeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ce0517da7c4289c0356768936c87a55b3533bec94a21f8ad65bfa1ebf322f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce0517da7c4289c0356768936c87a55b3533bec94a21f8ad65bfa1ebf322f42->enter($__internal_6ce0517da7c4289c0356768936c87a55b3533bec94a21f8ad65bfa1ebf322f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6ce0517da7c4289c0356768936c87a55b3533bec94a21f8ad65bfa1ebf322f42->leave($__internal_6ce0517da7c4289c0356768936c87a55b3533bec94a21f8ad65bfa1ebf322f42_prof);

        
        $__internal_f810ce0111f48c0cc65ee2660958af080dc898bfd0f1cc591ff0dfce5b8cfeae->leave($__internal_f810ce0111f48c0cc65ee2660958af080dc898bfd0f1cc591ff0dfce5b8cfeae_prof);

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
