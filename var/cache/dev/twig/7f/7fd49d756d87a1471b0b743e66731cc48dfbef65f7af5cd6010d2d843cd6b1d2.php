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
        $__internal_8d6a502177b06e1c440687ed18c7e3b62c2465999bf812d15b3427d670278339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6a502177b06e1c440687ed18c7e3b62c2465999bf812d15b3427d670278339->enter($__internal_8d6a502177b06e1c440687ed18c7e3b62c2465999bf812d15b3427d670278339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_090d6359d698bb3e1ce1085b51ad93acf05876c365c386c4554a82397b7f1bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090d6359d698bb3e1ce1085b51ad93acf05876c365c386c4554a82397b7f1bd7->enter($__internal_090d6359d698bb3e1ce1085b51ad93acf05876c365c386c4554a82397b7f1bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8d6a502177b06e1c440687ed18c7e3b62c2465999bf812d15b3427d670278339->leave($__internal_8d6a502177b06e1c440687ed18c7e3b62c2465999bf812d15b3427d670278339_prof);

        
        $__internal_090d6359d698bb3e1ce1085b51ad93acf05876c365c386c4554a82397b7f1bd7->leave($__internal_090d6359d698bb3e1ce1085b51ad93acf05876c365c386c4554a82397b7f1bd7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1de3f8d4ce1c5ffdc56144f4bae43bd56cfbc5b0413ab3b96bddca92f80b31f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de3f8d4ce1c5ffdc56144f4bae43bd56cfbc5b0413ab3b96bddca92f80b31f4->enter($__internal_1de3f8d4ce1c5ffdc56144f4bae43bd56cfbc5b0413ab3b96bddca92f80b31f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bcef58d682efa8eb67ccc1e9bbb216169ed59e7788a99cc3fcdb608765b87a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcef58d682efa8eb67ccc1e9bbb216169ed59e7788a99cc3fcdb608765b87a25->enter($__internal_bcef58d682efa8eb67ccc1e9bbb216169ed59e7788a99cc3fcdb608765b87a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bcef58d682efa8eb67ccc1e9bbb216169ed59e7788a99cc3fcdb608765b87a25->leave($__internal_bcef58d682efa8eb67ccc1e9bbb216169ed59e7788a99cc3fcdb608765b87a25_prof);

        
        $__internal_1de3f8d4ce1c5ffdc56144f4bae43bd56cfbc5b0413ab3b96bddca92f80b31f4->leave($__internal_1de3f8d4ce1c5ffdc56144f4bae43bd56cfbc5b0413ab3b96bddca92f80b31f4_prof);

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
