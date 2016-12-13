<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_03e308b38c70ef4fa843d25be69ad83370873a005c207772dfa412e03cd79b7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_331deb387ef7e0e17863341519a4bb531aed57b360e94b7215dd4e1462ada769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331deb387ef7e0e17863341519a4bb531aed57b360e94b7215dd4e1462ada769->enter($__internal_331deb387ef7e0e17863341519a4bb531aed57b360e94b7215dd4e1462ada769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_84299a4ecd12929daacf5dcf6ab0c21c2c8922441b8e66a4070240fe6ff5b8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84299a4ecd12929daacf5dcf6ab0c21c2c8922441b8e66a4070240fe6ff5b8a4->enter($__internal_84299a4ecd12929daacf5dcf6ab0c21c2c8922441b8e66a4070240fe6ff5b8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_331deb387ef7e0e17863341519a4bb531aed57b360e94b7215dd4e1462ada769->leave($__internal_331deb387ef7e0e17863341519a4bb531aed57b360e94b7215dd4e1462ada769_prof);

        
        $__internal_84299a4ecd12929daacf5dcf6ab0c21c2c8922441b8e66a4070240fe6ff5b8a4->leave($__internal_84299a4ecd12929daacf5dcf6ab0c21c2c8922441b8e66a4070240fe6ff5b8a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6f3d1e6cd60fcc15217580908c26e7ffbb24e404f5b890bf04ea9d31e201b2b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3d1e6cd60fcc15217580908c26e7ffbb24e404f5b890bf04ea9d31e201b2b5->enter($__internal_6f3d1e6cd60fcc15217580908c26e7ffbb24e404f5b890bf04ea9d31e201b2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fb907742b27dd5177645a14c7417b9dc44bd4e0e08215f05f0b9f073e88067ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb907742b27dd5177645a14c7417b9dc44bd4e0e08215f05f0b9f073e88067ef->enter($__internal_fb907742b27dd5177645a14c7417b9dc44bd4e0e08215f05f0b9f073e88067ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fb907742b27dd5177645a14c7417b9dc44bd4e0e08215f05f0b9f073e88067ef->leave($__internal_fb907742b27dd5177645a14c7417b9dc44bd4e0e08215f05f0b9f073e88067ef_prof);

        
        $__internal_6f3d1e6cd60fcc15217580908c26e7ffbb24e404f5b890bf04ea9d31e201b2b5->leave($__internal_6f3d1e6cd60fcc15217580908c26e7ffbb24e404f5b890bf04ea9d31e201b2b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_14bd126f553d041f8d0937a3c79e29fccca62239af4f375baebe826e1c160f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14bd126f553d041f8d0937a3c79e29fccca62239af4f375baebe826e1c160f5a->enter($__internal_14bd126f553d041f8d0937a3c79e29fccca62239af4f375baebe826e1c160f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b2d402c4d507c118e51f385b43f2ad775f41f4bad1bd046139c1fd2f3266ab5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d402c4d507c118e51f385b43f2ad775f41f4bad1bd046139c1fd2f3266ab5d->enter($__internal_b2d402c4d507c118e51f385b43f2ad775f41f4bad1bd046139c1fd2f3266ab5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b2d402c4d507c118e51f385b43f2ad775f41f4bad1bd046139c1fd2f3266ab5d->leave($__internal_b2d402c4d507c118e51f385b43f2ad775f41f4bad1bd046139c1fd2f3266ab5d_prof);

        
        $__internal_14bd126f553d041f8d0937a3c79e29fccca62239af4f375baebe826e1c160f5a->leave($__internal_14bd126f553d041f8d0937a3c79e29fccca62239af4f375baebe826e1c160f5a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d72f97c49d7e6a0f69ff16b86ee3f026726fc2dcf40ea7e533a92ff52438060f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72f97c49d7e6a0f69ff16b86ee3f026726fc2dcf40ea7e533a92ff52438060f->enter($__internal_d72f97c49d7e6a0f69ff16b86ee3f026726fc2dcf40ea7e533a92ff52438060f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3484c0d6cc26fcce087c4a9c30caaa29270fe06e82319dc25275152ec73f2772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3484c0d6cc26fcce087c4a9c30caaa29270fe06e82319dc25275152ec73f2772->enter($__internal_3484c0d6cc26fcce087c4a9c30caaa29270fe06e82319dc25275152ec73f2772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3484c0d6cc26fcce087c4a9c30caaa29270fe06e82319dc25275152ec73f2772->leave($__internal_3484c0d6cc26fcce087c4a9c30caaa29270fe06e82319dc25275152ec73f2772_prof);

        
        $__internal_d72f97c49d7e6a0f69ff16b86ee3f026726fc2dcf40ea7e533a92ff52438060f->leave($__internal_d72f97c49d7e6a0f69ff16b86ee3f026726fc2dcf40ea7e533a92ff52438060f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
