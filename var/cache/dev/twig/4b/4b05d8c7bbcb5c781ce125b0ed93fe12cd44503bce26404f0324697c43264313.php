<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_3c1b5957256f6b827c8b7b0cf358950be1b90e4d1dbd4bafd975e665790968e2 extends Twig_Template
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
        $__internal_223c2fe61ecafa68f1a1f00ff95dcb94f7d919038fa5528a251d3f5129769eae = $this->env->getExtension("native_profiler");
        $__internal_223c2fe61ecafa68f1a1f00ff95dcb94f7d919038fa5528a251d3f5129769eae->enter($__internal_223c2fe61ecafa68f1a1f00ff95dcb94f7d919038fa5528a251d3f5129769eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_223c2fe61ecafa68f1a1f00ff95dcb94f7d919038fa5528a251d3f5129769eae->leave($__internal_223c2fe61ecafa68f1a1f00ff95dcb94f7d919038fa5528a251d3f5129769eae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
