<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2fece0d2e9f17d3fad83596bd821f4a01619695de9d610906396f916378a4cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d515bc7136cbe973589c6a27ef656faa90ac104bce3709bc09b932dc3d00ccfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d515bc7136cbe973589c6a27ef656faa90ac104bce3709bc09b932dc3d00ccfc->enter($__internal_d515bc7136cbe973589c6a27ef656faa90ac104bce3709bc09b932dc3d00ccfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_66448cd0cdfeb66e69746fe9b7320df6e471285eb70e84bbd8e6cb7e4e14761f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66448cd0cdfeb66e69746fe9b7320df6e471285eb70e84bbd8e6cb7e4e14761f->enter($__internal_66448cd0cdfeb66e69746fe9b7320df6e471285eb70e84bbd8e6cb7e4e14761f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d515bc7136cbe973589c6a27ef656faa90ac104bce3709bc09b932dc3d00ccfc->leave($__internal_d515bc7136cbe973589c6a27ef656faa90ac104bce3709bc09b932dc3d00ccfc_prof);

        
        $__internal_66448cd0cdfeb66e69746fe9b7320df6e471285eb70e84bbd8e6cb7e4e14761f->leave($__internal_66448cd0cdfeb66e69746fe9b7320df6e471285eb70e84bbd8e6cb7e4e14761f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5fde95ad771da5b48b1beda8b3533999e88cfa40b170ec46158676eb06315982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fde95ad771da5b48b1beda8b3533999e88cfa40b170ec46158676eb06315982->enter($__internal_5fde95ad771da5b48b1beda8b3533999e88cfa40b170ec46158676eb06315982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c2dfa71fd9956c57c381b61fcaf95d9d75f18988bedee1f619a0cafdaa05659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2dfa71fd9956c57c381b61fcaf95d9d75f18988bedee1f619a0cafdaa05659->enter($__internal_7c2dfa71fd9956c57c381b61fcaf95d9d75f18988bedee1f619a0cafdaa05659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7c2dfa71fd9956c57c381b61fcaf95d9d75f18988bedee1f619a0cafdaa05659->leave($__internal_7c2dfa71fd9956c57c381b61fcaf95d9d75f18988bedee1f619a0cafdaa05659_prof);

        
        $__internal_5fde95ad771da5b48b1beda8b3533999e88cfa40b170ec46158676eb06315982->leave($__internal_5fde95ad771da5b48b1beda8b3533999e88cfa40b170ec46158676eb06315982_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
