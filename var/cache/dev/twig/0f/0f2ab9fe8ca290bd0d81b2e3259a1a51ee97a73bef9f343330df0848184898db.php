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
        $__internal_2c467fe1f27e56ec3846f3b58632310c9bcc3dae75075d742220b69c9f65e170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c467fe1f27e56ec3846f3b58632310c9bcc3dae75075d742220b69c9f65e170->enter($__internal_2c467fe1f27e56ec3846f3b58632310c9bcc3dae75075d742220b69c9f65e170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d749bae868cb58d7a3f28633c9eab817e0418cee1c267e5664686a391917915f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d749bae868cb58d7a3f28633c9eab817e0418cee1c267e5664686a391917915f->enter($__internal_d749bae868cb58d7a3f28633c9eab817e0418cee1c267e5664686a391917915f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2c467fe1f27e56ec3846f3b58632310c9bcc3dae75075d742220b69c9f65e170->leave($__internal_2c467fe1f27e56ec3846f3b58632310c9bcc3dae75075d742220b69c9f65e170_prof);

        
        $__internal_d749bae868cb58d7a3f28633c9eab817e0418cee1c267e5664686a391917915f->leave($__internal_d749bae868cb58d7a3f28633c9eab817e0418cee1c267e5664686a391917915f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee576a87265e838a7c05d919382d91cb0069099026e65c6e6039904f915a2907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee576a87265e838a7c05d919382d91cb0069099026e65c6e6039904f915a2907->enter($__internal_ee576a87265e838a7c05d919382d91cb0069099026e65c6e6039904f915a2907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f2172496f42a86d8430af4cd9db46f2ed1ff528eea56825d8b44ace4f0981d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2172496f42a86d8430af4cd9db46f2ed1ff528eea56825d8b44ace4f0981d2->enter($__internal_0f2172496f42a86d8430af4cd9db46f2ed1ff528eea56825d8b44ace4f0981d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0f2172496f42a86d8430af4cd9db46f2ed1ff528eea56825d8b44ace4f0981d2->leave($__internal_0f2172496f42a86d8430af4cd9db46f2ed1ff528eea56825d8b44ace4f0981d2_prof);

        
        $__internal_ee576a87265e838a7c05d919382d91cb0069099026e65c6e6039904f915a2907->leave($__internal_ee576a87265e838a7c05d919382d91cb0069099026e65c6e6039904f915a2907_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_276c056e6f77548d471a6564269944a3c17530d3f12190cb8dfaf32e8a24e19a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276c056e6f77548d471a6564269944a3c17530d3f12190cb8dfaf32e8a24e19a->enter($__internal_276c056e6f77548d471a6564269944a3c17530d3f12190cb8dfaf32e8a24e19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b6c66108d7ab3624e2e6b0bc0a0e96afb6645badb17d6c30d0b97742c2b9ca60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c66108d7ab3624e2e6b0bc0a0e96afb6645badb17d6c30d0b97742c2b9ca60->enter($__internal_b6c66108d7ab3624e2e6b0bc0a0e96afb6645badb17d6c30d0b97742c2b9ca60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b6c66108d7ab3624e2e6b0bc0a0e96afb6645badb17d6c30d0b97742c2b9ca60->leave($__internal_b6c66108d7ab3624e2e6b0bc0a0e96afb6645badb17d6c30d0b97742c2b9ca60_prof);

        
        $__internal_276c056e6f77548d471a6564269944a3c17530d3f12190cb8dfaf32e8a24e19a->leave($__internal_276c056e6f77548d471a6564269944a3c17530d3f12190cb8dfaf32e8a24e19a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b98aea96398f8f8af2ef2d5b1ce65293fcbf1b1ea6902f820943d1f8920e1199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98aea96398f8f8af2ef2d5b1ce65293fcbf1b1ea6902f820943d1f8920e1199->enter($__internal_b98aea96398f8f8af2ef2d5b1ce65293fcbf1b1ea6902f820943d1f8920e1199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ac91aa80d1ddf16edc74b36070f82290ec8b3bdddeb53ff170a983a3a17ce19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac91aa80d1ddf16edc74b36070f82290ec8b3bdddeb53ff170a983a3a17ce19->enter($__internal_3ac91aa80d1ddf16edc74b36070f82290ec8b3bdddeb53ff170a983a3a17ce19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ac91aa80d1ddf16edc74b36070f82290ec8b3bdddeb53ff170a983a3a17ce19->leave($__internal_3ac91aa80d1ddf16edc74b36070f82290ec8b3bdddeb53ff170a983a3a17ce19_prof);

        
        $__internal_b98aea96398f8f8af2ef2d5b1ce65293fcbf1b1ea6902f820943d1f8920e1199->leave($__internal_b98aea96398f8f8af2ef2d5b1ce65293fcbf1b1ea6902f820943d1f8920e1199_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a9523d515b45a8e3daf9433c60bb372548f30be47e5aa42a4d631917d9aaf740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9523d515b45a8e3daf9433c60bb372548f30be47e5aa42a4d631917d9aaf740->enter($__internal_a9523d515b45a8e3daf9433c60bb372548f30be47e5aa42a4d631917d9aaf740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a996b23658af4e39c9cf6f7076470fa950e5396384336bd24b12d87ba5627488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a996b23658af4e39c9cf6f7076470fa950e5396384336bd24b12d87ba5627488->enter($__internal_a996b23658af4e39c9cf6f7076470fa950e5396384336bd24b12d87ba5627488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a996b23658af4e39c9cf6f7076470fa950e5396384336bd24b12d87ba5627488->leave($__internal_a996b23658af4e39c9cf6f7076470fa950e5396384336bd24b12d87ba5627488_prof);

        
        $__internal_a9523d515b45a8e3daf9433c60bb372548f30be47e5aa42a4d631917d9aaf740->leave($__internal_a9523d515b45a8e3daf9433c60bb372548f30be47e5aa42a4d631917d9aaf740_prof);

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
