<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_b3460b12b5d30543380c7c8bf14ab3df4b0979d7a1ef661c9f8f2637c555b725 extends Twig_Template
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
        $__internal_045267766fa84043deef9b1597e0a487abbd9b3524eaf1339fd7a2fe336174fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_045267766fa84043deef9b1597e0a487abbd9b3524eaf1339fd7a2fe336174fd->enter($__internal_045267766fa84043deef9b1597e0a487abbd9b3524eaf1339fd7a2fe336174fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_e819d6343cd410dcdbb25f4714d3558a05ddaa9ac10db39fd5a36c58760fdeff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e819d6343cd410dcdbb25f4714d3558a05ddaa9ac10db39fd5a36c58760fdeff->enter($__internal_e819d6343cd410dcdbb25f4714d3558a05ddaa9ac10db39fd5a36c58760fdeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_045267766fa84043deef9b1597e0a487abbd9b3524eaf1339fd7a2fe336174fd->leave($__internal_045267766fa84043deef9b1597e0a487abbd9b3524eaf1339fd7a2fe336174fd_prof);

        
        $__internal_e819d6343cd410dcdbb25f4714d3558a05ddaa9ac10db39fd5a36c58760fdeff->leave($__internal_e819d6343cd410dcdbb25f4714d3558a05ddaa9ac10db39fd5a36c58760fdeff_prof);

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
