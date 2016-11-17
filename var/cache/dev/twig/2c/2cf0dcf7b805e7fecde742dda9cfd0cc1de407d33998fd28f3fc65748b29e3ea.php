<?php

/* @Prixy/Default/formation.html.twig */
class __TwigTemplate_302271d59a54d615a7f834b053739ced25901950234999661caed5a683fba82d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PrixyBundle:Resources:layout.html.twig", "@Prixy/Default/formation.html.twig", 1);
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
        $__internal_20b81aca595d83f6de0dead4f7c5cac0e8f3f886693be7d660e57a58da91865b = $this->env->getExtension("native_profiler");
        $__internal_20b81aca595d83f6de0dead4f7c5cac0e8f3f886693be7d660e57a58da91865b->enter($__internal_20b81aca595d83f6de0dead4f7c5cac0e8f3f886693be7d660e57a58da91865b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/formation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20b81aca595d83f6de0dead4f7c5cac0e8f3f886693be7d660e57a58da91865b->leave($__internal_20b81aca595d83f6de0dead4f7c5cac0e8f3f886693be7d660e57a58da91865b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_8120bffd890cfb18e2220ab11d634903f47b720994f5a15d62094fb5e9745946 = $this->env->getExtension("native_profiler");
        $__internal_8120bffd890cfb18e2220ab11d634903f47b720994f5a15d62094fb5e9745946->enter($__internal_8120bffd890cfb18e2220ab11d634903f47b720994f5a15d62094fb5e9745946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div id=\"divRecherche\">
        <h4>Paramètres</h4>

        <div class=\"row\">
            <form method=\"GET\">
                <fieldset>
                    <div class=\"form-group\">
                        <select name=\"select\" class=\"form-control\" placeholder=\"Thème\">
                            <option disabled selected>Thème de la formation</option>
                            <option value=\"value1\">Theme 1</option>
                            <option value=\"value2\">Theme 2</option>
                            <option value=\"value3\">Theme 3</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Nom de Formation\"></input>
                    </div>
                    <div class=\"form-group form-inline\">
                        <input type=\"number\" name=\"prixMin\" id=\"prixMin\" placeholder=\"Prix Minimum\" class=\"form-control\"></input>
                        <input type=\"number\" name=\"prixMax\" id=\"prixMax\" placeholder=\"Prix Maximum\" class=\"form-control\"></input>
                    </div>
                    <div class=\"form-inline\">
                        <input name=\"certif\" id=\"chkcertif\" class=\"form-control\" type=\"checkbox\"><label for=\"chkcertif\">Certification</label>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" class=\"btn btn-default\" value=\"Rechercher\">
                        <input type=\"reset\" class=\"btn btn-default\" value=\"Remise à zero\">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>




    <!--RESULTATS DE LA RECHERCHE-->
    <div class=\"\" id=\"resultRecherche\">


        <div class=\"col-sm-6 col-md-4\">
            <div class=\"results\">
                <a href=\"formation_detail.php\" class=\"formation-lien\">
                    <div class=\"formation-half col-xs-8 col-sm-8 col-md-8\">
                        <h5 class=\"formation-title\">Titre de la formation</h5>
                        <span class=\"formation-certif\">Certifié</span>
                        <span class=\"formation-date\">13/13/2013</span>
                    </div>
                    <div class=\"formation-half col-xs-4 col-sm-4 col-md-4\">
                        <img class=\"formation-logo\" src=\"media/formation/ps.png\"></img>
                        <span class=\"formation-prix\">666€</span>
                    </div>
                </a>
            </div>
        </div>

        <div class=\"col-sm-6 col-md-4\">
            <div class=\"results\">
                <a href=\"formation_detail.php\" class=\"formation-lien\">
                    <div class=\"formation-half col-xs-8 col-sm-8 col-md-8\">
                        <h5 class=\"formation-title\">Titre de la formation</h5>
                        <span class=\"formation-certif\"></span>
                        <span class=\"formation-date\">13/13/2013</span>
                    </div>
                    <div class=\"formation-half col-xs-4 col-sm-4 col-md-4\">
                        <img class=\"formation-logo\" src=\"\"></img>
                        <span class=\"formation-prix\">666€</span>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"results\">
                <a href=\"formation_detail.php\" class=\"formation-lien\">
                    <div class=\"formation-half col-xs-8 col-sm-8 col-md-8\">
                        <h5 class=\"formation-title\">Titre de la formation</h5>
                        <span class=\"formation-certif\">Certifié</span>
                        <span class=\"formation-date\">13/13/2013</span>
                    </div>
                    <div class=\"formation-half col-xs-4 col-sm-4 col-md-4\">
                        <img class=\"formation-logo\" src=\"media/formation/ps.png\"></img>
                        <span class=\"formation-prix\">666€</span>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"results\">
                <a href=\"formation_detail.php\" class=\"formation-lien\">
                    <div class=\"formation-half col-xs-8 col-sm-8 col-md-8\">
                        <h5 class=\"formation-title\">Titre de la formation</h5>
                        <span class=\"formation-certif\">Certifié</span>
                        <span class=\"formation-date\">13/13/2013</span>
                    </div>
                    <div class=\"formation-half col-xs-4 col-sm-4 col-md-4\">
                        <img class=\"formation-logo\" src=\"media/formation/ps.png\"></img>
                        <span class=\"formation-prix\">666€</span>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"results\">
                <a href=\"formation_detail.php\" class=\"formation-lien\">
                    <div class=\"formation-half col-xs-8 col-sm-8 col-md-8\">
                        <h5 class=\"formation-title\">Titre de la formation</h5>
                        <span class=\"formation-certif\">Certifié</span>
                        <span class=\"formation-date\">13/13/2013</span>
                    </div>
                    <div class=\"formation-half col-xs-4 col-sm-4 col-md-4\">
                        <img class=\"formation-logo\" src=\"media/formation/ps.png\"></img>
                        <span class=\"formation-prix\">666€</span>
                    </div>
                </a>
            </div>
        </div>



    </div>
";
        
        $__internal_8120bffd890cfb18e2220ab11d634903f47b720994f5a15d62094fb5e9745946->leave($__internal_8120bffd890cfb18e2220ab11d634903f47b720994f5a15d62094fb5e9745946_prof);

    }

    public function getTemplateName()
    {
        return "@Prixy/Default/formation.html.twig";
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
/*     <div id="divRecherche">*/
/*         <h4>Paramètres</h4>*/
/* */
/*         <div class="row">*/
/*             <form method="GET">*/
/*                 <fieldset>*/
/*                     <div class="form-group">*/
/*                         <select name="select" class="form-control" placeholder="Thème">*/
/*                             <option disabled selected>Thème de la formation</option>*/
/*                             <option value="value1">Theme 1</option>*/
/*                             <option value="value2">Theme 2</option>*/
/*                             <option value="value3">Theme 3</option>*/
/*                         </select>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <input type="text" name="nom" class="form-control" placeholder="Nom de Formation"></input>*/
/*                     </div>*/
/*                     <div class="form-group form-inline">*/
/*                         <input type="number" name="prixMin" id="prixMin" placeholder="Prix Minimum" class="form-control"></input>*/
/*                         <input type="number" name="prixMax" id="prixMax" placeholder="Prix Maximum" class="form-control"></input>*/
/*                     </div>*/
/*                     <div class="form-inline">*/
/*                         <input name="certif" id="chkcertif" class="form-control" type="checkbox"><label for="chkcertif">Certification</label>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <input type="submit" class="btn btn-default" value="Rechercher">*/
/*                         <input type="reset" class="btn btn-default" value="Remise à zero">*/
/*                     </div>*/
/*                 </fieldset>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/*     <!--RESULTATS DE LA RECHERCHE-->*/
/*     <div class="" id="resultRecherche">*/
/* */
/* */
/*         <div class="col-sm-6 col-md-4">*/
/*             <div class="results">*/
/*                 <a href="formation_detail.php" class="formation-lien">*/
/*                     <div class="formation-half col-xs-8 col-sm-8 col-md-8">*/
/*                         <h5 class="formation-title">Titre de la formation</h5>*/
/*                         <span class="formation-certif">Certifié</span>*/
/*                         <span class="formation-date">13/13/2013</span>*/
/*                     </div>*/
/*                     <div class="formation-half col-xs-4 col-sm-4 col-md-4">*/
/*                         <img class="formation-logo" src="media/formation/ps.png"></img>*/
/*                         <span class="formation-prix">666€</span>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-sm-6 col-md-4">*/
/*             <div class="results">*/
/*                 <a href="formation_detail.php" class="formation-lien">*/
/*                     <div class="formation-half col-xs-8 col-sm-8 col-md-8">*/
/*                         <h5 class="formation-title">Titre de la formation</h5>*/
/*                         <span class="formation-certif"></span>*/
/*                         <span class="formation-date">13/13/2013</span>*/
/*                     </div>*/
/*                     <div class="formation-half col-xs-4 col-sm-4 col-md-4">*/
/*                         <img class="formation-logo" src=""></img>*/
/*                         <span class="formation-prix">666€</span>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-6 col-md-4">*/
/*             <div class="results">*/
/*                 <a href="formation_detail.php" class="formation-lien">*/
/*                     <div class="formation-half col-xs-8 col-sm-8 col-md-8">*/
/*                         <h5 class="formation-title">Titre de la formation</h5>*/
/*                         <span class="formation-certif">Certifié</span>*/
/*                         <span class="formation-date">13/13/2013</span>*/
/*                     </div>*/
/*                     <div class="formation-half col-xs-4 col-sm-4 col-md-4">*/
/*                         <img class="formation-logo" src="media/formation/ps.png"></img>*/
/*                         <span class="formation-prix">666€</span>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-6 col-md-4">*/
/*             <div class="results">*/
/*                 <a href="formation_detail.php" class="formation-lien">*/
/*                     <div class="formation-half col-xs-8 col-sm-8 col-md-8">*/
/*                         <h5 class="formation-title">Titre de la formation</h5>*/
/*                         <span class="formation-certif">Certifié</span>*/
/*                         <span class="formation-date">13/13/2013</span>*/
/*                     </div>*/
/*                     <div class="formation-half col-xs-4 col-sm-4 col-md-4">*/
/*                         <img class="formation-logo" src="media/formation/ps.png"></img>*/
/*                         <span class="formation-prix">666€</span>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-6 col-md-4">*/
/*             <div class="results">*/
/*                 <a href="formation_detail.php" class="formation-lien">*/
/*                     <div class="formation-half col-xs-8 col-sm-8 col-md-8">*/
/*                         <h5 class="formation-title">Titre de la formation</h5>*/
/*                         <span class="formation-certif">Certifié</span>*/
/*                         <span class="formation-date">13/13/2013</span>*/
/*                     </div>*/
/*                     <div class="formation-half col-xs-4 col-sm-4 col-md-4">*/
/*                         <img class="formation-logo" src="media/formation/ps.png"></img>*/
/*                         <span class="formation-prix">666€</span>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/*     </div>*/
/* {#</div>#}*/
/* {% endblock content %}*/
