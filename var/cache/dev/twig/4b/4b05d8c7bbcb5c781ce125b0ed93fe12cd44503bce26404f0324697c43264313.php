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
        $__internal_145b3f3318b5f3215bf950a40659a2f1e65f68443c30f9ddbd3ea11f58fdbff6 = $this->env->getExtension("native_profiler");
        $__internal_145b3f3318b5f3215bf950a40659a2f1e65f68443c30f9ddbd3ea11f58fdbff6->enter($__internal_145b3f3318b5f3215bf950a40659a2f1e65f68443c30f9ddbd3ea11f58fdbff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_145b3f3318b5f3215bf950a40659a2f1e65f68443c30f9ddbd3ea11f58fdbff6->leave($__internal_145b3f3318b5f3215bf950a40659a2f1e65f68443c30f9ddbd3ea11f58fdbff6_prof);

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
