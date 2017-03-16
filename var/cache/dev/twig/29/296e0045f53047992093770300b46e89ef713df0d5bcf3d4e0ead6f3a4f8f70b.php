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
        $__internal_560c2945b17a7c74002602fa04fbac60bf4beb2cee0bca4f255a86e9a5482c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560c2945b17a7c74002602fa04fbac60bf4beb2cee0bca4f255a86e9a5482c80->enter($__internal_560c2945b17a7c74002602fa04fbac60bf4beb2cee0bca4f255a86e9a5482c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6c195973abc6cbca9066f41d273db6c3ca46e9337ae1f83c6f4184d942253dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c195973abc6cbca9066f41d273db6c3ca46e9337ae1f83c6f4184d942253dcf->enter($__internal_6c195973abc6cbca9066f41d273db6c3ca46e9337ae1f83c6f4184d942253dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_560c2945b17a7c74002602fa04fbac60bf4beb2cee0bca4f255a86e9a5482c80->leave($__internal_560c2945b17a7c74002602fa04fbac60bf4beb2cee0bca4f255a86e9a5482c80_prof);

        
        $__internal_6c195973abc6cbca9066f41d273db6c3ca46e9337ae1f83c6f4184d942253dcf->leave($__internal_6c195973abc6cbca9066f41d273db6c3ca46e9337ae1f83c6f4184d942253dcf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6b0652ea7127c2f800c77837d219dfbbe28723a1a6ac81094ea3d4b37e80551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b0652ea7127c2f800c77837d219dfbbe28723a1a6ac81094ea3d4b37e80551->enter($__internal_c6b0652ea7127c2f800c77837d219dfbbe28723a1a6ac81094ea3d4b37e80551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cc37a5ca7403db928ac0de74c8d7d1a81e13f84c9e0670644d6b137e334efe68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc37a5ca7403db928ac0de74c8d7d1a81e13f84c9e0670644d6b137e334efe68->enter($__internal_cc37a5ca7403db928ac0de74c8d7d1a81e13f84c9e0670644d6b137e334efe68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cc37a5ca7403db928ac0de74c8d7d1a81e13f84c9e0670644d6b137e334efe68->leave($__internal_cc37a5ca7403db928ac0de74c8d7d1a81e13f84c9e0670644d6b137e334efe68_prof);

        
        $__internal_c6b0652ea7127c2f800c77837d219dfbbe28723a1a6ac81094ea3d4b37e80551->leave($__internal_c6b0652ea7127c2f800c77837d219dfbbe28723a1a6ac81094ea3d4b37e80551_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a644aed7c381b704f902cf9a929c1917c1cb758f4ad610b81a42f9e3b77a38c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a644aed7c381b704f902cf9a929c1917c1cb758f4ad610b81a42f9e3b77a38c8->enter($__internal_a644aed7c381b704f902cf9a929c1917c1cb758f4ad610b81a42f9e3b77a38c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_703a97f3e605411f9780976ddaa2da0787a174887c903288666a28fb17e40760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703a97f3e605411f9780976ddaa2da0787a174887c903288666a28fb17e40760->enter($__internal_703a97f3e605411f9780976ddaa2da0787a174887c903288666a28fb17e40760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_703a97f3e605411f9780976ddaa2da0787a174887c903288666a28fb17e40760->leave($__internal_703a97f3e605411f9780976ddaa2da0787a174887c903288666a28fb17e40760_prof);

        
        $__internal_a644aed7c381b704f902cf9a929c1917c1cb758f4ad610b81a42f9e3b77a38c8->leave($__internal_a644aed7c381b704f902cf9a929c1917c1cb758f4ad610b81a42f9e3b77a38c8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_11886aecf2edc6e67f203211d82e2034c548662aabd9da3ec749d5d70260fd2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11886aecf2edc6e67f203211d82e2034c548662aabd9da3ec749d5d70260fd2e->enter($__internal_11886aecf2edc6e67f203211d82e2034c548662aabd9da3ec749d5d70260fd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aee7977d18119134e98dc44ef524904de214e8ffc8f0ec5ac6f2b99e3ade5f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee7977d18119134e98dc44ef524904de214e8ffc8f0ec5ac6f2b99e3ade5f2a->enter($__internal_aee7977d18119134e98dc44ef524904de214e8ffc8f0ec5ac6f2b99e3ade5f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_aee7977d18119134e98dc44ef524904de214e8ffc8f0ec5ac6f2b99e3ade5f2a->leave($__internal_aee7977d18119134e98dc44ef524904de214e8ffc8f0ec5ac6f2b99e3ade5f2a_prof);

        
        $__internal_11886aecf2edc6e67f203211d82e2034c548662aabd9da3ec749d5d70260fd2e->leave($__internal_11886aecf2edc6e67f203211d82e2034c548662aabd9da3ec749d5d70260fd2e_prof);

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
