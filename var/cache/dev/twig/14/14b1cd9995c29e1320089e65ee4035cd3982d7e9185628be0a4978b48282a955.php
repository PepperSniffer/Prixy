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
        $__internal_b42d12c60d5e8d0d9db86a7ce32b9e26e5fcc29dedafc958f8eca55ccd0ce451 = $this->env->getExtension("native_profiler");
        $__internal_b42d12c60d5e8d0d9db86a7ce32b9e26e5fcc29dedafc958f8eca55ccd0ce451->enter($__internal_b42d12c60d5e8d0d9db86a7ce32b9e26e5fcc29dedafc958f8eca55ccd0ce451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b42d12c60d5e8d0d9db86a7ce32b9e26e5fcc29dedafc958f8eca55ccd0ce451->leave($__internal_b42d12c60d5e8d0d9db86a7ce32b9e26e5fcc29dedafc958f8eca55ccd0ce451_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8d277a73f0b13afd4114033ae865fe1b18630ef2ace4deb2e6f14babdb91eee = $this->env->getExtension("native_profiler");
        $__internal_e8d277a73f0b13afd4114033ae865fe1b18630ef2ace4deb2e6f14babdb91eee->enter($__internal_e8d277a73f0b13afd4114033ae865fe1b18630ef2ace4deb2e6f14babdb91eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e8d277a73f0b13afd4114033ae865fe1b18630ef2ace4deb2e6f14babdb91eee->leave($__internal_e8d277a73f0b13afd4114033ae865fe1b18630ef2ace4deb2e6f14babdb91eee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_afc7291c6aa712999428e6fbc37c2bff3efd575dcc0340289872908b4dc5afc9 = $this->env->getExtension("native_profiler");
        $__internal_afc7291c6aa712999428e6fbc37c2bff3efd575dcc0340289872908b4dc5afc9->enter($__internal_afc7291c6aa712999428e6fbc37c2bff3efd575dcc0340289872908b4dc5afc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_afc7291c6aa712999428e6fbc37c2bff3efd575dcc0340289872908b4dc5afc9->leave($__internal_afc7291c6aa712999428e6fbc37c2bff3efd575dcc0340289872908b4dc5afc9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a771c27780bce51b4b6a48f4cd1dabe780686785ac33967f5f2e5ea00b43d249 = $this->env->getExtension("native_profiler");
        $__internal_a771c27780bce51b4b6a48f4cd1dabe780686785ac33967f5f2e5ea00b43d249->enter($__internal_a771c27780bce51b4b6a48f4cd1dabe780686785ac33967f5f2e5ea00b43d249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a771c27780bce51b4b6a48f4cd1dabe780686785ac33967f5f2e5ea00b43d249->leave($__internal_a771c27780bce51b4b6a48f4cd1dabe780686785ac33967f5f2e5ea00b43d249_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_501f201c508bba3db705f761d471d505d17e66817331cfa3d14c24080dbd5445 = $this->env->getExtension("native_profiler");
        $__internal_501f201c508bba3db705f761d471d505d17e66817331cfa3d14c24080dbd5445->enter($__internal_501f201c508bba3db705f761d471d505d17e66817331cfa3d14c24080dbd5445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_501f201c508bba3db705f761d471d505d17e66817331cfa3d14c24080dbd5445->leave($__internal_501f201c508bba3db705f761d471d505d17e66817331cfa3d14c24080dbd5445_prof);

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
