<?php

/* PrixyBundle:Default:layout.html.twig */
class __TwigTemplate_9c28fc3de00cc6339f594cdb7f4dc564cdb8bc6ee784ebcd9128d87584bfa5e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9dd07e61d3fc4f464fbd52b668596a767cd5e6f3be88df7b474a59d2de7cdd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9dd07e61d3fc4f464fbd52b668596a767cd5e6f3be88df7b474a59d2de7cdd1->enter($__internal_c9dd07e61d3fc4f464fbd52b668596a767cd5e6f3be88df7b474a59d2de7cdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:layout.html.twig"));

        $__internal_82910d5b65dfad66f4d7120de4fa0cd017dceff383bfe94a8b654101169e2321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82910d5b65dfad66f4d7120de4fa0cd017dceff383bfe94a8b654101169e2321->enter($__internal_82910d5b65dfad66f4d7120de4fa0cd017dceff383bfe94a8b654101169e2321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>Prixy</title>
\t<meta charset=\"utf-8\">
\t";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "235aef9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_235aef9_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app_style_1.css");
            // line 10
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
            // asset "235aef9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_235aef9_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app_bootstrap.min_2.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "235aef9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_235aef9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        // line 12
        echo "\t<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/prixy/media/favicon.png"), "html", null, true);
        echo "\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
</head>
<body>
\t<nav class=\"navbar navbar-default navbar-static-top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<a href=\"/prixy/\" id=\"brand\" class=\"navbar-brand\">
\t\t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/prixy/media/logo.png"), "html", null, true);
        echo "\" id=\"logo\" alt=\"Prixy logo\">
\t\t\t\t</a>
\t\t\t\t<button type=\"button\" id=\"ham-button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div id=\"navbar\" class=\"navbar-collapse navbar-right collapse\">
\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prixy_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prixy_formations");
        echo "\">Formations</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prixy_contact");
        echo "\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<div id=\"content\" class=\"container\">
\t<!--ICI LE CONTENU DE LA PAGE -->
\t";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "\t</div>

\t
\t<!--SCRIPTS-->
\t";
        // line 50
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "03addd9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_03addd9_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/compiled/app_jquery.min_1.js");
            // line 55
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "03addd9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_03addd9_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/compiled/app_bootstrap.min_2.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "03addd9_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_03addd9_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/compiled/app_ham-button_3.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "03addd9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_03addd9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/compiled/app.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 57
        echo "</body>
</html>";
        
        $__internal_c9dd07e61d3fc4f464fbd52b668596a767cd5e6f3be88df7b474a59d2de7cdd1->leave($__internal_c9dd07e61d3fc4f464fbd52b668596a767cd5e6f3be88df7b474a59d2de7cdd1_prof);

        
        $__internal_82910d5b65dfad66f4d7120de4fa0cd017dceff383bfe94a8b654101169e2321->leave($__internal_82910d5b65dfad66f4d7120de4fa0cd017dceff383bfe94a8b654101169e2321_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_dfa471cb6504067c7b4972a4348f0108167bbcb228909ba83cb1957940615190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa471cb6504067c7b4972a4348f0108167bbcb228909ba83cb1957940615190->enter($__internal_dfa471cb6504067c7b4972a4348f0108167bbcb228909ba83cb1957940615190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4be15f1c2e26226a797faa817111e233298808ce276f9ba07768c643d0d7e9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be15f1c2e26226a797faa817111e233298808ce276f9ba07768c643d0d7e9cf->enter($__internal_4be15f1c2e26226a797faa817111e233298808ce276f9ba07768c643d0d7e9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "
\t";
        
        $__internal_4be15f1c2e26226a797faa817111e233298808ce276f9ba07768c643d0d7e9cf->leave($__internal_4be15f1c2e26226a797faa817111e233298808ce276f9ba07768c643d0d7e9cf_prof);

        
        $__internal_dfa471cb6504067c7b4972a4348f0108167bbcb228909ba83cb1957940615190->leave($__internal_dfa471cb6504067c7b4972a4348f0108167bbcb228909ba83cb1957940615190_prof);

    }

    public function getTemplateName()
    {
        return "PrixyBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 44,  154 => 43,  143 => 57,  117 => 55,  113 => 50,  107 => 46,  105 => 43,  94 => 35,  90 => 34,  86 => 33,  71 => 21,  60 => 13,  57 => 12,  37 => 10,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>Prixy</title>
\t<meta charset=\"utf-8\">
\t{% stylesheets
\t\t'@PrixyBundle/Resources/public/css/style.css'
\t\t'@PrixyBundle/Resources/public/css/bootstrap.min.css'
\t\tfilter='cssrewrite' output='css/compiled/app.css' %}
\t\t<link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
\t{% endstylesheets %}
\t<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
\t<link rel=\"icon\" type=\"image/png\" href=\"{{  asset('bundles/prixy/media/favicon.png')  }}\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
</head>
<body>
\t<nav class=\"navbar navbar-default navbar-static-top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<a href=\"/prixy/\" id=\"brand\" class=\"navbar-brand\">
\t\t\t\t\t<img src=\"{{asset('bundles/prixy/media/logo.png')}}\" id=\"logo\" alt=\"Prixy logo\">
\t\t\t\t</a>
\t\t\t\t<button type=\"button\" id=\"ham-button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div id=\"navbar\" class=\"navbar-collapse navbar-right collapse\">
\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t<li><a href=\"{{ path('prixy_homepage') }}\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"{{ path('prixy_formations') }}\">Formations</a></li>
\t\t\t\t\t<li><a href=\"{{ path('prixy_contact') }}\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<div id=\"content\" class=\"container\">
\t<!--ICI LE CONTENU DE LA PAGE -->
\t{% block content %}

\t{% endblock content %}
\t</div>

\t
\t<!--SCRIPTS-->
\t{% javascripts
\t\t'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'
\t\t'@PrixyBundle/Resources/public/js/bootstrap.min.js'
\t\t'@PrixyBundle/Resources/public/js/ham-button.js'
\t\toutput='js/compiled/app.js' %}
\t\t<script src=\"{{ asset_url }}\"></script>
\t{% endjavascripts %}
</body>
</html>", "PrixyBundle:Default:layout.html.twig", "C:\\wamp\\apps\\Prixy\\var\\cache\\dev/../../../src/PrixyBundle/Resources/views/Default/layout.html.twig");
    }
}
