<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b17bea269e3013bf355b26babc49f01fb1f64150cd479ad3b3dc677161c558bc extends Twig_Template
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
        $__internal_245a667f5f047a60217af235027b3f43140cc822b02053170cbb24257a7ef227 = $this->env->getExtension("native_profiler");
        $__internal_245a667f5f047a60217af235027b3f43140cc822b02053170cbb24257a7ef227->enter($__internal_245a667f5f047a60217af235027b3f43140cc822b02053170cbb24257a7ef227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_245a667f5f047a60217af235027b3f43140cc822b02053170cbb24257a7ef227->leave($__internal_245a667f5f047a60217af235027b3f43140cc822b02053170cbb24257a7ef227_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_241a13ce32bd6a4cfcbae3c09a30a5840b8edcb938aec83f25ed311a37491c34 = $this->env->getExtension("native_profiler");
        $__internal_241a13ce32bd6a4cfcbae3c09a30a5840b8edcb938aec83f25ed311a37491c34->enter($__internal_241a13ce32bd6a4cfcbae3c09a30a5840b8edcb938aec83f25ed311a37491c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_241a13ce32bd6a4cfcbae3c09a30a5840b8edcb938aec83f25ed311a37491c34->leave($__internal_241a13ce32bd6a4cfcbae3c09a30a5840b8edcb938aec83f25ed311a37491c34_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
