<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_20d72334b95b3570b56076c6315868c823ec0a35ab406e5545e5cff7d01e3b12 extends Twig_Template
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
        $__internal_d4aac1389315e30356ce3b656eb2144958ad8401f191893edb000560b7363701 = $this->env->getExtension("native_profiler");
        $__internal_d4aac1389315e30356ce3b656eb2144958ad8401f191893edb000560b7363701->enter($__internal_d4aac1389315e30356ce3b656eb2144958ad8401f191893edb000560b7363701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d4aac1389315e30356ce3b656eb2144958ad8401f191893edb000560b7363701->leave($__internal_d4aac1389315e30356ce3b656eb2144958ad8401f191893edb000560b7363701_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
