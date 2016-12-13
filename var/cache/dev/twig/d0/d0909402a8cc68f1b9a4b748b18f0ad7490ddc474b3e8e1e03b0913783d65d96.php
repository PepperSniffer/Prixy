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
        $__internal_dab67a6276b4aeecb9ae4de6d9f627d277fbc1a603860526178a26857182f66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab67a6276b4aeecb9ae4de6d9f627d277fbc1a603860526178a26857182f66d->enter($__internal_dab67a6276b4aeecb9ae4de6d9f627d277fbc1a603860526178a26857182f66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_6a8ad5ed4dc4d884f0cbc1d1918ada0318126c5f2325190d41ab7cd4cfb4463d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8ad5ed4dc4d884f0cbc1d1918ada0318126c5f2325190d41ab7cd4cfb4463d->enter($__internal_6a8ad5ed4dc4d884f0cbc1d1918ada0318126c5f2325190d41ab7cd4cfb4463d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_dab67a6276b4aeecb9ae4de6d9f627d277fbc1a603860526178a26857182f66d->leave($__internal_dab67a6276b4aeecb9ae4de6d9f627d277fbc1a603860526178a26857182f66d_prof);

        
        $__internal_6a8ad5ed4dc4d884f0cbc1d1918ada0318126c5f2325190d41ab7cd4cfb4463d->leave($__internal_6a8ad5ed4dc4d884f0cbc1d1918ada0318126c5f2325190d41ab7cd4cfb4463d_prof);

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
