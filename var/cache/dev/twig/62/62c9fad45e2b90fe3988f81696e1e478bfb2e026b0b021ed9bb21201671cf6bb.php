<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5f4cef9268f642fc566f7d9eaf241f2b34d7ca5215cb9c1d5dfc115e847dc362 extends Twig_Template
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
        $__internal_8b1de66179b749e84f7cf9d89cafa56c1af2eaad97629a09702afddd4300721e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1de66179b749e84f7cf9d89cafa56c1af2eaad97629a09702afddd4300721e->enter($__internal_8b1de66179b749e84f7cf9d89cafa56c1af2eaad97629a09702afddd4300721e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_24c30c0cb91d036910ea47ea79465c0a192a44ec5e8e64b48c07769b238865c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c30c0cb91d036910ea47ea79465c0a192a44ec5e8e64b48c07769b238865c2->enter($__internal_24c30c0cb91d036910ea47ea79465c0a192a44ec5e8e64b48c07769b238865c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8b1de66179b749e84f7cf9d89cafa56c1af2eaad97629a09702afddd4300721e->leave($__internal_8b1de66179b749e84f7cf9d89cafa56c1af2eaad97629a09702afddd4300721e_prof);

        
        $__internal_24c30c0cb91d036910ea47ea79465c0a192a44ec5e8e64b48c07769b238865c2->leave($__internal_24c30c0cb91d036910ea47ea79465c0a192a44ec5e8e64b48c07769b238865c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
