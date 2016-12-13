<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_f94b3245645d861aa8ccb6b9788d9ebd1f5a5fc7e94aaa9de228c942d7905f02 extends Twig_Template
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
        $__internal_8dcd237b9ce72024b9dd54fd0b0cf3fa588d563ab49ada6f59332d47d0da6e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dcd237b9ce72024b9dd54fd0b0cf3fa588d563ab49ada6f59332d47d0da6e39->enter($__internal_8dcd237b9ce72024b9dd54fd0b0cf3fa588d563ab49ada6f59332d47d0da6e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_6e819bdafe66d96ee8c978d35ef066e7019daa74940b08d9cbc0d148d1a9a082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e819bdafe66d96ee8c978d35ef066e7019daa74940b08d9cbc0d148d1a9a082->enter($__internal_6e819bdafe66d96ee8c978d35ef066e7019daa74940b08d9cbc0d148d1a9a082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_8dcd237b9ce72024b9dd54fd0b0cf3fa588d563ab49ada6f59332d47d0da6e39->leave($__internal_8dcd237b9ce72024b9dd54fd0b0cf3fa588d563ab49ada6f59332d47d0da6e39_prof);

        
        $__internal_6e819bdafe66d96ee8c978d35ef066e7019daa74940b08d9cbc0d148d1a9a082->leave($__internal_6e819bdafe66d96ee8c978d35ef066e7019daa74940b08d9cbc0d148d1a9a082_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
