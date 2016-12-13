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
        $__internal_b0977b2eb1f34880ce4233dc6c7952b6dbd59b276fd487ae0e64913baf808dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0977b2eb1f34880ce4233dc6c7952b6dbd59b276fd487ae0e64913baf808dbc->enter($__internal_b0977b2eb1f34880ce4233dc6c7952b6dbd59b276fd487ae0e64913baf808dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_d74aeee8c525d5c7b2f9afd12b46be1e70652f482e20de253cfec9ed279f4eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74aeee8c525d5c7b2f9afd12b46be1e70652f482e20de253cfec9ed279f4eb3->enter($__internal_d74aeee8c525d5c7b2f9afd12b46be1e70652f482e20de253cfec9ed279f4eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_b0977b2eb1f34880ce4233dc6c7952b6dbd59b276fd487ae0e64913baf808dbc->leave($__internal_b0977b2eb1f34880ce4233dc6c7952b6dbd59b276fd487ae0e64913baf808dbc_prof);

        
        $__internal_d74aeee8c525d5c7b2f9afd12b46be1e70652f482e20de253cfec9ed279f4eb3->leave($__internal_d74aeee8c525d5c7b2f9afd12b46be1e70652f482e20de253cfec9ed279f4eb3_prof);

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
