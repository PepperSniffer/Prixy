<?php

/* @Prixy/Default/layout.html.twig */
class __TwigTemplate_b36d3c738488848ed6e39d46314ac2a8f628f72023ee91ce4fc90bfe76ef39f2 extends Twig_Template
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
        $__internal_7ab8eb297e8e45bd0bf33df02746651c6be40156d007fe92ec9d4844ccf9a506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab8eb297e8e45bd0bf33df02746651c6be40156d007fe92ec9d4844ccf9a506->enter($__internal_7ab8eb297e8e45bd0bf33df02746651c6be40156d007fe92ec9d4844ccf9a506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/layout.html.twig"));

        $__internal_03297f317e9204ce545fb9fb5326915ffcf8f541e52eaf24fb082d130ad01ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03297f317e9204ce545fb9fb5326915ffcf8f541e52eaf24fb082d130ad01ac5->enter($__internal_03297f317e9204ce545fb9fb5326915ffcf8f541e52eaf24fb082d130ad01ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/layout.html.twig"));

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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_03addd9_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/compiled/app_jquery.min_1.js");
            // line 54
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
        // line 56
        echo "</body>
</html>";
        
        $__internal_7ab8eb297e8e45bd0bf33df02746651c6be40156d007fe92ec9d4844ccf9a506->leave($__internal_7ab8eb297e8e45bd0bf33df02746651c6be40156d007fe92ec9d4844ccf9a506_prof);

        
        $__internal_03297f317e9204ce545fb9fb5326915ffcf8f541e52eaf24fb082d130ad01ac5->leave($__internal_03297f317e9204ce545fb9fb5326915ffcf8f541e52eaf24fb082d130ad01ac5_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_96a6dd8226eb4d8ec5f58f45c7f4dabad759717ca7748d819c348e00447808be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a6dd8226eb4d8ec5f58f45c7f4dabad759717ca7748d819c348e00447808be->enter($__internal_96a6dd8226eb4d8ec5f58f45c7f4dabad759717ca7748d819c348e00447808be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c31aa26e6eeab18926c7ab2d0fa1412d57651ec473ec060aaeefcc3f1036e1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31aa26e6eeab18926c7ab2d0fa1412d57651ec473ec060aaeefcc3f1036e1fc->enter($__internal_c31aa26e6eeab18926c7ab2d0fa1412d57651ec473ec060aaeefcc3f1036e1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "
\t";
        
        $__internal_c31aa26e6eeab18926c7ab2d0fa1412d57651ec473ec060aaeefcc3f1036e1fc->leave($__internal_c31aa26e6eeab18926c7ab2d0fa1412d57651ec473ec060aaeefcc3f1036e1fc_prof);

        
        $__internal_96a6dd8226eb4d8ec5f58f45c7f4dabad759717ca7748d819c348e00447808be->leave($__internal_96a6dd8226eb4d8ec5f58f45c7f4dabad759717ca7748d819c348e00447808be_prof);

    }

    public function getTemplateName()
    {
        return "@Prixy/Default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 43,  150 => 42,  139 => 56,  113 => 54,  109 => 49,  103 => 45,  101 => 42,  90 => 34,  86 => 33,  82 => 32,  67 => 20,  57 => 12,  37 => 10,  33 => 6,  26 => 1,);
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
</html>", "@Prixy/Default/layout.html.twig", "C:\\wamp\\apps\\Prixy\\src\\PrixyBundle\\Resources\\views\\Default\\layout.html.twig");
    }
}