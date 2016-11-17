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
        $__internal_86a2060a5e975d5399c76cfb1530a6908a2936663a241fa7889f3e288fbe5606 = $this->env->getExtension("native_profiler");
        $__internal_86a2060a5e975d5399c76cfb1530a6908a2936663a241fa7889f3e288fbe5606->enter($__internal_86a2060a5e975d5399c76cfb1530a6908a2936663a241fa7889f3e288fbe5606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86a2060a5e975d5399c76cfb1530a6908a2936663a241fa7889f3e288fbe5606->leave($__internal_86a2060a5e975d5399c76cfb1530a6908a2936663a241fa7889f3e288fbe5606_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f519db0a7b1c5f91ed5fe3d7dec3edd57869e7b86db760d6e1ae44d6a091e01 = $this->env->getExtension("native_profiler");
        $__internal_3f519db0a7b1c5f91ed5fe3d7dec3edd57869e7b86db760d6e1ae44d6a091e01->enter($__internal_3f519db0a7b1c5f91ed5fe3d7dec3edd57869e7b86db760d6e1ae44d6a091e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3f519db0a7b1c5f91ed5fe3d7dec3edd57869e7b86db760d6e1ae44d6a091e01->leave($__internal_3f519db0a7b1c5f91ed5fe3d7dec3edd57869e7b86db760d6e1ae44d6a091e01_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fb3c1fe0831097f450a324b6c46f8dcf776b17a0fd52ebac7af46e84fa9c3e5 = $this->env->getExtension("native_profiler");
        $__internal_8fb3c1fe0831097f450a324b6c46f8dcf776b17a0fd52ebac7af46e84fa9c3e5->enter($__internal_8fb3c1fe0831097f450a324b6c46f8dcf776b17a0fd52ebac7af46e84fa9c3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8fb3c1fe0831097f450a324b6c46f8dcf776b17a0fd52ebac7af46e84fa9c3e5->leave($__internal_8fb3c1fe0831097f450a324b6c46f8dcf776b17a0fd52ebac7af46e84fa9c3e5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cf05cfc72c3aeaf062e0a1ee21dcfe7b5495421d9e86c9fa100675fc74641b1 = $this->env->getExtension("native_profiler");
        $__internal_6cf05cfc72c3aeaf062e0a1ee21dcfe7b5495421d9e86c9fa100675fc74641b1->enter($__internal_6cf05cfc72c3aeaf062e0a1ee21dcfe7b5495421d9e86c9fa100675fc74641b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6cf05cfc72c3aeaf062e0a1ee21dcfe7b5495421d9e86c9fa100675fc74641b1->leave($__internal_6cf05cfc72c3aeaf062e0a1ee21dcfe7b5495421d9e86c9fa100675fc74641b1_prof);

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
