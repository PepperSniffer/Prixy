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
        $__internal_d54f6f4a700542f2c2e285cf368cdde7d7393e14186fb612d54939cb6c0603de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54f6f4a700542f2c2e285cf368cdde7d7393e14186fb612d54939cb6c0603de->enter($__internal_d54f6f4a700542f2c2e285cf368cdde7d7393e14186fb612d54939cb6c0603de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_527bc718ada11b0a0df02af4d5942b0369f587a20a37a2e4e0f2ffc7567ec807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527bc718ada11b0a0df02af4d5942b0369f587a20a37a2e4e0f2ffc7567ec807->enter($__internal_527bc718ada11b0a0df02af4d5942b0369f587a20a37a2e4e0f2ffc7567ec807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_d54f6f4a700542f2c2e285cf368cdde7d7393e14186fb612d54939cb6c0603de->leave($__internal_d54f6f4a700542f2c2e285cf368cdde7d7393e14186fb612d54939cb6c0603de_prof);

        
        $__internal_527bc718ada11b0a0df02af4d5942b0369f587a20a37a2e4e0f2ffc7567ec807->leave($__internal_527bc718ada11b0a0df02af4d5942b0369f587a20a37a2e4e0f2ffc7567ec807_prof);

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
