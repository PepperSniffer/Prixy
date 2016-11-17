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
        $__internal_d95aaececcf5eb4c0f83777073b090870ebe54c35847092ab76fd66f95a4c65f = $this->env->getExtension("native_profiler");
        $__internal_d95aaececcf5eb4c0f83777073b090870ebe54c35847092ab76fd66f95a4c65f->enter($__internal_d95aaececcf5eb4c0f83777073b090870ebe54c35847092ab76fd66f95a4c65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d95aaececcf5eb4c0f83777073b090870ebe54c35847092ab76fd66f95a4c65f->leave($__internal_d95aaececcf5eb4c0f83777073b090870ebe54c35847092ab76fd66f95a4c65f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ffa2ee667a2e5c4127e4b94e120f9fe63c43db905da53117d1d43c004cea48f6 = $this->env->getExtension("native_profiler");
        $__internal_ffa2ee667a2e5c4127e4b94e120f9fe63c43db905da53117d1d43c004cea48f6->enter($__internal_ffa2ee667a2e5c4127e4b94e120f9fe63c43db905da53117d1d43c004cea48f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ffa2ee667a2e5c4127e4b94e120f9fe63c43db905da53117d1d43c004cea48f6->leave($__internal_ffa2ee667a2e5c4127e4b94e120f9fe63c43db905da53117d1d43c004cea48f6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_afc916d69c7a226e9e3abdc37e31246863ab64f568d396aeb75721dcbcdfd434 = $this->env->getExtension("native_profiler");
        $__internal_afc916d69c7a226e9e3abdc37e31246863ab64f568d396aeb75721dcbcdfd434->enter($__internal_afc916d69c7a226e9e3abdc37e31246863ab64f568d396aeb75721dcbcdfd434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_afc916d69c7a226e9e3abdc37e31246863ab64f568d396aeb75721dcbcdfd434->leave($__internal_afc916d69c7a226e9e3abdc37e31246863ab64f568d396aeb75721dcbcdfd434_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_10dd6c8620230bbd30e2270f0a41b3b1e45334fcf41bff40aeb6e3f227d42802 = $this->env->getExtension("native_profiler");
        $__internal_10dd6c8620230bbd30e2270f0a41b3b1e45334fcf41bff40aeb6e3f227d42802->enter($__internal_10dd6c8620230bbd30e2270f0a41b3b1e45334fcf41bff40aeb6e3f227d42802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_10dd6c8620230bbd30e2270f0a41b3b1e45334fcf41bff40aeb6e3f227d42802->leave($__internal_10dd6c8620230bbd30e2270f0a41b3b1e45334fcf41bff40aeb6e3f227d42802_prof);

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
