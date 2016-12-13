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
        $__internal_cdb5a545fe74e4864a38b945b7b52ea16371f76d2a7e1132bb584c44392e08cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb5a545fe74e4864a38b945b7b52ea16371f76d2a7e1132bb584c44392e08cb->enter($__internal_cdb5a545fe74e4864a38b945b7b52ea16371f76d2a7e1132bb584c44392e08cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_3743ecebfe76bd2a29514e041b9b3d47faa892efee159ac61ea6fe81a1d16a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3743ecebfe76bd2a29514e041b9b3d47faa892efee159ac61ea6fe81a1d16a04->enter($__internal_3743ecebfe76bd2a29514e041b9b3d47faa892efee159ac61ea6fe81a1d16a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdb5a545fe74e4864a38b945b7b52ea16371f76d2a7e1132bb584c44392e08cb->leave($__internal_cdb5a545fe74e4864a38b945b7b52ea16371f76d2a7e1132bb584c44392e08cb_prof);

        
        $__internal_3743ecebfe76bd2a29514e041b9b3d47faa892efee159ac61ea6fe81a1d16a04->leave($__internal_3743ecebfe76bd2a29514e041b9b3d47faa892efee159ac61ea6fe81a1d16a04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_34353985ca0e43ae7a84fafabba213b6dca663106f55d0a2bb70e8363d3c539f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34353985ca0e43ae7a84fafabba213b6dca663106f55d0a2bb70e8363d3c539f->enter($__internal_34353985ca0e43ae7a84fafabba213b6dca663106f55d0a2bb70e8363d3c539f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0d8a8a78037151d6cda6041e01d380a517900371a329505065e95a64893ce36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d8a8a78037151d6cda6041e01d380a517900371a329505065e95a64893ce36->enter($__internal_b0d8a8a78037151d6cda6041e01d380a517900371a329505065e95a64893ce36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b0d8a8a78037151d6cda6041e01d380a517900371a329505065e95a64893ce36->leave($__internal_b0d8a8a78037151d6cda6041e01d380a517900371a329505065e95a64893ce36_prof);

        
        $__internal_34353985ca0e43ae7a84fafabba213b6dca663106f55d0a2bb70e8363d3c539f->leave($__internal_34353985ca0e43ae7a84fafabba213b6dca663106f55d0a2bb70e8363d3c539f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a7178674efdbdf317f7ecc91405624e753e0dbbbc74a9aaa495d99b48c582cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7178674efdbdf317f7ecc91405624e753e0dbbbc74a9aaa495d99b48c582cc->enter($__internal_1a7178674efdbdf317f7ecc91405624e753e0dbbbc74a9aaa495d99b48c582cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5bc4fb15e8e6f53580fb7d253d73d28b29db0dd40873f720775cd357ad2dbce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc4fb15e8e6f53580fb7d253d73d28b29db0dd40873f720775cd357ad2dbce9->enter($__internal_5bc4fb15e8e6f53580fb7d253d73d28b29db0dd40873f720775cd357ad2dbce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5bc4fb15e8e6f53580fb7d253d73d28b29db0dd40873f720775cd357ad2dbce9->leave($__internal_5bc4fb15e8e6f53580fb7d253d73d28b29db0dd40873f720775cd357ad2dbce9_prof);

        
        $__internal_1a7178674efdbdf317f7ecc91405624e753e0dbbbc74a9aaa495d99b48c582cc->leave($__internal_1a7178674efdbdf317f7ecc91405624e753e0dbbbc74a9aaa495d99b48c582cc_prof);

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
