<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_7d37fec5a7f2a98b12308671de047a0a47d27de7859400d9fbe1508fc9611b66 extends Twig_Template
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
        $__internal_d5132fcfd7773c817a52cf6370c1b414f99215ca098e02a6af291bba3d00cadc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5132fcfd7773c817a52cf6370c1b414f99215ca098e02a6af291bba3d00cadc->enter($__internal_d5132fcfd7773c817a52cf6370c1b414f99215ca098e02a6af291bba3d00cadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_9c8c29b659a813cbfce35d8c7b27c17b0023b40b211da33d950be44a77f73e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8c29b659a813cbfce35d8c7b27c17b0023b40b211da33d950be44a77f73e2f->enter($__internal_9c8c29b659a813cbfce35d8c7b27c17b0023b40b211da33d950be44a77f73e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d5132fcfd7773c817a52cf6370c1b414f99215ca098e02a6af291bba3d00cadc->leave($__internal_d5132fcfd7773c817a52cf6370c1b414f99215ca098e02a6af291bba3d00cadc_prof);

        
        $__internal_9c8c29b659a813cbfce35d8c7b27c17b0023b40b211da33d950be44a77f73e2f->leave($__internal_9c8c29b659a813cbfce35d8c7b27c17b0023b40b211da33d950be44a77f73e2f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
