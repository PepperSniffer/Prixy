<?php

/* ::base.html.twig */
class __TwigTemplate_b048c804c46836c5463ff72a2658e61df266f744a789196df7e2eed345833412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e774b0b340acc7fe3b16ef9ff85effd05588929a16d68863042e3caaeb591072 = $this->env->getExtension("native_profiler");
        $__internal_e774b0b340acc7fe3b16ef9ff85effd05588929a16d68863042e3caaeb591072->enter($__internal_e774b0b340acc7fe3b16ef9ff85effd05588929a16d68863042e3caaeb591072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e774b0b340acc7fe3b16ef9ff85effd05588929a16d68863042e3caaeb591072->leave($__internal_e774b0b340acc7fe3b16ef9ff85effd05588929a16d68863042e3caaeb591072_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6b4fb50008b395a6463c53e976a3972c55cc5970d22b60ce5fbd298c194e7aa = $this->env->getExtension("native_profiler");
        $__internal_d6b4fb50008b395a6463c53e976a3972c55cc5970d22b60ce5fbd298c194e7aa->enter($__internal_d6b4fb50008b395a6463c53e976a3972c55cc5970d22b60ce5fbd298c194e7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d6b4fb50008b395a6463c53e976a3972c55cc5970d22b60ce5fbd298c194e7aa->leave($__internal_d6b4fb50008b395a6463c53e976a3972c55cc5970d22b60ce5fbd298c194e7aa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cbc84ad58cb415e0e00df6113ca48690382d5495e69fc388576dd190227aad10 = $this->env->getExtension("native_profiler");
        $__internal_cbc84ad58cb415e0e00df6113ca48690382d5495e69fc388576dd190227aad10->enter($__internal_cbc84ad58cb415e0e00df6113ca48690382d5495e69fc388576dd190227aad10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cbc84ad58cb415e0e00df6113ca48690382d5495e69fc388576dd190227aad10->leave($__internal_cbc84ad58cb415e0e00df6113ca48690382d5495e69fc388576dd190227aad10_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_251ca9dc80135f9e54507ea1d7a61a7803fc30bc8d7a21f5d3f68b199639d51b = $this->env->getExtension("native_profiler");
        $__internal_251ca9dc80135f9e54507ea1d7a61a7803fc30bc8d7a21f5d3f68b199639d51b->enter($__internal_251ca9dc80135f9e54507ea1d7a61a7803fc30bc8d7a21f5d3f68b199639d51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_251ca9dc80135f9e54507ea1d7a61a7803fc30bc8d7a21f5d3f68b199639d51b->leave($__internal_251ca9dc80135f9e54507ea1d7a61a7803fc30bc8d7a21f5d3f68b199639d51b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_193d730bdbf7a1438cede9cf3d050d9a48ec27de9ec36330a06b02e8fb9c5df4 = $this->env->getExtension("native_profiler");
        $__internal_193d730bdbf7a1438cede9cf3d050d9a48ec27de9ec36330a06b02e8fb9c5df4->enter($__internal_193d730bdbf7a1438cede9cf3d050d9a48ec27de9ec36330a06b02e8fb9c5df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_193d730bdbf7a1438cede9cf3d050d9a48ec27de9ec36330a06b02e8fb9c5df4->leave($__internal_193d730bdbf7a1438cede9cf3d050d9a48ec27de9ec36330a06b02e8fb9c5df4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
