<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c1540c89e9108c00a1f42bfaa3e6a1b35168a9544a47d99a0c7d0e30cd1d714a extends Twig_Template
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
        $__internal_f0e001c214f14284fd6bb15e0895c0b544ad6b97d1c8939a668471d7ee04cb2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e001c214f14284fd6bb15e0895c0b544ad6b97d1c8939a668471d7ee04cb2d->enter($__internal_f0e001c214f14284fd6bb15e0895c0b544ad6b97d1c8939a668471d7ee04cb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9dc3b2e42a9f2b46390e3b4d731e52b8b9380be1ee209c4028f838e45a0d2e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc3b2e42a9f2b46390e3b4d731e52b8b9380be1ee209c4028f838e45a0d2e11->enter($__internal_9dc3b2e42a9f2b46390e3b4d731e52b8b9380be1ee209c4028f838e45a0d2e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f0e001c214f14284fd6bb15e0895c0b544ad6b97d1c8939a668471d7ee04cb2d->leave($__internal_f0e001c214f14284fd6bb15e0895c0b544ad6b97d1c8939a668471d7ee04cb2d_prof);

        
        $__internal_9dc3b2e42a9f2b46390e3b4d731e52b8b9380be1ee209c4028f838e45a0d2e11->leave($__internal_9dc3b2e42a9f2b46390e3b4d731e52b8b9380be1ee209c4028f838e45a0d2e11_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
