<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_4a42f5ecc2fa1c28468a7bea6c088c68360e55fcdcca659a6e2e81befba1a627 extends Twig_Template
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
        $__internal_f58dbdddfbc42ea6fb212b18b9240d7bff7015b31bf41ff0d207a6cf33284497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58dbdddfbc42ea6fb212b18b9240d7bff7015b31bf41ff0d207a6cf33284497->enter($__internal_f58dbdddfbc42ea6fb212b18b9240d7bff7015b31bf41ff0d207a6cf33284497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c311b9274c4737369f543c75ea46f7c527a95b8cb52ca67f2899614becd495d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c311b9274c4737369f543c75ea46f7c527a95b8cb52ca67f2899614becd495d8->enter($__internal_c311b9274c4737369f543c75ea46f7c527a95b8cb52ca67f2899614becd495d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_f58dbdddfbc42ea6fb212b18b9240d7bff7015b31bf41ff0d207a6cf33284497->leave($__internal_f58dbdddfbc42ea6fb212b18b9240d7bff7015b31bf41ff0d207a6cf33284497_prof);

        
        $__internal_c311b9274c4737369f543c75ea46f7c527a95b8cb52ca67f2899614becd495d8->leave($__internal_c311b9274c4737369f543c75ea46f7c527a95b8cb52ca67f2899614becd495d8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
