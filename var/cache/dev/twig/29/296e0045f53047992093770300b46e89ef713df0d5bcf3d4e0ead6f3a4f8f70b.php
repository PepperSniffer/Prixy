<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_80b9646ea1316b6ce9ab6f8811752a90b8fd301f0e0b7e5708de13c0e67a8889 extends Twig_Template
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
        $__internal_85377b8aa32b122a8d32f3921ff32bdcf3fbde67c2d6a9aaa8fc2e68eaefe8b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85377b8aa32b122a8d32f3921ff32bdcf3fbde67c2d6a9aaa8fc2e68eaefe8b5->enter($__internal_85377b8aa32b122a8d32f3921ff32bdcf3fbde67c2d6a9aaa8fc2e68eaefe8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9a77ce147b794c328d2f023d0e4214211cd53657429c4ecca624f5a0551479b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a77ce147b794c328d2f023d0e4214211cd53657429c4ecca624f5a0551479b1->enter($__internal_9a77ce147b794c328d2f023d0e4214211cd53657429c4ecca624f5a0551479b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85377b8aa32b122a8d32f3921ff32bdcf3fbde67c2d6a9aaa8fc2e68eaefe8b5->leave($__internal_85377b8aa32b122a8d32f3921ff32bdcf3fbde67c2d6a9aaa8fc2e68eaefe8b5_prof);

        
        $__internal_9a77ce147b794c328d2f023d0e4214211cd53657429c4ecca624f5a0551479b1->leave($__internal_9a77ce147b794c328d2f023d0e4214211cd53657429c4ecca624f5a0551479b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9af1ba61c7d734a8985632d3d9feeae21ad7f00c4c7d949e9dbece5708ae3765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af1ba61c7d734a8985632d3d9feeae21ad7f00c4c7d949e9dbece5708ae3765->enter($__internal_9af1ba61c7d734a8985632d3d9feeae21ad7f00c4c7d949e9dbece5708ae3765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_147aae267793742c033745cca0a5c6ab73b9e830bf6eea78e5e63d732036e8f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147aae267793742c033745cca0a5c6ab73b9e830bf6eea78e5e63d732036e8f8->enter($__internal_147aae267793742c033745cca0a5c6ab73b9e830bf6eea78e5e63d732036e8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_147aae267793742c033745cca0a5c6ab73b9e830bf6eea78e5e63d732036e8f8->leave($__internal_147aae267793742c033745cca0a5c6ab73b9e830bf6eea78e5e63d732036e8f8_prof);

        
        $__internal_9af1ba61c7d734a8985632d3d9feeae21ad7f00c4c7d949e9dbece5708ae3765->leave($__internal_9af1ba61c7d734a8985632d3d9feeae21ad7f00c4c7d949e9dbece5708ae3765_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_916f190bd930c59661554ef7fb0141d74dca261c6e54e662a5b7f6e7b17f7182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916f190bd930c59661554ef7fb0141d74dca261c6e54e662a5b7f6e7b17f7182->enter($__internal_916f190bd930c59661554ef7fb0141d74dca261c6e54e662a5b7f6e7b17f7182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c399a460f201be47043968d817b124f39653a1c5e93f3a732fe44913af050d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c399a460f201be47043968d817b124f39653a1c5e93f3a732fe44913af050d1->enter($__internal_9c399a460f201be47043968d817b124f39653a1c5e93f3a732fe44913af050d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9c399a460f201be47043968d817b124f39653a1c5e93f3a732fe44913af050d1->leave($__internal_9c399a460f201be47043968d817b124f39653a1c5e93f3a732fe44913af050d1_prof);

        
        $__internal_916f190bd930c59661554ef7fb0141d74dca261c6e54e662a5b7f6e7b17f7182->leave($__internal_916f190bd930c59661554ef7fb0141d74dca261c6e54e662a5b7f6e7b17f7182_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bb09d72d2e36dcc5481b32cc95b44b7d3648f88e1587a4718c946abeec3f41d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb09d72d2e36dcc5481b32cc95b44b7d3648f88e1587a4718c946abeec3f41d->enter($__internal_3bb09d72d2e36dcc5481b32cc95b44b7d3648f88e1587a4718c946abeec3f41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa4b89df6d35248c2bff9c220f1f25724031cf16a65de409d6302988083c2bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4b89df6d35248c2bff9c220f1f25724031cf16a65de409d6302988083c2bc0->enter($__internal_fa4b89df6d35248c2bff9c220f1f25724031cf16a65de409d6302988083c2bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_fa4b89df6d35248c2bff9c220f1f25724031cf16a65de409d6302988083c2bc0->leave($__internal_fa4b89df6d35248c2bff9c220f1f25724031cf16a65de409d6302988083c2bc0_prof);

        
        $__internal_3bb09d72d2e36dcc5481b32cc95b44b7d3648f88e1587a4718c946abeec3f41d->leave($__internal_3bb09d72d2e36dcc5481b32cc95b44b7d3648f88e1587a4718c946abeec3f41d_prof);

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
