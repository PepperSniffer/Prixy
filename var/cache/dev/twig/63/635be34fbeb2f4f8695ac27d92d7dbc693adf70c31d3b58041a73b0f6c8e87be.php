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
        $__internal_b5e4b09ce659b210b7d7ae2b44bfaba17d6a266a45efa65d66562e9f6fd875ae = $this->env->getExtension("native_profiler");
        $__internal_b5e4b09ce659b210b7d7ae2b44bfaba17d6a266a45efa65d66562e9f6fd875ae->enter($__internal_b5e4b09ce659b210b7d7ae2b44bfaba17d6a266a45efa65d66562e9f6fd875ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5e4b09ce659b210b7d7ae2b44bfaba17d6a266a45efa65d66562e9f6fd875ae->leave($__internal_b5e4b09ce659b210b7d7ae2b44bfaba17d6a266a45efa65d66562e9f6fd875ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_71a34a5618464829d37553d207bed6676135073608fddaed38e6a2df9982b80f = $this->env->getExtension("native_profiler");
        $__internal_71a34a5618464829d37553d207bed6676135073608fddaed38e6a2df9982b80f->enter($__internal_71a34a5618464829d37553d207bed6676135073608fddaed38e6a2df9982b80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_71a34a5618464829d37553d207bed6676135073608fddaed38e6a2df9982b80f->leave($__internal_71a34a5618464829d37553d207bed6676135073608fddaed38e6a2df9982b80f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3cea393596f70638e2c3809412eec2d0d7264f7eee3e586dff979fcce2eaec8 = $this->env->getExtension("native_profiler");
        $__internal_b3cea393596f70638e2c3809412eec2d0d7264f7eee3e586dff979fcce2eaec8->enter($__internal_b3cea393596f70638e2c3809412eec2d0d7264f7eee3e586dff979fcce2eaec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b3cea393596f70638e2c3809412eec2d0d7264f7eee3e586dff979fcce2eaec8->leave($__internal_b3cea393596f70638e2c3809412eec2d0d7264f7eee3e586dff979fcce2eaec8_prof);

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
