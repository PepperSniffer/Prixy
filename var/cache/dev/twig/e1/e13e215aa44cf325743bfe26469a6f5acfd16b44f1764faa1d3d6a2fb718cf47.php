<?php

/* base.html.twig */
class __TwigTemplate_eb77a4be8e55e28b56b57c9d293bd0eb0fdd005848b332d6934c421f21b337c7 extends Twig_Template
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
        $__internal_e2c250cea821771db4b0b587a9058f2d3d19447beb9200b9655f5316f3548d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c250cea821771db4b0b587a9058f2d3d19447beb9200b9655f5316f3548d45->enter($__internal_e2c250cea821771db4b0b587a9058f2d3d19447beb9200b9655f5316f3548d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cfb8666838d89e799f4acc2f2bea004bae34df163b5421e2705db2e694a7fb29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb8666838d89e799f4acc2f2bea004bae34df163b5421e2705db2e694a7fb29->enter($__internal_cfb8666838d89e799f4acc2f2bea004bae34df163b5421e2705db2e694a7fb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e2c250cea821771db4b0b587a9058f2d3d19447beb9200b9655f5316f3548d45->leave($__internal_e2c250cea821771db4b0b587a9058f2d3d19447beb9200b9655f5316f3548d45_prof);

        
        $__internal_cfb8666838d89e799f4acc2f2bea004bae34df163b5421e2705db2e694a7fb29->leave($__internal_cfb8666838d89e799f4acc2f2bea004bae34df163b5421e2705db2e694a7fb29_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_073b06a6b7434d169aee65996341de82996171f994c6470b2052b413d23ec5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_073b06a6b7434d169aee65996341de82996171f994c6470b2052b413d23ec5eb->enter($__internal_073b06a6b7434d169aee65996341de82996171f994c6470b2052b413d23ec5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f83472ec335f6d0319b5dd19f27f0704d808fec9a9cb34e87e3e1528d607a9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83472ec335f6d0319b5dd19f27f0704d808fec9a9cb34e87e3e1528d607a9d6->enter($__internal_f83472ec335f6d0319b5dd19f27f0704d808fec9a9cb34e87e3e1528d607a9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f83472ec335f6d0319b5dd19f27f0704d808fec9a9cb34e87e3e1528d607a9d6->leave($__internal_f83472ec335f6d0319b5dd19f27f0704d808fec9a9cb34e87e3e1528d607a9d6_prof);

        
        $__internal_073b06a6b7434d169aee65996341de82996171f994c6470b2052b413d23ec5eb->leave($__internal_073b06a6b7434d169aee65996341de82996171f994c6470b2052b413d23ec5eb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac41997eca62d023863e774d1417c0cd4c406ed2e7d46dc74847125a196cc08c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac41997eca62d023863e774d1417c0cd4c406ed2e7d46dc74847125a196cc08c->enter($__internal_ac41997eca62d023863e774d1417c0cd4c406ed2e7d46dc74847125a196cc08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7b09d347ad6789eeaffc80e4368180c420ec0d7e9dab1514abacfb720d36334e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b09d347ad6789eeaffc80e4368180c420ec0d7e9dab1514abacfb720d36334e->enter($__internal_7b09d347ad6789eeaffc80e4368180c420ec0d7e9dab1514abacfb720d36334e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7b09d347ad6789eeaffc80e4368180c420ec0d7e9dab1514abacfb720d36334e->leave($__internal_7b09d347ad6789eeaffc80e4368180c420ec0d7e9dab1514abacfb720d36334e_prof);

        
        $__internal_ac41997eca62d023863e774d1417c0cd4c406ed2e7d46dc74847125a196cc08c->leave($__internal_ac41997eca62d023863e774d1417c0cd4c406ed2e7d46dc74847125a196cc08c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_af5408f22f2c1ddeef010b8b444147c968276239db1867c5f18c8cd1077f74f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5408f22f2c1ddeef010b8b444147c968276239db1867c5f18c8cd1077f74f0->enter($__internal_af5408f22f2c1ddeef010b8b444147c968276239db1867c5f18c8cd1077f74f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99e0ee86d3c6fed26af974a24d600a2a237b1dbaa3a96adce7494050c5ac96db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e0ee86d3c6fed26af974a24d600a2a237b1dbaa3a96adce7494050c5ac96db->enter($__internal_99e0ee86d3c6fed26af974a24d600a2a237b1dbaa3a96adce7494050c5ac96db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_99e0ee86d3c6fed26af974a24d600a2a237b1dbaa3a96adce7494050c5ac96db->leave($__internal_99e0ee86d3c6fed26af974a24d600a2a237b1dbaa3a96adce7494050c5ac96db_prof);

        
        $__internal_af5408f22f2c1ddeef010b8b444147c968276239db1867c5f18c8cd1077f74f0->leave($__internal_af5408f22f2c1ddeef010b8b444147c968276239db1867c5f18c8cd1077f74f0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97827d8c91b889af60e9cea25fe311298bee5f6949fe58c4c116539c9424a372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97827d8c91b889af60e9cea25fe311298bee5f6949fe58c4c116539c9424a372->enter($__internal_97827d8c91b889af60e9cea25fe311298bee5f6949fe58c4c116539c9424a372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a3c37feb87c81f772d2ca0f56176839263834d978a00d4728a23602d0916e6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c37feb87c81f772d2ca0f56176839263834d978a00d4728a23602d0916e6fc->enter($__internal_a3c37feb87c81f772d2ca0f56176839263834d978a00d4728a23602d0916e6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a3c37feb87c81f772d2ca0f56176839263834d978a00d4728a23602d0916e6fc->leave($__internal_a3c37feb87c81f772d2ca0f56176839263834d978a00d4728a23602d0916e6fc_prof);

        
        $__internal_97827d8c91b889af60e9cea25fe311298bee5f6949fe58c4c116539c9424a372->leave($__internal_97827d8c91b889af60e9cea25fe311298bee5f6949fe58c4c116539c9424a372_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp\\apps\\Prixy\\app\\Resources\\views\\base.html.twig");
    }
}
