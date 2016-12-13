<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_a559180a9d2e28207a0516b40e6d943a02e9f0c0970987d917f866193c4fd2be extends Twig_Template
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
        $__internal_fb0340aab63382886e169b891f0b2f9fc3b3e04e1586a445b90ebcc0bfe368bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0340aab63382886e169b891f0b2f9fc3b3e04e1586a445b90ebcc0bfe368bb->enter($__internal_fb0340aab63382886e169b891f0b2f9fc3b3e04e1586a445b90ebcc0bfe368bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_93753b6742aa62b8a8d8e41d639d98193c2a48d4cacd759be87b7a0905e3efa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93753b6742aa62b8a8d8e41d639d98193c2a48d4cacd759be87b7a0905e3efa5->enter($__internal_93753b6742aa62b8a8d8e41d639d98193c2a48d4cacd759be87b7a0905e3efa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_fb0340aab63382886e169b891f0b2f9fc3b3e04e1586a445b90ebcc0bfe368bb->leave($__internal_fb0340aab63382886e169b891f0b2f9fc3b3e04e1586a445b90ebcc0bfe368bb_prof);

        
        $__internal_93753b6742aa62b8a8d8e41d639d98193c2a48d4cacd759be87b7a0905e3efa5->leave($__internal_93753b6742aa62b8a8d8e41d639d98193c2a48d4cacd759be87b7a0905e3efa5_prof);

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
