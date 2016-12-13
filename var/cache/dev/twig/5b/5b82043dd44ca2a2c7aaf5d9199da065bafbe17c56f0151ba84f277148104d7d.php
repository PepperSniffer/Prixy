<?php

/* PrixyBundle:Default:formation_details.html.twig */
class __TwigTemplate_6b92bfd445a16517cdb4029ed8468c171e5f2bdf8a847c97938eff45fd45a4e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PrixyBundle:Default:layout.html.twig", "PrixyBundle:Default:formation_details.html.twig", 1);
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
        $__internal_16da8c54c291577692cd5a0c92bb96c95f368a7b2d97463694e422a4f33d3445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16da8c54c291577692cd5a0c92bb96c95f368a7b2d97463694e422a4f33d3445->enter($__internal_16da8c54c291577692cd5a0c92bb96c95f368a7b2d97463694e422a4f33d3445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:formation_details.html.twig"));

        $__internal_a7d395869b90d22fb7b47317d4b9e25f43f12767795a9a5e3a01ee3d0f83eda1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d395869b90d22fb7b47317d4b9e25f43f12767795a9a5e3a01ee3d0f83eda1->enter($__internal_a7d395869b90d22fb7b47317d4b9e25f43f12767795a9a5e3a01ee3d0f83eda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:formation_details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16da8c54c291577692cd5a0c92bb96c95f368a7b2d97463694e422a4f33d3445->leave($__internal_16da8c54c291577692cd5a0c92bb96c95f368a7b2d97463694e422a4f33d3445_prof);

        
        $__internal_a7d395869b90d22fb7b47317d4b9e25f43f12767795a9a5e3a01ee3d0f83eda1->leave($__internal_a7d395869b90d22fb7b47317d4b9e25f43f12767795a9a5e3a01ee3d0f83eda1_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_10651fa342202ff4f8c194de0bb41f1195bb10706e3bc7a1f65b2ee8f9e89b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10651fa342202ff4f8c194de0bb41f1195bb10706e3bc7a1f65b2ee8f9e89b19->enter($__internal_10651fa342202ff4f8c194de0bb41f1195bb10706e3bc7a1f65b2ee8f9e89b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_33dd0c45b21f3af4243ab05339433b2877bc88021d334a4061d24061aaee34d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33dd0c45b21f3af4243ab05339433b2877bc88021d334a4061d24061aaee34d5->enter($__internal_33dd0c45b21f3af4243ab05339433b2877bc88021d334a4061d24061aaee34d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-offset-2 col-md-8 col-md-offset-2 titre_forma\">
            <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "ref", array()), "html", null, true);
        echo "</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-8 left_position\">
            <div class=\"objectifs_formation\">
                <h3> OBJECTIFS DE LA FORMATION</h3>

                ";
        // line 13
        if ((isset($context["objectif"]) ? $context["objectif"] : $this->getContext($context, "objectif"))) {
            // line 14
            echo "                <p> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objectif"]) ? $context["objectif"] : $this->getContext($context, "objectif")), "libelle", array()), "html", null, true);
            echo " </p>
                ";
        } else {
            // line 16
            echo "                <p> Tu n'as pas d'objectif dans la vie, suicide toi !!! </p>
                ";
        }
        // line 18
        echo "
            </div>
            <div class=\"pre_requis\">
                <h3> PRE-REQUIS </h3>
                <ul>
                    ";
        // line 23
        if ((isset($context["requires"]) ? $context["requires"] : $this->getContext($context, "requires"))) {
            // line 24
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["requires"]) ? $context["requires"] : $this->getContext($context, "requires")));
            foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                // line 25
                echo "                            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "ref", array()), "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    ";
        }
        echo " 
                </ul>
            </div>
            <div class=\"programme_details\">
                <h3> PROGRAMME DETAILE </h3>
                <h5> Details formation</h5>
                <ul>
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details_formation"]) ? $context["details_formation"] : $this->getContext($context, "details_formation")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["details"]) {
            // line 35
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "titre", array()), "html", null, true);
            echo "</li>
                        <p>
                            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["details_formation"]) ? $context["details_formation"] : $this->getContext($context, "details_formation")), "lignes_formations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
                // line 38
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "libelle", array()), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo " }}
                        </p>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "                        <li>Pas de details sur la formation</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </ul>
            </div>
        </div>
        <div class=\"col-sm-4 right_position\">
            <div class=\"info_forma\">
                <ul class =\"without_style\">
                    <li>Durée : ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "duree", array()), "html", null, true);
        echo "</li>
                    <li>Tarif : ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "tarif", array()), "html", null, true);
        echo "</li>
                    <li>Certification:";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "certification", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cert"]) {
            // line 53
            echo "                                         ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cert"], "libelle", array()), "html", null, true);
            echo "
                                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </li>
                </ul>
            </div>
            <div class =\"session_formation\">
                <ul class=\"without_style\">
                   ";
        // line 63
        echo "                </ul>
            </div>
        </div>
    </div>
    ";
        // line 68
        echo "


";
        
        $__internal_33dd0c45b21f3af4243ab05339433b2877bc88021d334a4061d24061aaee34d5->leave($__internal_33dd0c45b21f3af4243ab05339433b2877bc88021d334a4061d24061aaee34d5_prof);

        
        $__internal_10651fa342202ff4f8c194de0bb41f1195bb10706e3bc7a1f65b2ee8f9e89b19->leave($__internal_10651fa342202ff4f8c194de0bb41f1195bb10706e3bc7a1f65b2ee8f9e89b19_prof);

    }

    public function getTemplateName()
    {
        return "PrixyBundle:Default:formation_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 68,  184 => 63,  177 => 55,  168 => 53,  164 => 52,  160 => 51,  156 => 50,  148 => 44,  141 => 42,  134 => 39,  125 => 38,  121 => 37,  115 => 35,  110 => 34,  99 => 27,  90 => 25,  85 => 24,  83 => 23,  76 => 18,  72 => 16,  66 => 14,  64 => 13,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"row\">
        <div class=\"col-md-offset-2 col-md-8 col-md-offset-2 titre_forma\">
            <h2>{{ formation.ref }}</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-8 left_position\">
            <div class=\"objectifs_formation\">
                <h3> OBJECTIFS DE LA FORMATION</h3>

                {% if objectif %}
                <p> {{ objectif.libelle }} </p>
                {% else %}
                <p> Tu n'as pas d'objectif dans la vie, suicide toi !!! </p>
                {% endif %}

            </div>
            <div class=\"pre_requis\">
                <h3> PRE-REQUIS </h3>
                <ul>
                    {% if requires %}
                        {% for formation in requires %}
                            <li>{{ formation.ref }}</li>
                        {% endfor %}
                    {% endif %} 
                </ul>
            </div>
            <div class=\"programme_details\">
                <h3> PROGRAMME DETAILE </h3>
                <h5> Details formation</h5>
                <ul>
                    {% for details in details_formation %}
                        <li>{{ details.titre }}</li>
                        <p>
                            {% for ligne in details_formation.lignes_formations %}
                            {{ ligne.libelle}}
                            {% endfor %} }}
                        </p>
                    {% else %}
                        <li>Pas de details sur la formation</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        <div class=\"col-sm-4 right_position\">
            <div class=\"info_forma\">
                <ul class =\"without_style\">
                    <li>Durée : {{ formation.duree }}</li>
                    <li>Tarif : {{ formation.tarif }}</li>
                    <li>Certification:{% for cert in formation.certification %}
                                         {{cert.libelle}}
                                       {% endfor %}
                    </li>
                </ul>
            </div>
            <div class =\"session_formation\">
                <ul class=\"without_style\">
                   {# {% for ListDate in formation.session_formation  %}
                        <li> {{ ListDate.date }}</li>
                    {% endfor %} #}
                </ul>
            </div>
        </div>
    </div>
    {#</div>#}



{% endblock content %}", "PrixyBundle:Default:formation_details.html.twig", "C:\\wamp\\apps\\Prixy\\src\\PrixyBundle/Resources/views/Default/formation_details.html.twig");
    }
}
