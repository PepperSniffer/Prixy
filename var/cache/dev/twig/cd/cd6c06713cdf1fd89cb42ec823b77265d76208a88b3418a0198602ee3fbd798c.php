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
        $__internal_5741c741dc67616adff1c4beba79882c080f8d35485ef664dd431bcd6d9f2e85 = $this->env->getExtension("native_profiler");
        $__internal_5741c741dc67616adff1c4beba79882c080f8d35485ef664dd431bcd6d9f2e85->enter($__internal_5741c741dc67616adff1c4beba79882c080f8d35485ef664dd431bcd6d9f2e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5741c741dc67616adff1c4beba79882c080f8d35485ef664dd431bcd6d9f2e85->leave($__internal_5741c741dc67616adff1c4beba79882c080f8d35485ef664dd431bcd6d9f2e85_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a7011ca62bb26bf4c3ed70c14338a9a6ad6fd36ce6daaa2a24b3844baf3e807 = $this->env->getExtension("native_profiler");
        $__internal_2a7011ca62bb26bf4c3ed70c14338a9a6ad6fd36ce6daaa2a24b3844baf3e807->enter($__internal_2a7011ca62bb26bf4c3ed70c14338a9a6ad6fd36ce6daaa2a24b3844baf3e807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a7011ca62bb26bf4c3ed70c14338a9a6ad6fd36ce6daaa2a24b3844baf3e807->leave($__internal_2a7011ca62bb26bf4c3ed70c14338a9a6ad6fd36ce6daaa2a24b3844baf3e807_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e37aedbda2c4826a56f637fb5e52d823838e739f2af7c7e751f52e91a9f4adf = $this->env->getExtension("native_profiler");
        $__internal_7e37aedbda2c4826a56f637fb5e52d823838e739f2af7c7e751f52e91a9f4adf->enter($__internal_7e37aedbda2c4826a56f637fb5e52d823838e739f2af7c7e751f52e91a9f4adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e37aedbda2c4826a56f637fb5e52d823838e739f2af7c7e751f52e91a9f4adf->leave($__internal_7e37aedbda2c4826a56f637fb5e52d823838e739f2af7c7e751f52e91a9f4adf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_939cd43c83bebe3baa90f572da051b037af049333a66370e68e85b1f40553db6 = $this->env->getExtension("native_profiler");
        $__internal_939cd43c83bebe3baa90f572da051b037af049333a66370e68e85b1f40553db6->enter($__internal_939cd43c83bebe3baa90f572da051b037af049333a66370e68e85b1f40553db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_939cd43c83bebe3baa90f572da051b037af049333a66370e68e85b1f40553db6->leave($__internal_939cd43c83bebe3baa90f572da051b037af049333a66370e68e85b1f40553db6_prof);

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
