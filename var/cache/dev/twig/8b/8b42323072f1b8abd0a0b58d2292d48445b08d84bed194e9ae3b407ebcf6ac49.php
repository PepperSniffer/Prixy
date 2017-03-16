<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_38ae47e524781d8a308a0f93cdd67217a19b807a20ed19b9bf4b3766120a981c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e1cdf65baed2353fce3323513ed323f2ce35ede288566a0b880c44b88e7685f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e1cdf65baed2353fce3323513ed323f2ce35ede288566a0b880c44b88e7685f->enter($__internal_0e1cdf65baed2353fce3323513ed323f2ce35ede288566a0b880c44b88e7685f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_84ec88c81473b53f51da2765127580af5c27045fee09aa82e351bf523c08fc27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ec88c81473b53f51da2765127580af5c27045fee09aa82e351bf523c08fc27->enter($__internal_84ec88c81473b53f51da2765127580af5c27045fee09aa82e351bf523c08fc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e1cdf65baed2353fce3323513ed323f2ce35ede288566a0b880c44b88e7685f->leave($__internal_0e1cdf65baed2353fce3323513ed323f2ce35ede288566a0b880c44b88e7685f_prof);

        
        $__internal_84ec88c81473b53f51da2765127580af5c27045fee09aa82e351bf523c08fc27->leave($__internal_84ec88c81473b53f51da2765127580af5c27045fee09aa82e351bf523c08fc27_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2961d6ad06c4262dec2e5d669f63cd687ea979941441ffe0b70319d87c9ac4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2961d6ad06c4262dec2e5d669f63cd687ea979941441ffe0b70319d87c9ac4f->enter($__internal_e2961d6ad06c4262dec2e5d669f63cd687ea979941441ffe0b70319d87c9ac4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f09c04f0307292d01bfc7f66999ab2f1651d801aa314b7f773d16a42414ff22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09c04f0307292d01bfc7f66999ab2f1651d801aa314b7f773d16a42414ff22c->enter($__internal_f09c04f0307292d01bfc7f66999ab2f1651d801aa314b7f773d16a42414ff22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f09c04f0307292d01bfc7f66999ab2f1651d801aa314b7f773d16a42414ff22c->leave($__internal_f09c04f0307292d01bfc7f66999ab2f1651d801aa314b7f773d16a42414ff22c_prof);

        
        $__internal_e2961d6ad06c4262dec2e5d669f63cd687ea979941441ffe0b70319d87c9ac4f->leave($__internal_e2961d6ad06c4262dec2e5d669f63cd687ea979941441ffe0b70319d87c9ac4f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_33d8969a67535745eb57a84a03c144e961ef2f35a25369f943f45db82ecbd346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d8969a67535745eb57a84a03c144e961ef2f35a25369f943f45db82ecbd346->enter($__internal_33d8969a67535745eb57a84a03c144e961ef2f35a25369f943f45db82ecbd346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d9a9ef0257186f870509912ce04f2404389a1259fc9ca1152b7a603031dc8cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9a9ef0257186f870509912ce04f2404389a1259fc9ca1152b7a603031dc8cc->enter($__internal_8d9a9ef0257186f870509912ce04f2404389a1259fc9ca1152b7a603031dc8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_8d9a9ef0257186f870509912ce04f2404389a1259fc9ca1152b7a603031dc8cc->leave($__internal_8d9a9ef0257186f870509912ce04f2404389a1259fc9ca1152b7a603031dc8cc_prof);

        
        $__internal_33d8969a67535745eb57a84a03c144e961ef2f35a25369f943f45db82ecbd346->leave($__internal_33d8969a67535745eb57a84a03c144e961ef2f35a25369f943f45db82ecbd346_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  82 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>{{ file }} <small>line {{ line }}</small></h1>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
