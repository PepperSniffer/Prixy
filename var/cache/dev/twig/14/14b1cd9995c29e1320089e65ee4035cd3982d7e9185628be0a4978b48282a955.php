<?php

/* base.html.twig */
class __TwigTemplate_b4be728eeea0edcd8994dd2d36fb4252e503e6590fe2f81ce29940b878c2476f extends Twig_Template
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
        $__internal_6ca204f45ce920658216f98feb64cfd07426ab8f318c8968702725982774d5e2 = $this->env->getExtension("native_profiler");
        $__internal_6ca204f45ce920658216f98feb64cfd07426ab8f318c8968702725982774d5e2->enter($__internal_6ca204f45ce920658216f98feb64cfd07426ab8f318c8968702725982774d5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6ca204f45ce920658216f98feb64cfd07426ab8f318c8968702725982774d5e2->leave($__internal_6ca204f45ce920658216f98feb64cfd07426ab8f318c8968702725982774d5e2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6f1a79979b800920068cce255f3be1b30e829b305d88fd51c205b7115ecefdf = $this->env->getExtension("native_profiler");
        $__internal_c6f1a79979b800920068cce255f3be1b30e829b305d88fd51c205b7115ecefdf->enter($__internal_c6f1a79979b800920068cce255f3be1b30e829b305d88fd51c205b7115ecefdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c6f1a79979b800920068cce255f3be1b30e829b305d88fd51c205b7115ecefdf->leave($__internal_c6f1a79979b800920068cce255f3be1b30e829b305d88fd51c205b7115ecefdf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee8d485d2613f0653db75631dcf0d26a4d8736c8016ce9421c149bbeec3a5924 = $this->env->getExtension("native_profiler");
        $__internal_ee8d485d2613f0653db75631dcf0d26a4d8736c8016ce9421c149bbeec3a5924->enter($__internal_ee8d485d2613f0653db75631dcf0d26a4d8736c8016ce9421c149bbeec3a5924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ee8d485d2613f0653db75631dcf0d26a4d8736c8016ce9421c149bbeec3a5924->leave($__internal_ee8d485d2613f0653db75631dcf0d26a4d8736c8016ce9421c149bbeec3a5924_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ed6582c30c0d08a89e09af343b034f60109f6c0bc55e7bb3a4c0e7eb6b53274 = $this->env->getExtension("native_profiler");
        $__internal_7ed6582c30c0d08a89e09af343b034f60109f6c0bc55e7bb3a4c0e7eb6b53274->enter($__internal_7ed6582c30c0d08a89e09af343b034f60109f6c0bc55e7bb3a4c0e7eb6b53274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7ed6582c30c0d08a89e09af343b034f60109f6c0bc55e7bb3a4c0e7eb6b53274->leave($__internal_7ed6582c30c0d08a89e09af343b034f60109f6c0bc55e7bb3a4c0e7eb6b53274_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2a62cc5e2895c97e9dc969c40ce4fb3ea3198e847deafad5c9e9ed9eaaba1bdf = $this->env->getExtension("native_profiler");
        $__internal_2a62cc5e2895c97e9dc969c40ce4fb3ea3198e847deafad5c9e9ed9eaaba1bdf->enter($__internal_2a62cc5e2895c97e9dc969c40ce4fb3ea3198e847deafad5c9e9ed9eaaba1bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2a62cc5e2895c97e9dc969c40ce4fb3ea3198e847deafad5c9e9ed9eaaba1bdf->leave($__internal_2a62cc5e2895c97e9dc969c40ce4fb3ea3198e847deafad5c9e9ed9eaaba1bdf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
