<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c0fa5db6c1574c33747ac0eb3d73c6ac7d1af660be42f4f9a0f238270e1a696a extends Twig_Template
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
        $__internal_d0b4532283304d9125a576eb74a94feae56f5cabb9ebecc4b09105cd62167e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b4532283304d9125a576eb74a94feae56f5cabb9ebecc4b09105cd62167e9a->enter($__internal_d0b4532283304d9125a576eb74a94feae56f5cabb9ebecc4b09105cd62167e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_ebb9ca24932dcb9af2c56194de1e78510f3a4eadf2f57aa2cbd26760a08b0df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb9ca24932dcb9af2c56194de1e78510f3a4eadf2f57aa2cbd26760a08b0df9->enter($__internal_ebb9ca24932dcb9af2c56194de1e78510f3a4eadf2f57aa2cbd26760a08b0df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d0b4532283304d9125a576eb74a94feae56f5cabb9ebecc4b09105cd62167e9a->leave($__internal_d0b4532283304d9125a576eb74a94feae56f5cabb9ebecc4b09105cd62167e9a_prof);

        
        $__internal_ebb9ca24932dcb9af2c56194de1e78510f3a4eadf2f57aa2cbd26760a08b0df9->leave($__internal_ebb9ca24932dcb9af2c56194de1e78510f3a4eadf2f57aa2cbd26760a08b0df9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
