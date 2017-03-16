<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_387376312a608dfb21ec427cb4897e25ebe5032c5d0cbe55acb2006d0adc79a9 extends Twig_Template
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
        $__internal_6d7f488ff6449f34119cc2b92b561a572b9b30988342109c5752e74d06c7b457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7f488ff6449f34119cc2b92b561a572b9b30988342109c5752e74d06c7b457->enter($__internal_6d7f488ff6449f34119cc2b92b561a572b9b30988342109c5752e74d06c7b457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_f3cbd8c2e9a07144c10e5c94748c3632fdc35f78199a06b50f5a395a784ae2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cbd8c2e9a07144c10e5c94748c3632fdc35f78199a06b50f5a395a784ae2ba->enter($__internal_f3cbd8c2e9a07144c10e5c94748c3632fdc35f78199a06b50f5a395a784ae2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
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
        
        $__internal_6d7f488ff6449f34119cc2b92b561a572b9b30988342109c5752e74d06c7b457->leave($__internal_6d7f488ff6449f34119cc2b92b561a572b9b30988342109c5752e74d06c7b457_prof);

        
        $__internal_f3cbd8c2e9a07144c10e5c94748c3632fdc35f78199a06b50f5a395a784ae2ba->leave($__internal_f3cbd8c2e9a07144c10e5c94748c3632fdc35f78199a06b50f5a395a784ae2ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
