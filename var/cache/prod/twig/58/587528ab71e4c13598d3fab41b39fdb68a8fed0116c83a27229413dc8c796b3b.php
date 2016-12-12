<?php

/* PrixyBundle:Default:formation.html.twig */
class __TwigTemplate_748d81a379f6e3ef66a9994f5e82f68e21cc68a0568243c9512c30de7a079629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PrixyBundle:Default:layout.html.twig", "PrixyBundle:Default:formation.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
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
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrixyBundle:Default:formation.html.twig", "C:\\wamp\\apps\\Prixy\\src\\PrixyBundle/Resources/views/Default/formation.html.twig");
    }
}
