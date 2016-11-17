<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_59ecd540131e636d9b46ff07b17e2040d189a742c44bb295daaf2fb5c2513175 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_79c199e43cdcff8cfac44c0b599b9762d88edeb8547e92dcf631c197cfe870bd = $this->env->getExtension("native_profiler");
        $__internal_79c199e43cdcff8cfac44c0b599b9762d88edeb8547e92dcf631c197cfe870bd->enter($__internal_79c199e43cdcff8cfac44c0b599b9762d88edeb8547e92dcf631c197cfe870bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79c199e43cdcff8cfac44c0b599b9762d88edeb8547e92dcf631c197cfe870bd->leave($__internal_79c199e43cdcff8cfac44c0b599b9762d88edeb8547e92dcf631c197cfe870bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_110fbc6964f81804f4b66e41e288c409b16ceae9a7785d031f96db0c40e2bf60 = $this->env->getExtension("native_profiler");
        $__internal_110fbc6964f81804f4b66e41e288c409b16ceae9a7785d031f96db0c40e2bf60->enter($__internal_110fbc6964f81804f4b66e41e288c409b16ceae9a7785d031f96db0c40e2bf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_110fbc6964f81804f4b66e41e288c409b16ceae9a7785d031f96db0c40e2bf60->leave($__internal_110fbc6964f81804f4b66e41e288c409b16ceae9a7785d031f96db0c40e2bf60_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6f464e802c5966179e01d6c2786353ebe1ae58346866c7ac45edaca59858edd = $this->env->getExtension("native_profiler");
        $__internal_c6f464e802c5966179e01d6c2786353ebe1ae58346866c7ac45edaca59858edd->enter($__internal_c6f464e802c5966179e01d6c2786353ebe1ae58346866c7ac45edaca59858edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c6f464e802c5966179e01d6c2786353ebe1ae58346866c7ac45edaca59858edd->leave($__internal_c6f464e802c5966179e01d6c2786353ebe1ae58346866c7ac45edaca59858edd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_acb66fca91d42c6dff3f6239fbb6ee1c55463d8de969945712d406a801addd92 = $this->env->getExtension("native_profiler");
        $__internal_acb66fca91d42c6dff3f6239fbb6ee1c55463d8de969945712d406a801addd92->enter($__internal_acb66fca91d42c6dff3f6239fbb6ee1c55463d8de969945712d406a801addd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_acb66fca91d42c6dff3f6239fbb6ee1c55463d8de969945712d406a801addd92->leave($__internal_acb66fca91d42c6dff3f6239fbb6ee1c55463d8de969945712d406a801addd92_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
