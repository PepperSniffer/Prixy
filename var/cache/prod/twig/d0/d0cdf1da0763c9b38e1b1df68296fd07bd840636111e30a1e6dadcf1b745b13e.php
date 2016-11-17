<?php

/* PrixyBundle:Default:contact.html.twig */
class __TwigTemplate_b449584b1169d817b2f3ceab17725f2f912f20891c149bf754efe920afe19b93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PrixyBundle:Resources:layout.html.twig", "PrixyBundle:Default:contact.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrixyBundle:Resources:layout.html.twig";
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
        <div class=\"col-md-8\">
            <?php //\$map->printMap(); ?>
            <div id=\"map\"></div>
        </div>
        <div class=\"col-md-4\">
            <h4>Raison sociale :</h4><p>Prixy</p>
            <h4>Adresse :</h4><p>4 RD 502 69560 Saint Romain en Gal</p>
            <h4>Téléphone :</h4><p>0770019080</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\"
        <form style=\"text-align:center;\" id=\"contact\" method=\"post\" action=\"traitement_formulaire.php\">
            <legend>Vos coordonnées</legend>
            <div class=\"form-inline\">

                <input class=\"form-control\" placeholder=\"Nom\" type=\"text\" id=\"nom\" name=\"nom\" tabindex=\"1\" />
                <input class=\"form-control\" placeholder=\"E-mail\" type=\"text\" id=\"email\" name=\"email\" tabindex=\"2\" />
            </div>


            <legend>Votre message :</legend>
            <div class=\"form-group\">
                <input type=\"text\" placeholder=\"Objet\" id=\"objet\" class=\"form-control\" name=\"objet\" tabindex=\"3\" />
            </div>
            <div class=\"form-group\">
                <textarea id=\"message\" name=\"message\" placeholder=\"Votre texte\" class=\"form-control\" tabindex=\"4\" cols=\"70\" rows=\"15\"></textarea>
            </div>

            <div class=\"form-group\">
                <input type=\"submit\" class=\"btn btn-default\" name=\"envoi\" value=\"Envoyer le formulaire\" />
            </div>
        </form>
    </div>
    </div>

    <script>
        //\$(document).ready{
        function initMap() {
            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 45.5309062, lng: 4.8648365},
                zoom: 13,
                mapTypeControl: false,
                height: \"750px\"
            });


            map.setOptions({styles :[{\"featureType\":\"all\",\"elementType\":\"labels.text.fill\",\"stylers\":[{\"saturation\":36},{\"color\":\"#000000\"},{\"lightness\":40}]},{\"featureType\":\"all\",\"elementType\":\"labels.text.stroke\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#000000\"},{\"lightness\":16}]},{\"featureType\":\"all\",\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":20}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":17},{\"weight\":1.2}]},{\"featureType\":\"landscape\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":20}]},{\"featureType\":\"poi\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":21}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#444444\"},{\"lightness\":17}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":29},{\"weight\":0.2}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#222222\"},{\"lightness\":18}]},{\"featureType\":\"road.local\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#444444\"},{\"lightness\":16}]},{\"featureType\":\"transit\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":19}]},{\"featureType\":\"water\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":17}]}]});
            var marker = new google.maps.Marker({
                position: {lat: 45.5309062, lng: 4.8648365},
                map: map,
                title: 'Prixy'
            });
        }

    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAymcG2qsac7q0rEU0RuQ_s57uPwCZMoRs&callback=initMap\" async defer></script>

";
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
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PrixyBundle:Resources:layout.html.twig' %}*/
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             <?php //$map->printMap(); ?>*/
/*             <div id="map"></div>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <h4>Raison sociale :</h4><p>Prixy</p>*/
/*             <h4>Adresse :</h4><p>4 RD 502 69560 Saint Romain en Gal</p>*/
/*             <h4>Téléphone :</h4><p>0770019080</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-12"*/
/*         <form style="text-align:center;" id="contact" method="post" action="traitement_formulaire.php">*/
/*             <legend>Vos coordonnées</legend>*/
/*             <div class="form-inline">*/
/* */
/*                 <input class="form-control" placeholder="Nom" type="text" id="nom" name="nom" tabindex="1" />*/
/*                 <input class="form-control" placeholder="E-mail" type="text" id="email" name="email" tabindex="2" />*/
/*             </div>*/
/* */
/* */
/*             <legend>Votre message :</legend>*/
/*             <div class="form-group">*/
/*                 <input type="text" placeholder="Objet" id="objet" class="form-control" name="objet" tabindex="3" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <textarea id="message" name="message" placeholder="Votre texte" class="form-control" tabindex="4" cols="70" rows="15"></textarea>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <input type="submit" class="btn btn-default" name="envoi" value="Envoyer le formulaire" />*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         //$(document).ready{*/
/*         function initMap() {*/
/*             // Create a map object and specify the DOM element for display.*/
/*             var map = new google.maps.Map(document.getElementById('map'), {*/
/*                 center: {lat: 45.5309062, lng: 4.8648365},*/
/*                 zoom: 13,*/
/*                 mapTypeControl: false,*/
/*                 height: "750px"*/
/*             });*/
/* */
/* */
/*             map.setOptions({styles :[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#444444"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#444444"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]});*/
/*             var marker = new google.maps.Marker({*/
/*                 position: {lat: 45.5309062, lng: 4.8648365},*/
/*                 map: map,*/
/*                 title: 'Prixy'*/
/*             });*/
/*         }*/
/* */
/*     </script>*/
/*     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAymcG2qsac7q0rEU0RuQ_s57uPwCZMoRs&callback=initMap" async defer></script>*/
/* */
/* {% endblock content %}*/
