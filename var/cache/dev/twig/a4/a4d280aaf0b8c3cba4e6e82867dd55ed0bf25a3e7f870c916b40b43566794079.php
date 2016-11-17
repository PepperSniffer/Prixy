<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_81a62319dad54af4bfb706fddd90d5667b77123db1f9eaf14308e48a05c84aa1 extends Twig_Template
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
        $__internal_15c0a64503af99067fba56f7ac983be50fed3718bf6ef96a38a78ecc74d810dc = $this->env->getExtension("native_profiler");
        $__internal_15c0a64503af99067fba56f7ac983be50fed3718bf6ef96a38a78ecc74d810dc->enter($__internal_15c0a64503af99067fba56f7ac983be50fed3718bf6ef96a38a78ecc74d810dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_15c0a64503af99067fba56f7ac983be50fed3718bf6ef96a38a78ecc74d810dc->leave($__internal_15c0a64503af99067fba56f7ac983be50fed3718bf6ef96a38a78ecc74d810dc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
