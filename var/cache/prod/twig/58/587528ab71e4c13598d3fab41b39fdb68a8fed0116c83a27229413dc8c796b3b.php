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
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "libelle", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                        </select>
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




    ";
        // line 40
        echo "    <div class=\"\" id=\"resultRecherche\">
        ";
        // line 42
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 43
            echo "            <div class=\"col-sm-6 col-md-4\">
                <div class=\"results\">
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prixy_formation", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\" class=\"formation-lien\">
                        <div class=\"formation-half col-xs-8 col-sm-8 col-md-8\">
                            <h5 class=\"formation-title\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "ref", array()), "html", null, true);
            echo "</h5>
                                    ";
            // line 48
            if ($this->getAttribute($this->getAttribute($context["f"], "certification", array()), "first", array())) {
                // line 49
                echo "                                        <span class=\"formation-certif\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["f"], "certification", array()), "first", array()), "libelle", array()), "html", null, true);
                echo "</span><br/>
                                        <span class=\"formation-certif\">...</span>
                                    ";
            }
            // line 52
            echo "
                                <span class=\"formation-date\">";
            // line 53
            if ($this->getAttribute($this->getAttribute($context["f"], "sessionFormation", array()), "first", array())) {
                echo " Sessions disponibles ";
            }
            echo "</span>
                        </div>
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
        return array (  140 => 63,  128 => 57,  119 => 53,  116 => 52,  109 => 49,  107 => 48,  103 => 47,  98 => 45,  94 => 43,  89 => 42,  86 => 40,  60 => 15,  49 => 13,  45 => 12,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
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
