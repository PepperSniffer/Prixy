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
            <form method=\"GET\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prixy_formations");
        echo "\">
                <fieldset>
                    <div class=\"form-group\">
                        <select name=\"select\" class=\"form-control\" placeholder=\"Thème\">
                            <option disabled selected>Thème de la formation</option>
                            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 13
            echo "                                <option class=\"optSelect\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "id", array()), "html", null, true);
            echo "\" 
                                ";
            // line 14
            if ($this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : null), "select", array())) {
                // line 15
                echo "                                        ";
                if (($this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : null), "select", array()) == $this->getAttribute($context["theme"], "id", array()))) {
                    echo " selected ";
                }
                // line 16
                echo "                                ";
            }
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "libelle", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                        </select>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Nom de Formation\" value=\"";
        // line 21
        if ($this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : null), "nom", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : null), "nom", array()), "html", null, true);
        }
        echo "\" ></input>
                    </div>
                    <div class=\"form-group form-inline\">
                        <input type=\"number\" name=\"prixMin\" id=\"prixMin\" placeholder=\"Prix Minimum\" class=\"form-control\" value=\"";
        // line 24
        if ($this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : null), "prixMin", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : null), "prixMin", array()), "html", null, true);
        }
        echo "\"></input>
                        <input type=\"number\" name=\"prixMax\" id=\"prixMax\" placeholder=\"Prix Maximum\" class=\"form-control\" value=\"";
        // line 25
        if ($this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : null), "prixMax", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : null), "prixMax", array()), "html", null, true);
        }
        echo "\"></input>
                    </div>
                    <div class=\"form-inline\">
                        <input name=\"certif\" id=\"chkcertif\" class=\"form-control\" type=\"checkbox\"";
        // line 28
        if ($this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : null), "certif", array())) {
            echo " checked ";
        }
        echo "><label for=\"chkcertif\">Certification</label>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" class=\"btn btn-default\" value=\"Rechercher\">
                        <input type=\"reset\" class=\"btn btn-default\" value=\"Remise à zero\">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>




    ";
        // line 43
        echo "    <div class=\"\" id=\"resultRecherche\">
        ";
        // line 45
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 46
            echo "            <div class=\"col-sm-6 col-md-4\">
                <div class=\"results\">
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prixy_formation", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\" class=\"formation-lien\">
                        <div class=\"formation-half col-xs-8 col-sm-8 col-md-8\">
                            <h5 class=\"formation-title\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "ref", array()), "html", null, true);
            echo "</h5>
                                    ";
            // line 51
            if ($this->getAttribute($this->getAttribute($context["f"], "certification", array()), "first", array())) {
                // line 52
                echo "                                        <span class=\"formation-certif\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["f"], "certification", array()), "first", array()), "libelle", array()), "html", null, true);
                echo "</span><br/>
                                        <span class=\"formation-certif\">...</span>
                                    ";
            }
            // line 55
            echo "
                                <span class=\"formation-date\">";
            // line 56
            if ($this->getAttribute($this->getAttribute($context["f"], "sessionFormation", array()), "first", array())) {
                echo " Sessions disponibles ";
            }
            echo "</span>
                        </div>
                        <div class=\"formation-half col-xs-4 col-sm-4 col-md-4\">
                            <img class=\"formation-logo\" src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/prixy/media/formation/" . $this->getAttribute($context["f"], "id", array())) . ".png")), "html", null, true);
            echo "\"></img>
                            <span class=\"formation-prix\">";
            // line 60
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
        // line 66
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
        return array (  175 => 66,  163 => 60,  159 => 59,  151 => 56,  148 => 55,  141 => 52,  139 => 51,  135 => 50,  130 => 48,  126 => 46,  121 => 45,  118 => 43,  99 => 28,  91 => 25,  85 => 24,  77 => 21,  72 => 18,  61 => 16,  56 => 15,  54 => 14,  49 => 13,  45 => 12,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
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
