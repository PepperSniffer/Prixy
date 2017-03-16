<?php

/* @Prixy/Default/contact.html.twig */
class __TwigTemplate_5f9c4ab5cac6cf6e4ed52e8a9d7873964b9c080db0d1218a6cc49bba2d78ba7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PrixyBundle:Default:layout.html.twig", "@Prixy/Default/contact.html.twig", 1);
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
        $__internal_6d64d3d645df769f0157e05aec8c7d2b75b30f0a116212904124df8580555898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d64d3d645df769f0157e05aec8c7d2b75b30f0a116212904124df8580555898->enter($__internal_6d64d3d645df769f0157e05aec8c7d2b75b30f0a116212904124df8580555898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/contact.html.twig"));

        $__internal_4c7b4d6c7e9f77c605cb503845cf6fa7bee8635c02dd17aa1d3227a8172056ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7b4d6c7e9f77c605cb503845cf6fa7bee8635c02dd17aa1d3227a8172056ff->enter($__internal_4c7b4d6c7e9f77c605cb503845cf6fa7bee8635c02dd17aa1d3227a8172056ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d64d3d645df769f0157e05aec8c7d2b75b30f0a116212904124df8580555898->leave($__internal_6d64d3d645df769f0157e05aec8c7d2b75b30f0a116212904124df8580555898_prof);

        
        $__internal_4c7b4d6c7e9f77c605cb503845cf6fa7bee8635c02dd17aa1d3227a8172056ff->leave($__internal_4c7b4d6c7e9f77c605cb503845cf6fa7bee8635c02dd17aa1d3227a8172056ff_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_8a6f979b42eba09bd7e164e3b06fc01486bb041de219212aeda9bd0e47edde80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a6f979b42eba09bd7e164e3b06fc01486bb041de219212aeda9bd0e47edde80->enter($__internal_8a6f979b42eba09bd7e164e3b06fc01486bb041de219212aeda9bd0e47edde80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2ed4916267beeb9e567d9b961fac3dc9a6c5b606405c36d800a1bb368c3f51e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed4916267beeb9e567d9b961fac3dc9a6c5b606405c36d800a1bb368c3f51e7->enter($__internal_2ed4916267beeb9e567d9b961fac3dc9a6c5b606405c36d800a1bb368c3f51e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"row\">
\t\t<div class=\"col-md-8\">
\t\t\t<div id=\"map\"></div>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<h4>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.rs"), "html", null, true);
        echo " :</h4><p>Prixy</p>
\t\t\t<h4>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.adress"), "html", null, true);
        echo " :</h4><p>4 RD 502 69560 Saint Romain en Gal</p>
\t\t\t<h4>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.phone"), "html", null, true);
        echo " :</h4><p>0770019080</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t<div class=\"col-md-12\"
\t\t<form style=\"text-align:center;\" id=\"contact\" method=\"post\" action=\"traitement_formulaire.php\">
\t\t<legend>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.coordonnee"), "html", null, true);
        echo "</legend>
\t\t\t<div class=\"form-inline\">
\t\t\t\t
\t\t\t\t<input class=\"form-control\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.ph.name"), "html", null, true);
        echo "\" type=\"text\" id=\"nom\" name=\"nom\" tabindex=\"1\" />
\t\t\t\t<input class=\"form-control\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.ph.mail"), "html", null, true);
        echo "\" type=\"text\" id=\"email\" name=\"email\" tabindex=\"2\" />
\t\t\t</div>
\t\t
\t 
\t\t<legend>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.message"), "html", null, true);
        echo " :</legend>
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.ph.objet"), "html", null, true);
        echo "\" id=\"objet\" class=\"form-control\" name=\"objet\" tabindex=\"3\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<textarea id=\"message\" name=\"message\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.ph.message"), "html", null, true);
        echo "\" class=\"form-control\" tabindex=\"4\" cols=\"70\" rows=\"15\"></textarea>
\t\t</div>
\t 
\t\t<div class=\"form-group\">
\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"envoi\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.btn.send"), "html", null, true);
        echo "\" />
\t\t</div>
\t\t</form>
\t</div>
\t</div>
\t
\t<script>
\t\t//\$(document).ready{
\t\tfunction initMap() {
\t\t\t// Create a map object and specify the DOM element for display.
\t\t\tvar map = new google.maps.Map(document.getElementById('map'), {
\t\t\t  center: {lat: 45.5309062, lng: 4.8648365},
\t\t\t  zoom: 13,
\t\t\t  mapTypeControl: false,
\t\t\t  height: \"750px\"
\t\t\t});
\t\t\t
\t\t\t
\t\t\tmap.setOptions({styles :[{\"featureType\":\"all\",\"elementType\":\"labels.text.fill\",\"stylers\":[{\"saturation\":36},{\"color\":\"#000000\"},{\"lightness\":40}]},{\"featureType\":\"all\",\"elementType\":\"labels.text.stroke\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#000000\"},{\"lightness\":16}]},{\"featureType\":\"all\",\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":20}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":17},{\"weight\":1.2}]},{\"featureType\":\"landscape\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":20}]},{\"featureType\":\"poi\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":21}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#444444\"},{\"lightness\":17}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":29},{\"weight\":0.2}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#222222\"},{\"lightness\":18}]},{\"featureType\":\"road.local\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#444444\"},{\"lightness\":16}]},{\"featureType\":\"transit\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":19}]},{\"featureType\":\"water\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":17}]}]});
\t\t\tvar marker = new google.maps.Marker({
\t\t\t\tposition: {lat: 45.5309062, lng: 4.8648365},
\t\t\t\tmap: map,
\t\t\t\ttitle: 'Prixy'
\t\t\t});
\t\t}

\t</script>
\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAymcG2qsac7q0rEU0RuQ_s57uPwCZMoRs&callback=initMap\" async defer></script>

";
        
        $__internal_2ed4916267beeb9e567d9b961fac3dc9a6c5b606405c36d800a1bb368c3f51e7->leave($__internal_2ed4916267beeb9e567d9b961fac3dc9a6c5b606405c36d800a1bb368c3f51e7_prof);

        
        $__internal_8a6f979b42eba09bd7e164e3b06fc01486bb041de219212aeda9bd0e47edde80->leave($__internal_8a6f979b42eba09bd7e164e3b06fc01486bb041de219212aeda9bd0e47edde80_prof);

    }

    public function getTemplateName()
    {
        return "@Prixy/Default/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  101 => 29,  95 => 26,  90 => 24,  83 => 20,  79 => 19,  73 => 16,  64 => 10,  60 => 9,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
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
\t\t<div class=\"col-md-8\">
\t\t\t<div id=\"map\"></div>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<h4>{{ 'contact.rs'|trans }} :</h4><p>Prixy</p>
\t\t\t<h4>{{ 'contact.adress'|trans }} :</h4><p>4 RD 502 69560 Saint Romain en Gal</p>
\t\t\t<h4>{{ 'contact.phone'|trans }} :</h4><p>0770019080</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t<div class=\"col-md-12\"
\t\t<form style=\"text-align:center;\" id=\"contact\" method=\"post\" action=\"traitement_formulaire.php\">
\t\t<legend>{{ 'contact.coordonnee'|trans }}</legend>
\t\t\t<div class=\"form-inline\">
\t\t\t\t
\t\t\t\t<input class=\"form-control\" placeholder=\"{{ 'contact.ph.name'|trans }}\" type=\"text\" id=\"nom\" name=\"nom\" tabindex=\"1\" />
\t\t\t\t<input class=\"form-control\" placeholder=\"{{ 'contact.ph.mail'|trans }}\" type=\"text\" id=\"email\" name=\"email\" tabindex=\"2\" />
\t\t\t</div>
\t\t
\t 
\t\t<legend>{{ 'contact.message'|trans }} :</legend>
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" placeholder=\"{{ 'contact.ph.objet'|trans }}\" id=\"objet\" class=\"form-control\" name=\"objet\" tabindex=\"3\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<textarea id=\"message\" name=\"message\" placeholder=\"{{ 'contact.ph.message'|trans }}\" class=\"form-control\" tabindex=\"4\" cols=\"70\" rows=\"15\"></textarea>
\t\t</div>
\t 
\t\t<div class=\"form-group\">
\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"envoi\" value=\"{{ 'contact.btn.send'|trans }}\" />
\t\t</div>
\t\t</form>
\t</div>
\t</div>
\t
\t<script>
\t\t//\$(document).ready{
\t\tfunction initMap() {
\t\t\t// Create a map object and specify the DOM element for display.
\t\t\tvar map = new google.maps.Map(document.getElementById('map'), {
\t\t\t  center: {lat: 45.5309062, lng: 4.8648365},
\t\t\t  zoom: 13,
\t\t\t  mapTypeControl: false,
\t\t\t  height: \"750px\"
\t\t\t});
\t\t\t
\t\t\t
\t\t\tmap.setOptions({styles :[{\"featureType\":\"all\",\"elementType\":\"labels.text.fill\",\"stylers\":[{\"saturation\":36},{\"color\":\"#000000\"},{\"lightness\":40}]},{\"featureType\":\"all\",\"elementType\":\"labels.text.stroke\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#000000\"},{\"lightness\":16}]},{\"featureType\":\"all\",\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":20}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":17},{\"weight\":1.2}]},{\"featureType\":\"landscape\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":20}]},{\"featureType\":\"poi\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":21}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#444444\"},{\"lightness\":17}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":29},{\"weight\":0.2}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#222222\"},{\"lightness\":18}]},{\"featureType\":\"road.local\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#444444\"},{\"lightness\":16}]},{\"featureType\":\"transit\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":19}]},{\"featureType\":\"water\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":17}]}]});
\t\t\tvar marker = new google.maps.Marker({
\t\t\t\tposition: {lat: 45.5309062, lng: 4.8648365},
\t\t\t\tmap: map,
\t\t\t\ttitle: 'Prixy'
\t\t\t});
\t\t}

\t</script>
\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAymcG2qsac7q0rEU0RuQ_s57uPwCZMoRs&callback=initMap\" async defer></script>

{% endblock content %}", "@Prixy/Default/contact.html.twig", "C:\\wamp\\apps\\Prixy\\src\\PrixyBundle\\Resources\\views\\Default\\contact.html.twig");
    }
}
