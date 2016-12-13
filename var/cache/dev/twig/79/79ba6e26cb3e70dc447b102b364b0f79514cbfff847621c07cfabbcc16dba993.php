<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6634685ffb0aa1f1edc5c12348b81b6f206d448d580893099233eb83f9db0da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_be8d848d6346daf97ee83e5072ab15bf17e992aa83ff13cf14b38ffea719c805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be8d848d6346daf97ee83e5072ab15bf17e992aa83ff13cf14b38ffea719c805->enter($__internal_be8d848d6346daf97ee83e5072ab15bf17e992aa83ff13cf14b38ffea719c805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_739055f47f2e23d6d2b9692905336d3839d1be555a3a8044de676f5c407fc8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739055f47f2e23d6d2b9692905336d3839d1be555a3a8044de676f5c407fc8fe->enter($__internal_739055f47f2e23d6d2b9692905336d3839d1be555a3a8044de676f5c407fc8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be8d848d6346daf97ee83e5072ab15bf17e992aa83ff13cf14b38ffea719c805->leave($__internal_be8d848d6346daf97ee83e5072ab15bf17e992aa83ff13cf14b38ffea719c805_prof);

        
        $__internal_739055f47f2e23d6d2b9692905336d3839d1be555a3a8044de676f5c407fc8fe->leave($__internal_739055f47f2e23d6d2b9692905336d3839d1be555a3a8044de676f5c407fc8fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed13455d220ea8d17860f29a669bceae93ccce01253dc13f4474336cda6639fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed13455d220ea8d17860f29a669bceae93ccce01253dc13f4474336cda6639fb->enter($__internal_ed13455d220ea8d17860f29a669bceae93ccce01253dc13f4474336cda6639fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95cd7d35e998afe672c4f99719f922cc1e3686276da9597a3da184a10e5c6868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cd7d35e998afe672c4f99719f922cc1e3686276da9597a3da184a10e5c6868->enter($__internal_95cd7d35e998afe672c4f99719f922cc1e3686276da9597a3da184a10e5c6868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_95cd7d35e998afe672c4f99719f922cc1e3686276da9597a3da184a10e5c6868->leave($__internal_95cd7d35e998afe672c4f99719f922cc1e3686276da9597a3da184a10e5c6868_prof);

        
        $__internal_ed13455d220ea8d17860f29a669bceae93ccce01253dc13f4474336cda6639fb->leave($__internal_ed13455d220ea8d17860f29a669bceae93ccce01253dc13f4474336cda6639fb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c5787d3317bc8e0665c6d300ba72c38e55e848738b74a2ca02e97751417110c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5787d3317bc8e0665c6d300ba72c38e55e848738b74a2ca02e97751417110c->enter($__internal_7c5787d3317bc8e0665c6d300ba72c38e55e848738b74a2ca02e97751417110c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bd3b194c902fd3a1b32d6869f6948fdb4c30843f01b42246778f45d0052b1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd3b194c902fd3a1b32d6869f6948fdb4c30843f01b42246778f45d0052b1fc->enter($__internal_2bd3b194c902fd3a1b32d6869f6948fdb4c30843f01b42246778f45d0052b1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2bd3b194c902fd3a1b32d6869f6948fdb4c30843f01b42246778f45d0052b1fc->leave($__internal_2bd3b194c902fd3a1b32d6869f6948fdb4c30843f01b42246778f45d0052b1fc_prof);

        
        $__internal_7c5787d3317bc8e0665c6d300ba72c38e55e848738b74a2ca02e97751417110c->leave($__internal_7c5787d3317bc8e0665c6d300ba72c38e55e848738b74a2ca02e97751417110c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
