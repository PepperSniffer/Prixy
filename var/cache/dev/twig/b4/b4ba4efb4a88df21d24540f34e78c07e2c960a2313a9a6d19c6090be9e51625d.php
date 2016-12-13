<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_3e8cccfddde4d78c607f36820070a6b19b09d231dbab799aa4ff6fc75337a8bf extends Twig_Template
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
        $__internal_a4e11a6c8c9707c3c123cacd0489aa937a7dec1fb47bc1978ec8347833b93e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e11a6c8c9707c3c123cacd0489aa937a7dec1fb47bc1978ec8347833b93e75->enter($__internal_a4e11a6c8c9707c3c123cacd0489aa937a7dec1fb47bc1978ec8347833b93e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_bb6596b58ff0d66a4394e12328b90e224d4361955ac480e03839078c6dec4568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6596b58ff0d66a4394e12328b90e224d4361955ac480e03839078c6dec4568->enter($__internal_bb6596b58ff0d66a4394e12328b90e224d4361955ac480e03839078c6dec4568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_a4e11a6c8c9707c3c123cacd0489aa937a7dec1fb47bc1978ec8347833b93e75->leave($__internal_a4e11a6c8c9707c3c123cacd0489aa937a7dec1fb47bc1978ec8347833b93e75_prof);

        
        $__internal_bb6596b58ff0d66a4394e12328b90e224d4361955ac480e03839078c6dec4568->leave($__internal_bb6596b58ff0d66a4394e12328b90e224d4361955ac480e03839078c6dec4568_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
