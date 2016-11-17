<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_c833036812325666e2b19ba9c8d59dc0b73fc09e73db99459bb9f09675fcb682 extends Twig_Template
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
        $__internal_a2d0fd21de5d4daecdac0c4f59f0dcc1736a14a3dea0bee6194240d9efc1d45c = $this->env->getExtension("native_profiler");
        $__internal_a2d0fd21de5d4daecdac0c4f59f0dcc1736a14a3dea0bee6194240d9efc1d45c->enter($__internal_a2d0fd21de5d4daecdac0c4f59f0dcc1736a14a3dea0bee6194240d9efc1d45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a2d0fd21de5d4daecdac0c4f59f0dcc1736a14a3dea0bee6194240d9efc1d45c->leave($__internal_a2d0fd21de5d4daecdac0c4f59f0dcc1736a14a3dea0bee6194240d9efc1d45c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
