<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_93949f396a8fa6c6897181d42faae502c954ebd1a1a48ca39dc3fc22f04778e5 extends Twig_Template
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
        $__internal_63e96419057ec35d4ebe5d8e185e8b600cb6318d98e4b706286d88d85399bacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e96419057ec35d4ebe5d8e185e8b600cb6318d98e4b706286d88d85399bacc->enter($__internal_63e96419057ec35d4ebe5d8e185e8b600cb6318d98e4b706286d88d85399bacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_349ee58a5fb88df9ec02b5d294eb20554cb7f0574204c20984235ca475f5c56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349ee58a5fb88df9ec02b5d294eb20554cb7f0574204c20984235ca475f5c56b->enter($__internal_349ee58a5fb88df9ec02b5d294eb20554cb7f0574204c20984235ca475f5c56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_63e96419057ec35d4ebe5d8e185e8b600cb6318d98e4b706286d88d85399bacc->leave($__internal_63e96419057ec35d4ebe5d8e185e8b600cb6318d98e4b706286d88d85399bacc_prof);

        
        $__internal_349ee58a5fb88df9ec02b5d294eb20554cb7f0574204c20984235ca475f5c56b->leave($__internal_349ee58a5fb88df9ec02b5d294eb20554cb7f0574204c20984235ca475f5c56b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
