<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8a6130832a620e1835cca12a6267eccddb87d4bd7ffedd4452a7336860f72dcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e67097821629c3349350ec8bd60c39d0fcb729a65db69839fdeb5aa314e82792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67097821629c3349350ec8bd60c39d0fcb729a65db69839fdeb5aa314e82792->enter($__internal_e67097821629c3349350ec8bd60c39d0fcb729a65db69839fdeb5aa314e82792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b6ae4e2ac4730841589baa1b40d3c0493b582b7471de8e1dcd452258cc6ff4f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ae4e2ac4730841589baa1b40d3c0493b582b7471de8e1dcd452258cc6ff4f3->enter($__internal_b6ae4e2ac4730841589baa1b40d3c0493b582b7471de8e1dcd452258cc6ff4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e67097821629c3349350ec8bd60c39d0fcb729a65db69839fdeb5aa314e82792->leave($__internal_e67097821629c3349350ec8bd60c39d0fcb729a65db69839fdeb5aa314e82792_prof);

        
        $__internal_b6ae4e2ac4730841589baa1b40d3c0493b582b7471de8e1dcd452258cc6ff4f3->leave($__internal_b6ae4e2ac4730841589baa1b40d3c0493b582b7471de8e1dcd452258cc6ff4f3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c203889be215767e36ebf6ab857084c9a198592a1ef883445134976e5932e58a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c203889be215767e36ebf6ab857084c9a198592a1ef883445134976e5932e58a->enter($__internal_c203889be215767e36ebf6ab857084c9a198592a1ef883445134976e5932e58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_588b2c063b9155b6c574d373ad2952ae47abc13d2beeaf58458bff2445446ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588b2c063b9155b6c574d373ad2952ae47abc13d2beeaf58458bff2445446ef9->enter($__internal_588b2c063b9155b6c574d373ad2952ae47abc13d2beeaf58458bff2445446ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_588b2c063b9155b6c574d373ad2952ae47abc13d2beeaf58458bff2445446ef9->leave($__internal_588b2c063b9155b6c574d373ad2952ae47abc13d2beeaf58458bff2445446ef9_prof);

        
        $__internal_c203889be215767e36ebf6ab857084c9a198592a1ef883445134976e5932e58a->leave($__internal_c203889be215767e36ebf6ab857084c9a198592a1ef883445134976e5932e58a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22e96bd9ed8ca8d7a33f4ad847d4f796c47f6f9064faae9cee18b8bc02ab5077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e96bd9ed8ca8d7a33f4ad847d4f796c47f6f9064faae9cee18b8bc02ab5077->enter($__internal_22e96bd9ed8ca8d7a33f4ad847d4f796c47f6f9064faae9cee18b8bc02ab5077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a9209646af70326d131e1febc9eaed1c0e8d244ad3038f5161cd8aabf7904ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9209646af70326d131e1febc9eaed1c0e8d244ad3038f5161cd8aabf7904ec3->enter($__internal_a9209646af70326d131e1febc9eaed1c0e8d244ad3038f5161cd8aabf7904ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a9209646af70326d131e1febc9eaed1c0e8d244ad3038f5161cd8aabf7904ec3->leave($__internal_a9209646af70326d131e1febc9eaed1c0e8d244ad3038f5161cd8aabf7904ec3_prof);

        
        $__internal_22e96bd9ed8ca8d7a33f4ad847d4f796c47f6f9064faae9cee18b8bc02ab5077->leave($__internal_22e96bd9ed8ca8d7a33f4ad847d4f796c47f6f9064faae9cee18b8bc02ab5077_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f117b9cddfc1a4f4369a75ec31d3f32fe6f0062a7bbf8c54c8e9dc7c2d8785bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f117b9cddfc1a4f4369a75ec31d3f32fe6f0062a7bbf8c54c8e9dc7c2d8785bb->enter($__internal_f117b9cddfc1a4f4369a75ec31d3f32fe6f0062a7bbf8c54c8e9dc7c2d8785bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e7fad3505b92dd9c663a4f39531605f200ca0a3b06498e56c36aaa97f68033e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fad3505b92dd9c663a4f39531605f200ca0a3b06498e56c36aaa97f68033e5->enter($__internal_e7fad3505b92dd9c663a4f39531605f200ca0a3b06498e56c36aaa97f68033e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e7fad3505b92dd9c663a4f39531605f200ca0a3b06498e56c36aaa97f68033e5->leave($__internal_e7fad3505b92dd9c663a4f39531605f200ca0a3b06498e56c36aaa97f68033e5_prof);

        
        $__internal_f117b9cddfc1a4f4369a75ec31d3f32fe6f0062a7bbf8c54c8e9dc7c2d8785bb->leave($__internal_f117b9cddfc1a4f4369a75ec31d3f32fe6f0062a7bbf8c54c8e9dc7c2d8785bb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
