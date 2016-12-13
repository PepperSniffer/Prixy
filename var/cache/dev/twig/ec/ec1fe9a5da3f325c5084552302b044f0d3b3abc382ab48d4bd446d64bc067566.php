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
        $__internal_e4a6aba84c5c6a065a9c58619c4a44d2595450d9f33d771668133b24004d3d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a6aba84c5c6a065a9c58619c4a44d2595450d9f33d771668133b24004d3d06->enter($__internal_e4a6aba84c5c6a065a9c58619c4a44d2595450d9f33d771668133b24004d3d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/formation.html.twig"));

        $__internal_0663eb1e85e7016711ee331aa894c31180826d0d583484f79dc8e77364479df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0663eb1e85e7016711ee331aa894c31180826d0d583484f79dc8e77364479df0->enter($__internal_0663eb1e85e7016711ee331aa894c31180826d0d583484f79dc8e77364479df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/formation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4a6aba84c5c6a065a9c58619c4a44d2595450d9f33d771668133b24004d3d06->leave($__internal_e4a6aba84c5c6a065a9c58619c4a44d2595450d9f33d771668133b24004d3d06_prof);

        
        $__internal_0663eb1e85e7016711ee331aa894c31180826d0d583484f79dc8e77364479df0->leave($__internal_0663eb1e85e7016711ee331aa894c31180826d0d583484f79dc8e77364479df0_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_860610abb30da6ce4941fcc55f72470c165362587a83fdb1561f37d8c1b545ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860610abb30da6ce4941fcc55f72470c165362587a83fdb1561f37d8c1b545ce->enter($__internal_860610abb30da6ce4941fcc55f72470c165362587a83fdb1561f37d8c1b545ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_00cd3fa4c37f04dbc24db4b417a32046ab2cc07a50a7b9de5837bd24182ab40a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00cd3fa4c37f04dbc24db4b417a32046ab2cc07a50a7b9de5837bd24182ab40a->enter($__internal_00cd3fa4c37f04dbc24db4b417a32046ab2cc07a50a7b9de5837bd24182ab40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "                                <span class=\"formation-date\">";
            if ($this->getAttribute($this->getAttribute($context["f"], "sessionFormation", array()), "first", array())) {
                echo " Sessions disponibles ";
            }
            echo "</span>
                        </div>
                        <div class=\"formation-half col-xs-4 col-sm-4 col-md-4\">
                            <img class=\"formation-logo\" src=\"media/formation/ps.png\"></img>
                            <span class=\"formation-prix\">";
            // line 55
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
        // line 61
        echo "
    </div>
";
        
        $__internal_00cd3fa4c37f04dbc24db4b417a32046ab2cc07a50a7b9de5837bd24182ab40a->leave($__internal_00cd3fa4c37f04dbc24db4b417a32046ab2cc07a50a7b9de5837bd24182ab40a_prof);

        
        $__internal_860610abb30da6ce4941fcc55f72470c165362587a83fdb1561f37d8c1b545ce->leave($__internal_860610abb30da6ce4941fcc55f72470c165362587a83fdb1561f37d8c1b545ce_prof);

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
        return array (  159 => 61,  147 => 55,  137 => 51,  128 => 49,  124 => 48,  120 => 47,  115 => 45,  111 => 43,  107 => 42,  78 => 15,  67 => 13,  63 => 12,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
                                <option value=\"{{ theme.id }}\">{{ theme.libelle }}</option>
                            {% endfor %}
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
                    <a href=\"{{ path('prixy_formation', {'id': f.id}) }}\" class=\"formation-lien\">
                        <div class=\"formation-half col-xs-8 col-sm-8 col-md-8\">
                            <h5 class=\"formation-title\">{{ f.ref }}</h5>
                            {% for certif in f.certification %}
                                <span class=\"formation-certif\">{{ certif.libelle }}</span>
                            {% endfor %}
                                <span class=\"formation-date\">{% if f.sessionFormation.first %} Sessions disponibles {% endif %}</span>
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
