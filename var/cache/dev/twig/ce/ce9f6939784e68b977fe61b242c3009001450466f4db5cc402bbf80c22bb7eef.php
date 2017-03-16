<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_7d4239cd08dc0e539d4873e36ac66d0ef221c02d7731883911e76c4d4383e65e extends Twig_Template
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
        $__internal_f2dbeb59ae681d9cac2268fee38914d8f6db37cc8ec918cb11e24a57de5b167a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2dbeb59ae681d9cac2268fee38914d8f6db37cc8ec918cb11e24a57de5b167a->enter($__internal_f2dbeb59ae681d9cac2268fee38914d8f6db37cc8ec918cb11e24a57de5b167a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_da98ecc3f172e5afb636ec08310a1af6bb53ee1a5e0d6998d8b33887f3effc35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da98ecc3f172e5afb636ec08310a1af6bb53ee1a5e0d6998d8b33887f3effc35->enter($__internal_da98ecc3f172e5afb636ec08310a1af6bb53ee1a5e0d6998d8b33887f3effc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_f2dbeb59ae681d9cac2268fee38914d8f6db37cc8ec918cb11e24a57de5b167a->leave($__internal_f2dbeb59ae681d9cac2268fee38914d8f6db37cc8ec918cb11e24a57de5b167a_prof);

        
        $__internal_da98ecc3f172e5afb636ec08310a1af6bb53ee1a5e0d6998d8b33887f3effc35->leave($__internal_da98ecc3f172e5afb636ec08310a1af6bb53ee1a5e0d6998d8b33887f3effc35_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
