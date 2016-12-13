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
        $__internal_ae987b46318f9ede2b988ec999b67a38e48435c3c830002dd6cbfc032f9dd877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae987b46318f9ede2b988ec999b67a38e48435c3c830002dd6cbfc032f9dd877->enter($__internal_ae987b46318f9ede2b988ec999b67a38e48435c3c830002dd6cbfc032f9dd877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/index.html.twig"));

        $__internal_854c1632958bfa6ba2f32dad91e8c35840a29a5d154224681cef7a9e9f8d00b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854c1632958bfa6ba2f32dad91e8c35840a29a5d154224681cef7a9e9f8d00b4->enter($__internal_854c1632958bfa6ba2f32dad91e8c35840a29a5d154224681cef7a9e9f8d00b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae987b46318f9ede2b988ec999b67a38e48435c3c830002dd6cbfc032f9dd877->leave($__internal_ae987b46318f9ede2b988ec999b67a38e48435c3c830002dd6cbfc032f9dd877_prof);

        
        $__internal_854c1632958bfa6ba2f32dad91e8c35840a29a5d154224681cef7a9e9f8d00b4->leave($__internal_854c1632958bfa6ba2f32dad91e8c35840a29a5d154224681cef7a9e9f8d00b4_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a4c5dd551e6207f176a3f33f0211294f5125ca11b86a96ec3af3775f2e0728e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4c5dd551e6207f176a3f33f0211294f5125ca11b86a96ec3af3775f2e0728e->enter($__internal_6a4c5dd551e6207f176a3f33f0211294f5125ca11b86a96ec3af3775f2e0728e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f37b3efca1990987c5e263a0fe1d4fbe79a3bf5f8c235f5cfacc8c207af0fb70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37b3efca1990987c5e263a0fe1d4fbe79a3bf5f8c235f5cfacc8c207af0fb70->enter($__internal_f37b3efca1990987c5e263a0fe1d4fbe79a3bf5f8c235f5cfacc8c207af0fb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f37b3efca1990987c5e263a0fe1d4fbe79a3bf5f8c235f5cfacc8c207af0fb70->leave($__internal_f37b3efca1990987c5e263a0fe1d4fbe79a3bf5f8c235f5cfacc8c207af0fb70_prof);

        
        $__internal_6a4c5dd551e6207f176a3f33f0211294f5125ca11b86a96ec3af3775f2e0728e->leave($__internal_6a4c5dd551e6207f176a3f33f0211294f5125ca11b86a96ec3af3775f2e0728e_prof);

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





{%  endblock content %}", "@Prixy/Default/index.html.twig", "C:\\wamp\\apps\\Prixy\\src\\PrixyBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
