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
        $__internal_c0f9d993d0accdc9c013b8987454d7bead38675a3a082dbaa0b7b94f6d789c1a = $this->env->getExtension("native_profiler");
        $__internal_c0f9d993d0accdc9c013b8987454d7bead38675a3a082dbaa0b7b94f6d789c1a->enter($__internal_c0f9d993d0accdc9c013b8987454d7bead38675a3a082dbaa0b7b94f6d789c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0f9d993d0accdc9c013b8987454d7bead38675a3a082dbaa0b7b94f6d789c1a->leave($__internal_c0f9d993d0accdc9c013b8987454d7bead38675a3a082dbaa0b7b94f6d789c1a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_299823dcfcf872f997f89baaa2b5557bcd0c1ae1b635e37c3fddc9ee239712ef = $this->env->getExtension("native_profiler");
        $__internal_299823dcfcf872f997f89baaa2b5557bcd0c1ae1b635e37c3fddc9ee239712ef->enter($__internal_299823dcfcf872f997f89baaa2b5557bcd0c1ae1b635e37c3fddc9ee239712ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_299823dcfcf872f997f89baaa2b5557bcd0c1ae1b635e37c3fddc9ee239712ef->leave($__internal_299823dcfcf872f997f89baaa2b5557bcd0c1ae1b635e37c3fddc9ee239712ef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_065c45281ace44d5529e476a8f722725839fdef548065ba3c177ce53ebcbbe9e = $this->env->getExtension("native_profiler");
        $__internal_065c45281ace44d5529e476a8f722725839fdef548065ba3c177ce53ebcbbe9e->enter($__internal_065c45281ace44d5529e476a8f722725839fdef548065ba3c177ce53ebcbbe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_065c45281ace44d5529e476a8f722725839fdef548065ba3c177ce53ebcbbe9e->leave($__internal_065c45281ace44d5529e476a8f722725839fdef548065ba3c177ce53ebcbbe9e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f2a871d80b8445a0a365b92c870d76f2961d5b183984056e10a862f87afe4cb = $this->env->getExtension("native_profiler");
        $__internal_6f2a871d80b8445a0a365b92c870d76f2961d5b183984056e10a862f87afe4cb->enter($__internal_6f2a871d80b8445a0a365b92c870d76f2961d5b183984056e10a862f87afe4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f2a871d80b8445a0a365b92c870d76f2961d5b183984056e10a862f87afe4cb->leave($__internal_6f2a871d80b8445a0a365b92c870d76f2961d5b183984056e10a862f87afe4cb_prof);

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
