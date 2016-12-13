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
        $__internal_cd323219ea3ddc751e1420e6a74a0e66a2d80ec501bfc418e3731870fe4ecfbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd323219ea3ddc751e1420e6a74a0e66a2d80ec501bfc418e3731870fe4ecfbb->enter($__internal_cd323219ea3ddc751e1420e6a74a0e66a2d80ec501bfc418e3731870fe4ecfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:index.html.twig"));

        $__internal_8b0bb1f256d5dd24b372f938de2862cce1284a037e3095873daa9f5024bd4b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0bb1f256d5dd24b372f938de2862cce1284a037e3095873daa9f5024bd4b21->enter($__internal_8b0bb1f256d5dd24b372f938de2862cce1284a037e3095873daa9f5024bd4b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd323219ea3ddc751e1420e6a74a0e66a2d80ec501bfc418e3731870fe4ecfbb->leave($__internal_cd323219ea3ddc751e1420e6a74a0e66a2d80ec501bfc418e3731870fe4ecfbb_prof);

        
        $__internal_8b0bb1f256d5dd24b372f938de2862cce1284a037e3095873daa9f5024bd4b21->leave($__internal_8b0bb1f256d5dd24b372f938de2862cce1284a037e3095873daa9f5024bd4b21_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_ca7205c7e10911494e3fdb5687d82279d53be87d86fcc80aa1db3cf7e35e516f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7205c7e10911494e3fdb5687d82279d53be87d86fcc80aa1db3cf7e35e516f->enter($__internal_ca7205c7e10911494e3fdb5687d82279d53be87d86fcc80aa1db3cf7e35e516f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dccba5ca19646718699841298d4810168e98b9fd4e0bbaebafb900fafad85489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dccba5ca19646718699841298d4810168e98b9fd4e0bbaebafb900fafad85489->enter($__internal_dccba5ca19646718699841298d4810168e98b9fd4e0bbaebafb900fafad85489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <div class=\"row\">
        <div id=\"Wallpaper_display\">
            <div class=\"wallpaper_content\">
                <h1  id=\"nom_logo\"class=\"center-text\">Prixy</h1>
                <span id=\"sous_logo\"class=\"center-text \">La formation accessible à tous</span>
            </div>
        </div>
    </div>

    <div class=\"row \">
        <p>
            La société PRIXY est un jeune acteur sur le marché de la formation à destination des professionnels.
            Elle a été créée fin 2013 par deux associés, S. Millot, consultant depuis plus de dix ans dans le secteur de la formation industrielle
            et C. Joubert, expert-formateur spécialisé dans la formation aux technologies de l’information et de la communication. Implantée à Lyon,
            PRIXY s’adresse principalement aux petites et moyennes entreprises ainsi qu’aux collectivités ; elle accompagne ses clients dans la définition et la
            mise en oeuvre de solutions de formation. En 2015, PRIXY a assuré la montée en compétences de près de 2 500 collaborateurs des secteurs privés et publics,
            pour un chiffre d’affaires de 950 000 €.
        </p>

    </div>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"position_profil\">
                <figure>
                    <img class=\"img-circle img-thumbnail img_personnel\" src=\"";
        // line 28
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
        // line 38
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
        // line 48
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
        
        $__internal_dccba5ca19646718699841298d4810168e98b9fd4e0bbaebafb900fafad85489->leave($__internal_dccba5ca19646718699841298d4810168e98b9fd4e0bbaebafb900fafad85489_prof);

        
        $__internal_ca7205c7e10911494e3fdb5687d82279d53be87d86fcc80aa1db3cf7e35e516f->leave($__internal_ca7205c7e10911494e3fdb5687d82279d53be87d86fcc80aa1db3cf7e35e516f_prof);

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
        return array (  102 => 48,  89 => 38,  76 => 28,  49 => 3,  40 => 2,  11 => 1,);
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
                <span id=\"sous_logo\"class=\"center-text \">La formation accessible à tous</span>
            </div>
        </div>
    </div>

    <div class=\"row \">
        <p>
            La société PRIXY est un jeune acteur sur le marché de la formation à destination des professionnels.
            Elle a été créée fin 2013 par deux associés, S. Millot, consultant depuis plus de dix ans dans le secteur de la formation industrielle
            et C. Joubert, expert-formateur spécialisé dans la formation aux technologies de l’information et de la communication. Implantée à Lyon,
            PRIXY s’adresse principalement aux petites et moyennes entreprises ainsi qu’aux collectivités ; elle accompagne ses clients dans la définition et la
            mise en oeuvre de solutions de formation. En 2015, PRIXY a assuré la montée en compétences de près de 2 500 collaborateurs des secteurs privés et publics,
            pour un chiffre d’affaires de 950 000 €.
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
