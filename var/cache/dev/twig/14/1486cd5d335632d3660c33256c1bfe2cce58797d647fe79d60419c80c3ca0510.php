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
        $__internal_7a354578d3bcdcaa25be2b6077227fd4c97b570142fa1c889cfb0accded930e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a354578d3bcdcaa25be2b6077227fd4c97b570142fa1c889cfb0accded930e5->enter($__internal_7a354578d3bcdcaa25be2b6077227fd4c97b570142fa1c889cfb0accded930e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_65c44ce5da1d2c12dcd735a7c2710cd379f509c3ec3124518c7dda753f29a4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c44ce5da1d2c12dcd735a7c2710cd379f509c3ec3124518c7dda753f29a4cb->enter($__internal_65c44ce5da1d2c12dcd735a7c2710cd379f509c3ec3124518c7dda753f29a4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_7a354578d3bcdcaa25be2b6077227fd4c97b570142fa1c889cfb0accded930e5->leave($__internal_7a354578d3bcdcaa25be2b6077227fd4c97b570142fa1c889cfb0accded930e5_prof);

        
        $__internal_65c44ce5da1d2c12dcd735a7c2710cd379f509c3ec3124518c7dda753f29a4cb->leave($__internal_65c44ce5da1d2c12dcd735a7c2710cd379f509c3ec3124518c7dda753f29a4cb_prof);

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
