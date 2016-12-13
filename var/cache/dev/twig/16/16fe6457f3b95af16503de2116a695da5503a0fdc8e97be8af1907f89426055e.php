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
        $__internal_16bdd3b0a8fdefae55dffb107fceb0961c8e9fb5dc10445e15d597b2bdd4f37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16bdd3b0a8fdefae55dffb107fceb0961c8e9fb5dc10445e15d597b2bdd4f37d->enter($__internal_16bdd3b0a8fdefae55dffb107fceb0961c8e9fb5dc10445e15d597b2bdd4f37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_66c69c38aa6dce71d6c4a6773f980813894c399ef66687afdde94854527b5cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c69c38aa6dce71d6c4a6773f980813894c399ef66687afdde94854527b5cae->enter($__internal_66c69c38aa6dce71d6c4a6773f980813894c399ef66687afdde94854527b5cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_16bdd3b0a8fdefae55dffb107fceb0961c8e9fb5dc10445e15d597b2bdd4f37d->leave($__internal_16bdd3b0a8fdefae55dffb107fceb0961c8e9fb5dc10445e15d597b2bdd4f37d_prof);

        
        $__internal_66c69c38aa6dce71d6c4a6773f980813894c399ef66687afdde94854527b5cae->leave($__internal_66c69c38aa6dce71d6c4a6773f980813894c399ef66687afdde94854527b5cae_prof);

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
