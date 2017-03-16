<?php

/* @Prixy/Default/formation_details.html.twig */
class __TwigTemplate_9fa80c868994cbcf481ccd2a9f5b39c04d688407a49ac4ef49036583e2a7ffd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PrixyBundle:Default:layout.html.twig", "@Prixy/Default/formation_details.html.twig", 1);
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
        echo "    <div class=\"row\">
        <div class=\"col-md-offset-2 col-md-8 col-md-offset-2 titre_forma\">
            <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "ref", array()), "html", null, true);
        echo "</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-8 left_position\">
            <div class=\"objectifs_formation\">
                <h3> OBJECTIFS DE LA FORMATION</h3>

                ";
        // line 13
        if ((isset($context["objectif"]) ? $context["objectif"] : null)) {
            // line 14
            echo "                <p> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objectif"]) ? $context["objectif"] : null), "libelle", array()), "html", null, true);
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
        if ((isset($context["requires"]) ? $context["requires"] : null)) {
            // line 24
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["requires"]) ? $context["requires"] : null));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["detailsformation"]) ? $context["detailsformation"] : null));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/prixy/media/formation/" . $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "id", array())) . ".png")), "html", null, true);
        echo "\">
            
            </div>
            <div class=\"info_forma\">
                <h4>Infos</h4>
                <ul class =\"without_style\">
                    <li>Durée : ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "duree", array()), "html", null, true);
        echo " heures</li>
                    <li>Tarif : ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "tarif", array()), "html", null, true);
        echo " €</li>
                    <li>Certification:
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "certification", array()));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "sessionFormation", array()));
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
    }

    public function getTemplateName()
    {
        return "@Prixy/Default/formation_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 87,  213 => 81,  205 => 79,  196 => 76,  191 => 75,  180 => 66,  173 => 64,  165 => 62,  160 => 61,  155 => 59,  151 => 58,  142 => 52,  134 => 46,  127 => 44,  120 => 41,  111 => 40,  107 => 39,  101 => 37,  96 => 36,  85 => 29,  83 => 27,  72 => 25,  67 => 24,  65 => 23,  58 => 18,  54 => 16,  48 => 14,  46 => 13,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Prixy/Default/formation_details.html.twig", "C:\\wamp\\apps\\Prixy\\src\\PrixyBundle\\Resources\\views\\Default\\formation_details.html.twig");
    }
}
