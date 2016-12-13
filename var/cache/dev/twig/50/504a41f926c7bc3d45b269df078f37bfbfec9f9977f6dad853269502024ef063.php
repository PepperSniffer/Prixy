<?php

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_c1af663d95f977a69b48871dd7263353768a154edf76787cf858b24ab8c5e0b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e834d5d12e8053df132854d13b4c2a43461c4ad2dbad5f11ad69bb54bf3dc05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e834d5d12e8053df132854d13b4c2a43461c4ad2dbad5f11ad69bb54bf3dc05->enter($__internal_5e834d5d12e8053df132854d13b4c2a43461c4ad2dbad5f11ad69bb54bf3dc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        $__internal_f5b52f6a738b70116da721d0c882956667f17a68c818c9c360f7046b3e646b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b52f6a738b70116da721d0c882956667f17a68c818c9c360f7046b3e646b9c->enter($__internal_f5b52f6a738b70116da721d0c882956667f17a68c818c9c360f7046b3e646b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e834d5d12e8053df132854d13b4c2a43461c4ad2dbad5f11ad69bb54bf3dc05->leave($__internal_5e834d5d12e8053df132854d13b4c2a43461c4ad2dbad5f11ad69bb54bf3dc05_prof);

        
        $__internal_f5b52f6a738b70116da721d0c882956667f17a68c818c9c360f7046b3e646b9c->leave($__internal_f5b52f6a738b70116da721d0c882956667f17a68c818c9c360f7046b3e646b9c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4081d4d2b978c1e711de9de6c55d3f83747da5e95a73b7bab4d0ea08036a5f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4081d4d2b978c1e711de9de6c55d3f83747da5e95a73b7bab4d0ea08036a5f3c->enter($__internal_4081d4d2b978c1e711de9de6c55d3f83747da5e95a73b7bab4d0ea08036a5f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_05b0e60845ed771c1d63c82f393e9e92812e0f7fc0b89b54d360c3b68d91c5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b0e60845ed771c1d63c82f393e9e92812e0f7fc0b89b54d360c3b68d91c5d1->enter($__internal_05b0e60845ed771c1d63c82f393e9e92812e0f7fc0b89b54d360c3b68d91c5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_05b0e60845ed771c1d63c82f393e9e92812e0f7fc0b89b54d360c3b68d91c5d1->leave($__internal_05b0e60845ed771c1d63c82f393e9e92812e0f7fc0b89b54d360c3b68d91c5d1_prof);

        
        $__internal_4081d4d2b978c1e711de9de6c55d3f83747da5e95a73b7bab4d0ea08036a5f3c->leave($__internal_4081d4d2b978c1e711de9de6c55d3f83747da5e95a73b7bab4d0ea08036a5f3c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a50579a60c56d027e87ea157f89e3a2b3fbd92207957611d5a9f4e02d42671f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a50579a60c56d027e87ea157f89e3a2b3fbd92207957611d5a9f4e02d42671f->enter($__internal_0a50579a60c56d027e87ea157f89e3a2b3fbd92207957611d5a9f4e02d42671f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7f37a149933282b85553724c76b6722346788163039fe01fb824e97787d84319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f37a149933282b85553724c76b6722346788163039fe01fb824e97787d84319->enter($__internal_7f37a149933282b85553724c76b6722346788163039fe01fb824e97787d84319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    <h2>Event Dispatcher</h2>

    ";
        // line 15
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array()))) {
            // line 16
            echo "        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
            // line 22
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 25
            echo $context["helper"]->getrender_table($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array()));
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array())), "html", null, true);
            echo "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 32
            if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array()))) {
                // line 33
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 44
                echo "                        ";
                echo $context["helper"]->getrender_table($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array()));
                echo "
                    ";
            }
            // line 46
            echo "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_7f37a149933282b85553724c76b6722346788163039fe01fb824e97787d84319->leave($__internal_7f37a149933282b85553724c76b6722346788163039fe01fb824e97787d84319_prof);

        
        $__internal_0a50579a60c56d027e87ea157f89e3a2b3fbd92207957611d5a9f4e02d42671f->leave($__internal_0a50579a60c56d027e87ea157f89e3a2b3fbd92207957611d5a9f4e02d42671f_prof);

    }

    // line 52
    public function getrender_table($__listeners__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listeners" => $__listeners__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_91768b2fbae497bad88d1877f46b5f9d4c68db73661cbd7a7c8524207bee0aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_91768b2fbae497bad88d1877f46b5f9d4c68db73661cbd7a7c8524207bee0aa9->enter($__internal_91768b2fbae497bad88d1877f46b5f9d4c68db73661cbd7a7c8524207bee0aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_439aefc28e0edb183e7714214e8d3f5555a94b7f79cf82d57c275ed41c385662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_439aefc28e0edb183e7714214e8d3f5555a94b7f79cf82d57c275ed41c385662->enter($__internal_439aefc28e0edb183e7714214e8d3f5555a94b7f79cf82d57c275ed41c385662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 53
            echo "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 61
            $context["previous_event"] = $this->getAttribute(twig_first($this->env, (isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners"))), "event", array());
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 63
                echo "            ";
                if (($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($context["listener"], "event", array()) != (isset($context["previous_event"]) ? $context["previous_event"] : $this->getContext($context, "previous_event"))))) {
                    // line 64
                    echo "                ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 65
                        echo "                    </tbody>
                ";
                    }
                    // line 67
                    echo "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "event", array()), "html", null, true);
                    echo "</th>
                    </tr>

                ";
                    // line 73
                    $context["previous_event"] = $this->getAttribute($context["listener"], "event", array());
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "
            <tr>
                <td class=\"text-right\">";
                // line 77
                echo twig_escape_filter($this->env, (($this->getAttribute($context["listener"], "priority", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["listener"], "priority", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">";
                // line 78
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["listener"], "data", array())));
                echo "</td>
            </tr>

            ";
                // line 81
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 82
                    echo "                </tbody>
            ";
                }
                // line 84
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    </table>
";
            
            $__internal_439aefc28e0edb183e7714214e8d3f5555a94b7f79cf82d57c275ed41c385662->leave($__internal_439aefc28e0edb183e7714214e8d3f5555a94b7f79cf82d57c275ed41c385662_prof);

            
            $__internal_91768b2fbae497bad88d1877f46b5f9d4c68db73661cbd7a7c8524207bee0aa9->leave($__internal_91768b2fbae497bad88d1877f46b5f9d4c68db73661cbd7a7c8524207bee0aa9_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 85,  243 => 84,  239 => 82,  237 => 81,  231 => 78,  227 => 77,  223 => 75,  220 => 74,  218 => 73,  212 => 70,  207 => 67,  203 => 65,  200 => 64,  197 => 63,  179 => 62,  177 => 61,  167 => 53,  149 => 52,  135 => 46,  129 => 44,  116 => 33,  114 => 32,  109 => 30,  101 => 25,  95 => 22,  91 => 20,  85 => 16,  83 => 15,  79 => 13,  70 => 12,  56 => 7,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
    <strong>Events</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Event Dispatcher</h2>

    {% if collector.calledlisteners is empty %}
        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">{{ collector.calledlisteners|length }}</span></h3>

                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledlisteners) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">{{ collector.notcalledlisteners|length }}</span></h3>
                <div class=\"tab-content\">
                    {% if collector.notcalledlisteners is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notcalledlisteners) }}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(listeners) %}
    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        {% set previous_event = (listeners|first).event %}
        {% for listener in listeners %}
            {% if loop.first or listener.event != previous_event %}
                {% if not loop.first %}
                    </tbody>
                {% endif %}

                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">{{ listener.event }}</th>
                    </tr>

                {% set previous_event = listener.event %}
            {% endif %}

            <tr>
                <td class=\"text-right\">{{ listener.priority|default('-') }}</td>
                <td class=\"font-normal\">{{ profiler_dump(listener.data) }}</td>
            </tr>

            {% if loop.last %}
                </tbody>
            {% endif %}
        {% endfor %}
    </table>
{% endmacro %}
", "@WebProfiler/Collector/events.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\events.html.twig");
    }
}
