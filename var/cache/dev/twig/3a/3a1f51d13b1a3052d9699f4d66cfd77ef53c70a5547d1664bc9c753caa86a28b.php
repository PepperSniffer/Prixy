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
        $__internal_dbb6ded83c3081ff6ca0acef0b3be92527189987a4c83b89617d8558d350afc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb6ded83c3081ff6ca0acef0b3be92527189987a4c83b89617d8558d350afc8->enter($__internal_dbb6ded83c3081ff6ca0acef0b3be92527189987a4c83b89617d8558d350afc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6b563e90fd76e4d6e5962f17336ce1493743e57c58f49af22a0f128e5065a11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b563e90fd76e4d6e5962f17336ce1493743e57c58f49af22a0f128e5065a11f->enter($__internal_6b563e90fd76e4d6e5962f17336ce1493743e57c58f49af22a0f128e5065a11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dbb6ded83c3081ff6ca0acef0b3be92527189987a4c83b89617d8558d350afc8->leave($__internal_dbb6ded83c3081ff6ca0acef0b3be92527189987a4c83b89617d8558d350afc8_prof);

        
        $__internal_6b563e90fd76e4d6e5962f17336ce1493743e57c58f49af22a0f128e5065a11f->leave($__internal_6b563e90fd76e4d6e5962f17336ce1493743e57c58f49af22a0f128e5065a11f_prof);

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
