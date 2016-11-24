<?php

/* PrixyBundle:Default:index.html.twig */
class __TwigTemplate_424b52949bc7bbc0a001de4c5746e2b105fe7c76686c4d85164ef0bab3869331 extends Twig_Template
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
        $__internal_1b5d612926ecaeb995ceb135654a2e3a3351142a05cc71809308115beff13f8a = $this->env->getExtension("native_profiler");
        $__internal_1b5d612926ecaeb995ceb135654a2e3a3351142a05cc71809308115beff13f8a->enter($__internal_1b5d612926ecaeb995ceb135654a2e3a3351142a05cc71809308115beff13f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b5d612926ecaeb995ceb135654a2e3a3351142a05cc71809308115beff13f8a->leave($__internal_1b5d612926ecaeb995ceb135654a2e3a3351142a05cc71809308115beff13f8a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_7ac11b8b78c586687b2f0ff2edcb7d52d4a4d8d3ed7ed9564121e9788b380956 = $this->env->getExtension("native_profiler");
        $__internal_7ac11b8b78c586687b2f0ff2edcb7d52d4a4d8d3ed7ed9564121e9788b380956->enter($__internal_7ac11b8b78c586687b2f0ff2edcb7d52d4a4d8d3ed7ed9564121e9788b380956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <img class=\"img-circle img-thumbnail img_personnel\" src=\"media/Portrait/millot.png\">
                    <figcaption>
                        <span>S.Millot</span>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"position_profil\">
                <figure>
                    <img class=\"img-circle img-thumbnail img_personnel\" src=\"media/Portrait/schmitt.png\">
                    <figcaption>
                        <span>L.Schmitt</span>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"position_profil\">
                <figure>
                    <img class=\"img-circle img-thumbnail img_personnel\" src=\"media/Portrait/joubert.png\" >
                    <figcaption>
                        <span>C.Joubert</span>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>





";
        
        $__internal_7ac11b8b78c586687b2f0ff2edcb7d52d4a4d8d3ed7ed9564121e9788b380956->leave($__internal_7ac11b8b78c586687b2f0ff2edcb7d52d4a4d8d3ed7ed9564121e9788b380956_prof);

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
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PrixyBundle:Default:layout.html.twig' %}*/
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div id="Wallpaper_display">*/
/*             <div class="wallpaper_content">*/
/*                 <h1  id="nom_logo"class="center-text">Prixy</h1>*/
/*                 <span id="sous_logo"class="center-text ">La formation accessible à tous</span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row ">*/
/*         <p>*/
/*             La société PRIXY est un jeune acteur sur le marché de la formation à destination des professionnels.*/
/*             Elle a été créée fin 2013 par deux associés, S. Millot, consultant depuis plus de dix ans dans le secteur de la formation industrielle*/
/*             et C. Joubert, expert-formateur spécialisé dans la formation aux technologies de l’information et de la communication. Implantée à Lyon,*/
/*             PRIXY s’adresse principalement aux petites et moyennes entreprises ainsi qu’aux collectivités ; elle accompagne ses clients dans la définition et la*/
/*             mise en oeuvre de solutions de formation. En 2015, PRIXY a assuré la montée en compétences de près de 2 500 collaborateurs des secteurs privés et publics,*/
/*             pour un chiffre d’affaires de 950 000 €.*/
/*         </p>*/
/* */
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/*             <div class="position_profil">*/
/*                 <figure>*/
/*                     <img class="img-circle img-thumbnail img_personnel" src="media/Portrait/millot.png">*/
/*                     <figcaption>*/
/*                         <span>S.Millot</span>*/
/*                     </figcaption>*/
/*                 </figure>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <div class="position_profil">*/
/*                 <figure>*/
/*                     <img class="img-circle img-thumbnail img_personnel" src="media/Portrait/schmitt.png">*/
/*                     <figcaption>*/
/*                         <span>L.Schmitt</span>*/
/*                     </figcaption>*/
/*                 </figure>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <div class="position_profil">*/
/*                 <figure>*/
/*                     <img class="img-circle img-thumbnail img_personnel" src="media/Portrait/joubert.png" >*/
/*                     <figcaption>*/
/*                         <span>C.Joubert</span>*/
/*                     </figcaption>*/
/*                 </figure>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/* {%  endblock content %}*/
