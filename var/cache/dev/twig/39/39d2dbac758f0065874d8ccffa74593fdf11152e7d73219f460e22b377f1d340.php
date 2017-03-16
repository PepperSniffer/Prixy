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
        $__internal_ec24159b4f8b12a5105aa280b3ce1a1f8b27b88703343ba15537437e4679f41c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec24159b4f8b12a5105aa280b3ce1a1f8b27b88703343ba15537437e4679f41c->enter($__internal_ec24159b4f8b12a5105aa280b3ce1a1f8b27b88703343ba15537437e4679f41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_bfda04a1d5192cb00b5ebd121eee6ac2912a973c8d70d28876582526f3a5f97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfda04a1d5192cb00b5ebd121eee6ac2912a973c8d70d28876582526f3a5f97f->enter($__internal_bfda04a1d5192cb00b5ebd121eee6ac2912a973c8d70d28876582526f3a5f97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_ec24159b4f8b12a5105aa280b3ce1a1f8b27b88703343ba15537437e4679f41c->leave($__internal_ec24159b4f8b12a5105aa280b3ce1a1f8b27b88703343ba15537437e4679f41c_prof);

        
        $__internal_bfda04a1d5192cb00b5ebd121eee6ac2912a973c8d70d28876582526f3a5f97f->leave($__internal_bfda04a1d5192cb00b5ebd121eee6ac2912a973c8d70d28876582526f3a5f97f_prof);

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
