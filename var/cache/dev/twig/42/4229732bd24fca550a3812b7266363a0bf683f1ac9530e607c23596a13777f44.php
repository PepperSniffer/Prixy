<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5185274dec47fa53b42b6a52dc7d8c92b527410f7518972eb410ba13b8b67853 extends Twig_Template
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
        $__internal_c9d2a2bc99822021f873e0c41f228c134795ae0a2dc39d05e63f0df30e98a229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d2a2bc99822021f873e0c41f228c134795ae0a2dc39d05e63f0df30e98a229->enter($__internal_c9d2a2bc99822021f873e0c41f228c134795ae0a2dc39d05e63f0df30e98a229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6237b02fc220ccf155dc6aa8bf1487c88a5a9927257496dcc958a37266d0831a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6237b02fc220ccf155dc6aa8bf1487c88a5a9927257496dcc958a37266d0831a->enter($__internal_6237b02fc220ccf155dc6aa8bf1487c88a5a9927257496dcc958a37266d0831a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c9d2a2bc99822021f873e0c41f228c134795ae0a2dc39d05e63f0df30e98a229->leave($__internal_c9d2a2bc99822021f873e0c41f228c134795ae0a2dc39d05e63f0df30e98a229_prof);

        
        $__internal_6237b02fc220ccf155dc6aa8bf1487c88a5a9927257496dcc958a37266d0831a->leave($__internal_6237b02fc220ccf155dc6aa8bf1487c88a5a9927257496dcc958a37266d0831a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
