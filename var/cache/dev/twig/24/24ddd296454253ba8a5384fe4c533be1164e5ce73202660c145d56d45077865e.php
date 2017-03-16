<?php

/* PrixyBundle:Default:index.html.twig */
class __TwigTemplate_3e1997245b69dcf1fd623e50c81fc6a4bddfdacb78e9d23165545a7b25cd9106 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PrixyBundle:Default:layout.html.twig", "PrixyBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrixyBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c36279f4276f322555e084100001a9184df109e08069272de5f12edfd90914d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c36279f4276f322555e084100001a9184df109e08069272de5f12edfd90914d->enter($__internal_6c36279f4276f322555e084100001a9184df109e08069272de5f12edfd90914d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:index.html.twig"));

        $__internal_f8dabdb653c87e57a2863a7616261e244a57d71bea6180082318cda8bf642fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8dabdb653c87e57a2863a7616261e244a57d71bea6180082318cda8bf642fde->enter($__internal_f8dabdb653c87e57a2863a7616261e244a57d71bea6180082318cda8bf642fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c36279f4276f322555e084100001a9184df109e08069272de5f12edfd90914d->leave($__internal_6c36279f4276f322555e084100001a9184df109e08069272de5f12edfd90914d_prof);

        
        $__internal_f8dabdb653c87e57a2863a7616261e244a57d71bea6180082318cda8bf642fde->leave($__internal_f8dabdb653c87e57a2863a7616261e244a57d71bea6180082318cda8bf642fde_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_1b9b0475c0f386400fe5c649d58ad9407c2ae57ae2518bf6e6f557155faa7970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b9b0475c0f386400fe5c649d58ad9407c2ae57ae2518bf6e6f557155faa7970->enter($__internal_1b9b0475c0f386400fe5c649d58ad9407c2ae57ae2518bf6e6f557155faa7970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a7e6f31ef6768f576aca1d6fa2b27f3fd83e4ecd34c354ddc5ed4d6d306b35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7e6f31ef6768f576aca1d6fa2b27f3fd83e4ecd34c354ddc5ed4d6d306b35e->enter($__internal_5a7e6f31ef6768f576aca1d6fa2b27f3fd83e4ecd34c354ddc5ed4d6d306b35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <div class=\"row\">
        <div id=\"Wallpaper_display\">
            <div class=\"wallpaper_content\">
                <h1  id=\"nom_logo\"class=\"center-text\">Prixy</h1>
                <span id=\"sous_logo\"class=\"center-text \"> ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("index.title"), "html", null, true);
        echo " </span>
            </div>
        </div>
    </div>

    <div class=\"row \">
        <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("index.content"), "html", null, true);
        echo "
        </p>

    </div>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"position_profil\">
                <figure>
                    <img class=\"img-circle img-thumbnail img_personnel\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/prixy/media/Portrait/millot.png"), "html", null, true);
        echo "\">
                    <figcaption>
                        <span>S.Millot</span>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"position_profil\">
                <figure>
                    <img class=\"img-circle img-thumbnail img_personnel\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/prixy/media/Portrait/schmitt.png"), "html", null, true);
        echo "\">
                    <figcaption>
                        <span>L.Schmitt</span>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"position_profil\">
                <figure>
                    <img class=\"img-circle img-thumbnail img_personnel\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/prixy/media/Portrait/joubert.png"), "html", null, true);
        echo "\" >
                    <figcaption>
                        <span>C.Joubert</span>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>





";
        
        $__internal_5a7e6f31ef6768f576aca1d6fa2b27f3fd83e4ecd34c354ddc5ed4d6d306b35e->leave($__internal_5a7e6f31ef6768f576aca1d6fa2b27f3fd83e4ecd34c354ddc5ed4d6d306b35e_prof);

        
        $__internal_1b9b0475c0f386400fe5c649d58ad9407c2ae57ae2518bf6e6f557155faa7970->leave($__internal_1b9b0475c0f386400fe5c649d58ad9407c2ae57ae2518bf6e6f557155faa7970_prof);

    }

    public function getTemplateName()
    {
        return "PrixyBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 42,  89 => 32,  76 => 22,  65 => 14,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'PrixyBundle:Default:layout.html.twig' %}
{% block content %}

    <div class=\"row\">
        <div id=\"Wallpaper_display\">
            <div class=\"wallpaper_content\">
                <h1  id=\"nom_logo\"class=\"center-text\">Prixy</h1>
                <span id=\"sous_logo\"class=\"center-text \"> {{ 'index.title'|trans }} </span>
            </div>
        </div>
    </div>

    <div class=\"row \">
        <p>{{ 'index.content'|trans }}
        </p>

    </div>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"position_profil\">
                <figure>
                    <img class=\"img-circle img-thumbnail img_personnel\" src=\"{{asset('bundles/prixy/media/Portrait/millot.png')}}\">
                    <figcaption>
                        <span>S.Millot</span>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"position_profil\">
                <figure>
                    <img class=\"img-circle img-thumbnail img_personnel\" src=\"{{asset('bundles/prixy/media/Portrait/schmitt.png')}}\">
                    <figcaption>
                        <span>L.Schmitt</span>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"position_profil\">
                <figure>
                    <img class=\"img-circle img-thumbnail img_personnel\" src=\"{{asset('bundles/prixy/media/Portrait/joubert.png')}}\" >
                    <figcaption>
                        <span>C.Joubert</span>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>





{%  endblock content %}", "PrixyBundle:Default:index.html.twig", "C:\\wamp\\apps\\Prixy\\src\\PrixyBundle/Resources/views/Default/index.html.twig");
    }
}
