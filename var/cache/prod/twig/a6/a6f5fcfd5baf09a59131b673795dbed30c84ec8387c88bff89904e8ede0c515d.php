<?php

/* PrixyBundle:Default:layout.html.twig */
class __TwigTemplate_24dcb40bea06cbefb0d0996d49478c7649c8ece91644ec1b34d5112e030a4af8 extends Twig_Template
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_235aef9_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/app_style_1.css");
            // line 10
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t";
            // asset "235aef9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_235aef9_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/app_bootstrap.min_2.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "235aef9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_235aef9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/app.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        // line 12
        echo "\t<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
</head>
<body>
\t<nav class=\"navbar navbar-default navbar-static-top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<a href=\"/prixy/\" id=\"brand\" class=\"navbar-brand\">
\t\t\t\t\t<img src=\"";
        // line 20
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
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prixy_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prixy_formations");
        echo "\">Formations</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prixy_contact");
        echo "\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<div id=\"content\" class=\"container\">
\t<!--ICI LE CONTENU DE LA PAGE -->
\t";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "\t</div>

\t
\t<!--SCRIPTS-->
\t";
        // line 49
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "03addd9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_03addd9_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/app_jquery.min_1.js");
            // line 54
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "03addd9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_03addd9_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/app_bootstrap.min_2.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "03addd9_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_03addd9_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/app_ham-button_3.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "03addd9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_03addd9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/app.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 56
        echo "</body>
</html>";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "
\t";
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
        return array (  141 => 43,  138 => 42,  133 => 56,  107 => 54,  103 => 49,  97 => 45,  95 => 42,  84 => 34,  80 => 33,  76 => 32,  61 => 20,  51 => 12,  31 => 10,  27 => 6,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrixyBundle:Default:layout.html.twig", "C:\\wamp\\apps\\Prixy\\src\\PrixyBundle/Resources/views/Default/layout.html.twig");
    }
}
