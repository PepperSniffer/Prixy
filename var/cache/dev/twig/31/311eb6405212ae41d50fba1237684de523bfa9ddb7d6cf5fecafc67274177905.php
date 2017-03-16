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
        $__internal_becdc7747cba2054da38f1e5ddd7cbef0d1cbbfba70f718e5390fc51b1ed0e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_becdc7747cba2054da38f1e5ddd7cbef0d1cbbfba70f718e5390fc51b1ed0e96->enter($__internal_becdc7747cba2054da38f1e5ddd7cbef0d1cbbfba70f718e5390fc51b1ed0e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a99f529bb3c3ba1a444f979aa62d6bdb2486145792150481a9e62bf526c53da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99f529bb3c3ba1a444f979aa62d6bdb2486145792150481a9e62bf526c53da2->enter($__internal_a99f529bb3c3ba1a444f979aa62d6bdb2486145792150481a9e62bf526c53da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_becdc7747cba2054da38f1e5ddd7cbef0d1cbbfba70f718e5390fc51b1ed0e96->leave($__internal_becdc7747cba2054da38f1e5ddd7cbef0d1cbbfba70f718e5390fc51b1ed0e96_prof);

        
        $__internal_a99f529bb3c3ba1a444f979aa62d6bdb2486145792150481a9e62bf526c53da2->leave($__internal_a99f529bb3c3ba1a444f979aa62d6bdb2486145792150481a9e62bf526c53da2_prof);

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
