<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_30f83908ab6a11ea690336db632fa92082d143454152be742c643acf49c91d8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_3297885436769c7f97150da06190846014baf19040ca23ccf2273684dbfd2818 = $this->env->getExtension("native_profiler");
        $__internal_3297885436769c7f97150da06190846014baf19040ca23ccf2273684dbfd2818->enter($__internal_3297885436769c7f97150da06190846014baf19040ca23ccf2273684dbfd2818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3297885436769c7f97150da06190846014baf19040ca23ccf2273684dbfd2818->leave($__internal_3297885436769c7f97150da06190846014baf19040ca23ccf2273684dbfd2818_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08005ee6142c0dcb3b98cf01e900c056f8b647d6c81208bfdb1914349e23f794 = $this->env->getExtension("native_profiler");
        $__internal_08005ee6142c0dcb3b98cf01e900c056f8b647d6c81208bfdb1914349e23f794->enter($__internal_08005ee6142c0dcb3b98cf01e900c056f8b647d6c81208bfdb1914349e23f794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_08005ee6142c0dcb3b98cf01e900c056f8b647d6c81208bfdb1914349e23f794->leave($__internal_08005ee6142c0dcb3b98cf01e900c056f8b647d6c81208bfdb1914349e23f794_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdac9f89fe3d6c4536647a38105a2e83e6ab523f9e3a6277d99eeac6a482e433 = $this->env->getExtension("native_profiler");
        $__internal_cdac9f89fe3d6c4536647a38105a2e83e6ab523f9e3a6277d99eeac6a482e433->enter($__internal_cdac9f89fe3d6c4536647a38105a2e83e6ab523f9e3a6277d99eeac6a482e433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cdac9f89fe3d6c4536647a38105a2e83e6ab523f9e3a6277d99eeac6a482e433->leave($__internal_cdac9f89fe3d6c4536647a38105a2e83e6ab523f9e3a6277d99eeac6a482e433_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_23c92f34fbf2fa22fe64dc9bab57205dd3111a52c6a3ee2fb6dd7ac74093d842 = $this->env->getExtension("native_profiler");
        $__internal_23c92f34fbf2fa22fe64dc9bab57205dd3111a52c6a3ee2fb6dd7ac74093d842->enter($__internal_23c92f34fbf2fa22fe64dc9bab57205dd3111a52c6a3ee2fb6dd7ac74093d842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_23c92f34fbf2fa22fe64dc9bab57205dd3111a52c6a3ee2fb6dd7ac74093d842->leave($__internal_23c92f34fbf2fa22fe64dc9bab57205dd3111a52c6a3ee2fb6dd7ac74093d842_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
