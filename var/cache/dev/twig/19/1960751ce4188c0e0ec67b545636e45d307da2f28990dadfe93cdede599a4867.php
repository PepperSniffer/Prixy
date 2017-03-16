<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_623ddd2a8b14c4341ea235aa949dc73dc41545a628486447f764bc56407e075b extends Twig_Template
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
        $__internal_a7f46dcfcb00751e87f24ce6d7cec5261d7835ec792d90ff21dc4e1ab6eb1b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f46dcfcb00751e87f24ce6d7cec5261d7835ec792d90ff21dc4e1ab6eb1b96->enter($__internal_a7f46dcfcb00751e87f24ce6d7cec5261d7835ec792d90ff21dc4e1ab6eb1b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_e7db460e2ea0940ba274b6f711986dd9238cfe1d09b42f5d37acecdf88b484d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7db460e2ea0940ba274b6f711986dd9238cfe1d09b42f5d37acecdf88b484d6->enter($__internal_e7db460e2ea0940ba274b6f711986dd9238cfe1d09b42f5d37acecdf88b484d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_a7f46dcfcb00751e87f24ce6d7cec5261d7835ec792d90ff21dc4e1ab6eb1b96->leave($__internal_a7f46dcfcb00751e87f24ce6d7cec5261d7835ec792d90ff21dc4e1ab6eb1b96_prof);

        
        $__internal_e7db460e2ea0940ba274b6f711986dd9238cfe1d09b42f5d37acecdf88b484d6->leave($__internal_e7db460e2ea0940ba274b6f711986dd9238cfe1d09b42f5d37acecdf88b484d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
