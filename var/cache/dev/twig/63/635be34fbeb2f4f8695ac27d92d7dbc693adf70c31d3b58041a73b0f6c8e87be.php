<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_37cd1625ea430e4c71a6644b3b5b8ce0fb5dd020fb7b25870aa3708c8d46ae74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a09b1660721fd0c1a63770b6c9c14300fb86a750de4b73c3b82caed53e34267 = $this->env->getExtension("native_profiler");
        $__internal_6a09b1660721fd0c1a63770b6c9c14300fb86a750de4b73c3b82caed53e34267->enter($__internal_6a09b1660721fd0c1a63770b6c9c14300fb86a750de4b73c3b82caed53e34267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a09b1660721fd0c1a63770b6c9c14300fb86a750de4b73c3b82caed53e34267->leave($__internal_6a09b1660721fd0c1a63770b6c9c14300fb86a750de4b73c3b82caed53e34267_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6019660d5afc9696ad84bbc0ebc11ad1ea2fd473725dd89e12ca5212f4993a97 = $this->env->getExtension("native_profiler");
        $__internal_6019660d5afc9696ad84bbc0ebc11ad1ea2fd473725dd89e12ca5212f4993a97->enter($__internal_6019660d5afc9696ad84bbc0ebc11ad1ea2fd473725dd89e12ca5212f4993a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6019660d5afc9696ad84bbc0ebc11ad1ea2fd473725dd89e12ca5212f4993a97->leave($__internal_6019660d5afc9696ad84bbc0ebc11ad1ea2fd473725dd89e12ca5212f4993a97_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0fd8eb9fcf268522a5570c086c5367aa0ab3731916f1e3b041fea1e03dcef54 = $this->env->getExtension("native_profiler");
        $__internal_e0fd8eb9fcf268522a5570c086c5367aa0ab3731916f1e3b041fea1e03dcef54->enter($__internal_e0fd8eb9fcf268522a5570c086c5367aa0ab3731916f1e3b041fea1e03dcef54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e0fd8eb9fcf268522a5570c086c5367aa0ab3731916f1e3b041fea1e03dcef54->leave($__internal_e0fd8eb9fcf268522a5570c086c5367aa0ab3731916f1e3b041fea1e03dcef54_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
