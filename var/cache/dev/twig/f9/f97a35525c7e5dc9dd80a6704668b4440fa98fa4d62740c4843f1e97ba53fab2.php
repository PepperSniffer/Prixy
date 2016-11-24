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
        $__internal_edfc3ccd99b2541375ea5fdea90afb922bd3835f7be3b22a1686b653f761e839 = $this->env->getExtension("native_profiler");
        $__internal_edfc3ccd99b2541375ea5fdea90afb922bd3835f7be3b22a1686b653f761e839->enter($__internal_edfc3ccd99b2541375ea5fdea90afb922bd3835f7be3b22a1686b653f761e839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_edfc3ccd99b2541375ea5fdea90afb922bd3835f7be3b22a1686b653f761e839->leave($__internal_edfc3ccd99b2541375ea5fdea90afb922bd3835f7be3b22a1686b653f761e839_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_083fdc43f065a1fb089b7cde36818858fde6c18239eacd2df688fc762027907c = $this->env->getExtension("native_profiler");
        $__internal_083fdc43f065a1fb089b7cde36818858fde6c18239eacd2df688fc762027907c->enter($__internal_083fdc43f065a1fb089b7cde36818858fde6c18239eacd2df688fc762027907c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_083fdc43f065a1fb089b7cde36818858fde6c18239eacd2df688fc762027907c->leave($__internal_083fdc43f065a1fb089b7cde36818858fde6c18239eacd2df688fc762027907c_prof);

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
