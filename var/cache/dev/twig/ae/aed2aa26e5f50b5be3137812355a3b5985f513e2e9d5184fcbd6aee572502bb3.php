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
        $__internal_77f0de6be05deeeace9ebcb991136c69a313a8491605ebb4e53ec6ae4f83f65d = $this->env->getExtension("native_profiler");
        $__internal_77f0de6be05deeeace9ebcb991136c69a313a8491605ebb4e53ec6ae4f83f65d->enter($__internal_77f0de6be05deeeace9ebcb991136c69a313a8491605ebb4e53ec6ae4f83f65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77f0de6be05deeeace9ebcb991136c69a313a8491605ebb4e53ec6ae4f83f65d->leave($__internal_77f0de6be05deeeace9ebcb991136c69a313a8491605ebb4e53ec6ae4f83f65d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_124c2fc750795c04c2e6656e3216b83145a5e44fa2ec05a6e4fc73dff79bc1da = $this->env->getExtension("native_profiler");
        $__internal_124c2fc750795c04c2e6656e3216b83145a5e44fa2ec05a6e4fc73dff79bc1da->enter($__internal_124c2fc750795c04c2e6656e3216b83145a5e44fa2ec05a6e4fc73dff79bc1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_124c2fc750795c04c2e6656e3216b83145a5e44fa2ec05a6e4fc73dff79bc1da->leave($__internal_124c2fc750795c04c2e6656e3216b83145a5e44fa2ec05a6e4fc73dff79bc1da_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_27752845c17f0f0533aba6025e3260b7effafd62a5161136ec481652b6c0e1d8 = $this->env->getExtension("native_profiler");
        $__internal_27752845c17f0f0533aba6025e3260b7effafd62a5161136ec481652b6c0e1d8->enter($__internal_27752845c17f0f0533aba6025e3260b7effafd62a5161136ec481652b6c0e1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_27752845c17f0f0533aba6025e3260b7effafd62a5161136ec481652b6c0e1d8->leave($__internal_27752845c17f0f0533aba6025e3260b7effafd62a5161136ec481652b6c0e1d8_prof);

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
