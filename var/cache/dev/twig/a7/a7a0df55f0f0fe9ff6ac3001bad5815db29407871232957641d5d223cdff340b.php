<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b2bffc5787c9f8ae6efc38d24df3d2156da5f7f9860fca4352564be9d44635a8 extends Twig_Template
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
        $__internal_2daa51789530dfc9ae12c6c9701e4807b5bffcf959df307222f46e00b731daf8 = $this->env->getExtension("native_profiler");
        $__internal_2daa51789530dfc9ae12c6c9701e4807b5bffcf959df307222f46e00b731daf8->enter($__internal_2daa51789530dfc9ae12c6c9701e4807b5bffcf959df307222f46e00b731daf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_2daa51789530dfc9ae12c6c9701e4807b5bffcf959df307222f46e00b731daf8->leave($__internal_2daa51789530dfc9ae12c6c9701e4807b5bffcf959df307222f46e00b731daf8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
