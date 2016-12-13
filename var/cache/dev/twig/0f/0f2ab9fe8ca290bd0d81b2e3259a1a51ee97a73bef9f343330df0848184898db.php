<?php

/* ::base.html.twig */
class __TwigTemplate_48030b2143fd073c35933ebc38c04d784093596987d74cfb55c39a2271218f7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_946d4e4b10045f9f05d8abb508ece072e148a9b1cae0c80a6042be633117d0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946d4e4b10045f9f05d8abb508ece072e148a9b1cae0c80a6042be633117d0b4->enter($__internal_946d4e4b10045f9f05d8abb508ece072e148a9b1cae0c80a6042be633117d0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_799729a40cd61ecc49738897e9fb45c9032a26b5c29c2df0a5f3e3a72d857327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799729a40cd61ecc49738897e9fb45c9032a26b5c29c2df0a5f3e3a72d857327->enter($__internal_799729a40cd61ecc49738897e9fb45c9032a26b5c29c2df0a5f3e3a72d857327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_946d4e4b10045f9f05d8abb508ece072e148a9b1cae0c80a6042be633117d0b4->leave($__internal_946d4e4b10045f9f05d8abb508ece072e148a9b1cae0c80a6042be633117d0b4_prof);

        
        $__internal_799729a40cd61ecc49738897e9fb45c9032a26b5c29c2df0a5f3e3a72d857327->leave($__internal_799729a40cd61ecc49738897e9fb45c9032a26b5c29c2df0a5f3e3a72d857327_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_98370d9e953b414213317968264ea881621172f838abed3931b0a031bb14a366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98370d9e953b414213317968264ea881621172f838abed3931b0a031bb14a366->enter($__internal_98370d9e953b414213317968264ea881621172f838abed3931b0a031bb14a366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd6ab49365cb7ffebdab757f39549505483c695389c2d5dcfefa2f884a5717d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6ab49365cb7ffebdab757f39549505483c695389c2d5dcfefa2f884a5717d8->enter($__internal_fd6ab49365cb7ffebdab757f39549505483c695389c2d5dcfefa2f884a5717d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fd6ab49365cb7ffebdab757f39549505483c695389c2d5dcfefa2f884a5717d8->leave($__internal_fd6ab49365cb7ffebdab757f39549505483c695389c2d5dcfefa2f884a5717d8_prof);

        
        $__internal_98370d9e953b414213317968264ea881621172f838abed3931b0a031bb14a366->leave($__internal_98370d9e953b414213317968264ea881621172f838abed3931b0a031bb14a366_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ec9aaab9d66e90ab3cf7a23f2d39fce305883e6a578c358ab71cc70bee5021c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec9aaab9d66e90ab3cf7a23f2d39fce305883e6a578c358ab71cc70bee5021c->enter($__internal_9ec9aaab9d66e90ab3cf7a23f2d39fce305883e6a578c358ab71cc70bee5021c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c63e979e5d2064e6a83a31781245cf2cbd32e83bbe0777cdf478ac08985c8b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63e979e5d2064e6a83a31781245cf2cbd32e83bbe0777cdf478ac08985c8b91->enter($__internal_c63e979e5d2064e6a83a31781245cf2cbd32e83bbe0777cdf478ac08985c8b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c63e979e5d2064e6a83a31781245cf2cbd32e83bbe0777cdf478ac08985c8b91->leave($__internal_c63e979e5d2064e6a83a31781245cf2cbd32e83bbe0777cdf478ac08985c8b91_prof);

        
        $__internal_9ec9aaab9d66e90ab3cf7a23f2d39fce305883e6a578c358ab71cc70bee5021c->leave($__internal_9ec9aaab9d66e90ab3cf7a23f2d39fce305883e6a578c358ab71cc70bee5021c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1497a3f114a7f8e051c5e81cc3b9ec81f488fdcd799da65abcce2a9c2bff3ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1497a3f114a7f8e051c5e81cc3b9ec81f488fdcd799da65abcce2a9c2bff3ccb->enter($__internal_1497a3f114a7f8e051c5e81cc3b9ec81f488fdcd799da65abcce2a9c2bff3ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08bc9a67b21de9c1e39d8a9f1951218631f7371560b4a719455642a2dc9949a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bc9a67b21de9c1e39d8a9f1951218631f7371560b4a719455642a2dc9949a2->enter($__internal_08bc9a67b21de9c1e39d8a9f1951218631f7371560b4a719455642a2dc9949a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_08bc9a67b21de9c1e39d8a9f1951218631f7371560b4a719455642a2dc9949a2->leave($__internal_08bc9a67b21de9c1e39d8a9f1951218631f7371560b4a719455642a2dc9949a2_prof);

        
        $__internal_1497a3f114a7f8e051c5e81cc3b9ec81f488fdcd799da65abcce2a9c2bff3ccb->leave($__internal_1497a3f114a7f8e051c5e81cc3b9ec81f488fdcd799da65abcce2a9c2bff3ccb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5f01dfd5efccafe14cec63cadab60b4054e7141019bfa8cc1c813082c08b8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f01dfd5efccafe14cec63cadab60b4054e7141019bfa8cc1c813082c08b8b6->enter($__internal_e5f01dfd5efccafe14cec63cadab60b4054e7141019bfa8cc1c813082c08b8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_38e22e0c024ac8a85a4763b106a4e9b18009ae8041e8bd0ea4ceb9be29f837bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e22e0c024ac8a85a4763b106a4e9b18009ae8041e8bd0ea4ceb9be29f837bd->enter($__internal_38e22e0c024ac8a85a4763b106a4e9b18009ae8041e8bd0ea4ceb9be29f837bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_38e22e0c024ac8a85a4763b106a4e9b18009ae8041e8bd0ea4ceb9be29f837bd->leave($__internal_38e22e0c024ac8a85a4763b106a4e9b18009ae8041e8bd0ea4ceb9be29f837bd_prof);

        
        $__internal_e5f01dfd5efccafe14cec63cadab60b4054e7141019bfa8cc1c813082c08b8b6->leave($__internal_e5f01dfd5efccafe14cec63cadab60b4054e7141019bfa8cc1c813082c08b8b6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\apps\\Prixy\\app/Resources\\views/base.html.twig");
    }
}
