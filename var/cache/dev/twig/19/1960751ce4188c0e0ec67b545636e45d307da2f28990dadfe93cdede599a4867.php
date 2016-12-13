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
        $__internal_3dfede59fccfd80cdc4d1613e44ef53834985b854dcc25c2f121e8f87f0c524d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dfede59fccfd80cdc4d1613e44ef53834985b854dcc25c2f121e8f87f0c524d->enter($__internal_3dfede59fccfd80cdc4d1613e44ef53834985b854dcc25c2f121e8f87f0c524d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_63c7213fd19cae553fa9304d5afe2b55cb758d89225f689e214fdcba3e027e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c7213fd19cae553fa9304d5afe2b55cb758d89225f689e214fdcba3e027e9f->enter($__internal_63c7213fd19cae553fa9304d5afe2b55cb758d89225f689e214fdcba3e027e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_3dfede59fccfd80cdc4d1613e44ef53834985b854dcc25c2f121e8f87f0c524d->leave($__internal_3dfede59fccfd80cdc4d1613e44ef53834985b854dcc25c2f121e8f87f0c524d_prof);

        
        $__internal_63c7213fd19cae553fa9304d5afe2b55cb758d89225f689e214fdcba3e027e9f->leave($__internal_63c7213fd19cae553fa9304d5afe2b55cb758d89225f689e214fdcba3e027e9f_prof);

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
