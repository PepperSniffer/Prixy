<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_80d0cd3bb4581bf6927ef20ab1861624ce67660043ee29eefd671d7e70022ea3 extends Twig_Template
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
        $__internal_faa0ce0f7739e15902236ce7a044486c7fa535b4e94a086d7cab13adef221b52 = $this->env->getExtension("native_profiler");
        $__internal_faa0ce0f7739e15902236ce7a044486c7fa535b4e94a086d7cab13adef221b52->enter($__internal_faa0ce0f7739e15902236ce7a044486c7fa535b4e94a086d7cab13adef221b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faa0ce0f7739e15902236ce7a044486c7fa535b4e94a086d7cab13adef221b52->leave($__internal_faa0ce0f7739e15902236ce7a044486c7fa535b4e94a086d7cab13adef221b52_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ebb55c0af8273d44db5849e1a9d6b8bb2b549ca1bd05719d9ee8b62fc653ea7 = $this->env->getExtension("native_profiler");
        $__internal_1ebb55c0af8273d44db5849e1a9d6b8bb2b549ca1bd05719d9ee8b62fc653ea7->enter($__internal_1ebb55c0af8273d44db5849e1a9d6b8bb2b549ca1bd05719d9ee8b62fc653ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1ebb55c0af8273d44db5849e1a9d6b8bb2b549ca1bd05719d9ee8b62fc653ea7->leave($__internal_1ebb55c0af8273d44db5849e1a9d6b8bb2b549ca1bd05719d9ee8b62fc653ea7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc19ea2e73c4fc5857d1a05ac1492dffb940e57c8e40d5ed851fed777626e0d4 = $this->env->getExtension("native_profiler");
        $__internal_cc19ea2e73c4fc5857d1a05ac1492dffb940e57c8e40d5ed851fed777626e0d4->enter($__internal_cc19ea2e73c4fc5857d1a05ac1492dffb940e57c8e40d5ed851fed777626e0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc19ea2e73c4fc5857d1a05ac1492dffb940e57c8e40d5ed851fed777626e0d4->leave($__internal_cc19ea2e73c4fc5857d1a05ac1492dffb940e57c8e40d5ed851fed777626e0d4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5535eba54084665c41e7822cc3280cbe8f170d2b02326a6dbcaaa79f196beaa = $this->env->getExtension("native_profiler");
        $__internal_e5535eba54084665c41e7822cc3280cbe8f170d2b02326a6dbcaaa79f196beaa->enter($__internal_e5535eba54084665c41e7822cc3280cbe8f170d2b02326a6dbcaaa79f196beaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e5535eba54084665c41e7822cc3280cbe8f170d2b02326a6dbcaaa79f196beaa->leave($__internal_e5535eba54084665c41e7822cc3280cbe8f170d2b02326a6dbcaaa79f196beaa_prof);

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
