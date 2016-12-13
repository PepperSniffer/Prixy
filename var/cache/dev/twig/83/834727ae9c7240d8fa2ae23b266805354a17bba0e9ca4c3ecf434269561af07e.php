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
        $__internal_6ca895f7abafdb9b7174f28197df0326215105b92386025a9d9957ccab9c3e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca895f7abafdb9b7174f28197df0326215105b92386025a9d9957ccab9c3e38->enter($__internal_6ca895f7abafdb9b7174f28197df0326215105b92386025a9d9957ccab9c3e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_47463aee6dcc8a59d6f9831968bf359223fe5ce817f5eb09eaf3502c25b2484a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47463aee6dcc8a59d6f9831968bf359223fe5ce817f5eb09eaf3502c25b2484a->enter($__internal_47463aee6dcc8a59d6f9831968bf359223fe5ce817f5eb09eaf3502c25b2484a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_6ca895f7abafdb9b7174f28197df0326215105b92386025a9d9957ccab9c3e38->leave($__internal_6ca895f7abafdb9b7174f28197df0326215105b92386025a9d9957ccab9c3e38_prof);

        
        $__internal_47463aee6dcc8a59d6f9831968bf359223fe5ce817f5eb09eaf3502c25b2484a->leave($__internal_47463aee6dcc8a59d6f9831968bf359223fe5ce817f5eb09eaf3502c25b2484a_prof);

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
