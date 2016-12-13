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
        $__internal_f1dee78017e2860ff67396b720aab2e760cc48380e430cee2098c0112957fa84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1dee78017e2860ff67396b720aab2e760cc48380e430cee2098c0112957fa84->enter($__internal_f1dee78017e2860ff67396b720aab2e760cc48380e430cee2098c0112957fa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_ecfb0e21c046ab88e7e3922c4716f033333cb94849404bbd745c066ca705c865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfb0e21c046ab88e7e3922c4716f033333cb94849404bbd745c066ca705c865->enter($__internal_ecfb0e21c046ab88e7e3922c4716f033333cb94849404bbd745c066ca705c865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1dee78017e2860ff67396b720aab2e760cc48380e430cee2098c0112957fa84->leave($__internal_f1dee78017e2860ff67396b720aab2e760cc48380e430cee2098c0112957fa84_prof);

        
        $__internal_ecfb0e21c046ab88e7e3922c4716f033333cb94849404bbd745c066ca705c865->leave($__internal_ecfb0e21c046ab88e7e3922c4716f033333cb94849404bbd745c066ca705c865_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36193ddbb7bc2318aab2246edb039bbfe3aba75f2739a75c8ab8d9a36b8aba3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36193ddbb7bc2318aab2246edb039bbfe3aba75f2739a75c8ab8d9a36b8aba3b->enter($__internal_36193ddbb7bc2318aab2246edb039bbfe3aba75f2739a75c8ab8d9a36b8aba3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b981c86b761339de45fbf51144aa39fcfea049a23521be3e7491451805f192ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b981c86b761339de45fbf51144aa39fcfea049a23521be3e7491451805f192ba->enter($__internal_b981c86b761339de45fbf51144aa39fcfea049a23521be3e7491451805f192ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b981c86b761339de45fbf51144aa39fcfea049a23521be3e7491451805f192ba->leave($__internal_b981c86b761339de45fbf51144aa39fcfea049a23521be3e7491451805f192ba_prof);

        
        $__internal_36193ddbb7bc2318aab2246edb039bbfe3aba75f2739a75c8ab8d9a36b8aba3b->leave($__internal_36193ddbb7bc2318aab2246edb039bbfe3aba75f2739a75c8ab8d9a36b8aba3b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f3fa4a3d0c917e69acbab9b7144a2819f3b0b320da51524f9f053b03fc7c10b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3fa4a3d0c917e69acbab9b7144a2819f3b0b320da51524f9f053b03fc7c10b->enter($__internal_6f3fa4a3d0c917e69acbab9b7144a2819f3b0b320da51524f9f053b03fc7c10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4993b459ad1e19edb717be186e402164fbfd6efdb12d1046ee81988285a1f1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4993b459ad1e19edb717be186e402164fbfd6efdb12d1046ee81988285a1f1f4->enter($__internal_4993b459ad1e19edb717be186e402164fbfd6efdb12d1046ee81988285a1f1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4993b459ad1e19edb717be186e402164fbfd6efdb12d1046ee81988285a1f1f4->leave($__internal_4993b459ad1e19edb717be186e402164fbfd6efdb12d1046ee81988285a1f1f4_prof);

        
        $__internal_6f3fa4a3d0c917e69acbab9b7144a2819f3b0b320da51524f9f053b03fc7c10b->leave($__internal_6f3fa4a3d0c917e69acbab9b7144a2819f3b0b320da51524f9f053b03fc7c10b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b93b5003b15fb8cb008b81b7661af6844204579270466e508cd5455a003e04d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b93b5003b15fb8cb008b81b7661af6844204579270466e508cd5455a003e04d->enter($__internal_8b93b5003b15fb8cb008b81b7661af6844204579270466e508cd5455a003e04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3221fae33654d5d8de7805b564f49b146684400a22170f298afe5a581af911a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3221fae33654d5d8de7805b564f49b146684400a22170f298afe5a581af911a5->enter($__internal_3221fae33654d5d8de7805b564f49b146684400a22170f298afe5a581af911a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_3221fae33654d5d8de7805b564f49b146684400a22170f298afe5a581af911a5->leave($__internal_3221fae33654d5d8de7805b564f49b146684400a22170f298afe5a581af911a5_prof);

        
        $__internal_8b93b5003b15fb8cb008b81b7661af6844204579270466e508cd5455a003e04d->leave($__internal_8b93b5003b15fb8cb008b81b7661af6844204579270466e508cd5455a003e04d_prof);

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
