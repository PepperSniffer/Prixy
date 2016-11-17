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
        $__internal_16d57daecc1496bc07550ba94d593b8f32b650ed0a8de1df963c5c42a2ecb746 = $this->env->getExtension("native_profiler");
        $__internal_16d57daecc1496bc07550ba94d593b8f32b650ed0a8de1df963c5c42a2ecb746->enter($__internal_16d57daecc1496bc07550ba94d593b8f32b650ed0a8de1df963c5c42a2ecb746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_16d57daecc1496bc07550ba94d593b8f32b650ed0a8de1df963c5c42a2ecb746->leave($__internal_16d57daecc1496bc07550ba94d593b8f32b650ed0a8de1df963c5c42a2ecb746_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2386ed42d794e24d58d3ad0b96350eb155081f2461f0633f2ff7141b1392910e = $this->env->getExtension("native_profiler");
        $__internal_2386ed42d794e24d58d3ad0b96350eb155081f2461f0633f2ff7141b1392910e->enter($__internal_2386ed42d794e24d58d3ad0b96350eb155081f2461f0633f2ff7141b1392910e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2386ed42d794e24d58d3ad0b96350eb155081f2461f0633f2ff7141b1392910e->leave($__internal_2386ed42d794e24d58d3ad0b96350eb155081f2461f0633f2ff7141b1392910e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_406df6186fd9c5912162b42f4465851747f5ca71f242d77b8c9d8ecc5abb6624 = $this->env->getExtension("native_profiler");
        $__internal_406df6186fd9c5912162b42f4465851747f5ca71f242d77b8c9d8ecc5abb6624->enter($__internal_406df6186fd9c5912162b42f4465851747f5ca71f242d77b8c9d8ecc5abb6624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_406df6186fd9c5912162b42f4465851747f5ca71f242d77b8c9d8ecc5abb6624->leave($__internal_406df6186fd9c5912162b42f4465851747f5ca71f242d77b8c9d8ecc5abb6624_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_61fea9b7b42efe948e956db0bce8a04a8eca572bbb336226a6f755f34091c086 = $this->env->getExtension("native_profiler");
        $__internal_61fea9b7b42efe948e956db0bce8a04a8eca572bbb336226a6f755f34091c086->enter($__internal_61fea9b7b42efe948e956db0bce8a04a8eca572bbb336226a6f755f34091c086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_61fea9b7b42efe948e956db0bce8a04a8eca572bbb336226a6f755f34091c086->leave($__internal_61fea9b7b42efe948e956db0bce8a04a8eca572bbb336226a6f755f34091c086_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be2dffee02744c932a45a37105704ff3fcacf758ee941801d480e90ff9e0f085 = $this->env->getExtension("native_profiler");
        $__internal_be2dffee02744c932a45a37105704ff3fcacf758ee941801d480e90ff9e0f085->enter($__internal_be2dffee02744c932a45a37105704ff3fcacf758ee941801d480e90ff9e0f085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_be2dffee02744c932a45a37105704ff3fcacf758ee941801d480e90ff9e0f085->leave($__internal_be2dffee02744c932a45a37105704ff3fcacf758ee941801d480e90ff9e0f085_prof);

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
