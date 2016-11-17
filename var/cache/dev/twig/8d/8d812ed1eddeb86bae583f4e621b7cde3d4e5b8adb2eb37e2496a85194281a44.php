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
        $__internal_16fee8faad781e7ff8c77e1b4542a78df60c421944a5f713998a1a79128bb5ef = $this->env->getExtension("native_profiler");
        $__internal_16fee8faad781e7ff8c77e1b4542a78df60c421944a5f713998a1a79128bb5ef->enter($__internal_16fee8faad781e7ff8c77e1b4542a78df60c421944a5f713998a1a79128bb5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_16fee8faad781e7ff8c77e1b4542a78df60c421944a5f713998a1a79128bb5ef->leave($__internal_16fee8faad781e7ff8c77e1b4542a78df60c421944a5f713998a1a79128bb5ef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e6f28f348f40e5974b07e0cfbdc881c0d61933757a3c637205c5b7ae0eea948 = $this->env->getExtension("native_profiler");
        $__internal_3e6f28f348f40e5974b07e0cfbdc881c0d61933757a3c637205c5b7ae0eea948->enter($__internal_3e6f28f348f40e5974b07e0cfbdc881c0d61933757a3c637205c5b7ae0eea948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3e6f28f348f40e5974b07e0cfbdc881c0d61933757a3c637205c5b7ae0eea948->leave($__internal_3e6f28f348f40e5974b07e0cfbdc881c0d61933757a3c637205c5b7ae0eea948_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81c41222afc838b8ebad5658c01d16d5fe0f79be077b9c0d5b857096ae7280bb = $this->env->getExtension("native_profiler");
        $__internal_81c41222afc838b8ebad5658c01d16d5fe0f79be077b9c0d5b857096ae7280bb->enter($__internal_81c41222afc838b8ebad5658c01d16d5fe0f79be077b9c0d5b857096ae7280bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_81c41222afc838b8ebad5658c01d16d5fe0f79be077b9c0d5b857096ae7280bb->leave($__internal_81c41222afc838b8ebad5658c01d16d5fe0f79be077b9c0d5b857096ae7280bb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a0aee630d93998965e5f0e1b45f21fd5c6e11986eb9894736cf1c7c09c3afb4 = $this->env->getExtension("native_profiler");
        $__internal_9a0aee630d93998965e5f0e1b45f21fd5c6e11986eb9894736cf1c7c09c3afb4->enter($__internal_9a0aee630d93998965e5f0e1b45f21fd5c6e11986eb9894736cf1c7c09c3afb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9a0aee630d93998965e5f0e1b45f21fd5c6e11986eb9894736cf1c7c09c3afb4->leave($__internal_9a0aee630d93998965e5f0e1b45f21fd5c6e11986eb9894736cf1c7c09c3afb4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a1360981cafa538dd902c5e23c1b2624b186301e616777c08fc7ed6d3efda471 = $this->env->getExtension("native_profiler");
        $__internal_a1360981cafa538dd902c5e23c1b2624b186301e616777c08fc7ed6d3efda471->enter($__internal_a1360981cafa538dd902c5e23c1b2624b186301e616777c08fc7ed6d3efda471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a1360981cafa538dd902c5e23c1b2624b186301e616777c08fc7ed6d3efda471->leave($__internal_a1360981cafa538dd902c5e23c1b2624b186301e616777c08fc7ed6d3efda471_prof);

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
