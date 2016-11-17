<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d5aff82ae6ecff394aedb7d73cb81b162907137db8c041a6366c05b7464f7b86 extends Twig_Template
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
        $__internal_b1b60116aad1757451d701d9859c627220a59d5a62231a1443108112bc50c5a4 = $this->env->getExtension("native_profiler");
        $__internal_b1b60116aad1757451d701d9859c627220a59d5a62231a1443108112bc50c5a4->enter($__internal_b1b60116aad1757451d701d9859c627220a59d5a62231a1443108112bc50c5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b1b60116aad1757451d701d9859c627220a59d5a62231a1443108112bc50c5a4->leave($__internal_b1b60116aad1757451d701d9859c627220a59d5a62231a1443108112bc50c5a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
