<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_1a91124bf4e487fb7329556d1da46e5bf235a8db4e3fe89d7397c128a134e177 extends Twig_Template
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
        $__internal_bb5cae8c2a4586b9fc45851abb909aa871e73d510cbe51880520fc188790b4db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5cae8c2a4586b9fc45851abb909aa871e73d510cbe51880520fc188790b4db->enter($__internal_bb5cae8c2a4586b9fc45851abb909aa871e73d510cbe51880520fc188790b4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_a215a440d7810a68a0003effb063f3ea8d7e816ac9959e71a190d744bf5b3d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a215a440d7810a68a0003effb063f3ea8d7e816ac9959e71a190d744bf5b3d60->enter($__internal_a215a440d7810a68a0003effb063f3ea8d7e816ac9959e71a190d744bf5b3d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bb5cae8c2a4586b9fc45851abb909aa871e73d510cbe51880520fc188790b4db->leave($__internal_bb5cae8c2a4586b9fc45851abb909aa871e73d510cbe51880520fc188790b4db_prof);

        
        $__internal_a215a440d7810a68a0003effb063f3ea8d7e816ac9959e71a190d744bf5b3d60->leave($__internal_a215a440d7810a68a0003effb063f3ea8d7e816ac9959e71a190d744bf5b3d60_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
