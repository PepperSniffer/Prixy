<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8a6130832a620e1835cca12a6267eccddb87d4bd7ffedd4452a7336860f72dcb extends Twig_Template
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
        $__internal_2ee1b24bed5c5831a25c5150a829d709cb6e6c543ce5053a1f806d70d9d2a1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee1b24bed5c5831a25c5150a829d709cb6e6c543ce5053a1f806d70d9d2a1ee->enter($__internal_2ee1b24bed5c5831a25c5150a829d709cb6e6c543ce5053a1f806d70d9d2a1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3c9bd63dd56489ee2d57662d35d99a55ac27f01e0f97e3607fc79617d4bc0bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9bd63dd56489ee2d57662d35d99a55ac27f01e0f97e3607fc79617d4bc0bef->enter($__internal_3c9bd63dd56489ee2d57662d35d99a55ac27f01e0f97e3607fc79617d4bc0bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ee1b24bed5c5831a25c5150a829d709cb6e6c543ce5053a1f806d70d9d2a1ee->leave($__internal_2ee1b24bed5c5831a25c5150a829d709cb6e6c543ce5053a1f806d70d9d2a1ee_prof);

        
        $__internal_3c9bd63dd56489ee2d57662d35d99a55ac27f01e0f97e3607fc79617d4bc0bef->leave($__internal_3c9bd63dd56489ee2d57662d35d99a55ac27f01e0f97e3607fc79617d4bc0bef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f0e81b43843799c65a833245f7fc61dd4832b149035a4a284463b0aace4f7780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e81b43843799c65a833245f7fc61dd4832b149035a4a284463b0aace4f7780->enter($__internal_f0e81b43843799c65a833245f7fc61dd4832b149035a4a284463b0aace4f7780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_05561f9f482b1fd18c6811bb754efa47f766cdac19a3203aacdb21f61ca9f93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05561f9f482b1fd18c6811bb754efa47f766cdac19a3203aacdb21f61ca9f93a->enter($__internal_05561f9f482b1fd18c6811bb754efa47f766cdac19a3203aacdb21f61ca9f93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_05561f9f482b1fd18c6811bb754efa47f766cdac19a3203aacdb21f61ca9f93a->leave($__internal_05561f9f482b1fd18c6811bb754efa47f766cdac19a3203aacdb21f61ca9f93a_prof);

        
        $__internal_f0e81b43843799c65a833245f7fc61dd4832b149035a4a284463b0aace4f7780->leave($__internal_f0e81b43843799c65a833245f7fc61dd4832b149035a4a284463b0aace4f7780_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_40bae4e3f9f61c8a9fc52d4dba9dc15d39c0115c41158276463f083bae831453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40bae4e3f9f61c8a9fc52d4dba9dc15d39c0115c41158276463f083bae831453->enter($__internal_40bae4e3f9f61c8a9fc52d4dba9dc15d39c0115c41158276463f083bae831453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_38e5fa7c6241ad6b46d4ebe86c77dbba40e276b58c67e8b35fa60254fd1ce151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e5fa7c6241ad6b46d4ebe86c77dbba40e276b58c67e8b35fa60254fd1ce151->enter($__internal_38e5fa7c6241ad6b46d4ebe86c77dbba40e276b58c67e8b35fa60254fd1ce151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_38e5fa7c6241ad6b46d4ebe86c77dbba40e276b58c67e8b35fa60254fd1ce151->leave($__internal_38e5fa7c6241ad6b46d4ebe86c77dbba40e276b58c67e8b35fa60254fd1ce151_prof);

        
        $__internal_40bae4e3f9f61c8a9fc52d4dba9dc15d39c0115c41158276463f083bae831453->leave($__internal_40bae4e3f9f61c8a9fc52d4dba9dc15d39c0115c41158276463f083bae831453_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b2cb241f75fdf093c2291ae66a65082c153fdbedcd1082578cc38811fb24734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b2cb241f75fdf093c2291ae66a65082c153fdbedcd1082578cc38811fb24734->enter($__internal_7b2cb241f75fdf093c2291ae66a65082c153fdbedcd1082578cc38811fb24734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1041eaa3e006da793e40da2177b0e5a0ae971b3f0411b5e45a64a69ace2a9109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1041eaa3e006da793e40da2177b0e5a0ae971b3f0411b5e45a64a69ace2a9109->enter($__internal_1041eaa3e006da793e40da2177b0e5a0ae971b3f0411b5e45a64a69ace2a9109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1041eaa3e006da793e40da2177b0e5a0ae971b3f0411b5e45a64a69ace2a9109->leave($__internal_1041eaa3e006da793e40da2177b0e5a0ae971b3f0411b5e45a64a69ace2a9109_prof);

        
        $__internal_7b2cb241f75fdf093c2291ae66a65082c153fdbedcd1082578cc38811fb24734->leave($__internal_7b2cb241f75fdf093c2291ae66a65082c153fdbedcd1082578cc38811fb24734_prof);

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
