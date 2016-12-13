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
        $__internal_79b0087ed3e941d73bd26beb40441c0b11e81c96af30d7788b0e3784c3ade68d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b0087ed3e941d73bd26beb40441c0b11e81c96af30d7788b0e3784c3ade68d->enter($__internal_79b0087ed3e941d73bd26beb40441c0b11e81c96af30d7788b0e3784c3ade68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_cbb0716d79b84bd9bec7b4fe197e4cd5db1426752d8f0d59c171c3575ee842cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb0716d79b84bd9bec7b4fe197e4cd5db1426752d8f0d59c171c3575ee842cd->enter($__internal_cbb0716d79b84bd9bec7b4fe197e4cd5db1426752d8f0d59c171c3575ee842cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_79b0087ed3e941d73bd26beb40441c0b11e81c96af30d7788b0e3784c3ade68d->leave($__internal_79b0087ed3e941d73bd26beb40441c0b11e81c96af30d7788b0e3784c3ade68d_prof);

        
        $__internal_cbb0716d79b84bd9bec7b4fe197e4cd5db1426752d8f0d59c171c3575ee842cd->leave($__internal_cbb0716d79b84bd9bec7b4fe197e4cd5db1426752d8f0d59c171c3575ee842cd_prof);

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
