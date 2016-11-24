<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ff5b926f738416832661a09109baaea38a4c7e342a3e6e0e3d7beb9829c9acab extends Twig_Template
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
        $__internal_bcea5515712959ed99e4169e5d4bdc8f68e9be928aa4461ae16a3f050f87912c = $this->env->getExtension("native_profiler");
        $__internal_bcea5515712959ed99e4169e5d4bdc8f68e9be928aa4461ae16a3f050f87912c->enter($__internal_bcea5515712959ed99e4169e5d4bdc8f68e9be928aa4461ae16a3f050f87912c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_bcea5515712959ed99e4169e5d4bdc8f68e9be928aa4461ae16a3f050f87912c->leave($__internal_bcea5515712959ed99e4169e5d4bdc8f68e9be928aa4461ae16a3f050f87912c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
