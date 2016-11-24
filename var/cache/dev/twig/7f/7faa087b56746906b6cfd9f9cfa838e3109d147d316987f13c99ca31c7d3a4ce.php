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
        $__internal_9ce21d8e2baf3a2e4a5fad0284ad4da406345fabeb2b76695161a772a0ea2769 = $this->env->getExtension("native_profiler");
        $__internal_9ce21d8e2baf3a2e4a5fad0284ad4da406345fabeb2b76695161a772a0ea2769->enter($__internal_9ce21d8e2baf3a2e4a5fad0284ad4da406345fabeb2b76695161a772a0ea2769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ce21d8e2baf3a2e4a5fad0284ad4da406345fabeb2b76695161a772a0ea2769->leave($__internal_9ce21d8e2baf3a2e4a5fad0284ad4da406345fabeb2b76695161a772a0ea2769_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1b6d4500a554fb4415cc3ab00e48820e030c6102e28f40844b3c77c447fd837 = $this->env->getExtension("native_profiler");
        $__internal_f1b6d4500a554fb4415cc3ab00e48820e030c6102e28f40844b3c77c447fd837->enter($__internal_f1b6d4500a554fb4415cc3ab00e48820e030c6102e28f40844b3c77c447fd837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f1b6d4500a554fb4415cc3ab00e48820e030c6102e28f40844b3c77c447fd837->leave($__internal_f1b6d4500a554fb4415cc3ab00e48820e030c6102e28f40844b3c77c447fd837_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bd51d5c058558bd53a128c0f3eaaf1208119740778d5708a4d10242afd36ce1 = $this->env->getExtension("native_profiler");
        $__internal_1bd51d5c058558bd53a128c0f3eaaf1208119740778d5708a4d10242afd36ce1->enter($__internal_1bd51d5c058558bd53a128c0f3eaaf1208119740778d5708a4d10242afd36ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1bd51d5c058558bd53a128c0f3eaaf1208119740778d5708a4d10242afd36ce1->leave($__internal_1bd51d5c058558bd53a128c0f3eaaf1208119740778d5708a4d10242afd36ce1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_588f86afd3d3c5344f4dce3a84a2f137d3aac7a0dec7233a4afb4f1d5c3d99bf = $this->env->getExtension("native_profiler");
        $__internal_588f86afd3d3c5344f4dce3a84a2f137d3aac7a0dec7233a4afb4f1d5c3d99bf->enter($__internal_588f86afd3d3c5344f4dce3a84a2f137d3aac7a0dec7233a4afb4f1d5c3d99bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_588f86afd3d3c5344f4dce3a84a2f137d3aac7a0dec7233a4afb4f1d5c3d99bf->leave($__internal_588f86afd3d3c5344f4dce3a84a2f137d3aac7a0dec7233a4afb4f1d5c3d99bf_prof);

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
