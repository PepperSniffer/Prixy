<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6634685ffb0aa1f1edc5c12348b81b6f206d448d580893099233eb83f9db0da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62b20de5dbf227b774c09c03c2587af4f0396dec86e0bcc864d50d6f95e1c572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b20de5dbf227b774c09c03c2587af4f0396dec86e0bcc864d50d6f95e1c572->enter($__internal_62b20de5dbf227b774c09c03c2587af4f0396dec86e0bcc864d50d6f95e1c572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_510ea809bf75c726386cfd2b11c606535176800b4223559290f7d55a84e5ae7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510ea809bf75c726386cfd2b11c606535176800b4223559290f7d55a84e5ae7f->enter($__internal_510ea809bf75c726386cfd2b11c606535176800b4223559290f7d55a84e5ae7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62b20de5dbf227b774c09c03c2587af4f0396dec86e0bcc864d50d6f95e1c572->leave($__internal_62b20de5dbf227b774c09c03c2587af4f0396dec86e0bcc864d50d6f95e1c572_prof);

        
        $__internal_510ea809bf75c726386cfd2b11c606535176800b4223559290f7d55a84e5ae7f->leave($__internal_510ea809bf75c726386cfd2b11c606535176800b4223559290f7d55a84e5ae7f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3990630938ff0dff23bafb1c863092dc6cb84eb6ffcc27d233316b29f73a1909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3990630938ff0dff23bafb1c863092dc6cb84eb6ffcc27d233316b29f73a1909->enter($__internal_3990630938ff0dff23bafb1c863092dc6cb84eb6ffcc27d233316b29f73a1909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3f698e4c8f2dac04222d8fced92a7d82064d18cc3ea1cc31bc3bafe109d9211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f698e4c8f2dac04222d8fced92a7d82064d18cc3ea1cc31bc3bafe109d9211->enter($__internal_d3f698e4c8f2dac04222d8fced92a7d82064d18cc3ea1cc31bc3bafe109d9211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d3f698e4c8f2dac04222d8fced92a7d82064d18cc3ea1cc31bc3bafe109d9211->leave($__internal_d3f698e4c8f2dac04222d8fced92a7d82064d18cc3ea1cc31bc3bafe109d9211_prof);

        
        $__internal_3990630938ff0dff23bafb1c863092dc6cb84eb6ffcc27d233316b29f73a1909->leave($__internal_3990630938ff0dff23bafb1c863092dc6cb84eb6ffcc27d233316b29f73a1909_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ede49d02ababeb69c647eb56bb73033c7b5556226dfbce993d53f75ec2adb005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede49d02ababeb69c647eb56bb73033c7b5556226dfbce993d53f75ec2adb005->enter($__internal_ede49d02ababeb69c647eb56bb73033c7b5556226dfbce993d53f75ec2adb005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f50684e38998e1ca347431eb576b9c4d6635758c6c239d6be2022924726160d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50684e38998e1ca347431eb576b9c4d6635758c6c239d6be2022924726160d8->enter($__internal_f50684e38998e1ca347431eb576b9c4d6635758c6c239d6be2022924726160d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f50684e38998e1ca347431eb576b9c4d6635758c6c239d6be2022924726160d8->leave($__internal_f50684e38998e1ca347431eb576b9c4d6635758c6c239d6be2022924726160d8_prof);

        
        $__internal_ede49d02ababeb69c647eb56bb73033c7b5556226dfbce993d53f75ec2adb005->leave($__internal_ede49d02ababeb69c647eb56bb73033c7b5556226dfbce993d53f75ec2adb005_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
