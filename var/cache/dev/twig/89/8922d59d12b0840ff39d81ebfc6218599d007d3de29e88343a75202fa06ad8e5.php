<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_4a661714c3761eab81e9c0f388b1371da670035fb180d4285cc9b4224afea132 extends Twig_Template
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
        $__internal_d9a11ca2d86dca16aa2303c1377dd98806fc05ca0f60ad78c2678e35ee144101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a11ca2d86dca16aa2303c1377dd98806fc05ca0f60ad78c2678e35ee144101->enter($__internal_d9a11ca2d86dca16aa2303c1377dd98806fc05ca0f60ad78c2678e35ee144101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_c68ac2d2b44f1871ff72f91c579afea1a58a7869e1b80d57e87f62142a5beff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68ac2d2b44f1871ff72f91c579afea1a58a7869e1b80d57e87f62142a5beff5->enter($__internal_c68ac2d2b44f1871ff72f91c579afea1a58a7869e1b80d57e87f62142a5beff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d9a11ca2d86dca16aa2303c1377dd98806fc05ca0f60ad78c2678e35ee144101->leave($__internal_d9a11ca2d86dca16aa2303c1377dd98806fc05ca0f60ad78c2678e35ee144101_prof);

        
        $__internal_c68ac2d2b44f1871ff72f91c579afea1a58a7869e1b80d57e87f62142a5beff5->leave($__internal_c68ac2d2b44f1871ff72f91c579afea1a58a7869e1b80d57e87f62142a5beff5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
