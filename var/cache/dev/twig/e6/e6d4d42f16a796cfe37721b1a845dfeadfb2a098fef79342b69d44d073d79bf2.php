<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2f38ceea4635e14a151ddb711f4c7a25979e475d6c0b9f96e9ef041aa443ac2b extends Twig_Template
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
        $__internal_b4a0c7f7556088639366b49e3722f0530468097e6b8b50b13810dec5cdde713b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a0c7f7556088639366b49e3722f0530468097e6b8b50b13810dec5cdde713b->enter($__internal_b4a0c7f7556088639366b49e3722f0530468097e6b8b50b13810dec5cdde713b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_532fbebe0bc2a93c93136448238aec2896c2d67328cd3cd5fde01197378a0302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532fbebe0bc2a93c93136448238aec2896c2d67328cd3cd5fde01197378a0302->enter($__internal_532fbebe0bc2a93c93136448238aec2896c2d67328cd3cd5fde01197378a0302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4a0c7f7556088639366b49e3722f0530468097e6b8b50b13810dec5cdde713b->leave($__internal_b4a0c7f7556088639366b49e3722f0530468097e6b8b50b13810dec5cdde713b_prof);

        
        $__internal_532fbebe0bc2a93c93136448238aec2896c2d67328cd3cd5fde01197378a0302->leave($__internal_532fbebe0bc2a93c93136448238aec2896c2d67328cd3cd5fde01197378a0302_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ddfb7bd5947df86944fc61e624d440a949b614076c012f4969b29ef47a30089b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfb7bd5947df86944fc61e624d440a949b614076c012f4969b29ef47a30089b->enter($__internal_ddfb7bd5947df86944fc61e624d440a949b614076c012f4969b29ef47a30089b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_080221cebd499761612d1eeee1f6520ceebb839d4ff4a3ebfc222c2396236b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080221cebd499761612d1eeee1f6520ceebb839d4ff4a3ebfc222c2396236b22->enter($__internal_080221cebd499761612d1eeee1f6520ceebb839d4ff4a3ebfc222c2396236b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_080221cebd499761612d1eeee1f6520ceebb839d4ff4a3ebfc222c2396236b22->leave($__internal_080221cebd499761612d1eeee1f6520ceebb839d4ff4a3ebfc222c2396236b22_prof);

        
        $__internal_ddfb7bd5947df86944fc61e624d440a949b614076c012f4969b29ef47a30089b->leave($__internal_ddfb7bd5947df86944fc61e624d440a949b614076c012f4969b29ef47a30089b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3698c1a9508a2b801de5fc917fc8707efec8eb4d28bdfb37101293141370a447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3698c1a9508a2b801de5fc917fc8707efec8eb4d28bdfb37101293141370a447->enter($__internal_3698c1a9508a2b801de5fc917fc8707efec8eb4d28bdfb37101293141370a447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_488fd7f2e4bb575b8ee388a5ae622b9c11d26777e3e022d3687763e8b8a6ff22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488fd7f2e4bb575b8ee388a5ae622b9c11d26777e3e022d3687763e8b8a6ff22->enter($__internal_488fd7f2e4bb575b8ee388a5ae622b9c11d26777e3e022d3687763e8b8a6ff22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_488fd7f2e4bb575b8ee388a5ae622b9c11d26777e3e022d3687763e8b8a6ff22->leave($__internal_488fd7f2e4bb575b8ee388a5ae622b9c11d26777e3e022d3687763e8b8a6ff22_prof);

        
        $__internal_3698c1a9508a2b801de5fc917fc8707efec8eb4d28bdfb37101293141370a447->leave($__internal_3698c1a9508a2b801de5fc917fc8707efec8eb4d28bdfb37101293141370a447_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc38f83d55c304d4d2da503a1cd91a31adc94523ac21c50e5ab83d7984c57060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc38f83d55c304d4d2da503a1cd91a31adc94523ac21c50e5ab83d7984c57060->enter($__internal_fc38f83d55c304d4d2da503a1cd91a31adc94523ac21c50e5ab83d7984c57060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e85c86cd890d60d095ae46a505208bc6b827e92b0dacd9787f11c616feea0e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85c86cd890d60d095ae46a505208bc6b827e92b0dacd9787f11c616feea0e9e->enter($__internal_e85c86cd890d60d095ae46a505208bc6b827e92b0dacd9787f11c616feea0e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_e85c86cd890d60d095ae46a505208bc6b827e92b0dacd9787f11c616feea0e9e->leave($__internal_e85c86cd890d60d095ae46a505208bc6b827e92b0dacd9787f11c616feea0e9e_prof);

        
        $__internal_fc38f83d55c304d4d2da503a1cd91a31adc94523ac21c50e5ab83d7984c57060->leave($__internal_fc38f83d55c304d4d2da503a1cd91a31adc94523ac21c50e5ab83d7984c57060_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
