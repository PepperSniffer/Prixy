<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_389eed840a90d0331324f49d9f48ae5d1dddc0d7fa3afd91b90700b9ed7ed4e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_f868fb0e15eb2bd012c095e489ccc97ae4e573b7f25830c1cabb9920322374c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f868fb0e15eb2bd012c095e489ccc97ae4e573b7f25830c1cabb9920322374c3->enter($__internal_f868fb0e15eb2bd012c095e489ccc97ae4e573b7f25830c1cabb9920322374c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0e324514391e209b99d22aa139e4c61c28256aeded9368b202a4a34b2bde0d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e324514391e209b99d22aa139e4c61c28256aeded9368b202a4a34b2bde0d93->enter($__internal_0e324514391e209b99d22aa139e4c61c28256aeded9368b202a4a34b2bde0d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f868fb0e15eb2bd012c095e489ccc97ae4e573b7f25830c1cabb9920322374c3->leave($__internal_f868fb0e15eb2bd012c095e489ccc97ae4e573b7f25830c1cabb9920322374c3_prof);

        
        $__internal_0e324514391e209b99d22aa139e4c61c28256aeded9368b202a4a34b2bde0d93->leave($__internal_0e324514391e209b99d22aa139e4c61c28256aeded9368b202a4a34b2bde0d93_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0844402d3771c3d8786997cb74899a1f865ffee5410c6b7f67e106de44092bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0844402d3771c3d8786997cb74899a1f865ffee5410c6b7f67e106de44092bf->enter($__internal_c0844402d3771c3d8786997cb74899a1f865ffee5410c6b7f67e106de44092bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f2e08f1d3995b20ca49f70437aa2d967ad10110cdf0d91b04ba61096aa040ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2e08f1d3995b20ca49f70437aa2d967ad10110cdf0d91b04ba61096aa040ee->enter($__internal_6f2e08f1d3995b20ca49f70437aa2d967ad10110cdf0d91b04ba61096aa040ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6f2e08f1d3995b20ca49f70437aa2d967ad10110cdf0d91b04ba61096aa040ee->leave($__internal_6f2e08f1d3995b20ca49f70437aa2d967ad10110cdf0d91b04ba61096aa040ee_prof);

        
        $__internal_c0844402d3771c3d8786997cb74899a1f865ffee5410c6b7f67e106de44092bf->leave($__internal_c0844402d3771c3d8786997cb74899a1f865ffee5410c6b7f67e106de44092bf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9752800bf5d12f32cd63d4f79a33529e2dc67d293869f1986edd096da4eb9e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9752800bf5d12f32cd63d4f79a33529e2dc67d293869f1986edd096da4eb9e6->enter($__internal_a9752800bf5d12f32cd63d4f79a33529e2dc67d293869f1986edd096da4eb9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85ffc943eb0e25d4b45dd8cb87efc55e28f2f11663db083b60b226691ca84b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ffc943eb0e25d4b45dd8cb87efc55e28f2f11663db083b60b226691ca84b4a->enter($__internal_85ffc943eb0e25d4b45dd8cb87efc55e28f2f11663db083b60b226691ca84b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_85ffc943eb0e25d4b45dd8cb87efc55e28f2f11663db083b60b226691ca84b4a->leave($__internal_85ffc943eb0e25d4b45dd8cb87efc55e28f2f11663db083b60b226691ca84b4a_prof);

        
        $__internal_a9752800bf5d12f32cd63d4f79a33529e2dc67d293869f1986edd096da4eb9e6->leave($__internal_a9752800bf5d12f32cd63d4f79a33529e2dc67d293869f1986edd096da4eb9e6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
