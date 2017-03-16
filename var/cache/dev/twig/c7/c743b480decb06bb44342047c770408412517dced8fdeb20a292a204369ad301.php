<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_2e734cd660ee3c4f50eb3140ec2bf28637c9c3e77302371c7f2481a624991f78 extends Twig_Template
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
        $__internal_6ae991b92dc5b691935cf8f9faabb729fa589c26bfc13407796b31c9bcd791bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae991b92dc5b691935cf8f9faabb729fa589c26bfc13407796b31c9bcd791bd->enter($__internal_6ae991b92dc5b691935cf8f9faabb729fa589c26bfc13407796b31c9bcd791bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_cea7b02816f954754b3e4e45456f566010fc5ed9cdc09b68229110609ff3dd7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea7b02816f954754b3e4e45456f566010fc5ed9cdc09b68229110609ff3dd7d->enter($__internal_cea7b02816f954754b3e4e45456f566010fc5ed9cdc09b68229110609ff3dd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6ae991b92dc5b691935cf8f9faabb729fa589c26bfc13407796b31c9bcd791bd->leave($__internal_6ae991b92dc5b691935cf8f9faabb729fa589c26bfc13407796b31c9bcd791bd_prof);

        
        $__internal_cea7b02816f954754b3e4e45456f566010fc5ed9cdc09b68229110609ff3dd7d->leave($__internal_cea7b02816f954754b3e4e45456f566010fc5ed9cdc09b68229110609ff3dd7d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
