<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_81f20e11ae38d23fc7d576450035e8354ecc9e578fe3d0dbeba946b899dfc962 extends Twig_Template
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
        $__internal_93b0844e17c3f3596ea29c70b68c76d3c69545728d70b2fdde4b6ec35a1b7d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b0844e17c3f3596ea29c70b68c76d3c69545728d70b2fdde4b6ec35a1b7d34->enter($__internal_93b0844e17c3f3596ea29c70b68c76d3c69545728d70b2fdde4b6ec35a1b7d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_0ee75e8e773f3c73f1109e001a1382c638dfadb3364002551190852ccc539d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee75e8e773f3c73f1109e001a1382c638dfadb3364002551190852ccc539d2d->enter($__internal_0ee75e8e773f3c73f1109e001a1382c638dfadb3364002551190852ccc539d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_93b0844e17c3f3596ea29c70b68c76d3c69545728d70b2fdde4b6ec35a1b7d34->leave($__internal_93b0844e17c3f3596ea29c70b68c76d3c69545728d70b2fdde4b6ec35a1b7d34_prof);

        
        $__internal_0ee75e8e773f3c73f1109e001a1382c638dfadb3364002551190852ccc539d2d->leave($__internal_0ee75e8e773f3c73f1109e001a1382c638dfadb3364002551190852ccc539d2d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
