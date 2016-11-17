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
        $__internal_a6be428482132444f9c69f3d979dc16d1c0ebcd94ae2314da2419a12dc9a9ebb = $this->env->getExtension("native_profiler");
        $__internal_a6be428482132444f9c69f3d979dc16d1c0ebcd94ae2314da2419a12dc9a9ebb->enter($__internal_a6be428482132444f9c69f3d979dc16d1c0ebcd94ae2314da2419a12dc9a9ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a6be428482132444f9c69f3d979dc16d1c0ebcd94ae2314da2419a12dc9a9ebb->leave($__internal_a6be428482132444f9c69f3d979dc16d1c0ebcd94ae2314da2419a12dc9a9ebb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_491c48b292993138dd0c2a4a680a3c1ead0495b052e37018a792662921a16ebd = $this->env->getExtension("native_profiler");
        $__internal_491c48b292993138dd0c2a4a680a3c1ead0495b052e37018a792662921a16ebd->enter($__internal_491c48b292993138dd0c2a4a680a3c1ead0495b052e37018a792662921a16ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_491c48b292993138dd0c2a4a680a3c1ead0495b052e37018a792662921a16ebd->leave($__internal_491c48b292993138dd0c2a4a680a3c1ead0495b052e37018a792662921a16ebd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_886a54de6bc5ce52f5fb68e26a39d86a0ccebe45e9d1a9dc17c7c98e5eb627db = $this->env->getExtension("native_profiler");
        $__internal_886a54de6bc5ce52f5fb68e26a39d86a0ccebe45e9d1a9dc17c7c98e5eb627db->enter($__internal_886a54de6bc5ce52f5fb68e26a39d86a0ccebe45e9d1a9dc17c7c98e5eb627db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_886a54de6bc5ce52f5fb68e26a39d86a0ccebe45e9d1a9dc17c7c98e5eb627db->leave($__internal_886a54de6bc5ce52f5fb68e26a39d86a0ccebe45e9d1a9dc17c7c98e5eb627db_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce6cfb077db53b2f7508b1b1ad21c16dde041c1641157df971a9cb1bd86168c6 = $this->env->getExtension("native_profiler");
        $__internal_ce6cfb077db53b2f7508b1b1ad21c16dde041c1641157df971a9cb1bd86168c6->enter($__internal_ce6cfb077db53b2f7508b1b1ad21c16dde041c1641157df971a9cb1bd86168c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ce6cfb077db53b2f7508b1b1ad21c16dde041c1641157df971a9cb1bd86168c6->leave($__internal_ce6cfb077db53b2f7508b1b1ad21c16dde041c1641157df971a9cb1bd86168c6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79ef82545837588a041dcc152549c6b968f21d5df87458d3fec6ebe22c283c12 = $this->env->getExtension("native_profiler");
        $__internal_79ef82545837588a041dcc152549c6b968f21d5df87458d3fec6ebe22c283c12->enter($__internal_79ef82545837588a041dcc152549c6b968f21d5df87458d3fec6ebe22c283c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_79ef82545837588a041dcc152549c6b968f21d5df87458d3fec6ebe22c283c12->leave($__internal_79ef82545837588a041dcc152549c6b968f21d5df87458d3fec6ebe22c283c12_prof);

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
