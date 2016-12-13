<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fd7e0b705b6f1240c99fe59bfb3ed138128617e46e6dafb4ee20e19cd589e025 extends Twig_Template
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
        $__internal_f6f6ba9be107a991d0f91a0928016f6bcaa7ae1df2b467746a93bc3044c7200c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f6ba9be107a991d0f91a0928016f6bcaa7ae1df2b467746a93bc3044c7200c->enter($__internal_f6f6ba9be107a991d0f91a0928016f6bcaa7ae1df2b467746a93bc3044c7200c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bf9ad5fdb3ac47f4bd5d80921b3ab4fbcb30f9877381b3ad2d2a00e50df30328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9ad5fdb3ac47f4bd5d80921b3ab4fbcb30f9877381b3ad2d2a00e50df30328->enter($__internal_bf9ad5fdb3ac47f4bd5d80921b3ab4fbcb30f9877381b3ad2d2a00e50df30328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6f6ba9be107a991d0f91a0928016f6bcaa7ae1df2b467746a93bc3044c7200c->leave($__internal_f6f6ba9be107a991d0f91a0928016f6bcaa7ae1df2b467746a93bc3044c7200c_prof);

        
        $__internal_bf9ad5fdb3ac47f4bd5d80921b3ab4fbcb30f9877381b3ad2d2a00e50df30328->leave($__internal_bf9ad5fdb3ac47f4bd5d80921b3ab4fbcb30f9877381b3ad2d2a00e50df30328_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c43208af6e32b29c7893437ea1218bc45ee7f4931efef980ad724189ce75019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c43208af6e32b29c7893437ea1218bc45ee7f4931efef980ad724189ce75019->enter($__internal_8c43208af6e32b29c7893437ea1218bc45ee7f4931efef980ad724189ce75019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ddfa710b58bc09f546f4bfbc39bee547e296b39ae52a0b84d6895d26e973a361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfa710b58bc09f546f4bfbc39bee547e296b39ae52a0b84d6895d26e973a361->enter($__internal_ddfa710b58bc09f546f4bfbc39bee547e296b39ae52a0b84d6895d26e973a361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ddfa710b58bc09f546f4bfbc39bee547e296b39ae52a0b84d6895d26e973a361->leave($__internal_ddfa710b58bc09f546f4bfbc39bee547e296b39ae52a0b84d6895d26e973a361_prof);

        
        $__internal_8c43208af6e32b29c7893437ea1218bc45ee7f4931efef980ad724189ce75019->leave($__internal_8c43208af6e32b29c7893437ea1218bc45ee7f4931efef980ad724189ce75019_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bfaa53f499ad27396e9c1be09ed923f14c13a807d7130e3f24fd9ae39fd14e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bfaa53f499ad27396e9c1be09ed923f14c13a807d7130e3f24fd9ae39fd14e5->enter($__internal_1bfaa53f499ad27396e9c1be09ed923f14c13a807d7130e3f24fd9ae39fd14e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c61f2f7449dc92f062af14a8fa2c27d27a7babf507703febcb581f71dbe5618f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61f2f7449dc92f062af14a8fa2c27d27a7babf507703febcb581f71dbe5618f->enter($__internal_c61f2f7449dc92f062af14a8fa2c27d27a7babf507703febcb581f71dbe5618f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c61f2f7449dc92f062af14a8fa2c27d27a7babf507703febcb581f71dbe5618f->leave($__internal_c61f2f7449dc92f062af14a8fa2c27d27a7babf507703febcb581f71dbe5618f_prof);

        
        $__internal_1bfaa53f499ad27396e9c1be09ed923f14c13a807d7130e3f24fd9ae39fd14e5->leave($__internal_1bfaa53f499ad27396e9c1be09ed923f14c13a807d7130e3f24fd9ae39fd14e5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_447202798f0ba2f76b79e8b549d16381ac73224bd354ccca88dcc8ad08c92ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447202798f0ba2f76b79e8b549d16381ac73224bd354ccca88dcc8ad08c92ff2->enter($__internal_447202798f0ba2f76b79e8b549d16381ac73224bd354ccca88dcc8ad08c92ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5316561dd5482bc126f1ffd53fb342bf464246739058b15eb35c60e27ed578f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5316561dd5482bc126f1ffd53fb342bf464246739058b15eb35c60e27ed578f->enter($__internal_b5316561dd5482bc126f1ffd53fb342bf464246739058b15eb35c60e27ed578f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b5316561dd5482bc126f1ffd53fb342bf464246739058b15eb35c60e27ed578f->leave($__internal_b5316561dd5482bc126f1ffd53fb342bf464246739058b15eb35c60e27ed578f_prof);

        
        $__internal_447202798f0ba2f76b79e8b549d16381ac73224bd354ccca88dcc8ad08c92ff2->leave($__internal_447202798f0ba2f76b79e8b549d16381ac73224bd354ccca88dcc8ad08c92ff2_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
