<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f64cb20e307af693a45465d77c39f4f7505dd301c1e0646d3c070ec099bf1ee5 extends Twig_Template
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
        $__internal_7adc2f37a9a8b2911767631a0f440cadec81caa7cd51e72868a828b9be97d844 = $this->env->getExtension("native_profiler");
        $__internal_7adc2f37a9a8b2911767631a0f440cadec81caa7cd51e72868a828b9be97d844->enter($__internal_7adc2f37a9a8b2911767631a0f440cadec81caa7cd51e72868a828b9be97d844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7adc2f37a9a8b2911767631a0f440cadec81caa7cd51e72868a828b9be97d844->leave($__internal_7adc2f37a9a8b2911767631a0f440cadec81caa7cd51e72868a828b9be97d844_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
