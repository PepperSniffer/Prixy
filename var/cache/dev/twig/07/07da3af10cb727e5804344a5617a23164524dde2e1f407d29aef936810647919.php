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
        $__internal_70d37c6c9de935d3a36b89a508fb43841b1980352e1c21ef62515a22b1c9265e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d37c6c9de935d3a36b89a508fb43841b1980352e1c21ef62515a22b1c9265e->enter($__internal_70d37c6c9de935d3a36b89a508fb43841b1980352e1c21ef62515a22b1c9265e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:contact.html.twig"));

        $__internal_9f273ab5a485e9b37e10253142248918afd995ebd70833bc04a7b09dc9833074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f273ab5a485e9b37e10253142248918afd995ebd70833bc04a7b09dc9833074->enter($__internal_9f273ab5a485e9b37e10253142248918afd995ebd70833bc04a7b09dc9833074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrixyBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70d37c6c9de935d3a36b89a508fb43841b1980352e1c21ef62515a22b1c9265e->leave($__internal_70d37c6c9de935d3a36b89a508fb43841b1980352e1c21ef62515a22b1c9265e_prof);

        
        $__internal_9f273ab5a485e9b37e10253142248918afd995ebd70833bc04a7b09dc9833074->leave($__internal_9f273ab5a485e9b37e10253142248918afd995ebd70833bc04a7b09dc9833074_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_6824574dc16705d4473d1e80224b7bd12d3b954f6783f43f93a46a4e9ccafca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6824574dc16705d4473d1e80224b7bd12d3b954f6783f43f93a46a4e9ccafca6->enter($__internal_6824574dc16705d4473d1e80224b7bd12d3b954f6783f43f93a46a4e9ccafca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0543586e750832100dd6f1eb09ca70c40c5e71c366940f9101852a649aec11e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0543586e750832100dd6f1eb09ca70c40c5e71c366940f9101852a649aec11e9->enter($__internal_0543586e750832100dd6f1eb09ca70c40c5e71c366940f9101852a649aec11e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_0543586e750832100dd6f1eb09ca70c40c5e71c366940f9101852a649aec11e9->leave($__internal_0543586e750832100dd6f1eb09ca70c40c5e71c366940f9101852a649aec11e9_prof);

        
        $__internal_6824574dc16705d4473d1e80224b7bd12d3b954f6783f43f93a46a4e9ccafca6->leave($__internal_6824574dc16705d4473d1e80224b7bd12d3b954f6783f43f93a46a4e9ccafca6_prof);

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

{% endblock content %}", "PrixyBundle:Default:contact.html.twig", "C:\\wamp\\apps\\Prixy\\src\\PrixyBundle/Resources/views/Default/contact.html.twig");
    }
}
