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
        $__internal_71682538d4832c45aea6227ad7f517c3e2a1d070a9efac571ef0f2f01ff2db8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71682538d4832c45aea6227ad7f517c3e2a1d070a9efac571ef0f2f01ff2db8d->enter($__internal_71682538d4832c45aea6227ad7f517c3e2a1d070a9efac571ef0f2f01ff2db8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_b1449b95177b84f1357439b28862838fed7283534525e5271ccb5bb464bc5c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1449b95177b84f1357439b28862838fed7283534525e5271ccb5bb464bc5c8a->enter($__internal_b1449b95177b84f1357439b28862838fed7283534525e5271ccb5bb464bc5c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_71682538d4832c45aea6227ad7f517c3e2a1d070a9efac571ef0f2f01ff2db8d->leave($__internal_71682538d4832c45aea6227ad7f517c3e2a1d070a9efac571ef0f2f01ff2db8d_prof);

        
        $__internal_b1449b95177b84f1357439b28862838fed7283534525e5271ccb5bb464bc5c8a->leave($__internal_b1449b95177b84f1357439b28862838fed7283534525e5271ccb5bb464bc5c8a_prof);

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
