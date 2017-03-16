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
        $__internal_3054b5108d2d08049359bfd5be5822be2534a91020402a76de926698c0001096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3054b5108d2d08049359bfd5be5822be2534a91020402a76de926698c0001096->enter($__internal_3054b5108d2d08049359bfd5be5822be2534a91020402a76de926698c0001096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_fdb1a54eef2fa297d545df6e91b8f6902266e3c97332a7c74956d335db033e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb1a54eef2fa297d545df6e91b8f6902266e3c97332a7c74956d335db033e43->enter($__internal_fdb1a54eef2fa297d545df6e91b8f6902266e3c97332a7c74956d335db033e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_3054b5108d2d08049359bfd5be5822be2534a91020402a76de926698c0001096->leave($__internal_3054b5108d2d08049359bfd5be5822be2534a91020402a76de926698c0001096_prof);

        
        $__internal_fdb1a54eef2fa297d545df6e91b8f6902266e3c97332a7c74956d335db033e43->leave($__internal_fdb1a54eef2fa297d545df6e91b8f6902266e3c97332a7c74956d335db033e43_prof);

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
