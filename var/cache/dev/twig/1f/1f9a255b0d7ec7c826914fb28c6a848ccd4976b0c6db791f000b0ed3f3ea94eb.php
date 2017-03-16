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
        $__internal_4261dc1848ecd55876b188192e5405c3b1bb5e2c3e1663d30a0a8f4317c3dd0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4261dc1848ecd55876b188192e5405c3b1bb5e2c3e1663d30a0a8f4317c3dd0f->enter($__internal_4261dc1848ecd55876b188192e5405c3b1bb5e2c3e1663d30a0a8f4317c3dd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_aebd414d93cd848e98f551244b2d755ccda4ae6d85624c102b85d0662a6cf520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebd414d93cd848e98f551244b2d755ccda4ae6d85624c102b85d0662a6cf520->enter($__internal_aebd414d93cd848e98f551244b2d755ccda4ae6d85624c102b85d0662a6cf520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4261dc1848ecd55876b188192e5405c3b1bb5e2c3e1663d30a0a8f4317c3dd0f->leave($__internal_4261dc1848ecd55876b188192e5405c3b1bb5e2c3e1663d30a0a8f4317c3dd0f_prof);

        
        $__internal_aebd414d93cd848e98f551244b2d755ccda4ae6d85624c102b85d0662a6cf520->leave($__internal_aebd414d93cd848e98f551244b2d755ccda4ae6d85624c102b85d0662a6cf520_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bacb8254be6c7c2ba1127750d37d00a9ede79d7fec2b43568cab2e4f8d26dada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bacb8254be6c7c2ba1127750d37d00a9ede79d7fec2b43568cab2e4f8d26dada->enter($__internal_bacb8254be6c7c2ba1127750d37d00a9ede79d7fec2b43568cab2e4f8d26dada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e6e4fd031b56ec94bd87b5893a07b070b5208cf47f271b434cd7905ee53196c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e4fd031b56ec94bd87b5893a07b070b5208cf47f271b434cd7905ee53196c6->enter($__internal_e6e4fd031b56ec94bd87b5893a07b070b5208cf47f271b434cd7905ee53196c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e6e4fd031b56ec94bd87b5893a07b070b5208cf47f271b434cd7905ee53196c6->leave($__internal_e6e4fd031b56ec94bd87b5893a07b070b5208cf47f271b434cd7905ee53196c6_prof);

        
        $__internal_bacb8254be6c7c2ba1127750d37d00a9ede79d7fec2b43568cab2e4f8d26dada->leave($__internal_bacb8254be6c7c2ba1127750d37d00a9ede79d7fec2b43568cab2e4f8d26dada_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_79bee1eb00dc655873b27de2117c9d2cc300e732fbc52f11a90a47127fa2af77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79bee1eb00dc655873b27de2117c9d2cc300e732fbc52f11a90a47127fa2af77->enter($__internal_79bee1eb00dc655873b27de2117c9d2cc300e732fbc52f11a90a47127fa2af77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eeebff172cfa2e2cbe4ab690f506503d07fb2b2b45622de5ccf2e872e393b33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeebff172cfa2e2cbe4ab690f506503d07fb2b2b45622de5ccf2e872e393b33b->enter($__internal_eeebff172cfa2e2cbe4ab690f506503d07fb2b2b45622de5ccf2e872e393b33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eeebff172cfa2e2cbe4ab690f506503d07fb2b2b45622de5ccf2e872e393b33b->leave($__internal_eeebff172cfa2e2cbe4ab690f506503d07fb2b2b45622de5ccf2e872e393b33b_prof);

        
        $__internal_79bee1eb00dc655873b27de2117c9d2cc300e732fbc52f11a90a47127fa2af77->leave($__internal_79bee1eb00dc655873b27de2117c9d2cc300e732fbc52f11a90a47127fa2af77_prof);

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
