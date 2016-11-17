<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_78bfd699c36777a3e7f201dd504ef8b2e514cb976913d71ecb9b21527a4d4863 extends Twig_Template
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
        $__internal_f0bf0f91098060c93f5d7153c2a90061de7335fae836693350a0d7095442c83e = $this->env->getExtension("native_profiler");
        $__internal_f0bf0f91098060c93f5d7153c2a90061de7335fae836693350a0d7095442c83e->enter($__internal_f0bf0f91098060c93f5d7153c2a90061de7335fae836693350a0d7095442c83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0bf0f91098060c93f5d7153c2a90061de7335fae836693350a0d7095442c83e->leave($__internal_f0bf0f91098060c93f5d7153c2a90061de7335fae836693350a0d7095442c83e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd61177bfabbe5f6d9cd1cced12044606888270ad11ccd5e25e5b6b73e971f2b = $this->env->getExtension("native_profiler");
        $__internal_dd61177bfabbe5f6d9cd1cced12044606888270ad11ccd5e25e5b6b73e971f2b->enter($__internal_dd61177bfabbe5f6d9cd1cced12044606888270ad11ccd5e25e5b6b73e971f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd61177bfabbe5f6d9cd1cced12044606888270ad11ccd5e25e5b6b73e971f2b->leave($__internal_dd61177bfabbe5f6d9cd1cced12044606888270ad11ccd5e25e5b6b73e971f2b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24fb8fbadc769ba251531da956ea9bb76091bef5e4f800c18b87ab7136c62af9 = $this->env->getExtension("native_profiler");
        $__internal_24fb8fbadc769ba251531da956ea9bb76091bef5e4f800c18b87ab7136c62af9->enter($__internal_24fb8fbadc769ba251531da956ea9bb76091bef5e4f800c18b87ab7136c62af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_24fb8fbadc769ba251531da956ea9bb76091bef5e4f800c18b87ab7136c62af9->leave($__internal_24fb8fbadc769ba251531da956ea9bb76091bef5e4f800c18b87ab7136c62af9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_53a64f32b80658c9326e3f798fae17a93f16b964e4745862b5985ee5b568e2eb = $this->env->getExtension("native_profiler");
        $__internal_53a64f32b80658c9326e3f798fae17a93f16b964e4745862b5985ee5b568e2eb->enter($__internal_53a64f32b80658c9326e3f798fae17a93f16b964e4745862b5985ee5b568e2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_53a64f32b80658c9326e3f798fae17a93f16b964e4745862b5985ee5b568e2eb->leave($__internal_53a64f32b80658c9326e3f798fae17a93f16b964e4745862b5985ee5b568e2eb_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
