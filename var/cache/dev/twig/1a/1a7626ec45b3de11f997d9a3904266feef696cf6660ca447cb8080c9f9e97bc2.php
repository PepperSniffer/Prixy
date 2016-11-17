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
        $__internal_bb939ca752b2117c1cdf36209d51b703da206f89fd2571c8ec859df213316672 = $this->env->getExtension("native_profiler");
        $__internal_bb939ca752b2117c1cdf36209d51b703da206f89fd2571c8ec859df213316672->enter($__internal_bb939ca752b2117c1cdf36209d51b703da206f89fd2571c8ec859df213316672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bb939ca752b2117c1cdf36209d51b703da206f89fd2571c8ec859df213316672->leave($__internal_bb939ca752b2117c1cdf36209d51b703da206f89fd2571c8ec859df213316672_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_90447f6a192e14c81c3a4577c040d017c258eda5450fb4bd69702b0d4757870e = $this->env->getExtension("native_profiler");
        $__internal_90447f6a192e14c81c3a4577c040d017c258eda5450fb4bd69702b0d4757870e->enter($__internal_90447f6a192e14c81c3a4577c040d017c258eda5450fb4bd69702b0d4757870e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_90447f6a192e14c81c3a4577c040d017c258eda5450fb4bd69702b0d4757870e->leave($__internal_90447f6a192e14c81c3a4577c040d017c258eda5450fb4bd69702b0d4757870e_prof);

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
