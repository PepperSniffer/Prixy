<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_03e308b38c70ef4fa843d25be69ad83370873a005c207772dfa412e03cd79b7d extends Twig_Template
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
        $__internal_9a2c8f364c8553e98b7522322ad62fb0688494812bae08fccdc570d08a24eac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a2c8f364c8553e98b7522322ad62fb0688494812bae08fccdc570d08a24eac9->enter($__internal_9a2c8f364c8553e98b7522322ad62fb0688494812bae08fccdc570d08a24eac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ff68d518bdafd23b97eb773a435c7ad31d3e8f648ef718032378a33a9a03ebef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff68d518bdafd23b97eb773a435c7ad31d3e8f648ef718032378a33a9a03ebef->enter($__internal_ff68d518bdafd23b97eb773a435c7ad31d3e8f648ef718032378a33a9a03ebef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a2c8f364c8553e98b7522322ad62fb0688494812bae08fccdc570d08a24eac9->leave($__internal_9a2c8f364c8553e98b7522322ad62fb0688494812bae08fccdc570d08a24eac9_prof);

        
        $__internal_ff68d518bdafd23b97eb773a435c7ad31d3e8f648ef718032378a33a9a03ebef->leave($__internal_ff68d518bdafd23b97eb773a435c7ad31d3e8f648ef718032378a33a9a03ebef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f74ef34a27aca244f92c880318f751349b73ec3b677ccba3b0a460085190e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f74ef34a27aca244f92c880318f751349b73ec3b677ccba3b0a460085190e50->enter($__internal_3f74ef34a27aca244f92c880318f751349b73ec3b677ccba3b0a460085190e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6b5a540dad58eed56abfb992bf71f7c49a11b92f7ad01a70418035bcca3c73e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5a540dad58eed56abfb992bf71f7c49a11b92f7ad01a70418035bcca3c73e4->enter($__internal_6b5a540dad58eed56abfb992bf71f7c49a11b92f7ad01a70418035bcca3c73e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6b5a540dad58eed56abfb992bf71f7c49a11b92f7ad01a70418035bcca3c73e4->leave($__internal_6b5a540dad58eed56abfb992bf71f7c49a11b92f7ad01a70418035bcca3c73e4_prof);

        
        $__internal_3f74ef34a27aca244f92c880318f751349b73ec3b677ccba3b0a460085190e50->leave($__internal_3f74ef34a27aca244f92c880318f751349b73ec3b677ccba3b0a460085190e50_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_192154caebc587b79b982a6a844a71db7f406d9a5240da91e607681bd95e706b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192154caebc587b79b982a6a844a71db7f406d9a5240da91e607681bd95e706b->enter($__internal_192154caebc587b79b982a6a844a71db7f406d9a5240da91e607681bd95e706b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b818748bf205eae2e50da49b10545a2d1e22e5800deabd26b40b19964f50c634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b818748bf205eae2e50da49b10545a2d1e22e5800deabd26b40b19964f50c634->enter($__internal_b818748bf205eae2e50da49b10545a2d1e22e5800deabd26b40b19964f50c634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b818748bf205eae2e50da49b10545a2d1e22e5800deabd26b40b19964f50c634->leave($__internal_b818748bf205eae2e50da49b10545a2d1e22e5800deabd26b40b19964f50c634_prof);

        
        $__internal_192154caebc587b79b982a6a844a71db7f406d9a5240da91e607681bd95e706b->leave($__internal_192154caebc587b79b982a6a844a71db7f406d9a5240da91e607681bd95e706b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f64e33d28dced9abfac5d4e7ee74e1dfb5ee9d02389402111ad0f5880fd883f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64e33d28dced9abfac5d4e7ee74e1dfb5ee9d02389402111ad0f5880fd883f4->enter($__internal_f64e33d28dced9abfac5d4e7ee74e1dfb5ee9d02389402111ad0f5880fd883f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a777c04ecfa1323cdb157aab8be505037c31782b45e256468d982a9962eec175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a777c04ecfa1323cdb157aab8be505037c31782b45e256468d982a9962eec175->enter($__internal_a777c04ecfa1323cdb157aab8be505037c31782b45e256468d982a9962eec175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a777c04ecfa1323cdb157aab8be505037c31782b45e256468d982a9962eec175->leave($__internal_a777c04ecfa1323cdb157aab8be505037c31782b45e256468d982a9962eec175_prof);

        
        $__internal_f64e33d28dced9abfac5d4e7ee74e1dfb5ee9d02389402111ad0f5880fd883f4->leave($__internal_f64e33d28dced9abfac5d4e7ee74e1dfb5ee9d02389402111ad0f5880fd883f4_prof);

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
