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
        $__internal_74cb5f3b3eb08901902345a55ef97855bbaa8a1711b4f2120f45329ee7e87c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74cb5f3b3eb08901902345a55ef97855bbaa8a1711b4f2120f45329ee7e87c4e->enter($__internal_74cb5f3b3eb08901902345a55ef97855bbaa8a1711b4f2120f45329ee7e87c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_527bc591d85600349d0b0e181f162633c8b260b5bd824c02fb1ef6413b93a2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527bc591d85600349d0b0e181f162633c8b260b5bd824c02fb1ef6413b93a2e1->enter($__internal_527bc591d85600349d0b0e181f162633c8b260b5bd824c02fb1ef6413b93a2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_74cb5f3b3eb08901902345a55ef97855bbaa8a1711b4f2120f45329ee7e87c4e->leave($__internal_74cb5f3b3eb08901902345a55ef97855bbaa8a1711b4f2120f45329ee7e87c4e_prof);

        
        $__internal_527bc591d85600349d0b0e181f162633c8b260b5bd824c02fb1ef6413b93a2e1->leave($__internal_527bc591d85600349d0b0e181f162633c8b260b5bd824c02fb1ef6413b93a2e1_prof);

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
