<?php

/* base.html.twig */
class __TwigTemplate_eb77a4be8e55e28b56b57c9d293bd0eb0fdd005848b332d6934c421f21b337c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e4f60365d99ffe89ced11118ada577c1ad4fefd29aa3e3b4d3eb86e0e188636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4f60365d99ffe89ced11118ada577c1ad4fefd29aa3e3b4d3eb86e0e188636->enter($__internal_7e4f60365d99ffe89ced11118ada577c1ad4fefd29aa3e3b4d3eb86e0e188636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_39b8104441af4d085ed41fe2f64ac4ae13fbca7229879aff219cd0a7097fe9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b8104441af4d085ed41fe2f64ac4ae13fbca7229879aff219cd0a7097fe9b5->enter($__internal_39b8104441af4d085ed41fe2f64ac4ae13fbca7229879aff219cd0a7097fe9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7e4f60365d99ffe89ced11118ada577c1ad4fefd29aa3e3b4d3eb86e0e188636->leave($__internal_7e4f60365d99ffe89ced11118ada577c1ad4fefd29aa3e3b4d3eb86e0e188636_prof);

        
        $__internal_39b8104441af4d085ed41fe2f64ac4ae13fbca7229879aff219cd0a7097fe9b5->leave($__internal_39b8104441af4d085ed41fe2f64ac4ae13fbca7229879aff219cd0a7097fe9b5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ab11f1745ad44e8f7beebacd09d9e392b85e40f1f75da833671cb2067ba7657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab11f1745ad44e8f7beebacd09d9e392b85e40f1f75da833671cb2067ba7657->enter($__internal_7ab11f1745ad44e8f7beebacd09d9e392b85e40f1f75da833671cb2067ba7657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b611445dd64932a65e0ff0bd596a14ac4736b713c90b9d512a4fc2278d835242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b611445dd64932a65e0ff0bd596a14ac4736b713c90b9d512a4fc2278d835242->enter($__internal_b611445dd64932a65e0ff0bd596a14ac4736b713c90b9d512a4fc2278d835242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b611445dd64932a65e0ff0bd596a14ac4736b713c90b9d512a4fc2278d835242->leave($__internal_b611445dd64932a65e0ff0bd596a14ac4736b713c90b9d512a4fc2278d835242_prof);

        
        $__internal_7ab11f1745ad44e8f7beebacd09d9e392b85e40f1f75da833671cb2067ba7657->leave($__internal_7ab11f1745ad44e8f7beebacd09d9e392b85e40f1f75da833671cb2067ba7657_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8abb179480062be48826b7e0d15cd50e17df2a74a5a00e8e489b7c9aa14c80d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8abb179480062be48826b7e0d15cd50e17df2a74a5a00e8e489b7c9aa14c80d->enter($__internal_d8abb179480062be48826b7e0d15cd50e17df2a74a5a00e8e489b7c9aa14c80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cf2112eac4120b5c02104efab575a99b45d9905a04ed5fc2422a389130cd31a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2112eac4120b5c02104efab575a99b45d9905a04ed5fc2422a389130cd31a2->enter($__internal_cf2112eac4120b5c02104efab575a99b45d9905a04ed5fc2422a389130cd31a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cf2112eac4120b5c02104efab575a99b45d9905a04ed5fc2422a389130cd31a2->leave($__internal_cf2112eac4120b5c02104efab575a99b45d9905a04ed5fc2422a389130cd31a2_prof);

        
        $__internal_d8abb179480062be48826b7e0d15cd50e17df2a74a5a00e8e489b7c9aa14c80d->leave($__internal_d8abb179480062be48826b7e0d15cd50e17df2a74a5a00e8e489b7c9aa14c80d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_82db096db4de9f8438bae8c43934ec89e040d1be98a4da4050e9d4f575e72753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82db096db4de9f8438bae8c43934ec89e040d1be98a4da4050e9d4f575e72753->enter($__internal_82db096db4de9f8438bae8c43934ec89e040d1be98a4da4050e9d4f575e72753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_554eb34695e2b7705797179aec6d821ba60472f4f743e41994b38f2df1cc288b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554eb34695e2b7705797179aec6d821ba60472f4f743e41994b38f2df1cc288b->enter($__internal_554eb34695e2b7705797179aec6d821ba60472f4f743e41994b38f2df1cc288b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_554eb34695e2b7705797179aec6d821ba60472f4f743e41994b38f2df1cc288b->leave($__internal_554eb34695e2b7705797179aec6d821ba60472f4f743e41994b38f2df1cc288b_prof);

        
        $__internal_82db096db4de9f8438bae8c43934ec89e040d1be98a4da4050e9d4f575e72753->leave($__internal_82db096db4de9f8438bae8c43934ec89e040d1be98a4da4050e9d4f575e72753_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_478f45bd82fa7a8429656615614e4ac5ef7aa0631fc7364a181903a5b5f81564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478f45bd82fa7a8429656615614e4ac5ef7aa0631fc7364a181903a5b5f81564->enter($__internal_478f45bd82fa7a8429656615614e4ac5ef7aa0631fc7364a181903a5b5f81564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3eaa8e2994df1e5cd480ad420850a0b124e3b3a1546f151dba78801238bfbea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eaa8e2994df1e5cd480ad420850a0b124e3b3a1546f151dba78801238bfbea2->enter($__internal_3eaa8e2994df1e5cd480ad420850a0b124e3b3a1546f151dba78801238bfbea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3eaa8e2994df1e5cd480ad420850a0b124e3b3a1546f151dba78801238bfbea2->leave($__internal_3eaa8e2994df1e5cd480ad420850a0b124e3b3a1546f151dba78801238bfbea2_prof);

        
        $__internal_478f45bd82fa7a8429656615614e4ac5ef7aa0631fc7364a181903a5b5f81564->leave($__internal_478f45bd82fa7a8429656615614e4ac5ef7aa0631fc7364a181903a5b5f81564_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\apps\\Prixy\\app\\Resources\\views\\base.html.twig");
    }
}
