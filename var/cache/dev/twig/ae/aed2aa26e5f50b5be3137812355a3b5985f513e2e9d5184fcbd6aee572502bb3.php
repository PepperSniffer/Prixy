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
        $__internal_4e238fe0593062d067fa86e81d33340f09256078f582336878a51df8954c1697 = $this->env->getExtension("native_profiler");
        $__internal_4e238fe0593062d067fa86e81d33340f09256078f582336878a51df8954c1697->enter($__internal_4e238fe0593062d067fa86e81d33340f09256078f582336878a51df8954c1697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e238fe0593062d067fa86e81d33340f09256078f582336878a51df8954c1697->leave($__internal_4e238fe0593062d067fa86e81d33340f09256078f582336878a51df8954c1697_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c501fea311b88490bc87fcc0aee6fe1a156d257f7bfa208fb6fe824c0970fb45 = $this->env->getExtension("native_profiler");
        $__internal_c501fea311b88490bc87fcc0aee6fe1a156d257f7bfa208fb6fe824c0970fb45->enter($__internal_c501fea311b88490bc87fcc0aee6fe1a156d257f7bfa208fb6fe824c0970fb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c501fea311b88490bc87fcc0aee6fe1a156d257f7bfa208fb6fe824c0970fb45->leave($__internal_c501fea311b88490bc87fcc0aee6fe1a156d257f7bfa208fb6fe824c0970fb45_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6071c6cbd860a4cc00ccf01cf4e13682e540415202031e0d0f3211bdbfcabd33 = $this->env->getExtension("native_profiler");
        $__internal_6071c6cbd860a4cc00ccf01cf4e13682e540415202031e0d0f3211bdbfcabd33->enter($__internal_6071c6cbd860a4cc00ccf01cf4e13682e540415202031e0d0f3211bdbfcabd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6071c6cbd860a4cc00ccf01cf4e13682e540415202031e0d0f3211bdbfcabd33->leave($__internal_6071c6cbd860a4cc00ccf01cf4e13682e540415202031e0d0f3211bdbfcabd33_prof);

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
