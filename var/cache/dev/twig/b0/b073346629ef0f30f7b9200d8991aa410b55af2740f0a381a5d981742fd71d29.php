<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_660788bd2d3b64d83b5e0cf7d7b66b41b0cdf87e1e436cba0b7ff160c6421889 extends Twig_Template
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
        $__internal_b6400d8e891e2244e5cfa5049b6825f949c8035648720f099e882570ab09e244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6400d8e891e2244e5cfa5049b6825f949c8035648720f099e882570ab09e244->enter($__internal_b6400d8e891e2244e5cfa5049b6825f949c8035648720f099e882570ab09e244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_a0507d48aba0763f82ebdbbc3032f44b3dda1c095a0bb61e053feae15aec02de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0507d48aba0763f82ebdbbc3032f44b3dda1c095a0bb61e053feae15aec02de->enter($__internal_a0507d48aba0763f82ebdbbc3032f44b3dda1c095a0bb61e053feae15aec02de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_b6400d8e891e2244e5cfa5049b6825f949c8035648720f099e882570ab09e244->leave($__internal_b6400d8e891e2244e5cfa5049b6825f949c8035648720f099e882570ab09e244_prof);

        
        $__internal_a0507d48aba0763f82ebdbbc3032f44b3dda1c095a0bb61e053feae15aec02de->leave($__internal_a0507d48aba0763f82ebdbbc3032f44b3dda1c095a0bb61e053feae15aec02de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
