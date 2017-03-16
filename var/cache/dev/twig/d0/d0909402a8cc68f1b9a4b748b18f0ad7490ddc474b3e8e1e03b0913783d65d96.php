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
        $__internal_17638e7838b276aea7df3b627c204f8ef9753d634f6a78efe5a4ea02be65f422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17638e7838b276aea7df3b627c204f8ef9753d634f6a78efe5a4ea02be65f422->enter($__internal_17638e7838b276aea7df3b627c204f8ef9753d634f6a78efe5a4ea02be65f422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_d8a7d6eb7a218da854755ece1bd736a8cfce1fd4741ba85708a888d382630546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a7d6eb7a218da854755ece1bd736a8cfce1fd4741ba85708a888d382630546->enter($__internal_d8a7d6eb7a218da854755ece1bd736a8cfce1fd4741ba85708a888d382630546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_17638e7838b276aea7df3b627c204f8ef9753d634f6a78efe5a4ea02be65f422->leave($__internal_17638e7838b276aea7df3b627c204f8ef9753d634f6a78efe5a4ea02be65f422_prof);

        
        $__internal_d8a7d6eb7a218da854755ece1bd736a8cfce1fd4741ba85708a888d382630546->leave($__internal_d8a7d6eb7a218da854755ece1bd736a8cfce1fd4741ba85708a888d382630546_prof);

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
