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
        $__internal_dd2640473ca91e9a904f7cb7c859f5d860dd29b773104a1a93b80e30da072fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2640473ca91e9a904f7cb7c859f5d860dd29b773104a1a93b80e30da072fe2->enter($__internal_dd2640473ca91e9a904f7cb7c859f5d860dd29b773104a1a93b80e30da072fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f371dd25cfc3e4583b0a3f1a64c1932fbb6bab4d21c2bd3d7a6a68bd1ade7b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f371dd25cfc3e4583b0a3f1a64c1932fbb6bab4d21c2bd3d7a6a68bd1ade7b57->enter($__internal_f371dd25cfc3e4583b0a3f1a64c1932fbb6bab4d21c2bd3d7a6a68bd1ade7b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd2640473ca91e9a904f7cb7c859f5d860dd29b773104a1a93b80e30da072fe2->leave($__internal_dd2640473ca91e9a904f7cb7c859f5d860dd29b773104a1a93b80e30da072fe2_prof);

        
        $__internal_f371dd25cfc3e4583b0a3f1a64c1932fbb6bab4d21c2bd3d7a6a68bd1ade7b57->leave($__internal_f371dd25cfc3e4583b0a3f1a64c1932fbb6bab4d21c2bd3d7a6a68bd1ade7b57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7050c8b5bdc960371e96d2eac9ed95facacdc46275fd0a52cf9fe0ed743dd3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7050c8b5bdc960371e96d2eac9ed95facacdc46275fd0a52cf9fe0ed743dd3e5->enter($__internal_7050c8b5bdc960371e96d2eac9ed95facacdc46275fd0a52cf9fe0ed743dd3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_acf059cb133d8dd8a1a0b3d93494f4bb75fb85b88d560ed2f7fc405dba357f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf059cb133d8dd8a1a0b3d93494f4bb75fb85b88d560ed2f7fc405dba357f65->enter($__internal_acf059cb133d8dd8a1a0b3d93494f4bb75fb85b88d560ed2f7fc405dba357f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_acf059cb133d8dd8a1a0b3d93494f4bb75fb85b88d560ed2f7fc405dba357f65->leave($__internal_acf059cb133d8dd8a1a0b3d93494f4bb75fb85b88d560ed2f7fc405dba357f65_prof);

        
        $__internal_7050c8b5bdc960371e96d2eac9ed95facacdc46275fd0a52cf9fe0ed743dd3e5->leave($__internal_7050c8b5bdc960371e96d2eac9ed95facacdc46275fd0a52cf9fe0ed743dd3e5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_de7139f5ed58b661b4e5818105aacb6e906932f7d30d3b3e7189ffbea6735568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7139f5ed58b661b4e5818105aacb6e906932f7d30d3b3e7189ffbea6735568->enter($__internal_de7139f5ed58b661b4e5818105aacb6e906932f7d30d3b3e7189ffbea6735568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_882646b74e7cd30a1a76a5829a2137eed3f2d37a606ce72f925b33420d4aaad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882646b74e7cd30a1a76a5829a2137eed3f2d37a606ce72f925b33420d4aaad3->enter($__internal_882646b74e7cd30a1a76a5829a2137eed3f2d37a606ce72f925b33420d4aaad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_882646b74e7cd30a1a76a5829a2137eed3f2d37a606ce72f925b33420d4aaad3->leave($__internal_882646b74e7cd30a1a76a5829a2137eed3f2d37a606ce72f925b33420d4aaad3_prof);

        
        $__internal_de7139f5ed58b661b4e5818105aacb6e906932f7d30d3b3e7189ffbea6735568->leave($__internal_de7139f5ed58b661b4e5818105aacb6e906932f7d30d3b3e7189ffbea6735568_prof);

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
