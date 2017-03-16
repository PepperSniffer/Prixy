<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f1a2ec23ab992e171c6629d6dfc65fcbb608b4b277d57327ed6d12781ec8a095 extends Twig_Template
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
        $__internal_16da1003c8a4ef4f277e0065f9cece001f28446102d1917dcbfb46373445e7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16da1003c8a4ef4f277e0065f9cece001f28446102d1917dcbfb46373445e7ed->enter($__internal_16da1003c8a4ef4f277e0065f9cece001f28446102d1917dcbfb46373445e7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_c1f37df194f3af4a612cb3109e9798f9221093a79bec21055d2c7a63a3ad375f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f37df194f3af4a612cb3109e9798f9221093a79bec21055d2c7a63a3ad375f->enter($__internal_c1f37df194f3af4a612cb3109e9798f9221093a79bec21055d2c7a63a3ad375f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_16da1003c8a4ef4f277e0065f9cece001f28446102d1917dcbfb46373445e7ed->leave($__internal_16da1003c8a4ef4f277e0065f9cece001f28446102d1917dcbfb46373445e7ed_prof);

        
        $__internal_c1f37df194f3af4a612cb3109e9798f9221093a79bec21055d2c7a63a3ad375f->leave($__internal_c1f37df194f3af4a612cb3109e9798f9221093a79bec21055d2c7a63a3ad375f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
