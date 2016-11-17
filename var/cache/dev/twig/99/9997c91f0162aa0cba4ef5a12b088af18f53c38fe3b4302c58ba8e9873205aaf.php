<?php

/* PrixyBundle:Default:formation.html.twig */
class __TwigTemplate_9713a3d4f35f0eb7ef6860a2bfc5dc2dff7c4f3f818c09679ef6e6757651535c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PrixyBundle:Resources:layout.html.twig", "PrixyBundle:Default:formation.html.twig", 1);
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
        $__internal_0e1f23e67ab71bf09ee64de4a7c3782f7c52e855f7d291c4f424f514b01ca4f8 = $this->env->getExtension("native_profiler");
        $__internal_0e1f23e67ab71bf09ee64de4a7c3782f7c52e855f7d291c4f424f514b01ca4f8->enter($__internal_0e1f23e67ab71bf09ee64de4a7c3782f7c52e855f7d291c4f424f514b01ca4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:formation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e1f23e67ab71bf09ee64de4a7c3782f7c52e855f7d291c4f424f514b01ca4f8->leave($__internal_0e1f23e67ab71bf09ee64de4a7c3782f7c52e855f7d291c4f424f514b01ca4f8_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_e526fbfc6dbe7625d71d47644577a652ad3cc949c95634d9e0f06eafda8a1df1 = $this->env->getExtension("native_profiler");
        $__internal_e526fbfc6dbe7625d71d47644577a652ad3cc949c95634d9e0f06eafda8a1df1->enter($__internal_e526fbfc6dbe7625d71d47644577a652ad3cc949c95634d9e0f06eafda8a1df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e526fbfc6dbe7625d71d47644577a652ad3cc949c95634d9e0f06eafda8a1df1->leave($__internal_e526fbfc6dbe7625d71d47644577a652ad3cc949c95634d9e0f06eafda8a1df1_prof);

    }

    public function getTemplateName()
    {
        return "PrixyBundle:Default:formation.html.twig";
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
