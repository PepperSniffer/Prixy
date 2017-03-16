<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2fece0d2e9f17d3fad83596bd821f4a01619695de9d610906396f916378a4cc5 extends Twig_Template
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
        $__internal_a0b13ae285e9b13a98c688c49cadd5ca6c771cd7f23832425846d9d0e350c544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b13ae285e9b13a98c688c49cadd5ca6c771cd7f23832425846d9d0e350c544->enter($__internal_a0b13ae285e9b13a98c688c49cadd5ca6c771cd7f23832425846d9d0e350c544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_380e05c845cc8a9fed6f5d294b66c40f010a852730c56b070694c74dc767cdec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380e05c845cc8a9fed6f5d294b66c40f010a852730c56b070694c74dc767cdec->enter($__internal_380e05c845cc8a9fed6f5d294b66c40f010a852730c56b070694c74dc767cdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a0b13ae285e9b13a98c688c49cadd5ca6c771cd7f23832425846d9d0e350c544->leave($__internal_a0b13ae285e9b13a98c688c49cadd5ca6c771cd7f23832425846d9d0e350c544_prof);

        
        $__internal_380e05c845cc8a9fed6f5d294b66c40f010a852730c56b070694c74dc767cdec->leave($__internal_380e05c845cc8a9fed6f5d294b66c40f010a852730c56b070694c74dc767cdec_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ffbce01a92c8c1708b7ea30980dbcc75e1d4f8cc496c1224e96092149480140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffbce01a92c8c1708b7ea30980dbcc75e1d4f8cc496c1224e96092149480140->enter($__internal_4ffbce01a92c8c1708b7ea30980dbcc75e1d4f8cc496c1224e96092149480140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b5549ea04ac4f92e65054f3f7649bea03c94fc83d3d1630d3be3bc1b16220da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5549ea04ac4f92e65054f3f7649bea03c94fc83d3d1630d3be3bc1b16220da->enter($__internal_4b5549ea04ac4f92e65054f3f7649bea03c94fc83d3d1630d3be3bc1b16220da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4b5549ea04ac4f92e65054f3f7649bea03c94fc83d3d1630d3be3bc1b16220da->leave($__internal_4b5549ea04ac4f92e65054f3f7649bea03c94fc83d3d1630d3be3bc1b16220da_prof);

        
        $__internal_4ffbce01a92c8c1708b7ea30980dbcc75e1d4f8cc496c1224e96092149480140->leave($__internal_4ffbce01a92c8c1708b7ea30980dbcc75e1d4f8cc496c1224e96092149480140_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
