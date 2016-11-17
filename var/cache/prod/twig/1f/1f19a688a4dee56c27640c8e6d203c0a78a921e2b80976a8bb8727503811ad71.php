<?php

/* PrixyBundle:Default:layout.html.twig */
class __TwigTemplate_d939714283854dae5b08c7423074de840f8f2b79de1eac94b440cdcc1f048d52 extends Twig_Template
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_235aef9_0") : $this->env->getExtension('asset')->getAssetUrl("css/compiled/app_style_1.css");
            // line 10
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t";
            // asset "235aef9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_235aef9_1") : $this->env->getExtension('asset')->getAssetUrl("css/compiled/app_bootstrap.min_2.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "235aef9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_235aef9") : $this->env->getExtension('asset')->getAssetUrl("css/compiled/app.css");
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
\t\t\t\t<a href=\"index.html\" id=\"brand\" class=\"navbar-brand\">
\t\t\t\t\t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/prixy/media/logo.png"), "html", null, true);
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
\t\t\t\t\t<li><a href=\"#\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"#\">Formations</a></li>
\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_03addd9_0") : $this->env->getExtension('asset')->getAssetUrl("js/compiled/app_jquery.min_1.js");
            // line 54
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "03addd9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_03addd9_1") : $this->env->getExtension('asset')->getAssetUrl("js/compiled/app_bootstrap.min_2.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "03addd9_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_03addd9_2") : $this->env->getExtension('asset')->getAssetUrl("js/compiled/app_ham-button_3.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "03addd9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_03addd9") : $this->env->getExtension('asset')->getAssetUrl("js/compiled/app.js");
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
        return array (  132 => 43,  129 => 42,  124 => 56,  98 => 54,  94 => 49,  88 => 45,  86 => 42,  61 => 20,  51 => 12,  31 => 10,  27 => 6,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/* 	<title>Prixy</title>*/
/* 	<meta charset="utf-8">*/
/* 	{% stylesheets*/
/* 		'@PrixyBundle/Resources/public/css/style.css'*/
/* 		'@PrixyBundle/Resources/public/css/bootstrap.min.css'*/
/* 		filter='cssrewrite' output='css/compiled/app.css' %}*/
/* 		<link rel="stylesheet" href="{{ asset_url }}" />*/
/* 	{% endstylesheets %}*/
/* 	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">*/
/* </head>*/
/* <body>*/
/* 	<nav class="navbar navbar-default navbar-static-top">*/
/* 		<div class="container">*/
/* 			<div class="navbar-header">*/
/* 				<a href="index.html" id="brand" class="navbar-brand">*/
/* 					<img src="{{asset('bundles/prixy/media/logo.png')}}" id="logo" alt="Prixy logo">*/
/* 				</a>*/
/* 				<button type="button" id="ham-button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/* 					<span></span>*/
/* 					<span></span>*/
/* 					<span></span>*/
/* 					<span></span>*/
/* 				</button>*/
/* 			</div>*/
/* */
/* 			<div id="navbar" class="navbar-collapse navbar-right collapse">*/
/* 				<ul class="nav navbar-nav">*/
/* 					<li><a href="#">Accueil</a></li>*/
/* 					<li><a href="#">Formations</a></li>*/
/* 					<li><a href="#">Contact</a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 	</nav>*/
/* */
/* 	<div id="content" class="container">*/
/* 	<!--ICI LE CONTENU DE LA PAGE -->*/
/* 	{% block content %}*/
/* */
/* 	{% endblock content %}*/
/* 	</div>*/
/* */
/* 	*/
/* 	<!--SCRIPTS-->*/
/* 	{% javascripts*/
/* 		'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'*/
/* 		'@PrixyBundle/Resources/public/js/bootstrap.min.js'*/
/* 		'@PrixyBundle/Resources/public/js/ham-button.js'*/
/* 		output='js/compiled/app.js' %}*/
/* 		<script src="{{ asset_url }}"></script>*/
/* 	{% endjavascripts %}*/
/* </body>*/
/* </html>*/
