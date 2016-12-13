<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a20ee0b79030f7401af43c27ec1da3af057ea5f8a7def5675c1de0b4cdb42bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_edbd18af881b4384636cbbdbaac4efdec91ea6767511b4d14253f8591e65a949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edbd18af881b4384636cbbdbaac4efdec91ea6767511b4d14253f8591e65a949->enter($__internal_edbd18af881b4384636cbbdbaac4efdec91ea6767511b4d14253f8591e65a949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_72dbdb7017fe344bd0916b210ff8abc3dbdbf41a32112004ec5d5c234e6606f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72dbdb7017fe344bd0916b210ff8abc3dbdbf41a32112004ec5d5c234e6606f8->enter($__internal_72dbdb7017fe344bd0916b210ff8abc3dbdbf41a32112004ec5d5c234e6606f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edbd18af881b4384636cbbdbaac4efdec91ea6767511b4d14253f8591e65a949->leave($__internal_edbd18af881b4384636cbbdbaac4efdec91ea6767511b4d14253f8591e65a949_prof);

        
        $__internal_72dbdb7017fe344bd0916b210ff8abc3dbdbf41a32112004ec5d5c234e6606f8->leave($__internal_72dbdb7017fe344bd0916b210ff8abc3dbdbf41a32112004ec5d5c234e6606f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e2f26907f5c4ee84ec4dec8ac463b13574690494a319a3b32a6b708c32fb91f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e2f26907f5c4ee84ec4dec8ac463b13574690494a319a3b32a6b708c32fb91f->enter($__internal_5e2f26907f5c4ee84ec4dec8ac463b13574690494a319a3b32a6b708c32fb91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_69e69b645e914c528c1b76be52ac26dcb7b0181bd5be40a7be00612d29459dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e69b645e914c528c1b76be52ac26dcb7b0181bd5be40a7be00612d29459dce->enter($__internal_69e69b645e914c528c1b76be52ac26dcb7b0181bd5be40a7be00612d29459dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_69e69b645e914c528c1b76be52ac26dcb7b0181bd5be40a7be00612d29459dce->leave($__internal_69e69b645e914c528c1b76be52ac26dcb7b0181bd5be40a7be00612d29459dce_prof);

        
        $__internal_5e2f26907f5c4ee84ec4dec8ac463b13574690494a319a3b32a6b708c32fb91f->leave($__internal_5e2f26907f5c4ee84ec4dec8ac463b13574690494a319a3b32a6b708c32fb91f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_105796c59410772ac5078af504d74308a9ac0b5bf71b34653eb3d2e7baefa26f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_105796c59410772ac5078af504d74308a9ac0b5bf71b34653eb3d2e7baefa26f->enter($__internal_105796c59410772ac5078af504d74308a9ac0b5bf71b34653eb3d2e7baefa26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e280344f406e8b1aba27393a892af42079ef2787d1100bf3fc0f67cd63c8f227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e280344f406e8b1aba27393a892af42079ef2787d1100bf3fc0f67cd63c8f227->enter($__internal_e280344f406e8b1aba27393a892af42079ef2787d1100bf3fc0f67cd63c8f227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e280344f406e8b1aba27393a892af42079ef2787d1100bf3fc0f67cd63c8f227->leave($__internal_e280344f406e8b1aba27393a892af42079ef2787d1100bf3fc0f67cd63c8f227_prof);

        
        $__internal_105796c59410772ac5078af504d74308a9ac0b5bf71b34653eb3d2e7baefa26f->leave($__internal_105796c59410772ac5078af504d74308a9ac0b5bf71b34653eb3d2e7baefa26f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b68c798b2317a050c8af1d6d50d6797989e115c36882a5620a71522b1a55402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b68c798b2317a050c8af1d6d50d6797989e115c36882a5620a71522b1a55402->enter($__internal_1b68c798b2317a050c8af1d6d50d6797989e115c36882a5620a71522b1a55402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1fdbe86a506492ac30acc26aa5cc8da88f44c03d734fbba3449857b69e94aa92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdbe86a506492ac30acc26aa5cc8da88f44c03d734fbba3449857b69e94aa92->enter($__internal_1fdbe86a506492ac30acc26aa5cc8da88f44c03d734fbba3449857b69e94aa92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1fdbe86a506492ac30acc26aa5cc8da88f44c03d734fbba3449857b69e94aa92->leave($__internal_1fdbe86a506492ac30acc26aa5cc8da88f44c03d734fbba3449857b69e94aa92_prof);

        
        $__internal_1b68c798b2317a050c8af1d6d50d6797989e115c36882a5620a71522b1a55402->leave($__internal_1b68c798b2317a050c8af1d6d50d6797989e115c36882a5620a71522b1a55402_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
