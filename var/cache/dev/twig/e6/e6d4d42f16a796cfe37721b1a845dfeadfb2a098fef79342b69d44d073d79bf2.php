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
        $__internal_1e6b6b3142870e20f5efba7006d4d71dd6d7589c84915e52162604bdb17a0bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6b6b3142870e20f5efba7006d4d71dd6d7589c84915e52162604bdb17a0bf7->enter($__internal_1e6b6b3142870e20f5efba7006d4d71dd6d7589c84915e52162604bdb17a0bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_bf6ae5aa04046f1593121ddf6982e8c6f17b6bb2fc7a2ec79dc0b123c7b658e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6ae5aa04046f1593121ddf6982e8c6f17b6bb2fc7a2ec79dc0b123c7b658e0->enter($__internal_bf6ae5aa04046f1593121ddf6982e8c6f17b6bb2fc7a2ec79dc0b123c7b658e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e6b6b3142870e20f5efba7006d4d71dd6d7589c84915e52162604bdb17a0bf7->leave($__internal_1e6b6b3142870e20f5efba7006d4d71dd6d7589c84915e52162604bdb17a0bf7_prof);

        
        $__internal_bf6ae5aa04046f1593121ddf6982e8c6f17b6bb2fc7a2ec79dc0b123c7b658e0->leave($__internal_bf6ae5aa04046f1593121ddf6982e8c6f17b6bb2fc7a2ec79dc0b123c7b658e0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_048061af31e43987a92f75395fa8c1109ef754dcc09be40f335c02adc10175a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048061af31e43987a92f75395fa8c1109ef754dcc09be40f335c02adc10175a3->enter($__internal_048061af31e43987a92f75395fa8c1109ef754dcc09be40f335c02adc10175a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bf0e1b019386f35f07dcf31acdb66e6e72bc61007aa32592382e806a33c737a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0e1b019386f35f07dcf31acdb66e6e72bc61007aa32592382e806a33c737a4->enter($__internal_bf0e1b019386f35f07dcf31acdb66e6e72bc61007aa32592382e806a33c737a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bf0e1b019386f35f07dcf31acdb66e6e72bc61007aa32592382e806a33c737a4->leave($__internal_bf0e1b019386f35f07dcf31acdb66e6e72bc61007aa32592382e806a33c737a4_prof);

        
        $__internal_048061af31e43987a92f75395fa8c1109ef754dcc09be40f335c02adc10175a3->leave($__internal_048061af31e43987a92f75395fa8c1109ef754dcc09be40f335c02adc10175a3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_25dd91511fc01071306ef2c5ebc6f35f6a630989616a41aa1199cf7691563d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25dd91511fc01071306ef2c5ebc6f35f6a630989616a41aa1199cf7691563d2c->enter($__internal_25dd91511fc01071306ef2c5ebc6f35f6a630989616a41aa1199cf7691563d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b942330dfe0d3a003db3e6814fe3b72a98908b91abbb0742312bb45553b04645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b942330dfe0d3a003db3e6814fe3b72a98908b91abbb0742312bb45553b04645->enter($__internal_b942330dfe0d3a003db3e6814fe3b72a98908b91abbb0742312bb45553b04645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b942330dfe0d3a003db3e6814fe3b72a98908b91abbb0742312bb45553b04645->leave($__internal_b942330dfe0d3a003db3e6814fe3b72a98908b91abbb0742312bb45553b04645_prof);

        
        $__internal_25dd91511fc01071306ef2c5ebc6f35f6a630989616a41aa1199cf7691563d2c->leave($__internal_25dd91511fc01071306ef2c5ebc6f35f6a630989616a41aa1199cf7691563d2c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_860c9e2dfaa6da4414eaa64540e98c8a906e4a7941b33c6bf19be777ee05447b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860c9e2dfaa6da4414eaa64540e98c8a906e4a7941b33c6bf19be777ee05447b->enter($__internal_860c9e2dfaa6da4414eaa64540e98c8a906e4a7941b33c6bf19be777ee05447b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c537d184c3b36f590b251550ac610259606a45e9a6d01d34e6b20cf2c75b533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c537d184c3b36f590b251550ac610259606a45e9a6d01d34e6b20cf2c75b533->enter($__internal_8c537d184c3b36f590b251550ac610259606a45e9a6d01d34e6b20cf2c75b533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_8c537d184c3b36f590b251550ac610259606a45e9a6d01d34e6b20cf2c75b533->leave($__internal_8c537d184c3b36f590b251550ac610259606a45e9a6d01d34e6b20cf2c75b533_prof);

        
        $__internal_860c9e2dfaa6da4414eaa64540e98c8a906e4a7941b33c6bf19be777ee05447b->leave($__internal_860c9e2dfaa6da4414eaa64540e98c8a906e4a7941b33c6bf19be777ee05447b_prof);

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
