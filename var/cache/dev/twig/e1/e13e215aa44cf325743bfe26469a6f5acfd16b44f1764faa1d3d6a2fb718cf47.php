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
        $__internal_b1bc779dd8ffb3d4f2b1eaf2beff726205acfae2db5b0d14aefe2c378e243b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1bc779dd8ffb3d4f2b1eaf2beff726205acfae2db5b0d14aefe2c378e243b98->enter($__internal_b1bc779dd8ffb3d4f2b1eaf2beff726205acfae2db5b0d14aefe2c378e243b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9c3d850b24680806b854dd539869743ed02ba5f74c5d7e1fea5de181f2d1ad01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3d850b24680806b854dd539869743ed02ba5f74c5d7e1fea5de181f2d1ad01->enter($__internal_9c3d850b24680806b854dd539869743ed02ba5f74c5d7e1fea5de181f2d1ad01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b1bc779dd8ffb3d4f2b1eaf2beff726205acfae2db5b0d14aefe2c378e243b98->leave($__internal_b1bc779dd8ffb3d4f2b1eaf2beff726205acfae2db5b0d14aefe2c378e243b98_prof);

        
        $__internal_9c3d850b24680806b854dd539869743ed02ba5f74c5d7e1fea5de181f2d1ad01->leave($__internal_9c3d850b24680806b854dd539869743ed02ba5f74c5d7e1fea5de181f2d1ad01_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_90790efa397d012b94f1c8e169556b0543f1fc11b39cab13db9373f038e77fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90790efa397d012b94f1c8e169556b0543f1fc11b39cab13db9373f038e77fad->enter($__internal_90790efa397d012b94f1c8e169556b0543f1fc11b39cab13db9373f038e77fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e56494fc6f55b2b2dc7ce0bbb1bfc06202557228c3e5c87f955ce3cbbdaae8b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56494fc6f55b2b2dc7ce0bbb1bfc06202557228c3e5c87f955ce3cbbdaae8b9->enter($__internal_e56494fc6f55b2b2dc7ce0bbb1bfc06202557228c3e5c87f955ce3cbbdaae8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e56494fc6f55b2b2dc7ce0bbb1bfc06202557228c3e5c87f955ce3cbbdaae8b9->leave($__internal_e56494fc6f55b2b2dc7ce0bbb1bfc06202557228c3e5c87f955ce3cbbdaae8b9_prof);

        
        $__internal_90790efa397d012b94f1c8e169556b0543f1fc11b39cab13db9373f038e77fad->leave($__internal_90790efa397d012b94f1c8e169556b0543f1fc11b39cab13db9373f038e77fad_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe1787d91997d16076777640b8b8a4c636afac4ad3e261a046fa848be1e85e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1787d91997d16076777640b8b8a4c636afac4ad3e261a046fa848be1e85e92->enter($__internal_fe1787d91997d16076777640b8b8a4c636afac4ad3e261a046fa848be1e85e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_af0d6b5c83dbe94bf0f93e02f384f656b15d28ef729c6f1df0e5ef6e8a84ba90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0d6b5c83dbe94bf0f93e02f384f656b15d28ef729c6f1df0e5ef6e8a84ba90->enter($__internal_af0d6b5c83dbe94bf0f93e02f384f656b15d28ef729c6f1df0e5ef6e8a84ba90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_af0d6b5c83dbe94bf0f93e02f384f656b15d28ef729c6f1df0e5ef6e8a84ba90->leave($__internal_af0d6b5c83dbe94bf0f93e02f384f656b15d28ef729c6f1df0e5ef6e8a84ba90_prof);

        
        $__internal_fe1787d91997d16076777640b8b8a4c636afac4ad3e261a046fa848be1e85e92->leave($__internal_fe1787d91997d16076777640b8b8a4c636afac4ad3e261a046fa848be1e85e92_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e80c24c8fae55d86d74c774446e0413381dedc6c4d5c9d817f840dbb7e7065d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e80c24c8fae55d86d74c774446e0413381dedc6c4d5c9d817f840dbb7e7065d->enter($__internal_5e80c24c8fae55d86d74c774446e0413381dedc6c4d5c9d817f840dbb7e7065d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c669da031c2e2ce419bb840ddd96d9f666f5fb10e94eac30b55239fe557796ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c669da031c2e2ce419bb840ddd96d9f666f5fb10e94eac30b55239fe557796ff->enter($__internal_c669da031c2e2ce419bb840ddd96d9f666f5fb10e94eac30b55239fe557796ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c669da031c2e2ce419bb840ddd96d9f666f5fb10e94eac30b55239fe557796ff->leave($__internal_c669da031c2e2ce419bb840ddd96d9f666f5fb10e94eac30b55239fe557796ff_prof);

        
        $__internal_5e80c24c8fae55d86d74c774446e0413381dedc6c4d5c9d817f840dbb7e7065d->leave($__internal_5e80c24c8fae55d86d74c774446e0413381dedc6c4d5c9d817f840dbb7e7065d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a352a99ca72701cef60c06e0d5ef899432512079b079fabd0e1dc8f776a37e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a352a99ca72701cef60c06e0d5ef899432512079b079fabd0e1dc8f776a37e03->enter($__internal_a352a99ca72701cef60c06e0d5ef899432512079b079fabd0e1dc8f776a37e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d1a0e6f673d8a795d388b0ac045d13dcdab917d09ffa9352a4e5a44517705d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a0e6f673d8a795d388b0ac045d13dcdab917d09ffa9352a4e5a44517705d72->enter($__internal_d1a0e6f673d8a795d388b0ac045d13dcdab917d09ffa9352a4e5a44517705d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d1a0e6f673d8a795d388b0ac045d13dcdab917d09ffa9352a4e5a44517705d72->leave($__internal_d1a0e6f673d8a795d388b0ac045d13dcdab917d09ffa9352a4e5a44517705d72_prof);

        
        $__internal_a352a99ca72701cef60c06e0d5ef899432512079b079fabd0e1dc8f776a37e03->leave($__internal_a352a99ca72701cef60c06e0d5ef899432512079b079fabd0e1dc8f776a37e03_prof);

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
