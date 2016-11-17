<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_2b5023cd51727f4fb9e7ccd4a0d7939556c35017f813738b5ec936f5db60b1ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_31f6cae0ad58de585fc47bc904b09e3742658d5707133cc46165d89a87ce5c33 = $this->env->getExtension("native_profiler");
        $__internal_31f6cae0ad58de585fc47bc904b09e3742658d5707133cc46165d89a87ce5c33->enter($__internal_31f6cae0ad58de585fc47bc904b09e3742658d5707133cc46165d89a87ce5c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f6cae0ad58de585fc47bc904b09e3742658d5707133cc46165d89a87ce5c33->leave($__internal_31f6cae0ad58de585fc47bc904b09e3742658d5707133cc46165d89a87ce5c33_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a543a6f0efc1b5b1561463a6d1edb554ae2944174d86022c38ed7474a620258e = $this->env->getExtension("native_profiler");
        $__internal_a543a6f0efc1b5b1561463a6d1edb554ae2944174d86022c38ed7474a620258e->enter($__internal_a543a6f0efc1b5b1561463a6d1edb554ae2944174d86022c38ed7474a620258e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a543a6f0efc1b5b1561463a6d1edb554ae2944174d86022c38ed7474a620258e->leave($__internal_a543a6f0efc1b5b1561463a6d1edb554ae2944174d86022c38ed7474a620258e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0eb16d6413592220c82a4373fc33561652d3eca417ed327bacc213c859c1da51 = $this->env->getExtension("native_profiler");
        $__internal_0eb16d6413592220c82a4373fc33561652d3eca417ed327bacc213c859c1da51->enter($__internal_0eb16d6413592220c82a4373fc33561652d3eca417ed327bacc213c859c1da51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0eb16d6413592220c82a4373fc33561652d3eca417ed327bacc213c859c1da51->leave($__internal_0eb16d6413592220c82a4373fc33561652d3eca417ed327bacc213c859c1da51_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
