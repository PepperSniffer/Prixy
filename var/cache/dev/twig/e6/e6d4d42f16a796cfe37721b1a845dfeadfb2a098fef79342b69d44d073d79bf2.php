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
        $__internal_02fdbe5908e6975deb5e7c8e1c0900ab302719a749fdf1c6095260a729e5584b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02fdbe5908e6975deb5e7c8e1c0900ab302719a749fdf1c6095260a729e5584b->enter($__internal_02fdbe5908e6975deb5e7c8e1c0900ab302719a749fdf1c6095260a729e5584b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_731e87694325192a24fe5b4495c3ef40abd484ddcdb5d1f6907565850eb4f159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731e87694325192a24fe5b4495c3ef40abd484ddcdb5d1f6907565850eb4f159->enter($__internal_731e87694325192a24fe5b4495c3ef40abd484ddcdb5d1f6907565850eb4f159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02fdbe5908e6975deb5e7c8e1c0900ab302719a749fdf1c6095260a729e5584b->leave($__internal_02fdbe5908e6975deb5e7c8e1c0900ab302719a749fdf1c6095260a729e5584b_prof);

        
        $__internal_731e87694325192a24fe5b4495c3ef40abd484ddcdb5d1f6907565850eb4f159->leave($__internal_731e87694325192a24fe5b4495c3ef40abd484ddcdb5d1f6907565850eb4f159_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1bd16485ebc0c77c3d7bb9b315128624eda0e876f98da9b80141f0e1c78c32e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bd16485ebc0c77c3d7bb9b315128624eda0e876f98da9b80141f0e1c78c32e5->enter($__internal_1bd16485ebc0c77c3d7bb9b315128624eda0e876f98da9b80141f0e1c78c32e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_34582dc7fd3d49e56567e52d2f8e45555daa5f08d0974ebe0478b1b7752046c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34582dc7fd3d49e56567e52d2f8e45555daa5f08d0974ebe0478b1b7752046c7->enter($__internal_34582dc7fd3d49e56567e52d2f8e45555daa5f08d0974ebe0478b1b7752046c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_34582dc7fd3d49e56567e52d2f8e45555daa5f08d0974ebe0478b1b7752046c7->leave($__internal_34582dc7fd3d49e56567e52d2f8e45555daa5f08d0974ebe0478b1b7752046c7_prof);

        
        $__internal_1bd16485ebc0c77c3d7bb9b315128624eda0e876f98da9b80141f0e1c78c32e5->leave($__internal_1bd16485ebc0c77c3d7bb9b315128624eda0e876f98da9b80141f0e1c78c32e5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_31afb10a9eb0e402528e7b8aef9a82458bad7d77675c4fe4b4250e93c73fc2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31afb10a9eb0e402528e7b8aef9a82458bad7d77675c4fe4b4250e93c73fc2e6->enter($__internal_31afb10a9eb0e402528e7b8aef9a82458bad7d77675c4fe4b4250e93c73fc2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_edb9a58f505e81a48fa4edea15bf62ff85ca402ac39bcb848d97f07051d9b958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb9a58f505e81a48fa4edea15bf62ff85ca402ac39bcb848d97f07051d9b958->enter($__internal_edb9a58f505e81a48fa4edea15bf62ff85ca402ac39bcb848d97f07051d9b958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_edb9a58f505e81a48fa4edea15bf62ff85ca402ac39bcb848d97f07051d9b958->leave($__internal_edb9a58f505e81a48fa4edea15bf62ff85ca402ac39bcb848d97f07051d9b958_prof);

        
        $__internal_31afb10a9eb0e402528e7b8aef9a82458bad7d77675c4fe4b4250e93c73fc2e6->leave($__internal_31afb10a9eb0e402528e7b8aef9a82458bad7d77675c4fe4b4250e93c73fc2e6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e560d4d5929aaa709b1c6e6194d8a3646fb1054996aecf1cc100fb57c5d653a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e560d4d5929aaa709b1c6e6194d8a3646fb1054996aecf1cc100fb57c5d653a->enter($__internal_7e560d4d5929aaa709b1c6e6194d8a3646fb1054996aecf1cc100fb57c5d653a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7aeb5d9e6764517afb00fb6a2299dd66ab3c7f1e0a62cdeb583d1bed137c0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7aeb5d9e6764517afb00fb6a2299dd66ab3c7f1e0a62cdeb583d1bed137c0a1->enter($__internal_a7aeb5d9e6764517afb00fb6a2299dd66ab3c7f1e0a62cdeb583d1bed137c0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_a7aeb5d9e6764517afb00fb6a2299dd66ab3c7f1e0a62cdeb583d1bed137c0a1->leave($__internal_a7aeb5d9e6764517afb00fb6a2299dd66ab3c7f1e0a62cdeb583d1bed137c0a1_prof);

        
        $__internal_7e560d4d5929aaa709b1c6e6194d8a3646fb1054996aecf1cc100fb57c5d653a->leave($__internal_7e560d4d5929aaa709b1c6e6194d8a3646fb1054996aecf1cc100fb57c5d653a_prof);

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
