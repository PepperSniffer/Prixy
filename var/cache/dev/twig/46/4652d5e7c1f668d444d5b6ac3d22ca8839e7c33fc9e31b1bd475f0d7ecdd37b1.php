<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a20ee0b79030f7401af43c27ec1da3af057ea5f8a7def5675c1de0b4cdb42bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_c9a25a7db76e94fe22ca2d434e369aad199f987b561e86914190ed061ef67ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a25a7db76e94fe22ca2d434e369aad199f987b561e86914190ed061ef67ef4->enter($__internal_c9a25a7db76e94fe22ca2d434e369aad199f987b561e86914190ed061ef67ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_443e933948cf14becf0ed3b7be6dbf06c094bf54b98b646bda9004eabb07bacd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443e933948cf14becf0ed3b7be6dbf06c094bf54b98b646bda9004eabb07bacd->enter($__internal_443e933948cf14becf0ed3b7be6dbf06c094bf54b98b646bda9004eabb07bacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9a25a7db76e94fe22ca2d434e369aad199f987b561e86914190ed061ef67ef4->leave($__internal_c9a25a7db76e94fe22ca2d434e369aad199f987b561e86914190ed061ef67ef4_prof);

        
        $__internal_443e933948cf14becf0ed3b7be6dbf06c094bf54b98b646bda9004eabb07bacd->leave($__internal_443e933948cf14becf0ed3b7be6dbf06c094bf54b98b646bda9004eabb07bacd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d055c9618cc930ddecc50f37f71197b03798455ed4fbba8d9e17f450512eb114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d055c9618cc930ddecc50f37f71197b03798455ed4fbba8d9e17f450512eb114->enter($__internal_d055c9618cc930ddecc50f37f71197b03798455ed4fbba8d9e17f450512eb114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_917f84fc7fbb16b93725d29bcdb9e1951300d02203bab00b886d11c5bc1bcc2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917f84fc7fbb16b93725d29bcdb9e1951300d02203bab00b886d11c5bc1bcc2f->enter($__internal_917f84fc7fbb16b93725d29bcdb9e1951300d02203bab00b886d11c5bc1bcc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_917f84fc7fbb16b93725d29bcdb9e1951300d02203bab00b886d11c5bc1bcc2f->leave($__internal_917f84fc7fbb16b93725d29bcdb9e1951300d02203bab00b886d11c5bc1bcc2f_prof);

        
        $__internal_d055c9618cc930ddecc50f37f71197b03798455ed4fbba8d9e17f450512eb114->leave($__internal_d055c9618cc930ddecc50f37f71197b03798455ed4fbba8d9e17f450512eb114_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0ed713d387f5418e4e701bd3d9ed7fc02bdfca22db15f07dfa0ce8ba6d7598cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed713d387f5418e4e701bd3d9ed7fc02bdfca22db15f07dfa0ce8ba6d7598cd->enter($__internal_0ed713d387f5418e4e701bd3d9ed7fc02bdfca22db15f07dfa0ce8ba6d7598cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e082debe5807e908060da38829157519a8f720f399ba18051e90aba0b1d4cffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e082debe5807e908060da38829157519a8f720f399ba18051e90aba0b1d4cffb->enter($__internal_e082debe5807e908060da38829157519a8f720f399ba18051e90aba0b1d4cffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e082debe5807e908060da38829157519a8f720f399ba18051e90aba0b1d4cffb->leave($__internal_e082debe5807e908060da38829157519a8f720f399ba18051e90aba0b1d4cffb_prof);

        
        $__internal_0ed713d387f5418e4e701bd3d9ed7fc02bdfca22db15f07dfa0ce8ba6d7598cd->leave($__internal_0ed713d387f5418e4e701bd3d9ed7fc02bdfca22db15f07dfa0ce8ba6d7598cd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1adc213d8a153720d02cfb10ff2d5feae3220ec45fcd04c43eded61f0e07dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1adc213d8a153720d02cfb10ff2d5feae3220ec45fcd04c43eded61f0e07dbd->enter($__internal_a1adc213d8a153720d02cfb10ff2d5feae3220ec45fcd04c43eded61f0e07dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_af9393c11b08a5096d18851ea9fb2d5426d2d8f74f035781f1fc8cdb724e202e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9393c11b08a5096d18851ea9fb2d5426d2d8f74f035781f1fc8cdb724e202e->enter($__internal_af9393c11b08a5096d18851ea9fb2d5426d2d8f74f035781f1fc8cdb724e202e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_af9393c11b08a5096d18851ea9fb2d5426d2d8f74f035781f1fc8cdb724e202e->leave($__internal_af9393c11b08a5096d18851ea9fb2d5426d2d8f74f035781f1fc8cdb724e202e_prof);

        
        $__internal_a1adc213d8a153720d02cfb10ff2d5feae3220ec45fcd04c43eded61f0e07dbd->leave($__internal_a1adc213d8a153720d02cfb10ff2d5feae3220ec45fcd04c43eded61f0e07dbd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
