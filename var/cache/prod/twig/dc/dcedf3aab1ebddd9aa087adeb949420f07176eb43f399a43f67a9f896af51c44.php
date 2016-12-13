<?php

/* PrixyBundle:Default:formation.html.twig */
class __TwigTemplate_8c716c27ab27fc1c47d0b09a816ffd023ce04cc9de1cf5ff9096a3ba3cc06741 extends Twig_Template
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

        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 43
            echo "            <div class=\"col-sm-6 col-md-4\">
                <div class=\"results\">
                    <a href=\"formation_detail.php\" class=\"formation-lien\">
                        <div class=\"formation-half col-xs-8 col-sm-8 col-md-8\">
                            <h5 class=\"formation-title\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "ref", array()), "html", null, true);
            echo "</h5>
                            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["f"], "certification", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["certif"]) {
                // line 49
                echo "                                <span class=\"formation-certif\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certif"], "libelle", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certif'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["f"], "sessionFormation", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 52
                echo "                                <span class=\"formation-date\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "date", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                        </div>
                        <div class=\"formation-half col-xs-4 col-sm-4 col-md-4\">
                            <img class=\"formation-logo\" src=\"media/formation/ps.png\"></img>
                            <span class=\"formation-prix\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "tarif", array()), "html", null, true);
            echo "€</span>
                        </div>
                    </a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
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
        return array (  130 => 63,  118 => 57,  113 => 54,  104 => 52,  99 => 51,  90 => 49,  86 => 48,  82 => 47,  76 => 43,  72 => 42,  31 => 3,  28 => 2,  11 => 1,);
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