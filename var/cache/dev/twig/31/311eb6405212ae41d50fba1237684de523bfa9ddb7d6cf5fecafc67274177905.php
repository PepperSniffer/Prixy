<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b5fdfce2ddd6d85a50d4d050e3985fe69f4fa5bcf2bfeb16afe11fce11315c43 extends Twig_Template
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
        $__internal_cd4802bda796748e35e58fe55a7f92d60541058e9642a7e83338c523219279b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4802bda796748e35e58fe55a7f92d60541058e9642a7e83338c523219279b6->enter($__internal_cd4802bda796748e35e58fe55a7f92d60541058e9642a7e83338c523219279b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_e2715201de6ba492e8e372be0202720b6af8ee9b43da753deccc9b5c1fddf0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2715201de6ba492e8e372be0202720b6af8ee9b43da753deccc9b5c1fddf0de->enter($__internal_e2715201de6ba492e8e372be0202720b6af8ee9b43da753deccc9b5c1fddf0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cd4802bda796748e35e58fe55a7f92d60541058e9642a7e83338c523219279b6->leave($__internal_cd4802bda796748e35e58fe55a7f92d60541058e9642a7e83338c523219279b6_prof);

        
        $__internal_e2715201de6ba492e8e372be0202720b6af8ee9b43da753deccc9b5c1fddf0de->leave($__internal_e2715201de6ba492e8e372be0202720b6af8ee9b43da753deccc9b5c1fddf0de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
