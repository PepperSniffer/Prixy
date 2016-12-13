<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c0fa5db6c1574c33747ac0eb3d73c6ac7d1af660be42f4f9a0f238270e1a696a extends Twig_Template
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
        $__internal_4f771124b608e28bf6c3e2201127e3b2add2ec1a66cfdd2f35fb5d890f243edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f771124b608e28bf6c3e2201127e3b2add2ec1a66cfdd2f35fb5d890f243edd->enter($__internal_4f771124b608e28bf6c3e2201127e3b2add2ec1a66cfdd2f35fb5d890f243edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_727c3d6691e90de0370e27924b29b3e41bf0823fb93c0d207215b7929fd70702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727c3d6691e90de0370e27924b29b3e41bf0823fb93c0d207215b7929fd70702->enter($__internal_727c3d6691e90de0370e27924b29b3e41bf0823fb93c0d207215b7929fd70702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4f771124b608e28bf6c3e2201127e3b2add2ec1a66cfdd2f35fb5d890f243edd->leave($__internal_4f771124b608e28bf6c3e2201127e3b2add2ec1a66cfdd2f35fb5d890f243edd_prof);

        
        $__internal_727c3d6691e90de0370e27924b29b3e41bf0823fb93c0d207215b7929fd70702->leave($__internal_727c3d6691e90de0370e27924b29b3e41bf0823fb93c0d207215b7929fd70702_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
