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
        $__internal_02498f6a717f07ec4262679ddefbcb316b23f0cb6587936d61c4445047ac2121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02498f6a717f07ec4262679ddefbcb316b23f0cb6587936d61c4445047ac2121->enter($__internal_02498f6a717f07ec4262679ddefbcb316b23f0cb6587936d61c4445047ac2121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_a0971193a95e3019713f33a9a0a0ada28723669f6071a1df4f9eb6004961fbd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0971193a95e3019713f33a9a0a0ada28723669f6071a1df4f9eb6004961fbd4->enter($__internal_a0971193a95e3019713f33a9a0a0ada28723669f6071a1df4f9eb6004961fbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_02498f6a717f07ec4262679ddefbcb316b23f0cb6587936d61c4445047ac2121->leave($__internal_02498f6a717f07ec4262679ddefbcb316b23f0cb6587936d61c4445047ac2121_prof);

        
        $__internal_a0971193a95e3019713f33a9a0a0ada28723669f6071a1df4f9eb6004961fbd4->leave($__internal_a0971193a95e3019713f33a9a0a0ada28723669f6071a1df4f9eb6004961fbd4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e799285f618dd15d3d8ea0574f57ce528b25d8977c987e7fbeda01fafcd618ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e799285f618dd15d3d8ea0574f57ce528b25d8977c987e7fbeda01fafcd618ac->enter($__internal_e799285f618dd15d3d8ea0574f57ce528b25d8977c987e7fbeda01fafcd618ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9797775a8e759271caa322228d33ad8eb386843e20ac190772d15ba0cc745f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9797775a8e759271caa322228d33ad8eb386843e20ac190772d15ba0cc745f39->enter($__internal_9797775a8e759271caa322228d33ad8eb386843e20ac190772d15ba0cc745f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9797775a8e759271caa322228d33ad8eb386843e20ac190772d15ba0cc745f39->leave($__internal_9797775a8e759271caa322228d33ad8eb386843e20ac190772d15ba0cc745f39_prof);

        
        $__internal_e799285f618dd15d3d8ea0574f57ce528b25d8977c987e7fbeda01fafcd618ac->leave($__internal_e799285f618dd15d3d8ea0574f57ce528b25d8977c987e7fbeda01fafcd618ac_prof);

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
