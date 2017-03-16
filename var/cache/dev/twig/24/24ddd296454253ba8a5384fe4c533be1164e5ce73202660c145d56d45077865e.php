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
        $__internal_da684caea6f2ddff0c495cca567a98b5a5d3926153a8a37b0db402615a891de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da684caea6f2ddff0c495cca567a98b5a5d3926153a8a37b0db402615a891de0->enter($__internal_da684caea6f2ddff0c495cca567a98b5a5d3926153a8a37b0db402615a891de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:index.html.twig"));

        $__internal_b1e2041d7577b76124fcff087a86c2dc6757ca5491ec3e481fd4db5c6bd85120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e2041d7577b76124fcff087a86c2dc6757ca5491ec3e481fd4db5c6bd85120->enter($__internal_b1e2041d7577b76124fcff087a86c2dc6757ca5491ec3e481fd4db5c6bd85120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da684caea6f2ddff0c495cca567a98b5a5d3926153a8a37b0db402615a891de0->leave($__internal_da684caea6f2ddff0c495cca567a98b5a5d3926153a8a37b0db402615a891de0_prof);

        
        $__internal_b1e2041d7577b76124fcff087a86c2dc6757ca5491ec3e481fd4db5c6bd85120->leave($__internal_b1e2041d7577b76124fcff087a86c2dc6757ca5491ec3e481fd4db5c6bd85120_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_d59f19ffcc43a49cd26119d7129c64528546c1cf6d99e552ac5772c3751deeca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59f19ffcc43a49cd26119d7129c64528546c1cf6d99e552ac5772c3751deeca->enter($__internal_d59f19ffcc43a49cd26119d7129c64528546c1cf6d99e552ac5772c3751deeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9be2ebad80df88460e6de716810ab2b5a8e73d67f1838da3ea900bc474593498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be2ebad80df88460e6de716810ab2b5a8e73d67f1838da3ea900bc474593498->enter($__internal_9be2ebad80df88460e6de716810ab2b5a8e73d67f1838da3ea900bc474593498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9be2ebad80df88460e6de716810ab2b5a8e73d67f1838da3ea900bc474593498->leave($__internal_9be2ebad80df88460e6de716810ab2b5a8e73d67f1838da3ea900bc474593498_prof);

        
        $__internal_d59f19ffcc43a49cd26119d7129c64528546c1cf6d99e552ac5772c3751deeca->leave($__internal_d59f19ffcc43a49cd26119d7129c64528546c1cf6d99e552ac5772c3751deeca_prof);

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
