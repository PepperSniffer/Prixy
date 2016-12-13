<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b12d2c583db796d83285a710f0907c2b0970f18aa57cc896afb93e7a2c5fb45c extends Twig_Template
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
        $__internal_0ad7c08785ce138e9f83b31bf4963e4bf0268949a359ef0c98974b82b1488fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad7c08785ce138e9f83b31bf4963e4bf0268949a359ef0c98974b82b1488fbd->enter($__internal_0ad7c08785ce138e9f83b31bf4963e4bf0268949a359ef0c98974b82b1488fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3c2e650a10eb77ce34f38546b7ab9d19757329433761e2670dfc6d201dd8fe9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2e650a10eb77ce34f38546b7ab9d19757329433761e2670dfc6d201dd8fe9d->enter($__internal_3c2e650a10eb77ce34f38546b7ab9d19757329433761e2670dfc6d201dd8fe9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0ad7c08785ce138e9f83b31bf4963e4bf0268949a359ef0c98974b82b1488fbd->leave($__internal_0ad7c08785ce138e9f83b31bf4963e4bf0268949a359ef0c98974b82b1488fbd_prof);

        
        $__internal_3c2e650a10eb77ce34f38546b7ab9d19757329433761e2670dfc6d201dd8fe9d->leave($__internal_3c2e650a10eb77ce34f38546b7ab9d19757329433761e2670dfc6d201dd8fe9d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
