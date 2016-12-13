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
        $__internal_b9b4f6f4239c98562ee544316b1fd25936630bb87f957d6f5e1525ec6828eeaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b4f6f4239c98562ee544316b1fd25936630bb87f957d6f5e1525ec6828eeaf->enter($__internal_b9b4f6f4239c98562ee544316b1fd25936630bb87f957d6f5e1525ec6828eeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_68c916d8e6010298769cad2abeede0d2a14f22e562906b78dabf3d52b94fd5e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c916d8e6010298769cad2abeede0d2a14f22e562906b78dabf3d52b94fd5e9->enter($__internal_68c916d8e6010298769cad2abeede0d2a14f22e562906b78dabf3d52b94fd5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b4f6f4239c98562ee544316b1fd25936630bb87f957d6f5e1525ec6828eeaf->leave($__internal_b9b4f6f4239c98562ee544316b1fd25936630bb87f957d6f5e1525ec6828eeaf_prof);

        
        $__internal_68c916d8e6010298769cad2abeede0d2a14f22e562906b78dabf3d52b94fd5e9->leave($__internal_68c916d8e6010298769cad2abeede0d2a14f22e562906b78dabf3d52b94fd5e9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_757e76284dea2f9a11ca0a6913fc930da5953a7b2b957ad9b86aad7acf850662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757e76284dea2f9a11ca0a6913fc930da5953a7b2b957ad9b86aad7acf850662->enter($__internal_757e76284dea2f9a11ca0a6913fc930da5953a7b2b957ad9b86aad7acf850662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c495330867c6feb6b2fb2fef6a3d8ac5c4649ea07e910d01f1b5482d0670a7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c495330867c6feb6b2fb2fef6a3d8ac5c4649ea07e910d01f1b5482d0670a7f0->enter($__internal_c495330867c6feb6b2fb2fef6a3d8ac5c4649ea07e910d01f1b5482d0670a7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c495330867c6feb6b2fb2fef6a3d8ac5c4649ea07e910d01f1b5482d0670a7f0->leave($__internal_c495330867c6feb6b2fb2fef6a3d8ac5c4649ea07e910d01f1b5482d0670a7f0_prof);

        
        $__internal_757e76284dea2f9a11ca0a6913fc930da5953a7b2b957ad9b86aad7acf850662->leave($__internal_757e76284dea2f9a11ca0a6913fc930da5953a7b2b957ad9b86aad7acf850662_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f5864407e1c02e9c7f08303aa8faeec58d7ad0f643193f023931e90306e3322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5864407e1c02e9c7f08303aa8faeec58d7ad0f643193f023931e90306e3322->enter($__internal_7f5864407e1c02e9c7f08303aa8faeec58d7ad0f643193f023931e90306e3322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_83c0462208aa3e386255b4c2f25de8650705796ae1aad1606cb2f68817460f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c0462208aa3e386255b4c2f25de8650705796ae1aad1606cb2f68817460f6b->enter($__internal_83c0462208aa3e386255b4c2f25de8650705796ae1aad1606cb2f68817460f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_83c0462208aa3e386255b4c2f25de8650705796ae1aad1606cb2f68817460f6b->leave($__internal_83c0462208aa3e386255b4c2f25de8650705796ae1aad1606cb2f68817460f6b_prof);

        
        $__internal_7f5864407e1c02e9c7f08303aa8faeec58d7ad0f643193f023931e90306e3322->leave($__internal_7f5864407e1c02e9c7f08303aa8faeec58d7ad0f643193f023931e90306e3322_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_52a03ad547750a677aef86ea8a0748a951768c88d754260d6176e990fe5df074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a03ad547750a677aef86ea8a0748a951768c88d754260d6176e990fe5df074->enter($__internal_52a03ad547750a677aef86ea8a0748a951768c88d754260d6176e990fe5df074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a296e57b91a4604142f24868a2cbbd283cc45d5dcc3c76322a3133c5d73d9af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a296e57b91a4604142f24868a2cbbd283cc45d5dcc3c76322a3133c5d73d9af->enter($__internal_7a296e57b91a4604142f24868a2cbbd283cc45d5dcc3c76322a3133c5d73d9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7a296e57b91a4604142f24868a2cbbd283cc45d5dcc3c76322a3133c5d73d9af->leave($__internal_7a296e57b91a4604142f24868a2cbbd283cc45d5dcc3c76322a3133c5d73d9af_prof);

        
        $__internal_52a03ad547750a677aef86ea8a0748a951768c88d754260d6176e990fe5df074->leave($__internal_52a03ad547750a677aef86ea8a0748a951768c88d754260d6176e990fe5df074_prof);

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
