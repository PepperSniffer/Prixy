<?php

/* ::base.html.twig */
class __TwigTemplate_48030b2143fd073c35933ebc38c04d784093596987d74cfb55c39a2271218f7f extends Twig_Template
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
        $__internal_cc0937289091b2cda1ddec95f68841ff0566ea6a2c684f9291c83a3537bd4ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0937289091b2cda1ddec95f68841ff0566ea6a2c684f9291c83a3537bd4ee8->enter($__internal_cc0937289091b2cda1ddec95f68841ff0566ea6a2c684f9291c83a3537bd4ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_78505b7eb44328e688b5dde3e38b2d7e1e270e093f47d02b4929470ccbbca2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78505b7eb44328e688b5dde3e38b2d7e1e270e093f47d02b4929470ccbbca2dc->enter($__internal_78505b7eb44328e688b5dde3e38b2d7e1e270e093f47d02b4929470ccbbca2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_cc0937289091b2cda1ddec95f68841ff0566ea6a2c684f9291c83a3537bd4ee8->leave($__internal_cc0937289091b2cda1ddec95f68841ff0566ea6a2c684f9291c83a3537bd4ee8_prof);

        
        $__internal_78505b7eb44328e688b5dde3e38b2d7e1e270e093f47d02b4929470ccbbca2dc->leave($__internal_78505b7eb44328e688b5dde3e38b2d7e1e270e093f47d02b4929470ccbbca2dc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e1ac4cc2676d41682345e3c799f72ce0541f5aefcad5452d7a9ea256fc2de2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1ac4cc2676d41682345e3c799f72ce0541f5aefcad5452d7a9ea256fc2de2a->enter($__internal_4e1ac4cc2676d41682345e3c799f72ce0541f5aefcad5452d7a9ea256fc2de2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eaae9a8863a041a51a0b74b6fbc43d23036950e52c1d64d6b664e7cc0c719646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaae9a8863a041a51a0b74b6fbc43d23036950e52c1d64d6b664e7cc0c719646->enter($__internal_eaae9a8863a041a51a0b74b6fbc43d23036950e52c1d64d6b664e7cc0c719646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eaae9a8863a041a51a0b74b6fbc43d23036950e52c1d64d6b664e7cc0c719646->leave($__internal_eaae9a8863a041a51a0b74b6fbc43d23036950e52c1d64d6b664e7cc0c719646_prof);

        
        $__internal_4e1ac4cc2676d41682345e3c799f72ce0541f5aefcad5452d7a9ea256fc2de2a->leave($__internal_4e1ac4cc2676d41682345e3c799f72ce0541f5aefcad5452d7a9ea256fc2de2a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fefe894c953fcef61d71edc2edc530d70c73696a3cf6396c20a28a1f1aea743c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fefe894c953fcef61d71edc2edc530d70c73696a3cf6396c20a28a1f1aea743c->enter($__internal_fefe894c953fcef61d71edc2edc530d70c73696a3cf6396c20a28a1f1aea743c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5a099f52c012a8888f633a33b205dd5270037c68bd09d8763285085e28ff1869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a099f52c012a8888f633a33b205dd5270037c68bd09d8763285085e28ff1869->enter($__internal_5a099f52c012a8888f633a33b205dd5270037c68bd09d8763285085e28ff1869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a099f52c012a8888f633a33b205dd5270037c68bd09d8763285085e28ff1869->leave($__internal_5a099f52c012a8888f633a33b205dd5270037c68bd09d8763285085e28ff1869_prof);

        
        $__internal_fefe894c953fcef61d71edc2edc530d70c73696a3cf6396c20a28a1f1aea743c->leave($__internal_fefe894c953fcef61d71edc2edc530d70c73696a3cf6396c20a28a1f1aea743c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5255777cfe3238709cb1540bef39f0e0e926f7f2ac304bf5e70fafb7c7bc4dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5255777cfe3238709cb1540bef39f0e0e926f7f2ac304bf5e70fafb7c7bc4dcb->enter($__internal_5255777cfe3238709cb1540bef39f0e0e926f7f2ac304bf5e70fafb7c7bc4dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1521c83b1d789ebad68e3c49f18adaadcb5495f05280f4b6a9c3b3dd76239706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1521c83b1d789ebad68e3c49f18adaadcb5495f05280f4b6a9c3b3dd76239706->enter($__internal_1521c83b1d789ebad68e3c49f18adaadcb5495f05280f4b6a9c3b3dd76239706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1521c83b1d789ebad68e3c49f18adaadcb5495f05280f4b6a9c3b3dd76239706->leave($__internal_1521c83b1d789ebad68e3c49f18adaadcb5495f05280f4b6a9c3b3dd76239706_prof);

        
        $__internal_5255777cfe3238709cb1540bef39f0e0e926f7f2ac304bf5e70fafb7c7bc4dcb->leave($__internal_5255777cfe3238709cb1540bef39f0e0e926f7f2ac304bf5e70fafb7c7bc4dcb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06bf9186bf5f4bf2e155d0dce796bb8661d91a37495e89fbb23ec3bb87111cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06bf9186bf5f4bf2e155d0dce796bb8661d91a37495e89fbb23ec3bb87111cb5->enter($__internal_06bf9186bf5f4bf2e155d0dce796bb8661d91a37495e89fbb23ec3bb87111cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d2809728a33211c759baea0a718715deb9b2c1059057aad35297becb2e06e303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2809728a33211c759baea0a718715deb9b2c1059057aad35297becb2e06e303->enter($__internal_d2809728a33211c759baea0a718715deb9b2c1059057aad35297becb2e06e303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d2809728a33211c759baea0a718715deb9b2c1059057aad35297becb2e06e303->leave($__internal_d2809728a33211c759baea0a718715deb9b2c1059057aad35297becb2e06e303_prof);

        
        $__internal_06bf9186bf5f4bf2e155d0dce796bb8661d91a37495e89fbb23ec3bb87111cb5->leave($__internal_06bf9186bf5f4bf2e155d0dce796bb8661d91a37495e89fbb23ec3bb87111cb5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp\\apps\\Prixy\\app/Resources\\views/base.html.twig");
    }
}
