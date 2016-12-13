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
        $__internal_ed3d69cdaf96dfaa71cc2b8ce66fae2fdf67096561d6a949ac7d05100c82f10b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3d69cdaf96dfaa71cc2b8ce66fae2fdf67096561d6a949ac7d05100c82f10b->enter($__internal_ed3d69cdaf96dfaa71cc2b8ce66fae2fdf67096561d6a949ac7d05100c82f10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/formation.html.twig"));

        $__internal_466bc66d225153d8d63552863f939fa9f8415a186b6cb848d575c56bf100da56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466bc66d225153d8d63552863f939fa9f8415a186b6cb848d575c56bf100da56->enter($__internal_466bc66d225153d8d63552863f939fa9f8415a186b6cb848d575c56bf100da56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/formation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed3d69cdaf96dfaa71cc2b8ce66fae2fdf67096561d6a949ac7d05100c82f10b->leave($__internal_ed3d69cdaf96dfaa71cc2b8ce66fae2fdf67096561d6a949ac7d05100c82f10b_prof);

        
        $__internal_466bc66d225153d8d63552863f939fa9f8415a186b6cb848d575c56bf100da56->leave($__internal_466bc66d225153d8d63552863f939fa9f8415a186b6cb848d575c56bf100da56_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_6d800a5e6c946de773881cc13f975db2ad4b5b93f680d8303dc0cff8e3387eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d800a5e6c946de773881cc13f975db2ad4b5b93f680d8303dc0cff8e3387eff->enter($__internal_6d800a5e6c946de773881cc13f975db2ad4b5b93f680d8303dc0cff8e3387eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4acdb45583cdf1d9fbc4934fdbf2172af9e6351e2b0a8c14185f91a8c1efc3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acdb45583cdf1d9fbc4934fdbf2172af9e6351e2b0a8c14185f91a8c1efc3f4->enter($__internal_4acdb45583cdf1d9fbc4934fdbf2172af9e6351e2b0a8c14185f91a8c1efc3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
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
        
        $__internal_4acdb45583cdf1d9fbc4934fdbf2172af9e6351e2b0a8c14185f91a8c1efc3f4->leave($__internal_4acdb45583cdf1d9fbc4934fdbf2172af9e6351e2b0a8c14185f91a8c1efc3f4_prof);

        
        $__internal_6d800a5e6c946de773881cc13f975db2ad4b5b93f680d8303dc0cff8e3387eff->leave($__internal_6d800a5e6c946de773881cc13f975db2ad4b5b93f680d8303dc0cff8e3387eff_prof);

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
        return array (  148 => 63,  136 => 57,  131 => 54,  122 => 52,  117 => 51,  108 => 49,  104 => 48,  100 => 47,  94 => 43,  90 => 42,  49 => 3,  40 => 2,  11 => 1,);
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

        {% for f in formations %}
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"results\">
                    <a href=\"formation_detail.php\" class=\"formation-lien\">
                        <div class=\"formation-half col-xs-8 col-sm-8 col-md-8\">
                            <h5 class=\"formation-title\">{{ f.ref }}</h5>
                            {% for certif in f.certification %}
                                <span class=\"formation-certif\">{{ certif.libelle }}</span>
                            {% endfor %}
                            {% for session in f.sessionFormation %}
                                <span class=\"formation-date\">{{ session.date }}</span>
                            {% endfor %}
                        </div>
                        <div class=\"formation-half col-xs-4 col-sm-4 col-md-4\">
                            <img class=\"formation-logo\" src=\"media/formation/ps.png\"></img>
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
