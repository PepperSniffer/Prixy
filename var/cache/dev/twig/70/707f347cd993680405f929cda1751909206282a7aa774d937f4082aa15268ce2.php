<?php

/* @Prixy/Default/index.html.twig */
class __TwigTemplate_1dc037eff9c878939f59eac6cb8fd8db68df15440cf6fbe22a8bbc866eca20c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PrixyBundle:Default:layout.html.twig", "@Prixy/Default/index.html.twig", 1);
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
        $__internal_49d19879f691ad2f4dfa97de1c4a749ca44bdf99e6be085aa8b1e16f8a41c943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d19879f691ad2f4dfa97de1c4a749ca44bdf99e6be085aa8b1e16f8a41c943->enter($__internal_49d19879f691ad2f4dfa97de1c4a749ca44bdf99e6be085aa8b1e16f8a41c943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/index.html.twig"));

        $__internal_07e083acca5af721ac8a699057ba7dedfccbfade6b27d384701a3eaff018b831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e083acca5af721ac8a699057ba7dedfccbfade6b27d384701a3eaff018b831->enter($__internal_07e083acca5af721ac8a699057ba7dedfccbfade6b27d384701a3eaff018b831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49d19879f691ad2f4dfa97de1c4a749ca44bdf99e6be085aa8b1e16f8a41c943->leave($__internal_49d19879f691ad2f4dfa97de1c4a749ca44bdf99e6be085aa8b1e16f8a41c943_prof);

        
        $__internal_07e083acca5af721ac8a699057ba7dedfccbfade6b27d384701a3eaff018b831->leave($__internal_07e083acca5af721ac8a699057ba7dedfccbfade6b27d384701a3eaff018b831_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_7e8501e746bc4f5f90e1b1a8767e00991778e0bda67b5be65b79f033c4c79b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8501e746bc4f5f90e1b1a8767e00991778e0bda67b5be65b79f033c4c79b7f->enter($__internal_7e8501e746bc4f5f90e1b1a8767e00991778e0bda67b5be65b79f033c4c79b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2f3662c7c74c6ec1954e9ef2c8cc6cc6141dfa03bef5d25b260d5aa4fa7698fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3662c7c74c6ec1954e9ef2c8cc6cc6141dfa03bef5d25b260d5aa4fa7698fc->enter($__internal_2f3662c7c74c6ec1954e9ef2c8cc6cc6141dfa03bef5d25b260d5aa4fa7698fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2f3662c7c74c6ec1954e9ef2c8cc6cc6141dfa03bef5d25b260d5aa4fa7698fc->leave($__internal_2f3662c7c74c6ec1954e9ef2c8cc6cc6141dfa03bef5d25b260d5aa4fa7698fc_prof);

        
        $__internal_7e8501e746bc4f5f90e1b1a8767e00991778e0bda67b5be65b79f033c4c79b7f->leave($__internal_7e8501e746bc4f5f90e1b1a8767e00991778e0bda67b5be65b79f033c4c79b7f_prof);

    }

    public function getTemplateName()
    {
        return "@Prixy/Default/index.html.twig";
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





{%  endblock content %}", "@Prixy/Default/index.html.twig", "C:\\wamp\\apps\\Prixy\\src\\PrixyBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
