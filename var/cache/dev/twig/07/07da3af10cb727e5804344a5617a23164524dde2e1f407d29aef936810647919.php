<?php

/* PrixyBundle:Default:contact.html.twig */
class __TwigTemplate_fa973ec6ad3e445dfe7ce0e23334210f2fdbb94140120be0f3aaa8c06471022f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PrixyBundle:Default:layout.html.twig", "PrixyBundle:Default:contact.html.twig", 1);
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
        $__internal_68c1baad2b51c7d3a48d6256598669cacda7d8ad130171d76baec61a22556b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c1baad2b51c7d3a48d6256598669cacda7d8ad130171d76baec61a22556b9b->enter($__internal_68c1baad2b51c7d3a48d6256598669cacda7d8ad130171d76baec61a22556b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:contact.html.twig"));

        $__internal_3ce7ec50510a59c864bd23d0a67c70a9d4811b7b9d25dd7c7170fc344373171a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce7ec50510a59c864bd23d0a67c70a9d4811b7b9d25dd7c7170fc344373171a->enter($__internal_3ce7ec50510a59c864bd23d0a67c70a9d4811b7b9d25dd7c7170fc344373171a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68c1baad2b51c7d3a48d6256598669cacda7d8ad130171d76baec61a22556b9b->leave($__internal_68c1baad2b51c7d3a48d6256598669cacda7d8ad130171d76baec61a22556b9b_prof);

        
        $__internal_3ce7ec50510a59c864bd23d0a67c70a9d4811b7b9d25dd7c7170fc344373171a->leave($__internal_3ce7ec50510a59c864bd23d0a67c70a9d4811b7b9d25dd7c7170fc344373171a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_b26f541078cd34398aa420d07e31132975162c1d0be598cb14a7db50c7050cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26f541078cd34398aa420d07e31132975162c1d0be598cb14a7db50c7050cfe->enter($__internal_b26f541078cd34398aa420d07e31132975162c1d0be598cb14a7db50c7050cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e5344d4cce8735c4db5baf753120767b2f255fa74ab6c4606d3247e270899d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5344d4cce8735c4db5baf753120767b2f255fa74ab6c4606d3247e270899d45->enter($__internal_e5344d4cce8735c4db5baf753120767b2f255fa74ab6c4606d3247e270899d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"row\">
\t\t<div class=\"col-md-8\">
\t\t\t<div id=\"map\"></div>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<h4>Raison sociale :</h4><p>Prixy</p>
\t\t\t<h4>Adresse :</h4><p>4 RD 502 69560 Saint Romain en Gal</p>
\t\t\t<h4>Téléphone :</h4><p>0770019080</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t<div class=\"col-md-12\"
\t\t<form style=\"text-align:center;\" id=\"contact\" method=\"post\" action=\"traitement_formulaire.php\">
\t\t<legend>Vos coordonnées</legend>
\t\t\t<div class=\"form-inline\">
\t\t\t\t
\t\t\t\t<input class=\"form-control\" placeholder=\"Nom\" type=\"text\" id=\"nom\" name=\"nom\" tabindex=\"1\" />
\t\t\t\t<input class=\"form-control\" placeholder=\"E-mail\" type=\"text\" id=\"email\" name=\"email\" tabindex=\"2\" />
\t\t\t</div>
\t\t
\t 
\t\t<legend>Votre message :</legend>
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" placeholder=\"Objet\" id=\"objet\" class=\"form-control\" name=\"objet\" tabindex=\"3\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<textarea id=\"message\" name=\"message\" placeholder=\"Votre texte\" class=\"form-control\" tabindex=\"4\" cols=\"70\" rows=\"15\"></textarea>
\t\t</div>
\t 
\t\t<div class=\"form-group\">
\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"envoi\" value=\"Envoyer le formulaire\" />
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
        
        $__internal_e5344d4cce8735c4db5baf753120767b2f255fa74ab6c4606d3247e270899d45->leave($__internal_e5344d4cce8735c4db5baf753120767b2f255fa74ab6c4606d3247e270899d45_prof);

        
        $__internal_b26f541078cd34398aa420d07e31132975162c1d0be598cb14a7db50c7050cfe->leave($__internal_b26f541078cd34398aa420d07e31132975162c1d0be598cb14a7db50c7050cfe_prof);

    }

    public function getTemplateName()
    {
        return "PrixyBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
\t\t\t<h4>Raison sociale :</h4><p>Prixy</p>
\t\t\t<h4>Adresse :</h4><p>4 RD 502 69560 Saint Romain en Gal</p>
\t\t\t<h4>Téléphone :</h4><p>0770019080</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t<div class=\"col-md-12\"
\t\t<form style=\"text-align:center;\" id=\"contact\" method=\"post\" action=\"traitement_formulaire.php\">
\t\t<legend>Vos coordonnées</legend>
\t\t\t<div class=\"form-inline\">
\t\t\t\t
\t\t\t\t<input class=\"form-control\" placeholder=\"Nom\" type=\"text\" id=\"nom\" name=\"nom\" tabindex=\"1\" />
\t\t\t\t<input class=\"form-control\" placeholder=\"E-mail\" type=\"text\" id=\"email\" name=\"email\" tabindex=\"2\" />
\t\t\t</div>
\t\t
\t 
\t\t<legend>Votre message :</legend>
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" placeholder=\"Objet\" id=\"objet\" class=\"form-control\" name=\"objet\" tabindex=\"3\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<textarea id=\"message\" name=\"message\" placeholder=\"Votre texte\" class=\"form-control\" tabindex=\"4\" cols=\"70\" rows=\"15\"></textarea>
\t\t</div>
\t 
\t\t<div class=\"form-group\">
\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"envoi\" value=\"Envoyer le formulaire\" />
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

{% endblock content %}", "PrixyBundle:Default:contact.html.twig", "C:\\wamp\\apps\\Prixy\\src\\PrixyBundle/Resources/views/Default/contact.html.twig");
    }
}
