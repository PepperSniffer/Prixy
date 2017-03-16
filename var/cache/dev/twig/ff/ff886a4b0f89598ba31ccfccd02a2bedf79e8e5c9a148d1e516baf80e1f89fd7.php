<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7004d5cbd4fe4132e529f4bfc0100f49e9af80f232f2e2e258dfc006b5857144 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8bd2d00e474c01b03d3eb319d46bd91b6128c788e9638718135af0c5f2acb4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8bd2d00e474c01b03d3eb319d46bd91b6128c788e9638718135af0c5f2acb4b->enter($__internal_e8bd2d00e474c01b03d3eb319d46bd91b6128c788e9638718135af0c5f2acb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b8ac2592cac27f2673a534fbfc9d927f340f3d36c541f2e421128f46fe867dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ac2592cac27f2673a534fbfc9d927f340f3d36c541f2e421128f46fe867dfb->enter($__internal_b8ac2592cac27f2673a534fbfc9d927f340f3d36c541f2e421128f46fe867dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8bd2d00e474c01b03d3eb319d46bd91b6128c788e9638718135af0c5f2acb4b->leave($__internal_e8bd2d00e474c01b03d3eb319d46bd91b6128c788e9638718135af0c5f2acb4b_prof);

        
        $__internal_b8ac2592cac27f2673a534fbfc9d927f340f3d36c541f2e421128f46fe867dfb->leave($__internal_b8ac2592cac27f2673a534fbfc9d927f340f3d36c541f2e421128f46fe867dfb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8561d1debbb51abf793732d0c627d7f89d5eb475c5156f8aa4abbf342ba961fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8561d1debbb51abf793732d0c627d7f89d5eb475c5156f8aa4abbf342ba961fc->enter($__internal_8561d1debbb51abf793732d0c627d7f89d5eb475c5156f8aa4abbf342ba961fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2ebe47f70cee1cf96bb6ce25532fe1c4c470e2d63bbe3394676a8dd40f87e68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebe47f70cee1cf96bb6ce25532fe1c4c470e2d63bbe3394676a8dd40f87e68e->enter($__internal_2ebe47f70cee1cf96bb6ce25532fe1c4c470e2d63bbe3394676a8dd40f87e68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2ebe47f70cee1cf96bb6ce25532fe1c4c470e2d63bbe3394676a8dd40f87e68e->leave($__internal_2ebe47f70cee1cf96bb6ce25532fe1c4c470e2d63bbe3394676a8dd40f87e68e_prof);

        
        $__internal_8561d1debbb51abf793732d0c627d7f89d5eb475c5156f8aa4abbf342ba961fc->leave($__internal_8561d1debbb51abf793732d0c627d7f89d5eb475c5156f8aa4abbf342ba961fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
