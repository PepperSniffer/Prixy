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
        $__internal_8f310e5c615ea774a5d94c58ccae24cf50b1efd6abcbf7ada94732fe5802fea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f310e5c615ea774a5d94c58ccae24cf50b1efd6abcbf7ada94732fe5802fea1->enter($__internal_8f310e5c615ea774a5d94c58ccae24cf50b1efd6abcbf7ada94732fe5802fea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1a31a9ebe10ac9c58ffcd63850ac585692030cb30a94b6a4b4ce8fd553358e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a31a9ebe10ac9c58ffcd63850ac585692030cb30a94b6a4b4ce8fd553358e6b->enter($__internal_1a31a9ebe10ac9c58ffcd63850ac585692030cb30a94b6a4b4ce8fd553358e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8f310e5c615ea774a5d94c58ccae24cf50b1efd6abcbf7ada94732fe5802fea1->leave($__internal_8f310e5c615ea774a5d94c58ccae24cf50b1efd6abcbf7ada94732fe5802fea1_prof);

        
        $__internal_1a31a9ebe10ac9c58ffcd63850ac585692030cb30a94b6a4b4ce8fd553358e6b->leave($__internal_1a31a9ebe10ac9c58ffcd63850ac585692030cb30a94b6a4b4ce8fd553358e6b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea34b7e27a0579e96417b744ea3821b6fcd7328c84e720525b03a3d97c440951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea34b7e27a0579e96417b744ea3821b6fcd7328c84e720525b03a3d97c440951->enter($__internal_ea34b7e27a0579e96417b744ea3821b6fcd7328c84e720525b03a3d97c440951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_307dbfb90b9e1bf157cb29dc53a3002f51b8b78912e03dcb7906cb379c0749e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307dbfb90b9e1bf157cb29dc53a3002f51b8b78912e03dcb7906cb379c0749e1->enter($__internal_307dbfb90b9e1bf157cb29dc53a3002f51b8b78912e03dcb7906cb379c0749e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_307dbfb90b9e1bf157cb29dc53a3002f51b8b78912e03dcb7906cb379c0749e1->leave($__internal_307dbfb90b9e1bf157cb29dc53a3002f51b8b78912e03dcb7906cb379c0749e1_prof);

        
        $__internal_ea34b7e27a0579e96417b744ea3821b6fcd7328c84e720525b03a3d97c440951->leave($__internal_ea34b7e27a0579e96417b744ea3821b6fcd7328c84e720525b03a3d97c440951_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4de90ab289e6268edbde05bd781de56abeb1ce802f2ae894c222021e8c80f197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de90ab289e6268edbde05bd781de56abeb1ce802f2ae894c222021e8c80f197->enter($__internal_4de90ab289e6268edbde05bd781de56abeb1ce802f2ae894c222021e8c80f197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b7e7a5fba372314a94659fe53536b3f625a3b164c9b8c07b6f795e0b4ac1936a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e7a5fba372314a94659fe53536b3f625a3b164c9b8c07b6f795e0b4ac1936a->enter($__internal_b7e7a5fba372314a94659fe53536b3f625a3b164c9b8c07b6f795e0b4ac1936a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b7e7a5fba372314a94659fe53536b3f625a3b164c9b8c07b6f795e0b4ac1936a->leave($__internal_b7e7a5fba372314a94659fe53536b3f625a3b164c9b8c07b6f795e0b4ac1936a_prof);

        
        $__internal_4de90ab289e6268edbde05bd781de56abeb1ce802f2ae894c222021e8c80f197->leave($__internal_4de90ab289e6268edbde05bd781de56abeb1ce802f2ae894c222021e8c80f197_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_091d3948909cdee1c5afea1420b038b5f1097ff2dfc4290c668b4dd4808ebd7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091d3948909cdee1c5afea1420b038b5f1097ff2dfc4290c668b4dd4808ebd7d->enter($__internal_091d3948909cdee1c5afea1420b038b5f1097ff2dfc4290c668b4dd4808ebd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07330713b28b6940e62af3b48821e98963de66d44331cccc76007e53db6c7488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07330713b28b6940e62af3b48821e98963de66d44331cccc76007e53db6c7488->enter($__internal_07330713b28b6940e62af3b48821e98963de66d44331cccc76007e53db6c7488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_07330713b28b6940e62af3b48821e98963de66d44331cccc76007e53db6c7488->leave($__internal_07330713b28b6940e62af3b48821e98963de66d44331cccc76007e53db6c7488_prof);

        
        $__internal_091d3948909cdee1c5afea1420b038b5f1097ff2dfc4290c668b4dd4808ebd7d->leave($__internal_091d3948909cdee1c5afea1420b038b5f1097ff2dfc4290c668b4dd4808ebd7d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9d2923f7377027f9ec1b618e63fc5aeaf210f00ec92a3f5d66d52bc0f09eb42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d2923f7377027f9ec1b618e63fc5aeaf210f00ec92a3f5d66d52bc0f09eb42->enter($__internal_e9d2923f7377027f9ec1b618e63fc5aeaf210f00ec92a3f5d66d52bc0f09eb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8469fd9e2ba60a34370ae39320067ecd10210db841137b1b09bb8471c2b7cbd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8469fd9e2ba60a34370ae39320067ecd10210db841137b1b09bb8471c2b7cbd7->enter($__internal_8469fd9e2ba60a34370ae39320067ecd10210db841137b1b09bb8471c2b7cbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8469fd9e2ba60a34370ae39320067ecd10210db841137b1b09bb8471c2b7cbd7->leave($__internal_8469fd9e2ba60a34370ae39320067ecd10210db841137b1b09bb8471c2b7cbd7_prof);

        
        $__internal_e9d2923f7377027f9ec1b618e63fc5aeaf210f00ec92a3f5d66d52bc0f09eb42->leave($__internal_e9d2923f7377027f9ec1b618e63fc5aeaf210f00ec92a3f5d66d52bc0f09eb42_prof);

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
