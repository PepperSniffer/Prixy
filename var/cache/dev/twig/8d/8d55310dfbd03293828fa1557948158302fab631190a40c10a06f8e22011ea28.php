<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_558b98cdbbf29d3c8b63648394c46014bedea4caa1cfa3470a2d1944295b3e34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cecad2db9b0555b21b8a2a592fbbe856b60d6ed8341575ba83e99e5c1111c35f = $this->env->getExtension("native_profiler");
        $__internal_cecad2db9b0555b21b8a2a592fbbe856b60d6ed8341575ba83e99e5c1111c35f->enter($__internal_cecad2db9b0555b21b8a2a592fbbe856b60d6ed8341575ba83e99e5c1111c35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_cecad2db9b0555b21b8a2a592fbbe856b60d6ed8341575ba83e99e5c1111c35f->leave($__internal_cecad2db9b0555b21b8a2a592fbbe856b60d6ed8341575ba83e99e5c1111c35f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
