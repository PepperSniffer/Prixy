<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d92ded057f0c78f61e1d35cf9e7dcb693a77c64c62b06b84915ef7a2e51e2520 extends Twig_Template
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
        $__internal_bf3cf57d08d974da248f4344190172384915649b25d13b35e31a2128d7a957f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3cf57d08d974da248f4344190172384915649b25d13b35e31a2128d7a957f1->enter($__internal_bf3cf57d08d974da248f4344190172384915649b25d13b35e31a2128d7a957f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_2b2189023b4432e247cfdb49f700b33b6c8e3b0011ebc705e848d7313d01165d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2189023b4432e247cfdb49f700b33b6c8e3b0011ebc705e848d7313d01165d->enter($__internal_2b2189023b4432e247cfdb49f700b33b6c8e3b0011ebc705e848d7313d01165d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bf3cf57d08d974da248f4344190172384915649b25d13b35e31a2128d7a957f1->leave($__internal_bf3cf57d08d974da248f4344190172384915649b25d13b35e31a2128d7a957f1_prof);

        
        $__internal_2b2189023b4432e247cfdb49f700b33b6c8e3b0011ebc705e848d7313d01165d->leave($__internal_2b2189023b4432e247cfdb49f700b33b6c8e3b0011ebc705e848d7313d01165d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
