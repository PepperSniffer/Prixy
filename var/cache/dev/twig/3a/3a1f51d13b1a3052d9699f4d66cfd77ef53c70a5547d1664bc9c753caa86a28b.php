<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9d5f8ef3adc34df4cba36d95d1a4903e7f11733471c6fdc26310da6e62bcf6ab extends Twig_Template
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
        $__internal_35fafdcf11ab0142203dc6ea06df16f5024bbd33fa4e21d9ecb79d29cfda3f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35fafdcf11ab0142203dc6ea06df16f5024bbd33fa4e21d9ecb79d29cfda3f09->enter($__internal_35fafdcf11ab0142203dc6ea06df16f5024bbd33fa4e21d9ecb79d29cfda3f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_fea0ed8268a71625310e102ea5662938dab32a6b6ec4dcd21794d4b906a44bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea0ed8268a71625310e102ea5662938dab32a6b6ec4dcd21794d4b906a44bb8->enter($__internal_fea0ed8268a71625310e102ea5662938dab32a6b6ec4dcd21794d4b906a44bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_35fafdcf11ab0142203dc6ea06df16f5024bbd33fa4e21d9ecb79d29cfda3f09->leave($__internal_35fafdcf11ab0142203dc6ea06df16f5024bbd33fa4e21d9ecb79d29cfda3f09_prof);

        
        $__internal_fea0ed8268a71625310e102ea5662938dab32a6b6ec4dcd21794d4b906a44bb8->leave($__internal_fea0ed8268a71625310e102ea5662938dab32a6b6ec4dcd21794d4b906a44bb8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
