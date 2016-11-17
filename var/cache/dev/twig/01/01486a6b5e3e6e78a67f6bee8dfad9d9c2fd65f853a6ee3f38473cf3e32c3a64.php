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
        $__internal_3224698db443fc5a84d4c7527036c5197b6d42bb98a49a0ee6c9340102b9ad49 = $this->env->getExtension("native_profiler");
        $__internal_3224698db443fc5a84d4c7527036c5197b6d42bb98a49a0ee6c9340102b9ad49->enter($__internal_3224698db443fc5a84d4c7527036c5197b6d42bb98a49a0ee6c9340102b9ad49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3224698db443fc5a84d4c7527036c5197b6d42bb98a49a0ee6c9340102b9ad49->leave($__internal_3224698db443fc5a84d4c7527036c5197b6d42bb98a49a0ee6c9340102b9ad49_prof);

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
