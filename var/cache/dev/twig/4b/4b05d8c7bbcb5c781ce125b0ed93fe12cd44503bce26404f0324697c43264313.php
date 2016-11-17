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
        $__internal_078381d86b1921ef03052675ec4d6d66b0c0d84c8f14a457f2988ca8ab3698a0 = $this->env->getExtension("native_profiler");
        $__internal_078381d86b1921ef03052675ec4d6d66b0c0d84c8f14a457f2988ca8ab3698a0->enter($__internal_078381d86b1921ef03052675ec4d6d66b0c0d84c8f14a457f2988ca8ab3698a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_078381d86b1921ef03052675ec4d6d66b0c0d84c8f14a457f2988ca8ab3698a0->leave($__internal_078381d86b1921ef03052675ec4d6d66b0c0d84c8f14a457f2988ca8ab3698a0_prof);

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
