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
        $__internal_e62b7a8a6a80b8370693428c86f218bcfe957e8326ee3a7888954bfe14dec7e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62b7a8a6a80b8370693428c86f218bcfe957e8326ee3a7888954bfe14dec7e1->enter($__internal_e62b7a8a6a80b8370693428c86f218bcfe957e8326ee3a7888954bfe14dec7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_1d053d729f51523fa66becf38aeef32dec03bbaf6b3dcb970589f79df1451439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d053d729f51523fa66becf38aeef32dec03bbaf6b3dcb970589f79df1451439->enter($__internal_1d053d729f51523fa66becf38aeef32dec03bbaf6b3dcb970589f79df1451439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_e62b7a8a6a80b8370693428c86f218bcfe957e8326ee3a7888954bfe14dec7e1->leave($__internal_e62b7a8a6a80b8370693428c86f218bcfe957e8326ee3a7888954bfe14dec7e1_prof);

        
        $__internal_1d053d729f51523fa66becf38aeef32dec03bbaf6b3dcb970589f79df1451439->leave($__internal_1d053d729f51523fa66becf38aeef32dec03bbaf6b3dcb970589f79df1451439_prof);

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
