<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1ae059584e06a011242c4324fc63fc2ba725e5171bd913e5986f13e6d509a92d extends Twig_Template
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
        $__internal_5dde47e1ae66d3728cf6882c65be870553026e799f15525b9494f608afc2ee3c = $this->env->getExtension("native_profiler");
        $__internal_5dde47e1ae66d3728cf6882c65be870553026e799f15525b9494f608afc2ee3c->enter($__internal_5dde47e1ae66d3728cf6882c65be870553026e799f15525b9494f608afc2ee3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5dde47e1ae66d3728cf6882c65be870553026e799f15525b9494f608afc2ee3c->leave($__internal_5dde47e1ae66d3728cf6882c65be870553026e799f15525b9494f608afc2ee3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
