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
        $__internal_cafbc1d6f0575df7351bee9e36f56c404876da71d5c37cdaa2cbdf90bbd8e99b = $this->env->getExtension("native_profiler");
        $__internal_cafbc1d6f0575df7351bee9e36f56c404876da71d5c37cdaa2cbdf90bbd8e99b->enter($__internal_cafbc1d6f0575df7351bee9e36f56c404876da71d5c37cdaa2cbdf90bbd8e99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cafbc1d6f0575df7351bee9e36f56c404876da71d5c37cdaa2cbdf90bbd8e99b->leave($__internal_cafbc1d6f0575df7351bee9e36f56c404876da71d5c37cdaa2cbdf90bbd8e99b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c1d30bd9d4ac2cf18b5879f75cd680c1ec513408fae2ed1288459ed960e940a = $this->env->getExtension("native_profiler");
        $__internal_5c1d30bd9d4ac2cf18b5879f75cd680c1ec513408fae2ed1288459ed960e940a->enter($__internal_5c1d30bd9d4ac2cf18b5879f75cd680c1ec513408fae2ed1288459ed960e940a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5c1d30bd9d4ac2cf18b5879f75cd680c1ec513408fae2ed1288459ed960e940a->leave($__internal_5c1d30bd9d4ac2cf18b5879f75cd680c1ec513408fae2ed1288459ed960e940a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e2488c395845ead3c9995f4ec18cd2a84b058e71b1be7de255881ccf840b38e = $this->env->getExtension("native_profiler");
        $__internal_9e2488c395845ead3c9995f4ec18cd2a84b058e71b1be7de255881ccf840b38e->enter($__internal_9e2488c395845ead3c9995f4ec18cd2a84b058e71b1be7de255881ccf840b38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9e2488c395845ead3c9995f4ec18cd2a84b058e71b1be7de255881ccf840b38e->leave($__internal_9e2488c395845ead3c9995f4ec18cd2a84b058e71b1be7de255881ccf840b38e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_27cf5837564d2ef96bfed5e9b4e39e8cb893857dd0fe1a6d022ef1f95855c91f = $this->env->getExtension("native_profiler");
        $__internal_27cf5837564d2ef96bfed5e9b4e39e8cb893857dd0fe1a6d022ef1f95855c91f->enter($__internal_27cf5837564d2ef96bfed5e9b4e39e8cb893857dd0fe1a6d022ef1f95855c91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_27cf5837564d2ef96bfed5e9b4e39e8cb893857dd0fe1a6d022ef1f95855c91f->leave($__internal_27cf5837564d2ef96bfed5e9b4e39e8cb893857dd0fe1a6d022ef1f95855c91f_prof);

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
