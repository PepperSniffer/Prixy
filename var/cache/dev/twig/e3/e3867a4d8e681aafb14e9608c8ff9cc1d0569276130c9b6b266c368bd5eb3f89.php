<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_ef3462565e98a05641318393222ead1a90761e6038b5c6efab4d7b62953766dd extends Twig_Template
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
        $__internal_dbe1848123e5184edd443008229fd9007cbdf811e6321354cffd52716575fd54 = $this->env->getExtension("native_profiler");
        $__internal_dbe1848123e5184edd443008229fd9007cbdf811e6321354cffd52716575fd54->enter($__internal_dbe1848123e5184edd443008229fd9007cbdf811e6321354cffd52716575fd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dbe1848123e5184edd443008229fd9007cbdf811e6321354cffd52716575fd54->leave($__internal_dbe1848123e5184edd443008229fd9007cbdf811e6321354cffd52716575fd54_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
