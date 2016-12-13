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
        $__internal_592aa53eb1ec04d9f5100f4a4164b8130220209a987a40351207ea69c146cee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_592aa53eb1ec04d9f5100f4a4164b8130220209a987a40351207ea69c146cee6->enter($__internal_592aa53eb1ec04d9f5100f4a4164b8130220209a987a40351207ea69c146cee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7a2124180f3a1764a1c94b0c85e9b32df45fc7dcaa6dc4df297f53ee26103d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2124180f3a1764a1c94b0c85e9b32df45fc7dcaa6dc4df297f53ee26103d56->enter($__internal_7a2124180f3a1764a1c94b0c85e9b32df45fc7dcaa6dc4df297f53ee26103d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_592aa53eb1ec04d9f5100f4a4164b8130220209a987a40351207ea69c146cee6->leave($__internal_592aa53eb1ec04d9f5100f4a4164b8130220209a987a40351207ea69c146cee6_prof);

        
        $__internal_7a2124180f3a1764a1c94b0c85e9b32df45fc7dcaa6dc4df297f53ee26103d56->leave($__internal_7a2124180f3a1764a1c94b0c85e9b32df45fc7dcaa6dc4df297f53ee26103d56_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c0e1351a44cc7d9a82d52b7d237de7744030b9e4adab6771da9f4db234b06ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0e1351a44cc7d9a82d52b7d237de7744030b9e4adab6771da9f4db234b06ce->enter($__internal_1c0e1351a44cc7d9a82d52b7d237de7744030b9e4adab6771da9f4db234b06ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_74e531589f225bcf04548367c4739f315ff5b008734efba82193a9e0cff93a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e531589f225bcf04548367c4739f315ff5b008734efba82193a9e0cff93a29->enter($__internal_74e531589f225bcf04548367c4739f315ff5b008734efba82193a9e0cff93a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_74e531589f225bcf04548367c4739f315ff5b008734efba82193a9e0cff93a29->leave($__internal_74e531589f225bcf04548367c4739f315ff5b008734efba82193a9e0cff93a29_prof);

        
        $__internal_1c0e1351a44cc7d9a82d52b7d237de7744030b9e4adab6771da9f4db234b06ce->leave($__internal_1c0e1351a44cc7d9a82d52b7d237de7744030b9e4adab6771da9f4db234b06ce_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_80cc52f3d25c32283423beb58f8c0505796e818c7a3faeffa7ba007c101925e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80cc52f3d25c32283423beb58f8c0505796e818c7a3faeffa7ba007c101925e8->enter($__internal_80cc52f3d25c32283423beb58f8c0505796e818c7a3faeffa7ba007c101925e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ecea961015e75b9499642e95916b8c4ed9e06f0bab004cdea46c2f4b28050b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecea961015e75b9499642e95916b8c4ed9e06f0bab004cdea46c2f4b28050b0->enter($__internal_0ecea961015e75b9499642e95916b8c4ed9e06f0bab004cdea46c2f4b28050b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0ecea961015e75b9499642e95916b8c4ed9e06f0bab004cdea46c2f4b28050b0->leave($__internal_0ecea961015e75b9499642e95916b8c4ed9e06f0bab004cdea46c2f4b28050b0_prof);

        
        $__internal_80cc52f3d25c32283423beb58f8c0505796e818c7a3faeffa7ba007c101925e8->leave($__internal_80cc52f3d25c32283423beb58f8c0505796e818c7a3faeffa7ba007c101925e8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_57add02e3307b3f7ea33a7dac7cd625dc169bcfd365f4580ee55895d072ff1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57add02e3307b3f7ea33a7dac7cd625dc169bcfd365f4580ee55895d072ff1ab->enter($__internal_57add02e3307b3f7ea33a7dac7cd625dc169bcfd365f4580ee55895d072ff1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9da360a2f7141ebcd9bc4657934296090d30d9486b86caa6eca101a19a47c04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da360a2f7141ebcd9bc4657934296090d30d9486b86caa6eca101a19a47c04f->enter($__internal_9da360a2f7141ebcd9bc4657934296090d30d9486b86caa6eca101a19a47c04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9da360a2f7141ebcd9bc4657934296090d30d9486b86caa6eca101a19a47c04f->leave($__internal_9da360a2f7141ebcd9bc4657934296090d30d9486b86caa6eca101a19a47c04f_prof);

        
        $__internal_57add02e3307b3f7ea33a7dac7cd625dc169bcfd365f4580ee55895d072ff1ab->leave($__internal_57add02e3307b3f7ea33a7dac7cd625dc169bcfd365f4580ee55895d072ff1ab_prof);

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
