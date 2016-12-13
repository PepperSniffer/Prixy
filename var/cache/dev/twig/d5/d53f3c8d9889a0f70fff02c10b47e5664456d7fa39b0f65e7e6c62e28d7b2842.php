<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_69daa200dca3d83a027494b0b20ae71088bb6ba8e06c00eb2274f27b23fb9648 extends Twig_Template
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
        $__internal_47b33d7784d3e986083d1c2f40156164375a43a339613ec7af5e4ab426456d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b33d7784d3e986083d1c2f40156164375a43a339613ec7af5e4ab426456d90->enter($__internal_47b33d7784d3e986083d1c2f40156164375a43a339613ec7af5e4ab426456d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_77edc61668c2f44e5d7fb22d2e89ddb2efd9cd79a61c2ee6d8cc6d1276c9feea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77edc61668c2f44e5d7fb22d2e89ddb2efd9cd79a61c2ee6d8cc6d1276c9feea->enter($__internal_77edc61668c2f44e5d7fb22d2e89ddb2efd9cd79a61c2ee6d8cc6d1276c9feea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_47b33d7784d3e986083d1c2f40156164375a43a339613ec7af5e4ab426456d90->leave($__internal_47b33d7784d3e986083d1c2f40156164375a43a339613ec7af5e4ab426456d90_prof);

        
        $__internal_77edc61668c2f44e5d7fb22d2e89ddb2efd9cd79a61c2ee6d8cc6d1276c9feea->leave($__internal_77edc61668c2f44e5d7fb22d2e89ddb2efd9cd79a61c2ee6d8cc6d1276c9feea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
