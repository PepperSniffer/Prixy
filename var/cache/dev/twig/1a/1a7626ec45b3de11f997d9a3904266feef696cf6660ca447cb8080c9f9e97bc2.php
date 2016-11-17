<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b17bea269e3013bf355b26babc49f01fb1f64150cd479ad3b3dc677161c558bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67c6ce018a3e232ee660bb73293a9168f4190a7eea7f756daff518162abde0fb = $this->env->getExtension("native_profiler");
        $__internal_67c6ce018a3e232ee660bb73293a9168f4190a7eea7f756daff518162abde0fb->enter($__internal_67c6ce018a3e232ee660bb73293a9168f4190a7eea7f756daff518162abde0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_67c6ce018a3e232ee660bb73293a9168f4190a7eea7f756daff518162abde0fb->leave($__internal_67c6ce018a3e232ee660bb73293a9168f4190a7eea7f756daff518162abde0fb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1fa10221b58792314c2fc6159ffc7860f24809a8f3ca3807ce6099d493ca73e = $this->env->getExtension("native_profiler");
        $__internal_d1fa10221b58792314c2fc6159ffc7860f24809a8f3ca3807ce6099d493ca73e->enter($__internal_d1fa10221b58792314c2fc6159ffc7860f24809a8f3ca3807ce6099d493ca73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d1fa10221b58792314c2fc6159ffc7860f24809a8f3ca3807ce6099d493ca73e->leave($__internal_d1fa10221b58792314c2fc6159ffc7860f24809a8f3ca3807ce6099d493ca73e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
