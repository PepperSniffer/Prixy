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
        $__internal_79eafaf3e880ef1ccb6918ee52c37ddc0fd22388636c66f054a8df8fafb921cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79eafaf3e880ef1ccb6918ee52c37ddc0fd22388636c66f054a8df8fafb921cd->enter($__internal_79eafaf3e880ef1ccb6918ee52c37ddc0fd22388636c66f054a8df8fafb921cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_b51ce7bb1e139965c7460748e0fa9b33284aa5724fbf74f523e1f78e83e63356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51ce7bb1e139965c7460748e0fa9b33284aa5724fbf74f523e1f78e83e63356->enter($__internal_b51ce7bb1e139965c7460748e0fa9b33284aa5724fbf74f523e1f78e83e63356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_79eafaf3e880ef1ccb6918ee52c37ddc0fd22388636c66f054a8df8fafb921cd->leave($__internal_79eafaf3e880ef1ccb6918ee52c37ddc0fd22388636c66f054a8df8fafb921cd_prof);

        
        $__internal_b51ce7bb1e139965c7460748e0fa9b33284aa5724fbf74f523e1f78e83e63356->leave($__internal_b51ce7bb1e139965c7460748e0fa9b33284aa5724fbf74f523e1f78e83e63356_prof);

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
