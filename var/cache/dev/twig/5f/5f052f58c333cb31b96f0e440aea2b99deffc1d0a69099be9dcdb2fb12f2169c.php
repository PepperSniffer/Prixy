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
        $__internal_5a7f3fb15250bfc1cb5432d97187a9d15f2371c216ad3c2bcb590009ada38df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7f3fb15250bfc1cb5432d97187a9d15f2371c216ad3c2bcb590009ada38df6->enter($__internal_5a7f3fb15250bfc1cb5432d97187a9d15f2371c216ad3c2bcb590009ada38df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/contact.html.twig"));

        $__internal_debe6bfc1fc6ac757048de4e48a5346c70954ca15678339a272d13c30eb9caae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debe6bfc1fc6ac757048de4e48a5346c70954ca15678339a272d13c30eb9caae->enter($__internal_debe6bfc1fc6ac757048de4e48a5346c70954ca15678339a272d13c30eb9caae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prixy/Default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a7f3fb15250bfc1cb5432d97187a9d15f2371c216ad3c2bcb590009ada38df6->leave($__internal_5a7f3fb15250bfc1cb5432d97187a9d15f2371c216ad3c2bcb590009ada38df6_prof);

        
        $__internal_debe6bfc1fc6ac757048de4e48a5346c70954ca15678339a272d13c30eb9caae->leave($__internal_debe6bfc1fc6ac757048de4e48a5346c70954ca15678339a272d13c30eb9caae_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_60438266c337771db68e258b5994beca2b3af2269ed7c9dd890ad6a7e9efd74e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60438266c337771db68e258b5994beca2b3af2269ed7c9dd890ad6a7e9efd74e->enter($__internal_60438266c337771db68e258b5994beca2b3af2269ed7c9dd890ad6a7e9efd74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_28f1a08a4efa5559c32ee44bd6288d562853a0f57e52c4b2ad2f15174406f05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f1a08a4efa5559c32ee44bd6288d562853a0f57e52c4b2ad2f15174406f05f->enter($__internal_28f1a08a4efa5559c32ee44bd6288d562853a0f57e52c4b2ad2f15174406f05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_28f1a08a4efa5559c32ee44bd6288d562853a0f57e52c4b2ad2f15174406f05f->leave($__internal_28f1a08a4efa5559c32ee44bd6288d562853a0f57e52c4b2ad2f15174406f05f_prof);

        
        $__internal_60438266c337771db68e258b5994beca2b3af2269ed7c9dd890ad6a7e9efd74e->leave($__internal_60438266c337771db68e258b5994beca2b3af2269ed7c9dd890ad6a7e9efd74e_prof);

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

{% endblock content %}", "@Prixy/Default/contact.html.twig", "C:\\wamp\\apps\\Prixy\\src\\PrixyBundle\\Resources\\views\\Default\\contact.html.twig");
    }
}
