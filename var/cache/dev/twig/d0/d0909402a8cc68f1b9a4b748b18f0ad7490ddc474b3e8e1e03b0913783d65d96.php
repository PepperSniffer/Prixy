<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_81f20e11ae38d23fc7d576450035e8354ecc9e578fe3d0dbeba946b899dfc962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aecd7718d0624d8ff78eb86a9a8d31969aaf9754f8157f1fd3f050fe9674c1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aecd7718d0624d8ff78eb86a9a8d31969aaf9754f8157f1fd3f050fe9674c1d8->enter($__internal_aecd7718d0624d8ff78eb86a9a8d31969aaf9754f8157f1fd3f050fe9674c1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_ac90d12541f27268006a741a2c66b5f354cb46776ce9be9f3f3605b196648726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac90d12541f27268006a741a2c66b5f354cb46776ce9be9f3f3605b196648726->enter($__internal_ac90d12541f27268006a741a2c66b5f354cb46776ce9be9f3f3605b196648726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_aecd7718d0624d8ff78eb86a9a8d31969aaf9754f8157f1fd3f050fe9674c1d8->leave($__internal_aecd7718d0624d8ff78eb86a9a8d31969aaf9754f8157f1fd3f050fe9674c1d8_prof);

        
        $__internal_ac90d12541f27268006a741a2c66b5f354cb46776ce9be9f3f3605b196648726->leave($__internal_ac90d12541f27268006a741a2c66b5f354cb46776ce9be9f3f3605b196648726_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
