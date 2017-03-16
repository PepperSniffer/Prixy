<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_b3ea73d14fb6adade2eec00eaf2cebf8486bd4c0695d9bf4675bd3c8531a586f extends Twig_Template
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
        $__internal_f2d8d8a2fc3cff8981461b7b163d13b51dc67dc903ad8ffd82027d4b4641704a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d8d8a2fc3cff8981461b7b163d13b51dc67dc903ad8ffd82027d4b4641704a->enter($__internal_f2d8d8a2fc3cff8981461b7b163d13b51dc67dc903ad8ffd82027d4b4641704a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_8b625a0895029473bbefb6134c7e5c61eb273c50353a67f387191a25ab802849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b625a0895029473bbefb6134c7e5c61eb273c50353a67f387191a25ab802849->enter($__internal_8b625a0895029473bbefb6134c7e5c61eb273c50353a67f387191a25ab802849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f2d8d8a2fc3cff8981461b7b163d13b51dc67dc903ad8ffd82027d4b4641704a->leave($__internal_f2d8d8a2fc3cff8981461b7b163d13b51dc67dc903ad8ffd82027d4b4641704a_prof);

        
        $__internal_8b625a0895029473bbefb6134c7e5c61eb273c50353a67f387191a25ab802849->leave($__internal_8b625a0895029473bbefb6134c7e5c61eb273c50353a67f387191a25ab802849_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
