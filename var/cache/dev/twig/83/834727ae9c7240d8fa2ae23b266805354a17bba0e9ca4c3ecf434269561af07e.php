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
        $__internal_c2f75edecff0c425c244b7f1138796041ca2608fc8ed1e8b98d05b393223eb49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f75edecff0c425c244b7f1138796041ca2608fc8ed1e8b98d05b393223eb49->enter($__internal_c2f75edecff0c425c244b7f1138796041ca2608fc8ed1e8b98d05b393223eb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_24e0cc3fdd5b88d8dfdf46a4e96d81d5b70ca9015abd2e8b58b9debaff740efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e0cc3fdd5b88d8dfdf46a4e96d81d5b70ca9015abd2e8b58b9debaff740efd->enter($__internal_24e0cc3fdd5b88d8dfdf46a4e96d81d5b70ca9015abd2e8b58b9debaff740efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_c2f75edecff0c425c244b7f1138796041ca2608fc8ed1e8b98d05b393223eb49->leave($__internal_c2f75edecff0c425c244b7f1138796041ca2608fc8ed1e8b98d05b393223eb49_prof);

        
        $__internal_24e0cc3fdd5b88d8dfdf46a4e96d81d5b70ca9015abd2e8b58b9debaff740efd->leave($__internal_24e0cc3fdd5b88d8dfdf46a4e96d81d5b70ca9015abd2e8b58b9debaff740efd_prof);

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
