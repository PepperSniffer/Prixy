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
        $__internal_8b7626fb3194b12de87d1474b07274a2a40612cb1de8b7d72ef364da40b9bf14 = $this->env->getExtension("native_profiler");
        $__internal_8b7626fb3194b12de87d1474b07274a2a40612cb1de8b7d72ef364da40b9bf14->enter($__internal_8b7626fb3194b12de87d1474b07274a2a40612cb1de8b7d72ef364da40b9bf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_8b7626fb3194b12de87d1474b07274a2a40612cb1de8b7d72ef364da40b9bf14->leave($__internal_8b7626fb3194b12de87d1474b07274a2a40612cb1de8b7d72ef364da40b9bf14_prof);

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
