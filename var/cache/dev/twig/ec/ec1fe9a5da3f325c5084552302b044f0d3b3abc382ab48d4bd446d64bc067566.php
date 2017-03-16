<?php

/* @Prixy/Default/formation.html.twig */
class __TwigTemplate_1327f3a1adcc99c6a65edef79f477b55d65b57b96d91e401fdf6574aad79e150 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PrixyBundle:Default:layout.html.twig", "@Prixy/Default/formation.html.twig", 1);
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
        $__internal_dc27e98e5a67369f1dadf65740b0d8669696e4b334a9d376adb64e8f0cc254d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc27e98e5a67369f1dadf65740b0d8669696e4b334a9d376adb64e8f0cc254d8->enter($__internal_dc27e98e5a67369f1dadf65740b0d8669696e4b334a9d376adb64e8f0cc254d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/formation.html.twig"));

        $__internal_048ad8f8c1b8a60cb8a90bce41010990e456a3c124adc515794f19dc7f10e8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048ad8f8c1b8a60cb8a90bce41010990e456a3c124adc515794f19dc7f10e8ef->enter($__internal_048ad8f8c1b8a60cb8a90bce41010990e456a3c124adc515794f19dc7f10e8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/formation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc27e98e5a67369f1dadf65740b0d8669696e4b334a9d376adb64e8f0cc254d8->leave($__internal_dc27e98e5a67369f1dadf65740b0d8669696e4b334a9d376adb64e8f0cc254d8_prof);

        
        $__internal_048ad8f8c1b8a60cb8a90bce41010990e456a3c124adc515794f19dc7f10e8ef->leave($__internal_048ad8f8c1b8a60cb8a90bce41010990e456a3c124adc515794f19dc7f10e8ef_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5f81b37e7ba2cea9969f52c54417f3f24ee8285863a341e74e3ce2753bc3db44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f81b37e7ba2cea9969f52c54417f3f24ee8285863a341e74e3ce2753bc3db44->enter($__internal_5f81b37e7ba2cea9969f52c54417f3f24ee8285863a341e74e3ce2753bc3db44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3cd686637273ac84de959ebafa1074c71373e5e2ae3323ed478cd04092ed4b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd686637273ac84de959ebafa1074c71373e5e2ae3323ed478cd04092ed4b2f->enter($__internal_3cd686637273ac84de959ebafa1074c71373e5e2ae3323ed478cd04092ed4b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : $this->getContext($context, "themes")));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 13
            echo "                                <option class=\"optSelect\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "id", array()), "html", null, true);
            echo "\" 
                                ";
            // line 14
            if ($this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : $this->getContext($context, "paramResearch")), "select", array())) {
                // line 15
                echo "                                        ";
                if (($this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : $this->getContext($context, "paramResearch")), "select", array()) == $this->getAttribute($context["theme"], "id", array()))) {
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
        if ($this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : $this->getContext($context, "paramResearch")), "nom", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : $this->getContext($context, "paramResearch")), "nom", array()), "html", null, true);
        }
        echo "\" ></input>
                    </div>
                    <div class=\"form-group form-inline\">
                        <input type=\"number\" name=\"prixMin\" id=\"prixMin\" placeholder=\"Prix Minimum\" class=\"form-control\" value=\"";
        // line 24
        if ($this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : $this->getContext($context, "paramResearch")), "prixMin", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : $this->getContext($context, "paramResearch")), "prixMin", array()), "html", null, true);
        }
        echo "\"></input>
                        <input type=\"number\" name=\"prixMax\" id=\"prixMax\" placeholder=\"Prix Maximum\" class=\"form-control\" value=\"";
        // line 25
        if ($this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : $this->getContext($context, "paramResearch")), "prixMax", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : $this->getContext($context, "paramResearch")), "prixMax", array()), "html", null, true);
        }
        echo "\"></input>
                    </div>
                    <div class=\"form-inline\">
                        <input name=\"certif\" id=\"chkcertif\" class=\"form-control\" type=\"checkbox\"";
        // line 28
        if ($this->getAttribute((isset($context["paramResearch"]) ? $context["paramResearch"] : $this->getContext($context, "paramResearch")), "certif", array())) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
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
        
        $__internal_3cd686637273ac84de959ebafa1074c71373e5e2ae3323ed478cd04092ed4b2f->leave($__internal_3cd686637273ac84de959ebafa1074c71373e5e2ae3323ed478cd04092ed4b2f_prof);

        
        $__internal_5f81b37e7ba2cea9969f52c54417f3f24ee8285863a341e74e3ce2753bc3db44->leave($__internal_5f81b37e7ba2cea9969f52c54417f3f24ee8285863a341e74e3ce2753bc3db44_prof);

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
        return array (  193 => 66,  181 => 60,  177 => 59,  169 => 56,  166 => 55,  159 => 52,  157 => 51,  153 => 50,  148 => 48,  144 => 46,  139 => 45,  136 => 43,  117 => 28,  109 => 25,  103 => 24,  95 => 21,  90 => 18,  79 => 16,  74 => 15,  72 => 14,  67 => 13,  63 => 12,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
    <div id=\"divRecherche\">
        <h4>Paramètres</h4>

        <div class=\"row\">
            <form method=\"GET\" action=\"{{ path('prixy_formations') }}\">
                <fieldset>
                    <div class=\"form-group\">
                        <select name=\"select\" class=\"form-control\" placeholder=\"Thème\">
                            <option disabled selected>Thème de la formation</option>
                            {% for theme in themes %}
                                <option class=\"optSelect\" value=\"{{ theme.id }}\" 
                                {% if paramResearch.select %}
                                        {% if paramResearch.select == theme.id %} selected {% endif %}
                                {% endif %} >{{ theme.libelle }}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Nom de Formation\" value=\"{% if paramResearch.nom %}{{paramResearch.nom}}{% endif %}\" ></input>
                    </div>
                    <div class=\"form-group form-inline\">
                        <input type=\"number\" name=\"prixMin\" id=\"prixMin\" placeholder=\"Prix Minimum\" class=\"form-control\" value=\"{% if paramResearch.prixMin %}{{paramResearch.prixMin}}{% endif %}\"></input>
                        <input type=\"number\" name=\"prixMax\" id=\"prixMax\" placeholder=\"Prix Maximum\" class=\"form-control\" value=\"{% if paramResearch.prixMax %}{{paramResearch.prixMax}}{% endif %}\"></input>
                    </div>
                    <div class=\"form-inline\">
                        <input name=\"certif\" id=\"chkcertif\" class=\"form-control\" type=\"checkbox\"{% if paramResearch.certif %} checked {% endif %}><label for=\"chkcertif\">Certification</label>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" class=\"btn btn-default\" value=\"Rechercher\">
                        <input type=\"reset\" class=\"btn btn-default\" value=\"Remise à zero\">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>




    {# RESULTATS DE LA RECHERCHE #}
    <div class=\"\" id=\"resultRecherche\">
        {#} DIV des liens vers chaques formations {#}
        {% for f in formations %}
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"results\">
                    <a href=\"{{ path('prixy_formation', {'id': f.id}) }}\" class=\"formation-lien\">
                        <div class=\"formation-half col-xs-8 col-sm-8 col-md-8\">
                            <h5 class=\"formation-title\">{{ f.ref }}</h5>
                                    {% if f.certification.first %}
                                        <span class=\"formation-certif\">{{ f.certification.first.libelle }}</span><br/>
                                        <span class=\"formation-certif\">...</span>
                                    {% endif %}

                                <span class=\"formation-date\">{% if f.sessionFormation.first %} Sessions disponibles {% endif %}</span>
                        </div>
                        <div class=\"formation-half col-xs-4 col-sm-4 col-md-4\">
                            <img class=\"formation-logo\" src=\"{{ asset(\"bundles/prixy/media/formation/\"~f.id~\".png\")}}\"></img>
                            <span class=\"formation-prix\">{{ f.tarif }}€</span>
                        </div>
                    </a>
                </div>
            </div>
        {% endfor %}

    </div>
{% endblock content %}", "@Prixy/Default/formation.html.twig", "C:\\wamp\\apps\\Prixy\\src\\PrixyBundle\\Resources\\views\\Default\\formation.html.twig");
    }
}
