<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_5d74b6e0140eb375cb50229ebeb1647a6786ec4217194f8f379af82fee6e9b6d extends Twig_Template
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
        $__internal_2f89caabff904575300e921b5d9a3fc4a934641ce900951d61cc49cebf4121a9 = $this->env->getExtension("native_profiler");
        $__internal_2f89caabff904575300e921b5d9a3fc4a934641ce900951d61cc49cebf4121a9->enter($__internal_2f89caabff904575300e921b5d9a3fc4a934641ce900951d61cc49cebf4121a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2f89caabff904575300e921b5d9a3fc4a934641ce900951d61cc49cebf4121a9->leave($__internal_2f89caabff904575300e921b5d9a3fc4a934641ce900951d61cc49cebf4121a9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
