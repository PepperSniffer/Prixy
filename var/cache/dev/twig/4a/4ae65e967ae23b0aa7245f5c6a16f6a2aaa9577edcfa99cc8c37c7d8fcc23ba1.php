<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_80d0cd3bb4581bf6927ef20ab1861624ce67660043ee29eefd671d7e70022ea3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebe0d751c54f87905429402673aef477d181e6604700d6e741c37af9f4e1ae39 = $this->env->getExtension("native_profiler");
        $__internal_ebe0d751c54f87905429402673aef477d181e6604700d6e741c37af9f4e1ae39->enter($__internal_ebe0d751c54f87905429402673aef477d181e6604700d6e741c37af9f4e1ae39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebe0d751c54f87905429402673aef477d181e6604700d6e741c37af9f4e1ae39->leave($__internal_ebe0d751c54f87905429402673aef477d181e6604700d6e741c37af9f4e1ae39_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f31036d9c0522d8e4297c577f6d3b7f822e90adf1aaa0ab316fc4faf5b1f0e63 = $this->env->getExtension("native_profiler");
        $__internal_f31036d9c0522d8e4297c577f6d3b7f822e90adf1aaa0ab316fc4faf5b1f0e63->enter($__internal_f31036d9c0522d8e4297c577f6d3b7f822e90adf1aaa0ab316fc4faf5b1f0e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f31036d9c0522d8e4297c577f6d3b7f822e90adf1aaa0ab316fc4faf5b1f0e63->leave($__internal_f31036d9c0522d8e4297c577f6d3b7f822e90adf1aaa0ab316fc4faf5b1f0e63_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe4672fd7048cfbd29fce430a633ce712af1a6f2f53d4531283280ae61961c6a = $this->env->getExtension("native_profiler");
        $__internal_fe4672fd7048cfbd29fce430a633ce712af1a6f2f53d4531283280ae61961c6a->enter($__internal_fe4672fd7048cfbd29fce430a633ce712af1a6f2f53d4531283280ae61961c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fe4672fd7048cfbd29fce430a633ce712af1a6f2f53d4531283280ae61961c6a->leave($__internal_fe4672fd7048cfbd29fce430a633ce712af1a6f2f53d4531283280ae61961c6a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00f8e8e43ad7102863d6f659b39011b219025198f1238109fc53e25901d302ff = $this->env->getExtension("native_profiler");
        $__internal_00f8e8e43ad7102863d6f659b39011b219025198f1238109fc53e25901d302ff->enter($__internal_00f8e8e43ad7102863d6f659b39011b219025198f1238109fc53e25901d302ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_00f8e8e43ad7102863d6f659b39011b219025198f1238109fc53e25901d302ff->leave($__internal_00f8e8e43ad7102863d6f659b39011b219025198f1238109fc53e25901d302ff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
