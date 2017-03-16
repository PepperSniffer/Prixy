<?php

/* PrixyBundle:Default:formation_details.html.twig */
class __TwigTemplate_54a72c18f787f5071784bc1e0ed20f98ef222950d195c675db960ec87d9fea1c extends Twig_Template
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
        $__internal_336d65a86f6ef506467b0aa167fa123218725f6d965b9042a31936ace470f4ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_336d65a86f6ef506467b0aa167fa123218725f6d965b9042a31936ace470f4ea->enter($__internal_336d65a86f6ef506467b0aa167fa123218725f6d965b9042a31936ace470f4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:formation_details.html.twig"));

        $__internal_3897ed60c56f8c875018521f01164a8c3112797fdad066d87cdc4ec37dd22a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3897ed60c56f8c875018521f01164a8c3112797fdad066d87cdc4ec37dd22a1c->enter($__internal_3897ed60c56f8c875018521f01164a8c3112797fdad066d87cdc4ec37dd22a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:formation_details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_336d65a86f6ef506467b0aa167fa123218725f6d965b9042a31936ace470f4ea->leave($__internal_336d65a86f6ef506467b0aa167fa123218725f6d965b9042a31936ace470f4ea_prof);

        
        $__internal_3897ed60c56f8c875018521f01164a8c3112797fdad066d87cdc4ec37dd22a1c->leave($__internal_3897ed60c56f8c875018521f01164a8c3112797fdad066d87cdc4ec37dd22a1c_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_aba6f42297132415bf9ebf9d2fe916c0bb56c315455fee1dd999ed5f6dc16b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba6f42297132415bf9ebf9d2fe916c0bb56c315455fee1dd999ed5f6dc16b38->enter($__internal_aba6f42297132415bf9ebf9d2fe916c0bb56c315455fee1dd999ed5f6dc16b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e6dcff06419ee0a8c6e656b2fa91b175e46fefcb2d7bf70f49976b499c21b9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6dcff06419ee0a8c6e656b2fa91b175e46fefcb2d7bf70f49976b499c21b9b3->enter($__internal_e6dcff06419ee0a8c6e656b2fa91b175e46fefcb2d7bf70f49976b499c21b9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "                <p> Error 404, Objectif not found.  </p>
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
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prixy_formation", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
                echo "\" class=\"formation-lien\" title=\"Cliquez ici pour en savoir plus\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "ref", array()), "html", null, true);
                echo " </a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                ";
            // line 29
            echo "                    ";
        }
        echo " 
                </ul>
            </div>
            <div class=\"programme_details\">
                <h3> PROGRAMME DETAILLE </h3>
                <h5> Details formation</h5>
                <ul>
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detailsformation"]) ? $context["detailsformation"] : $this->getContext($context, "detailsformation")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["details"]) {
            // line 37
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "titre", array()), "html", null, true);
            echo "</li>
                        <p>
                            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "lignesFormations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
                // line 40
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "libelle", array()), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo " 
                        </p>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "                        <li>Pas de details sur la formation</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </ul>
            </div>
        </div>
        <div class=\"col-sm-4 right_position\">
            <div class=\"image_content\">

                <img class=\"img-responsive img_display\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/prixy/media/formation/" . $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id", array())) . ".png")), "html", null, true);
        echo "\">
            
            </div>
            <div class=\"info_forma\">
                <h4>Infos</h4>
                <ul class =\"without_style\">
                    <li>Durée : ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "duree", array()), "html", null, true);
        echo " heures</li>
                    <li>Tarif : ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "tarif", array()), "html", null, true);
        echo " €</li>
                    <li>Certification:
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "certification", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cert"]) {
            // line 62
            echo "                                         ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cert"], "libelle", array()), "html", null, true);
            echo ",
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "                        Pas de certif
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                        
                    
                    </li>
                </ul>
            </div>
            <div class =\"session_formation\">
                <h4>Sessions de formations</h4>  
                <ul class=\"without_style\">

                   ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "sessionFormation", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 76
            echo "                        <li> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["session"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</li>
                    
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "                    <li> Pas de sessions prévues pour l'instant...</li>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo " 
                </ul>
            </div>
        </div>
    </div>
    ";
        // line 87
        echo "


";
        
        $__internal_e6dcff06419ee0a8c6e656b2fa91b175e46fefcb2d7bf70f49976b499c21b9b3->leave($__internal_e6dcff06419ee0a8c6e656b2fa91b175e46fefcb2d7bf70f49976b499c21b9b3_prof);

        
        $__internal_aba6f42297132415bf9ebf9d2fe916c0bb56c315455fee1dd999ed5f6dc16b38->leave($__internal_aba6f42297132415bf9ebf9d2fe916c0bb56c315455fee1dd999ed5f6dc16b38_prof);

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
        return array (  238 => 87,  231 => 81,  223 => 79,  214 => 76,  209 => 75,  198 => 66,  191 => 64,  183 => 62,  178 => 61,  173 => 59,  169 => 58,  160 => 52,  152 => 46,  145 => 44,  138 => 41,  129 => 40,  125 => 39,  119 => 37,  114 => 36,  103 => 29,  101 => 27,  90 => 25,  85 => 24,  83 => 23,  76 => 18,  72 => 16,  66 => 14,  64 => 13,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
                <p> Error 404, Objectif not found.  </p>
                {% endif %}

            </div>
            <div class=\"pre_requis\">
                <h3> PRE-REQUIS </h3>
                <ul>
                    {% if requires %}
                        {% for formation in requires %}
                            <li><a href=\"{{ path('prixy_formation', {'id': formation.id}) }}\" class=\"formation-lien\" title=\"Cliquez ici pour en savoir plus\">{{ formation.ref }} </a></li>
                        {% endfor %}
                {#     {% else %}
                    <li> Accessible a tous </li>#}
                    {% endif %} 
                </ul>
            </div>
            <div class=\"programme_details\">
                <h3> PROGRAMME DETAILLE </h3>
                <h5> Details formation</h5>
                <ul>
                    {% for details in detailsformation %}
                        <li>{{ details.titre }}</li>
                        <p>
                            {% for ligne in details.lignesFormations %}
                            {{ ligne.libelle}}
                            {% endfor %} 
                        </p>
                    {% else %}
                        <li>Pas de details sur la formation</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        <div class=\"col-sm-4 right_position\">
            <div class=\"image_content\">

                <img class=\"img-responsive img_display\" src=\"{{ asset(\"bundles/prixy/media/formation/\"~formation.id~\".png\")}}\">
            
            </div>
            <div class=\"info_forma\">
                <h4>Infos</h4>
                <ul class =\"without_style\">
                    <li>Durée : {{ formation.duree }} heures</li>
                    <li>Tarif : {{ formation.tarif }} €</li>
                    <li>Certification:
                    {% for cert in formation.certification %}
                                         {{cert.libelle}},
                    {% else %}
                        Pas de certif
                    {% endfor %}
                        
                    
                    </li>
                </ul>
            </div>
            <div class =\"session_formation\">
                <h4>Sessions de formations</h4>  
                <ul class=\"without_style\">

                   {% for session in formation.sessionFormation  %}
                        <li> {{ session.date|date('d/m/Y') }}</li>
                    
                    {% else %}
                    <li> Pas de sessions prévues pour l'instant...</li>

                    {% endfor %} 
                </ul>
            </div>
        </div>
    </div>
    {#</div>#}



{% endblock content %}", "PrixyBundle:Default:formation_details.html.twig", "C:\\wamp\\apps\\Prixy\\src\\PrixyBundle/Resources/views/Default/formation_details.html.twig");
    }
}
