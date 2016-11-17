<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_886fc59e47e9b9b6fde66832e78e353410b1a36c0044e25647b1b9e31a798540 extends Twig_Template
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
        $__internal_8c1f7131f764fdd49b8ca17a59fd717e290312d0ec086b091c08c783943eae27 = $this->env->getExtension("native_profiler");
        $__internal_8c1f7131f764fdd49b8ca17a59fd717e290312d0ec086b091c08c783943eae27->enter($__internal_8c1f7131f764fdd49b8ca17a59fd717e290312d0ec086b091c08c783943eae27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8c1f7131f764fdd49b8ca17a59fd717e290312d0ec086b091c08c783943eae27->leave($__internal_8c1f7131f764fdd49b8ca17a59fd717e290312d0ec086b091c08c783943eae27_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9638e5810440b52e49fccaff0f039afff3361a4b1cfa625927a18343a36be6d = $this->env->getExtension("native_profiler");
        $__internal_c9638e5810440b52e49fccaff0f039afff3361a4b1cfa625927a18343a36be6d->enter($__internal_c9638e5810440b52e49fccaff0f039afff3361a4b1cfa625927a18343a36be6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c9638e5810440b52e49fccaff0f039afff3361a4b1cfa625927a18343a36be6d->leave($__internal_c9638e5810440b52e49fccaff0f039afff3361a4b1cfa625927a18343a36be6d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
