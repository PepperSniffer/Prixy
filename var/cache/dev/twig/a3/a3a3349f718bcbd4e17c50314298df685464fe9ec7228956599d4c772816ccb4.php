<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_4b1f75eeec8b7379b05ec34a0746d32b8b065a2e236532b049d5b108e672e34f extends Twig_Template
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
        $__internal_36471ae4a4f32df41a26508f4bcd96904704dbe7f91d66fd09a4d8f57fbe7229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36471ae4a4f32df41a26508f4bcd96904704dbe7f91d66fd09a4d8f57fbe7229->enter($__internal_36471ae4a4f32df41a26508f4bcd96904704dbe7f91d66fd09a4d8f57fbe7229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_1fe45b0c1fa92a7de7e6f9ac9d7267a17f9dafa18141877174d295dd15c09e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe45b0c1fa92a7de7e6f9ac9d7267a17f9dafa18141877174d295dd15c09e30->enter($__internal_1fe45b0c1fa92a7de7e6f9ac9d7267a17f9dafa18141877174d295dd15c09e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_36471ae4a4f32df41a26508f4bcd96904704dbe7f91d66fd09a4d8f57fbe7229->leave($__internal_36471ae4a4f32df41a26508f4bcd96904704dbe7f91d66fd09a4d8f57fbe7229_prof);

        
        $__internal_1fe45b0c1fa92a7de7e6f9ac9d7267a17f9dafa18141877174d295dd15c09e30->leave($__internal_1fe45b0c1fa92a7de7e6f9ac9d7267a17f9dafa18141877174d295dd15c09e30_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "@Twig/Exception/logs.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\logs.html.twig");
    }
}
