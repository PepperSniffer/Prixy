<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_886fc59e47e9b9b6fde66832e78e353410b1a36c0044e25647b1b9e31a798540 extends Twig_Template
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
        $__internal_f5ab9150263a8b5e3cf539f692b612f3dbf77d74b1177f496cd79e609402e11b = $this->env->getExtension("native_profiler");
        $__internal_f5ab9150263a8b5e3cf539f692b612f3dbf77d74b1177f496cd79e609402e11b->enter($__internal_f5ab9150263a8b5e3cf539f692b612f3dbf77d74b1177f496cd79e609402e11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f5ab9150263a8b5e3cf539f692b612f3dbf77d74b1177f496cd79e609402e11b->leave($__internal_f5ab9150263a8b5e3cf539f692b612f3dbf77d74b1177f496cd79e609402e11b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fec8bf6fd05b788c76ca89b7f1ee3adde131dad0fc4bcfb45b951d067586bf61 = $this->env->getExtension("native_profiler");
        $__internal_fec8bf6fd05b788c76ca89b7f1ee3adde131dad0fc4bcfb45b951d067586bf61->enter($__internal_fec8bf6fd05b788c76ca89b7f1ee3adde131dad0fc4bcfb45b951d067586bf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fec8bf6fd05b788c76ca89b7f1ee3adde131dad0fc4bcfb45b951d067586bf61->leave($__internal_fec8bf6fd05b788c76ca89b7f1ee3adde131dad0fc4bcfb45b951d067586bf61_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
