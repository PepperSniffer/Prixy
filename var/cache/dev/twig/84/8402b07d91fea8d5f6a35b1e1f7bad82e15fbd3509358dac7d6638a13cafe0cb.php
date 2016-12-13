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
        $__internal_3947badd84a64755ee77b2f981a1732b90da91c7b689a34c2068e88435e4720c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3947badd84a64755ee77b2f981a1732b90da91c7b689a34c2068e88435e4720c->enter($__internal_3947badd84a64755ee77b2f981a1732b90da91c7b689a34c2068e88435e4720c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_0f023a3ef6e6e378b9bfdc658d13b1bb7ec44e9f1790f1e09c4ace3ff3b17250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f023a3ef6e6e378b9bfdc658d13b1bb7ec44e9f1790f1e09c4ace3ff3b17250->enter($__internal_0f023a3ef6e6e378b9bfdc658d13b1bb7ec44e9f1790f1e09c4ace3ff3b17250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_3947badd84a64755ee77b2f981a1732b90da91c7b689a34c2068e88435e4720c->leave($__internal_3947badd84a64755ee77b2f981a1732b90da91c7b689a34c2068e88435e4720c_prof);

        
        $__internal_0f023a3ef6e6e378b9bfdc658d13b1bb7ec44e9f1790f1e09c4ace3ff3b17250->leave($__internal_0f023a3ef6e6e378b9bfdc658d13b1bb7ec44e9f1790f1e09c4ace3ff3b17250_prof);

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
