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
        $__internal_008ff14d88c902bd4ea6bcb35da2568f555fe54a38c48569994319efece78c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008ff14d88c902bd4ea6bcb35da2568f555fe54a38c48569994319efece78c4e->enter($__internal_008ff14d88c902bd4ea6bcb35da2568f555fe54a38c48569994319efece78c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_212189baa1b6248859c77d54968d32ece77c165a5adcbb317a68c2dcd5ccc72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212189baa1b6248859c77d54968d32ece77c165a5adcbb317a68c2dcd5ccc72a->enter($__internal_212189baa1b6248859c77d54968d32ece77c165a5adcbb317a68c2dcd5ccc72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_008ff14d88c902bd4ea6bcb35da2568f555fe54a38c48569994319efece78c4e->leave($__internal_008ff14d88c902bd4ea6bcb35da2568f555fe54a38c48569994319efece78c4e_prof);

        
        $__internal_212189baa1b6248859c77d54968d32ece77c165a5adcbb317a68c2dcd5ccc72a->leave($__internal_212189baa1b6248859c77d54968d32ece77c165a5adcbb317a68c2dcd5ccc72a_prof);

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
