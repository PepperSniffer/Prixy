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
        $__internal_3dd837832a8f59d2cdb9349427b728a9d269c9ccb54321429e67b3085b953d41 = $this->env->getExtension("native_profiler");
        $__internal_3dd837832a8f59d2cdb9349427b728a9d269c9ccb54321429e67b3085b953d41->enter($__internal_3dd837832a8f59d2cdb9349427b728a9d269c9ccb54321429e67b3085b953d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dd837832a8f59d2cdb9349427b728a9d269c9ccb54321429e67b3085b953d41->leave($__internal_3dd837832a8f59d2cdb9349427b728a9d269c9ccb54321429e67b3085b953d41_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b45c4a7dd2c6fab207d64fe804fa38706117b9f6df36f6ade402a160d1f1a66 = $this->env->getExtension("native_profiler");
        $__internal_0b45c4a7dd2c6fab207d64fe804fa38706117b9f6df36f6ade402a160d1f1a66->enter($__internal_0b45c4a7dd2c6fab207d64fe804fa38706117b9f6df36f6ade402a160d1f1a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0b45c4a7dd2c6fab207d64fe804fa38706117b9f6df36f6ade402a160d1f1a66->leave($__internal_0b45c4a7dd2c6fab207d64fe804fa38706117b9f6df36f6ade402a160d1f1a66_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aac02c25af2f38128f368f0faa97704f5168d2a4cfdecb66588cccde48ff50eb = $this->env->getExtension("native_profiler");
        $__internal_aac02c25af2f38128f368f0faa97704f5168d2a4cfdecb66588cccde48ff50eb->enter($__internal_aac02c25af2f38128f368f0faa97704f5168d2a4cfdecb66588cccde48ff50eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aac02c25af2f38128f368f0faa97704f5168d2a4cfdecb66588cccde48ff50eb->leave($__internal_aac02c25af2f38128f368f0faa97704f5168d2a4cfdecb66588cccde48ff50eb_prof);

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
