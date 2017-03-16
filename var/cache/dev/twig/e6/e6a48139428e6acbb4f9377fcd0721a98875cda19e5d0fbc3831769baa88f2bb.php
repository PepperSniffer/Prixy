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
        $__internal_8f09c02a72bdde67e04e2a5efdfb077b65c0ce0c364e461d09df0ad8223555e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f09c02a72bdde67e04e2a5efdfb077b65c0ce0c364e461d09df0ad8223555e0->enter($__internal_8f09c02a72bdde67e04e2a5efdfb077b65c0ce0c364e461d09df0ad8223555e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_2b455a5b909ac6bbd85041ccf96cc83cf2c5d3f6eaa625b7f9b5e089bd657416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b455a5b909ac6bbd85041ccf96cc83cf2c5d3f6eaa625b7f9b5e089bd657416->enter($__internal_2b455a5b909ac6bbd85041ccf96cc83cf2c5d3f6eaa625b7f9b5e089bd657416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_8f09c02a72bdde67e04e2a5efdfb077b65c0ce0c364e461d09df0ad8223555e0->leave($__internal_8f09c02a72bdde67e04e2a5efdfb077b65c0ce0c364e461d09df0ad8223555e0_prof);

        
        $__internal_2b455a5b909ac6bbd85041ccf96cc83cf2c5d3f6eaa625b7f9b5e089bd657416->leave($__internal_2b455a5b909ac6bbd85041ccf96cc83cf2c5d3f6eaa625b7f9b5e089bd657416_prof);

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
