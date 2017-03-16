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
        $__internal_04604251761c2ea41ca992427cd019d9d89c7aeddadfe6b02a6a4f209862b4d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04604251761c2ea41ca992427cd019d9d89c7aeddadfe6b02a6a4f209862b4d3->enter($__internal_04604251761c2ea41ca992427cd019d9d89c7aeddadfe6b02a6a4f209862b4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_cea669c61ee802c01b9b09e2d50683240e8b6762eabea6ed386908fb11600e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea669c61ee802c01b9b09e2d50683240e8b6762eabea6ed386908fb11600e1a->enter($__internal_cea669c61ee802c01b9b09e2d50683240e8b6762eabea6ed386908fb11600e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04604251761c2ea41ca992427cd019d9d89c7aeddadfe6b02a6a4f209862b4d3->leave($__internal_04604251761c2ea41ca992427cd019d9d89c7aeddadfe6b02a6a4f209862b4d3_prof);

        
        $__internal_cea669c61ee802c01b9b09e2d50683240e8b6762eabea6ed386908fb11600e1a->leave($__internal_cea669c61ee802c01b9b09e2d50683240e8b6762eabea6ed386908fb11600e1a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_96857532d5c2ca5adfa45df73aeb1c50d2613ecedb21c6aef62d21c402e4ca5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96857532d5c2ca5adfa45df73aeb1c50d2613ecedb21c6aef62d21c402e4ca5a->enter($__internal_96857532d5c2ca5adfa45df73aeb1c50d2613ecedb21c6aef62d21c402e4ca5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8917315359ed850c1d8addb20d53225b4b9f01c5397d6816ee74938045c26366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8917315359ed850c1d8addb20d53225b4b9f01c5397d6816ee74938045c26366->enter($__internal_8917315359ed850c1d8addb20d53225b4b9f01c5397d6816ee74938045c26366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8917315359ed850c1d8addb20d53225b4b9f01c5397d6816ee74938045c26366->leave($__internal_8917315359ed850c1d8addb20d53225b4b9f01c5397d6816ee74938045c26366_prof);

        
        $__internal_96857532d5c2ca5adfa45df73aeb1c50d2613ecedb21c6aef62d21c402e4ca5a->leave($__internal_96857532d5c2ca5adfa45df73aeb1c50d2613ecedb21c6aef62d21c402e4ca5a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_978faf1abbe6261fbd8c987ed4f2b8bcc5366bfdf8404a52b6b8ef3a996fc67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978faf1abbe6261fbd8c987ed4f2b8bcc5366bfdf8404a52b6b8ef3a996fc67a->enter($__internal_978faf1abbe6261fbd8c987ed4f2b8bcc5366bfdf8404a52b6b8ef3a996fc67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50b64631490fc55ec141ebefe53c14b8d3a9166a6eb1f4c69b247512ac7bb65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b64631490fc55ec141ebefe53c14b8d3a9166a6eb1f4c69b247512ac7bb65a->enter($__internal_50b64631490fc55ec141ebefe53c14b8d3a9166a6eb1f4c69b247512ac7bb65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_50b64631490fc55ec141ebefe53c14b8d3a9166a6eb1f4c69b247512ac7bb65a->leave($__internal_50b64631490fc55ec141ebefe53c14b8d3a9166a6eb1f4c69b247512ac7bb65a_prof);

        
        $__internal_978faf1abbe6261fbd8c987ed4f2b8bcc5366bfdf8404a52b6b8ef3a996fc67a->leave($__internal_978faf1abbe6261fbd8c987ed4f2b8bcc5366bfdf8404a52b6b8ef3a996fc67a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_75a72aea77a39f8e4a4d41b80cb0845d79d09971c6200f199a0534aa6649c486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a72aea77a39f8e4a4d41b80cb0845d79d09971c6200f199a0534aa6649c486->enter($__internal_75a72aea77a39f8e4a4d41b80cb0845d79d09971c6200f199a0534aa6649c486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3f3db6d81e2d840e9d9ce56c18416b88a43af9421524047ee103d8a9f52775b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f3db6d81e2d840e9d9ce56c18416b88a43af9421524047ee103d8a9f52775b->enter($__internal_b3f3db6d81e2d840e9d9ce56c18416b88a43af9421524047ee103d8a9f52775b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b3f3db6d81e2d840e9d9ce56c18416b88a43af9421524047ee103d8a9f52775b->leave($__internal_b3f3db6d81e2d840e9d9ce56c18416b88a43af9421524047ee103d8a9f52775b_prof);

        
        $__internal_75a72aea77a39f8e4a4d41b80cb0845d79d09971c6200f199a0534aa6649c486->leave($__internal_75a72aea77a39f8e4a4d41b80cb0845d79d09971c6200f199a0534aa6649c486_prof);

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
