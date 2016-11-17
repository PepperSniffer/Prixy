<?php

/* @Prixy/Default/index.html.twig */
class __TwigTemplate_024e5565aef5d7aa30d9485c030addeb6da81bf0c6fe45dc40518fea1c420735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PrixyBundle:Resources:layout.html.twig", "@Prixy/Default/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrixyBundle:Resources:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a76bcf2aa9ae74dffee616c836fd5d3bca1cc623fc69f779950065cf8e3e6e61 = $this->env->getExtension("native_profiler");
        $__internal_a76bcf2aa9ae74dffee616c836fd5d3bca1cc623fc69f779950065cf8e3e6e61->enter($__internal_a76bcf2aa9ae74dffee616c836fd5d3bca1cc623fc69f779950065cf8e3e6e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a76bcf2aa9ae74dffee616c836fd5d3bca1cc623fc69f779950065cf8e3e6e61->leave($__internal_a76bcf2aa9ae74dffee616c836fd5d3bca1cc623fc69f779950065cf8e3e6e61_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_29c694d8b251411348cfa1ec8b416b948583c63f1c2c74eb8d84d3f5faadd824 = $this->env->getExtension("native_profiler");
        $__internal_29c694d8b251411348cfa1ec8b416b948583c63f1c2c74eb8d84d3f5faadd824->enter($__internal_29c694d8b251411348cfa1ec8b416b948583c63f1c2c74eb8d84d3f5faadd824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_29c694d8b251411348cfa1ec8b416b948583c63f1c2c74eb8d84d3f5faadd824->leave($__internal_29c694d8b251411348cfa1ec8b416b948583c63f1c2c74eb8d84d3f5faadd824_prof);

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
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PrixyBundle:Resources:layout.html.twig' %}*/
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