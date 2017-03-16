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
        $__internal_84da59405ce0c39bcb2e6b093afac4e5ab848c5b8bafa44dad987f6e1716a5ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84da59405ce0c39bcb2e6b093afac4e5ab848c5b8bafa44dad987f6e1716a5ab->enter($__internal_84da59405ce0c39bcb2e6b093afac4e5ab848c5b8bafa44dad987f6e1716a5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a6094580150ef6a5fbad4a737ecc337d00d09cb84ada89d95719201378d34f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6094580150ef6a5fbad4a737ecc337d00d09cb84ada89d95719201378d34f21->enter($__internal_a6094580150ef6a5fbad4a737ecc337d00d09cb84ada89d95719201378d34f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_84da59405ce0c39bcb2e6b093afac4e5ab848c5b8bafa44dad987f6e1716a5ab->leave($__internal_84da59405ce0c39bcb2e6b093afac4e5ab848c5b8bafa44dad987f6e1716a5ab_prof);

        
        $__internal_a6094580150ef6a5fbad4a737ecc337d00d09cb84ada89d95719201378d34f21->leave($__internal_a6094580150ef6a5fbad4a737ecc337d00d09cb84ada89d95719201378d34f21_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3fda1d911b01fe99929f18243444731380ebc5fb99bab2004435b1a101d0cf6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fda1d911b01fe99929f18243444731380ebc5fb99bab2004435b1a101d0cf6d->enter($__internal_3fda1d911b01fe99929f18243444731380ebc5fb99bab2004435b1a101d0cf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_289665eafab4c7100975634df4535a05e64d08c6f29ebc5a62a5d956a32a8fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289665eafab4c7100975634df4535a05e64d08c6f29ebc5a62a5d956a32a8fa9->enter($__internal_289665eafab4c7100975634df4535a05e64d08c6f29ebc5a62a5d956a32a8fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_289665eafab4c7100975634df4535a05e64d08c6f29ebc5a62a5d956a32a8fa9->leave($__internal_289665eafab4c7100975634df4535a05e64d08c6f29ebc5a62a5d956a32a8fa9_prof);

        
        $__internal_3fda1d911b01fe99929f18243444731380ebc5fb99bab2004435b1a101d0cf6d->leave($__internal_3fda1d911b01fe99929f18243444731380ebc5fb99bab2004435b1a101d0cf6d_prof);

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
