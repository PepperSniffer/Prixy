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
        $__internal_1a2447286fe96f840a7a44ce31613bb5126a5989abbe04f91da7f26fd96a32b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2447286fe96f840a7a44ce31613bb5126a5989abbe04f91da7f26fd96a32b7->enter($__internal_1a2447286fe96f840a7a44ce31613bb5126a5989abbe04f91da7f26fd96a32b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_4025e0724676e2fcefff9d73c8e2cbb3cec81ae12eab06d8501820b0822dfc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4025e0724676e2fcefff9d73c8e2cbb3cec81ae12eab06d8501820b0822dfc24->enter($__internal_4025e0724676e2fcefff9d73c8e2cbb3cec81ae12eab06d8501820b0822dfc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1a2447286fe96f840a7a44ce31613bb5126a5989abbe04f91da7f26fd96a32b7->leave($__internal_1a2447286fe96f840a7a44ce31613bb5126a5989abbe04f91da7f26fd96a32b7_prof);

        
        $__internal_4025e0724676e2fcefff9d73c8e2cbb3cec81ae12eab06d8501820b0822dfc24->leave($__internal_4025e0724676e2fcefff9d73c8e2cbb3cec81ae12eab06d8501820b0822dfc24_prof);

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
